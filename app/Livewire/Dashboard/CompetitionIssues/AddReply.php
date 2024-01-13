<?php

namespace App\Http\Livewire\Dashboard\CompetitionIssues;

use App\Enums\CompetitionIssueSender;
use App\Models\ClubMessageNotefication;
use App\Models\CompetitionIssue;
use App\Models\CompetitionIssueReply;
use App\Models\TeamMessageNotefication;
use Livewire\Component;

class AddReply extends Component
{
    public CompetitionIssue $issue;

    public $body;

    protected $rules = [
        'body' => ['required', 'string'],
    ];

    public function mount(CompetitionIssue $issue)
    {
        $this->issue = $issue;
    }


    public function save()
    {
        $this->validate();

        CompetitionIssueReply::create([
            'competition_issue_id' => $this->issue->id,
            'team_id' => $this->issue->team_id,
            'user_id' => $this->issue->user_id,
            'sender' => CompetitionIssueSender::Club,
            'body' => $this->body,
        ]);

        TeamMessageNotefication::create([
            'team_id' => $this->issue->team_id,
            'title' => 'تم الرد على الشكوى',
            'link' => route('frontend.competition-issues.show', [
                'competition' => $this->issue->competition->id,
                'competitionIssue' => $this->issue->id,
            ]),
            'body' => 'هناك رد على الشكوى',
        ]);

        session()->flash('success_message', 'تم ارسال الرد بنجاح');

        return redirect()->route('dashboard.competition-issues.show', [
            'competition' => $this->issue->competition->id,
            'competitionIssue' => $this->issue->id,
        ]);
    }

    public function render()
    {
        return view('livewire.dashboard.competition-issues.add-reply');
    }
}
