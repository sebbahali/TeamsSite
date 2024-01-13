<?php

namespace App\Http\Livewire\Dashboard\Mettings;

use App\Enums\MettingStatus;
use App\Models\Metting;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    public $status;

    public function mount()
    {
        $this->status = (auth('web')->user()->hasRole('superadministrator')) ?
                            MettingStatus::Draft->value :
                            MettingStatus::SendToMember->value;
    }

    public function fetchMettings()
    {
        return Metting::orderBy('created_at', 'DESC')->where('status', $this->status)->paginate(12);
    }

    public function render()
    {
        return view('livewire.dashboard.mettings.index', [
            'mettings' => $this->fetchMettings(),
        ]);
    }
}
