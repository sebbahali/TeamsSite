<?php

namespace App\Http\Livewire\Dashboard\MessageNotefications;

use App\Models\ClubMessageNotefication;
use App\Models\TeamMessageNotefication;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    public $unReaded = true;
    public $readed = true;

    public function fetchNotefications()
    {
        return ClubMessageNotefication::orderBy('created_at', 'DESC')
            ->where('user_id', auth('web')->user()->id)
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
        return view('livewire.dashboard.message-notefications.index', [
            'notefications' => $this->fetchNotefications(),
        ]);
    }
}
