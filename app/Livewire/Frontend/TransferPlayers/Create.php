<?php

namespace App\Http\Livewire\Frontend\TransferPlayers;

use App\Enums\TransferStatus;
use App\Models\Player;
use App\Models\TeamNotefication;
use App\Models\TransferPlayer;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    protected $rules = [];

    public $player;

    public $player_approve_doc;

    public $father_approve_doc;

    public $father_identy_doc;

    public function mount(Player $player)
    {
        $this->player = $player;

        $this->setValidation();
    }

    public function updatedProparty($propraty)
    {
        $this->validate($propraty);
    }

    public function save()
    {
        $this->setValidation();
        $this->validate();

        $player_approve_doc_path = ($this->player_approve_doc) ?
            $this->player_approve_doc->store('player_transfer_approve', 'players') : null;
        $father_approve_doc_path = ($this->father_approve_doc) ?
            $this->father_approve_doc->store('father_transfer_approve', 'players') : null;
        $father_identy_doc_path = ($this->father_identy_doc) ?
            $this->father_identy_doc->store('father_transfer_identy', 'players') : null;

        $transfer = TransferPlayer::create([
            'send_team_id' => team()->id,
            'basic_team_id' => $this->player->team_id,
            'player_id' => $this->player->card_id,
            'status' => TransferStatus::SendToBasicTeam,
            'player_approve_doc' => $player_approve_doc_path,
            'father_approve_doc' => $father_approve_doc_path,
            'father_identy_doc' => $father_identy_doc_path,
        ]);

        TeamNotefication::create([
            'team_id' => $this->player->team_id,
            'title' => 'طلب نقل لاعب',
            'body' => 'لقد وصلك طلب نقل لاعب الرجاء مراجعته',
            'link' => route('frontend.transfer-players.show', $transfer->id),
        ]);

        session()->flash('success_message', 'لقد تم ارسال طلب النقل بنجاح');
        return redirect()->route('frontend.transfer-players.show', $transfer->id);
    }

    private function setValidation()
    {
        if (calcAge($this->player->birth_date) >= 16) {
            $this->rules['player_approve_doc'] = ['required', 'image', 'max:5000'];
        } else {
            $this->rules['father_approve_doc'] = ['required', 'image', 'max:5000'];
            $this->rules['father_identy_doc'] = ['required', 'image', 'max:5000'];
        }
    }

    public function render()
    {
        return view('livewire.frontend.transfer-players.create');
    }
}
