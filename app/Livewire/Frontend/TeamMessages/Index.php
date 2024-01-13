<?php

namespace App\Http\Livewire\Frontend\TeamMessages;

use App\Models\TeamMessage;
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
        return TeamMessage::orderBy('created_at', 'DESC')
            ->when($this->state == 'sended', fn ($query) => $query->where('sender_id', team()->id))
            ->when($this->state == 'received', fn ($query) => $query->where('receiver_id', team()->id))
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
        return view('livewire.frontend.team-messages.index', [
            'messages' => $this->fetchMessages(),
        ]);
    }
}
