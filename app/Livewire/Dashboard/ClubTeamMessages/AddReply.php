<?php

namespace App\Http\Livewire\Dashboard\ClubTeamMessages;

use App\Enums\ClubTeamMessageSender;
use App\Models\ClubTeamMessage;
use App\Models\ClubTeamMessageReply;
use App\Models\Team;
use App\Models\TeamMessageNotefication;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Redirector;

class AddReply extends Component
{
    public ClubTeamMessage $message;

    public $body;

    protected $rules = [
        'body' => ['required', 'string'],
    ];

    public function mount(ClubTeamMessage $message)
    {
        $this->message = $message;
    }

    public function save(): Redirector
    {
        if ($this->message->user_id != auth('web')->user()->id) {
            abort(403);
        }

        $this->validate();

        ClubTeamMessageReply::create([
            'club_team_message_id' => $this->message->id,
            'team_id' => $this->message->team()->id,
            'user_id' => auth('web')->user()->id,
            'sender' => ClubTeamMessageSender::Club,
            'body' => $this->body,
        ]);

        $data['title'] = 'قام النادي بالرد';
        $data['body'] = 'هناك رد على المراسلة';
        $data['message_id'] = $this->message->id;
        $data['type'] = 'club_team_message_reply';
        $receiver = Team::find($this->message->team()->id);
        $receiver->sendNotification($data);

        TeamMessageNotefication::create([
            'team_id' => $this->message->team()->id,
            'title' => 'قام النادي بالرد',
            'link' => route('frontend.club-team-messages.show', $this->message->id),
            'body' => 'هناك رد على المراسلة',
        ]);

        session()->flash('success_message', 'تم ارسال الرد بنجاح');

        return redirect()->route('dashboard.club-team-messages.show', $this->message->id);
    }
    public function render(): View
    {
        return view('livewire.frontend.club-team-messages.add-reply');
    }
}
