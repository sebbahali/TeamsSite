<?php

namespace App\Http\Livewire\Dashboard\ClubMessages;

use App\Http\Livewire\Trix;
use App\Models\ClubMessage;
use App\Models\ClubMessageNotefication;
use App\Models\User;
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

    public $user;

    public $listeners = [
        Trix::EVENT_VALUE_UPDATED,
    ];

    public function trix_value_updated($value)
    {
        $this->body = $value;
    }

    public function mount()
    {
        $superAdmin = User::whereRoleIs('superadministrator')->first();
        if (!auth('web')->user()->hasRole('superadministrator')) {
            $this->user = $superAdmin->id;
        }
    }

    protected array $rules = [
        'subject' => ['required', 'string'],
        'body' => ['required', 'string'],
        'file' => ['nullable', 'file', 'max:5000'],
        'user' => ['required'],
    ];

    public function updatedProperty($property): void
    {
        $this->validate($property);
    }

    public function submitForm(): Redirector
    {
        $this->validate();

        $file_path = ($this->file) ? $this->file->store('club_message', 'messages') : null;

        $message = ClubMessage::create([
            'sender_id' => auth('web')->user()->id,
            'receiver_id' => $this->user,
            'subject' => $this->subject,
            'body' => $this->body,
            'file' => $file_path,
        ]);

        ClubMessageNotefication::create([
            'user_id' => $this->user,
            'title' => 'لديك رسالة جديدة',
            'link' => route('dashboard.club-messages.show', $message->id),
            'body' => 'لقد وصلتك رسالة جديدة',
        ]);

        session()->flash('success_message', 'تم ارسال الرسالة بنجاح');

        return redirect()->route('dashboard.club-messages.show', $message->id);
    }

    public function render(): View
    {
        return view('livewire.dashboard.club-messages.create', [
            'usersList' => User::where('id', '!=', auth('web')->user()->id)->get(),
        ]);
    }
}
