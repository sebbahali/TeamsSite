<?php

namespace App\Http\Livewire\Frontend\ClubTeamMessages;

use App\Enums\ClubTeamMessageSender;
use App\Models\ClubMessageNotefication;
use App\Models\ClubTeamMessage;
use App\Models\ClubTeamMessageReply;
use App\Models\User;
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
        if ($this->message->team_id != team()->id) {
            abort(403);
        }

        $this->validate();

        ClubTeamMessageReply::create([
            'club_team_message_id' => $this->message->id,
            'team_id' => team()->id,
            'user_id' => $this->message->user_id,
            'sender' => ClubTeamMessageSender::Team,
            'body' => $this->body,
        ]);

        ClubMessageNotefication::create([
            'user_id' => $this->message->user_id,
            'title' => 'قام : ' . team()->name . ' بارسال رد',
            'link' => route('dashboard.club-team-messages.show', $this->message->id),
            'body' => 'هناك رد على المراسلة',
        ]);

        session()->flash('success_message', 'تم ارسال الرد بنجاح');

        return redirect()->route('frontend.club-team-messages.show', $this->message->id);
    }

    public function render()
    {
        return view('livewire.frontend.club-team-messages.add-reply');
    }
}
