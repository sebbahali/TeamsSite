<?php

namespace App\Http\Livewire\Frontend\TeamMessages;

use App\Enums\TeamMessageTarget;
use App\Http\Livewire\Trix;
use App\Models\Team;
use App\Models\TeamMessage;
use App\Models\TeamMessageNotefication;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Redirector;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public string $subject = '';

    public string $body = '';

    public $file;

    public $team;

    public $target;

    public $listeners = [
        Trix::EVENT_VALUE_UPDATED,
    ];

    public function trix_value_updated($value)
    {
        $this->body = $value;
    }

    protected  $rules = [
        'subject' => ['required', 'string'],
        'body' => ['required', 'string'],
        'target' => ['required', 'string'],
        'file' => ['nullable', 'file', 'max:5000'],
        'team' => ['required'],
    ];

    public function mount()
    {
        $this->target = TeamMessageTarget::TeamSecretary->value;
    }

    public function updatedProperty($property): void
    {
        $this->validate($property);
    }

    public function submitForm(): Redirector
    {
        $this->validate();

        $file_path = ($this->file) ? $this->file->store('team_message', 'messages') : null;

        $message = TeamMessage::create([
            'sender_id' => team()->id,
            'receiver_id' => $this->team,
            'target' => $this->target,
            'subject' => $this->subject,
            'body' => $this->body,
            'file' => $file_path,
        ]);

        $data['title'] = 'رسالة جديدة من فريق : ' .  team()->name;
        $data['body'] = 'لقد وصلتك رسالة جديدة';
        $data['message_id'] = $message->id;
        $data['type'] = 'team_message';
        $receiver = Team::find($this->team);
        $receiver->sendNotification($data);
        TeamMessageNotefication::create([
            'team_id' => $this->team,
            'title' => 'رسالة جديدة من فريق : ' . team()->name,
            'link' => route('frontend.team-messages.show', $message->id),
            'body' => 'لقد وصلتك رسالة جديدة',
        ]);

        session()->flash('success_message', 'تم ارسال الرسالة بنجاح');

        return redirect()->route('frontend.team-messages.show', $message->id);
    }

    public function render(): View
    {
        return view('livewire.frontend.team-messages.create', [
            'teams' => Team::where('id', '!=', team()->id)->get(),
        ]);
    }
}
