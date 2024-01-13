<?php

namespace App\Http\Livewire\Dashboard\CompetitionMatches;

use App\Http\Livewire\Trix;
use App\Models\Competition;
use App\Models\CompetitionMatch;
use Livewire\Component;
use Livewire\WithFileUploads;

class RefreeReport extends Component
{
    use WithFileUploads;
    
    public Competition $competition;

    public CompetitionMatch $match;

    public $refree_report;

    protected $rules = [
        'refree_report' => ['required'],
    ];

    public $listeners = [
        Trix::EVENT_VALUE_UPDATED,
    ];

    public function trix_value_updated($value)
    {
        $this->refree_report = $value;
    }

    public function mount(Competition $competition, CompetitionMatch $match)
    {
        $this->competition = $competition;
        $this->match = $match;
        $this->refree_report = $this->match->four_refree_report;
    }

    public function save()
    {
        $this->validate();

        $this->match->update(['four_refree_report' => $this->refree_report]);

        session()->flash('success_message', 'تم حفظ التقرير بنجاح');
        return redirect()->route('dashboard.competition-matches.show', [
            'competition' => $this->competition,
            'match' => $this->match,
        ]);
    }

    public function render()
    {
        return view('livewire.dashboard.competition-matches.refree-report');
    }
}
