<?php

namespace App\Http\Livewire\Frontend\ClubTeamMessages;

use App\Enums\ClubMangeRole;
use App\Enums\ClubTeamMessageSender;
use App\Enums\ClubTeamMessageTarget;
use App\Http\Livewire\Trix;
use App\Models\ClubMangeMember;
use App\Models\ClubMessageNotefication;
use App\Models\ClubTeamMessage;
use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Redirector;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $subject;

    public $body;

    public $file;

    public $target;

    public $listeners = [
        Trix::EVENT_VALUE_UPDATED,
    ];

    public function trix_value_updated($body)
    {
        $this->body = $body;
    }

    protected $rules = [
        'subject' => ['required', 'string'],
        'body' => ['required', 'string'],
        'file' => ['nullable', 'file', 'max:5000'],
        'target' => ['required'],
    ];

    protected function getTargetRole()
    {
        $user = User::find($this->target);
        if ($user->roles()->first()->name == 'club_leader') {
            return ClubTeamMessageTarget::ClubLeader;
        } else {
            return ClubTeamMessageTarget::ClubSecretary;
        }
    }

    public function updatedProperty($property): void
    {
        $this->validate($property);
    }

    public function submitForm()
    {
        $this->validate();
        $file_path = ($this->file) ? $this->file->store('club-team_message', 'messages') : null;

        $message = ClubTeamMessage::create([
            'team_id' => team()->id,
            'user_id' => $this->target,
            'target' => $this->getTargetRole(),
            'sender' => ClubTeamMessageSender::Team,
            'subject' => $this->subject,
            'body' => $this->body,
            'file' => $file_path,
        ]);

        $admin = User::whereRoleIs('superadministrator')->first();

        ClubMessageNotefication::create([
            'user_id' => $admin->id,
            'title' => 'رسالة جديدة من فريق : ' . team()->name,
            'link' => route('dashboard.club-team-messages.show', $message->id),
            'body' => 'لقد وصلتك رسالة جديدة',
        ]);

        session()->flash('success_message', 'تم ارسال الرسالة بنجاح');

        return redirect()->route('frontend.club-team-messages.show', $message->id);
    }

    public function render(): View
    {
        return view('livewire.frontend.club-team-messages.create', [
            'users' => User::whereRoleIs('superadministrator')->orWhereRoleIs('club_leader')->get(),
        ]);
    }
}
