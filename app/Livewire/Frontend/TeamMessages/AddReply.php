<?php

namespace App\Http\Livewire\Frontend\TeamMessages;

use App\Models\Team;
use App\Models\TeamMessage;
use App\Models\TeamMessageNotefication;
use App\Models\TeamMessageReply;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Redirector;

class AddReply extends Component
{
    public TeamMessage $message;

    public $body;

    protected $rules = [
        'body' => ['required', 'string'],
    ];

    public function mount(TeamMessage $message)
    {
        $this->message = $message;
    }

    public function save(): Redirector
    {
        if ($this->message->sender_id != team()->id && $this->message->receiver_id != team()->id) {
            abort(403);
        }

        $this->validate();

        TeamMessageReply::create([
            'team_message_id' => $this->message->id,
            'team_id' => team()->id,
            'body' => $this->body,
        ]);

        $data['title'] = 'قام : ' . team()->name . ' بارسال رد';
        $data['body'] = 'هناك رد على المراسلة';
        $data['message_id'] = $this->message->id;
        $data['type'] = 'team_message_reply';
        $receiver = Team::find($this->message->receiverTeam()->id);
        $receiver->sendNotification($data);

        TeamMessageNotefication::create([
            'team_id' => $this->message->receiverTeam()->id,
            'title' => 'قام : ' . team()->name . ' بارسال رد',
            'link' => route('frontend.team-messages.show', $this->message->id),
            'body' => 'هناك رد على المراسلة',
        ]);

        session()->flash('success_message', 'تم ارسال الرد بنجاح');

        return redirect()->route('frontend.team-messages.show', $this->message->id);
    }

    public function render(): View
    {
        return view('livewire.frontend.team-messages.add-reply');
    }
}
