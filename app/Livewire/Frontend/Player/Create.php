<?php

namespace App\Http\Livewire\Frontend\Player;

use App\Enums\PlayerApproveStatus;
use App\Models\Player;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $card_id;
    public $name;
    public $birth_date;
    public $location;
    public $phone;
    public $player_img;
    public $card_identy_front;
    public $card_identy_back;
    public $birth_doc;
    public $father_check_doc;
    public $father_identy_card;
    public $player_accept;
    public $team_accept;

    protected $rules = [
        'card_id' => ['required', 'string', 'unique:players', 'min:2', 'max:255'],
        'name' => ['required', 'string', 'min:2', 'max:255'],
        'birth_date' => ['required', 'date'],
        'location' => ['required', 'string', 'min:2', 'max:255'],
        'phone' => ['required', 'string', 'min:3', 'max:30'],
        'player_img' => ['required', 'image', 'max:5000'],
        'card_identy_front' => ['required', 'image', 'max:5000'],
        'card_identy_back' => ['required', 'image', 'max:5000'],
        'player_accept' => ['accepted'],
        'team_accept' => ['accepted'],
    ];

    public function updatedProperty($property)
    {
        $this->validate($property);
    }

    public function updatedBirthDate()
    {
        if (calcAge($this->birth_date) >= 16) {
            $this->rules['birth_doc'] = ['required', 'image', 'size:5000'];
            $this->rules['father_check_doc'] = ['required', 'image', 'size:5000'];
            $this->rules['father_identy_card'] = ['required', 'image', 'size:5000'];
        }
    }

    public function submitForm()
    {
        $date = [];
        $this->validate();
        $player_img_path = $this->player_img->store('player_img', 'players');
        $card_identy_front_path = $this->card_identy_front->store('card_identy_front', 'players');
        $card_identy_back_path = $this->card_identy_back->store('card_identy_back', 'players');

        if (calcAge($this->birth_date) < 16) {
            $birth_doc_path = $this->birth_doc->store('birth_doc', 'players');
            $father_check_doc_path = $this->father_check_doc->store('father_check_doc', 'players');
            $father_identy_card_path = $this->father_identy_card->store('father_identy_card', 'players');

            $date['birth_doc'] = $birth_doc_path;
            $date['father_check_doc'] = $father_check_doc_path;
            $date['father_identy_card'] = $father_identy_card_path;
        }

        $date['card_id'] = $this->card_id;
        $date['name'] = $this->name;
        $date['birth_date'] = $this->birth_date;
        $date['location'] = $this->location;
        $date['phone'] = $this->phone;
        $date['team_id'] = team()->id;
        $date['player_img'] = $player_img_path;
        $date['card_identy_front'] = $card_identy_front_path;
        $date['card_identy_back'] = $card_identy_back_path;
        $date['approve_status'] = PlayerApproveStatus::Draft;

        Player::create($date);

        session()->flash('success_message', 'تم حفظ الطلب نجاح');

        return redirect()->route('frontend.players.show', $this->card_id);
    }

    public function render()
    {
        return view('livewire.frontend.player.create');
    }
}
