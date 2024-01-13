<?php

namespace App\Http\Livewire\Dashboard\Notefications;

use App\Models\ClubNotefication;
use Livewire\Component;

class Index extends Component
{
    public $unReaded = true;
    public $readed = true;

    public function fetchNotefications()
    {
        return ClubNotefication::orderBy('created_at', 'DESC')
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
        return view('livewire.dashboard.notefications.index', [
            'notefications' => $this->fetchNotefications(),
        ]);
    }
}
