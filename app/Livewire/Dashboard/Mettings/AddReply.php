<?php

namespace App\Http\Livewire\Dashboard\Mettings;

use App\Models\ClubMessageNotefication;
use App\Models\Metting;
use App\Models\MettingReply;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\Redirector;

class AddReply extends Component
{
    public Metting $metting;

    public $body;

    protected $rules = [
        'body' => ['required', 'string'],
    ];

    public function mount(Metting $metting)
    {
        $this->metting = $metting;
    }

    public function save(): Redirector
    {
        $this->validate();

        MettingReply::create([
            'metting_id' => $this->metting->id,
            'user_id' => auth('web')->user()->id,
            'body' => $this->body,
        ]);

        foreach ($this->metting->attendees as $user) {
            if ($user != auth('web')->user()->id) {
                ClubMessageNotefication::create([
                    'user_id' => $user,
                    'title' => 'تعليق جديد على محضر الاجتماع',
                    'link' => route('dashboard.mettings.show', $this->metting->id),
                    'body' => 'لقد علق : ' . auth('web')->user()->name . ' على محضر الاجتماع',
                ]);
            }
        }

        session()->flash('success_message', 'تم اضافة التعليق بنجاح');

        return redirect()->route('dashboard.mettings.show', $this->metting->id);
    }

    public function render(): View
    {
        return view('livewire.dashboard.mettings.add-reply');
    }
}
