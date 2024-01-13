<?php

namespace App\Http\Livewire\Frontend\CompetitionIssues;

use App\Enums\CompetitionIssueSender;
use App\Models\Competition;
use App\Models\CompetitionIssue;
use Livewire\Component;
use Livewire\WithPagination;

class MessageIndex extends Component
{
    use WithPagination;

    public $state = 'sended';

    protected $paginationTheme = 'bootstrap';

    public Competition $competition;

    public function updatingState()
    {
        $this->resetPage();
    }

    public function mount(Competition $competition)
    {
        $this->competition = $competition;
    }

    public function getIssues()
    {
        return CompetitionIssue::where('competition_id', $this->competition->id)
            ->where('type', 'message')
            ->where('team_id', team()->id)
            ->when($this->state == 'received', fn ($query) => $query->where('sender', CompetitionIssueSender::Club->value))
            ->when($this->state == 'sended', fn ($query) => $query->where('sender', CompetitionIssueSender::Team->value))
            ->paginate(12);
    }

    public function render()
    {
        return view('livewire.frontend.competition-issues.message-index', [
            'issues' => $this->getIssues(),
        ]);
    }
}
