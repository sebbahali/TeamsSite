<?php

namespace App\Http\Livewire\Frontend\OutLoanPlayers;

use App\Enums\LoanOutPlayerStatus;
use App\Models\OutLoanPlayer;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public OutLoanPlayer $outLoanPlayer;

    public $card_id;

    public $name;

    public $birthdate;

    public $start;

    public $end;

    public $sport_image;

    public $front_image;

    public $letter_image;

    protected $rules = [
        'name' => 'required|string',
        'birthdate' => 'required|date',
        'start' => 'required|date',
        'end' => 'required|date',
        'sport_image' => 'nullable|image|max:5000',
        'front_image' => 'nullable|image|max:5000',
        'letter_image' => 'nullable|image|max:5000',
    ];

    public function mount(OutLoanPlayer $outLoanPlayer)
    {
        $this->outLoanPlayer = $outLoanPlayer;
        $this->card_id = $outLoanPlayer->card_id;
        $this->name = $outLoanPlayer->name;
        $this->birthdate = $outLoanPlayer->birthdate;
        $this->start = $outLoanPlayer->start;
        $this->end = $outLoanPlayer->end;
    }

    public function save()
    {
        $this->rules['card_id'] = "required|string|unique:out_loan_players,card_id,$this->card_id";

        $this->validate();

        if ($this->sport_image) {
            $sport_image_path = $this->sport_image->store('out_loan_players', 'teams');
            $this->outLoanPlayer->update(['sport_image' => $sport_image_path]);
        }

        if ($this->front_image) {
            $front_image_path = $this->sport_image->store('out_loan_players', 'teams');
            $this->outLoanPlayer->update(['front_card_image' => $front_image_path]);
        }

        if ($this->letter_image) {
            $letter_image_path = $this->sport_image->store('out_loan_players', 'teams');
            $this->outLoanPlayer->update(['loan_letter' => $letter_image_path]);
        }

        $this->outLoanPlayer->update([
            'card_id' => $this->card_id,
            'name' => $this->name,
            'birthdate' => $this->birthdate,
            'start' => $this->start,
            'end' => $this->end,
        ]);

        session()->flash('success_message', 'تم تعديل البيانات بنجاح');

        return redirect()->route('frontend.out-loan-players.show', $this->outLoanPlayer);
    }



    public function render()
    {
        return view('livewire.frontend.out-loan-players.edit');
    }
}
