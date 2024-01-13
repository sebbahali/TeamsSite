<?php

namespace App\Http\Livewire\Dashboard\ClubTeamMessages;

use App\Enums\ClubTeamMessageSender;
use App\Enums\ClubTeamMessageTarget;
use App\Http\Livewire\Trix;
use App\Models\ClubTeamMessage;
use App\Models\Team;
use App\Models\TeamMessageNotefication;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Redirector;
use Livewire\WithFileUploads;

class GroupCreate extends Component
{
    use WithFileUploads;

    public string $subject = '';

    public string $body = '';

    public $file;

    public $teamGroup = [];

    public $target;

    public $listeners = [
        Trix::EVENT_VALUE_UPDATED,
    ];

    public function trix_value_updated($value)
    {
        $this->body = $value;
    }

    protected array $rules = [
        'subject' => ['required', 'string'],
        'body' => ['required', 'string'],
        'target' => ['required', 'string'],
        'file' => ['nullable', 'file', 'max:5000'],
        'teamGroup' => ['required'],
    ];

    public function mount()
    {
        $this->target = ClubTeamMessageTarget::TeamSecretary->value;
    }

    public function updatedProperty($property): void
    {
        $this->validate($property);
    }

    public function submitForm(): Redirector
    {
        $this->validate();

        $file_path = ($this->file) ? $this->file->store('club-team_message', 'messages') : null;

        foreach ($this->teamGroup as $team) {
            $message = ClubTeamMessage::create([
                'team_id' => $team,
                'user_id' => auth('web')->user()->id,
                'target' => $this->target,
                'sender' => ClubTeamMessageSender::Club,
                'subject' => $this->subject,
                'body' => $this->body,
                'file' => $file_path,
            ]);
    
            TeamMessageNotefication::create([
                'team_id' => $team,
                'title' => 'رسالة جديدة من النادي',
                'link' => route('frontend.club-team-messages.show', $message->id),
                'body' => 'لقد وصلتك رسالة جديدة',
            ]);
        }
        
        session()->flash('success_message', 'تم ارسال الرسالة بنجاح');

        return redirect()->route('dashboard.club-team-messages.index');
    }

    public function render(): View
    {
        return view('livewire.dashboard.club-team-messages.group-create', [
            'teams' => Team::all(),
        ]);
    }
}
