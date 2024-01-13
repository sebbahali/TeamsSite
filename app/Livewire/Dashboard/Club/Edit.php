<?php

namespace App\Http\Livewire\Dashboard\Club;

use App\Models\Club;
use Livewire\Component;

class Edit extends Component
{
    public Club $club;

    public string $name;

    public string $foundedDate;

    public string $email;

    public string $facebook_link;

    public string $twitter_link;

    public string $instagram_link;

    public string $phone;

    public string $vision;

    public string $message;

    public string $philosphoy;

    public string $description;

    protected array $rules = [
        'name' => ['required', 'string', 'min:5', 'max:255'],
        'foundedDate' => ['required', 'date'],
        'email' => ['required', 'email', 'min:2', 'max:255'],
        'facebook_link' => ['required', 'string', 'min:1', 'max:255'],
        'twitter_link' => ['required', 'string', 'min:1', 'max:255'],
        'instagram_link' => ['required', 'string', 'min:1', 'max:255'],
        'phone' => ['required', 'string', 'min:1', 'max:255'],
        'vision' => ['required', 'string', 'min:1'],
        'message' => ['required', 'string', 'min:1'],
        'philosphoy' => ['required', 'string', 'min:1'],
        'description' => ['required', 'string', 'min:2', 'max:2500'],
    ];

    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function mount(Club $club): void
    {
        $this->club = $club;
        $this->name = $this->club->name;
        $this->foundedDate = $this->club->founded_date ?? "";
        $this->email = $this->club->email ?? "";
        $this->facebook_link = $this->club->facebook_link ?? "";
        $this->twitter_link = $this->club->twitter_link ?? "";
        $this->instagram_link = $this->club->instagram_link ?? "";
        $this->phone = $this->club->phone ?? "";
        $this->vision = $this->club->vision ?? "";
        $this->message = $this->club->message ?? "";
        $this->philosphoy = $this->club->philosphoy ?? "";
        $this->description = $this->club->description ?? "";
    }

    public function save()
    {
        $validatedData = $this->validate();

        $this->club->name = $validatedData['name'];
        $this->club->founded_date = $validatedData['foundedDate'];
        $this->club->email = $validatedData['email'];

        $this->club->facebook_link = $validatedData['facebook_link'];
        $this->club->twitter_link = $validatedData['twitter_link'];
        $this->club->instagram_link = $validatedData['instagram_link'];
        $this->club->phone = $validatedData['phone'];
        $this->club->vision = $validatedData['vision'];
        $this->club->message = $validatedData['message'];
        $this->club->philosphoy = $validatedData['philosphoy'];

        $this->club->description = $validatedData['description'];
        $this->club->save();

        session()->flash('success_message', 'تم تحديث بيانات النادي بنجاح');

        return redirect()->route('dashboard.clubs.show', $this->club->slug);
    }

    public function render()
    {
        return view('livewire.dashboard.club.edit');
    }
}
