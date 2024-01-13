<?php

namespace App\Http\Livewire\Frontend\Player;

use App\Models\Player;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public $player;
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

    protected $rules = [
        'card_id' => ['required', 'string', 'unique:players', 'min:2', 'max:255'],
        'name' => ['required', 'string', 'min:2', 'max:255'],
        'birth_date' => ['required', 'date'],
        'location' => ['required', 'string', 'min:2', 'max:255'],
        'phone' => ['required', 'string', 'min:3', 'max:30'],
        'player_img' => ['required', 'image', 'max:5000'],
        'card_identy_front' => ['required', 'image', 'max:5000'],
        'card_identy_back' => ['required', 'image', 'max:5000'],
    ];

    public function mount(Player $player)
    {
        $this->player = $player;
        $this->card_id = $this->player->card_id;
        $this->name = $this->player->name;
        $this->birth_date = $this->player->birth_date;
        $this->location = $this->player->location;
        $this->phone = $this->player->phone;
    }

    public function updatedProperty()
    {
        $this->validate();
    }

    public function updatedBirthDate()
    {
        if (calcAge($this->birth_date) >= 16) {
            $this->rules['birth_doc'] = ['nullable', 'sometimes', 'image', 'size:5000'];
            $this->rules['father_check_doc'] = ['nullable', 'sometimes', 'image', 'size:5000'];
            $this->rules['father_identy_card'] = ['nullable', 'sometimes', 'image', 'size:5000'];
        }
    }

    public function submitForm()
    {
        $this->validate([
            'card_id' => [
                'required',
                \Illuminate\Validation\Rule::unique('players')->ignore($this->card_id, 'card_id'), 'min:2', 'max:255',
            ],
            'name' => ['required', 'string', 'min:2', 'max:255'],
            'birth_date' => ['required', 'date'],
            'location' => ['required', 'string', 'min:2', 'max:255'],
            'phone' => ['required', 'string', 'min:3', 'max:30'],
            'player_img' => ['nullable', 'sometimes', 'image', 'max:5000'],
            'card_identy_front' => ['nullable', 'sometimes', 'image', 'max:5000'],
            'card_identy_back' => ['nullable', 'sometimes', 'image', 'max:5000'],
        ]);

        if ($this->player_img) {
            $player_img_path = $this->player_img->store('player_img', 'players');
            $this->player->player_img = $player_img_path;
        }

        if ($this->card_identy_front) {
            $card_identy_front_path = $this->card_identy_front->store('card_identy_front', 'players');
            $this->player->card_identy_front = $card_identy_front_path;
        }

        if ($this->card_identy_back) {
            $card_identy_back_path = $this->card_identy_back->store('card_identy_back', 'players');
            $this->player->card_identy_back = $card_identy_back_path;
        }

        if (calcAge($this->birth_date) < 16) {
            if ($this->birth_doc) {
                $birth_doc_path = $this->birth_doc->store('birth_doc', 'players');
                $this->player->birth_doc = $birth_doc_path;
            }

            if ($this->father_check_doc) {
                $father_check_doc_path = $this->father_check_doc->store('father_check_doc', 'players');
                $this->player->father_check_doc = $father_check_doc_path;
            }

            if ($this->father_identy_card) {
                $father_identy_card_path = $this->father_identy_card->store('father_identy_card', 'players');
                $this->player->father_identy_card = $father_identy_card_path;
            }
        }

        $this->player->card_id = $this->card_id;
        $this->player->name = $this->name;
        $this->player->birth_date = $this->birth_date;
        $this->player->location = $this->location;
        $this->player->phone = $this->phone;

        $this->player->save();

        session()->flash('success_message', 'تم تعديل البيانات بنجاح');

        return redirect()->route('frontend.players.show', $this->player->card_id);
    }

    public function render()
    {
        return view('livewire.frontend.player.edit');
    }
}
