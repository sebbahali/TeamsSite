<?php

namespace App\Http\Livewire\Dashboard\CompetitionMatches;

use App\Http\Livewire\Trix;
use App\Models\Competition;
use App\Models\CompetitionMatch;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminReport extends Component
{
    use WithFileUploads;
    
    public Competition $competition;

    public CompetitionMatch $match;

    public $admin_report;

    protected $rules = [
        'admin_report' => ['required'],
    ];

    public $listeners = [
        Trix::EVENT_VALUE_UPDATED,
    ];

    public function trix_value_updated($value)
    {
        $this->admin_report = $value;
    }

    public function mount(Competition $competition, CompetitionMatch $match)
    {
        $this->competition = $competition;
        $this->match = $match;
        $this->admin_report = $this->match->match_admin_report;
    }

    public function save()
    {
        $this->validate();

        $this->match->update(['match_admin_report' => $this->admin_report]);

        session()->flash('success_message', 'تم حفظ التقرير بنجاح');
        return redirect()->route('dashboard.competition-matches.show', [
            'competition' => $this->competition,
            'match' => $this->match,
        ]);
    }

    public function render()
    {
        return view('livewire.dashboard.competition-matches.admin-report');
    }
}
