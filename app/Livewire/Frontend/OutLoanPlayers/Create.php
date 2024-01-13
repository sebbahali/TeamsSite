<?php

namespace App\Http\Livewire\Frontend\OutLoanPlayers;

use App\Enums\LoanOutPlayerStatus;
use App\Models\ClubMessageNotefication;
use App\Models\OutLoanPlayer;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $card_id;

    public $name;

    public $birthdate;

    public $start;

    public $end;

    public $sport_image;

    public $front_image;

    public $letter_image;

    protected $rules = [
        'card_id' => 'required|string|unique:out_loan_players,card_id',
        'name' => 'required|string',
        'birthdate' => 'required|date',
        'start' => 'required|date',
        'end' => 'required|date',
        'sport_image' => 'required|image|max:5000',
        'front_image' => 'required|image|max:5000',
        'letter_image' => 'required|image|max:5000',
    ];

    public function save()
    {
        $this->validate();

        $sport_image_path = $this->sport_image->store('out_loan_players', 'teams');

        $front_image_path = $this->front_image->store('out_loan_players', 'teams');

        $letter_image_path = $this->letter_image->store('out_loan_players', 'teams');

        $outLoanPlayer = OutLoanPlayer::create([
            'card_id' => $this->card_id,
            'name' => $this->name,
            'birthdate' => $this->birthdate,
            'start' => $this->start,
            'end' => $this->end,
            'sport_image' => $sport_image_path,
            'front_card_image' => $front_image_path,
            'loan_letter' => $letter_image_path,
            'status' => LoanOutPlayerStatus::Draft,
            'team_id' => team()->id,
        ]);

        $admin = User::whereRoleIs('superadministrator')->first();

        ClubMessageNotefication::create([
            'user_id' => $admin->id,
            'title' => 'طلب اعارة خارجي من فريق : ' . team()->name,
            'link' => route('dashboard.out-loan-players.show', ['outLoanPlayer' => $outLoanPlayer]),
            'body' => 'طلب اعارة خارجية',
        ]);

        session()->flash('success_message', 'تم حفظ البيانات بنجاح');

        return redirect()->route('frontend.out-loan-players.show', $outLoanPlayer);
    }

    public function render()
    {
        return view('livewire.frontend.out-loan-players.create');
    }
}
