<?php

namespace App\Http\Livewire\Dashboard\ClubMessages;

use App\Models\ClubMessage;
use App\Models\ClubMessageNotefication;
use App\Models\ClubMessageReply;
use App\Models\TeamMessage;
use App\Models\TeamMessageReply;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Redirector;

class AddReply extends Component
{
    public ClubMessage $message;

    public $body;

    protected $rules = [
        'body' => ['required', 'string'],
    ];

    public function mount(ClubMessage $message)
    {
        $this->message = $message;
    }

    public function save(): Redirector
    {
        if ($this->message->sender_id != auth('web')->user()->id && $this->message->receiver_id != auth('web')->user()->id) {
            abort(403);
        }

        $this->validate();

        ClubMessageReply::create([
            'club_message_id' => $this->message->id,
            'user_id' => auth('web')->user()->id,
            'body' => $this->body,
        ]);

        ClubMessageNotefication::create([
            'user_id' => $this->message->receiver_id,
            'title' => 'هناك رد جديد على المراسلة',
            'link' => route('dashboard.club-messages.show', $this->message->id),
            'body' => 'تم الرد على الرسالة',
        ]);

        session()->flash('success_message', 'تم ارسال الرد بنجاح');

        return redirect()->route('dashboard.club-messages.show', $this->message->id);
    }

    public function render(): View
    {
        return view('livewire.dashboard.club-messages.add-reply');
    }
}
