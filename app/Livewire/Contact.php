<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Club;
use App\Models\Feedback as ContactUs;
class Contact extends Component
{
    public $name;

    public $email;

    public $subject;

    public $body;

public Club $club;

    protected $rules = [
        'name' => ['required', 'string'],
        'email' => ['required', 'email'],
        'subject' => ['required', 'string'],
        'body' => ['required', 'string'],
    ];

    public function mount(Club $club)
    {
        $this->club = $club;
    }

    public function save()
    {
        $this->validate();

        ContactUs::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'body' => $this->body,
        ]);

        $this->reset('name', 'email', 'subject', 'body');

        session()->flash('feedback_sended', 'success');
    }
    public function render()
    {
        return view('livewire.contact');
    }
}
