<?php

namespace App\Http\Livewire\Dashboard\CompetitionMatches;

use App\Enums\MatchStatus;
use App\Models\Competition;
use App\Models\CompetitionMatch;
use App\Models\CompetitionTeam;
use App\Models\Team;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $state;

    public $teams;

    protected $paginationTheme = 'bootstrap';

    public Competition $competition;

    public function updatingState()
    {
        $this->resetPage();
    }

    public function mount(Competition $competition)
    {
        $this->competition = $competition;
        $this->state = MatchStatus::NotStart->value;
    }

    public function getMatches()
    {
        return CompetitionMatch::where('competition_id', $this->competition->id)
            ->where('status', $this->state)
            ->with('homeTeam')
            ->with('awayTeam')
            ->paginate(12);
    }

    public function render()
    {
        return view('livewire.dashboard.competition-matches.index', [
            'matches' => $this->getMatches(),
        ]);
    }
}
