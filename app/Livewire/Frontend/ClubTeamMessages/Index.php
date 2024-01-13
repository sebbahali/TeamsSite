<?php

namespace App\Http\Livewire\Frontend\ClubTeamMessages;

use App\Models\ClubTeamMessage;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $unReaded = true;
    public $readed = true;
    public $state = 'sended';

    public function updatingState()
    {
        $this->resetPage();
    }

    public function fetchMessages()
    {
        return ClubTeamMessage::orderBy('created_at', 'DESC')
            ->where('team_id', team()->id)
            ->when($this->state == 'sended', fn ($query) => $query->where('sender', 'team'))
            ->when($this->state == 'received', fn ($query) => $query->where('sender', 'club'))
            ->where(function ($query) {
                if ($this->unReaded && $this->readed) {
                    return $query;
                } elseif (!$this->unReaded && $this->readed) {
                    return $query->where('status', 1);
                } elseif ($this->unReaded && !$this->readed) {
                    return $query->where('status', 0);
                } elseif (!$this->unReaded && !$this->readed) {
                    return $query->where('status', 2); // both an selected
                }
            })->paginate(12);
    }

    public function render()
    {
        return view('livewire.frontend.club-team-messages.index', [
            'messages' => $this->fetchMessages(),
        ]);
    }
}
