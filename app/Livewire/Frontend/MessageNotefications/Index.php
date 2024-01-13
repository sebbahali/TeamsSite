<?php

namespace App\Http\Livewire\Frontend\MessageNotefications;

use App\Models\TeamMessageNotefication;
use Livewire\Component;

class Index extends Component
{
    public $unReaded = true;
    public $readed = true;

    public function fetchNotefications()
    {
        return TeamMessageNotefication::orderBy('created_at', 'DESC')
            ->where('team_id', team()->id)
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
        return view('livewire.frontend.message-notefications.index', [
            'notefications' => $this->fetchNotefications(),
        ]);
    }
}
