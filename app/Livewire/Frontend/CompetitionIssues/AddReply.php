<?php

namespace App\Http\Livewire\Frontend\CompetitionIssues;

use App\Enums\CompetitionIssueSender;
use App\Models\ClubMessageNotefication;
use App\Models\CompetitionIssue;
use App\Models\CompetitionIssueReply;
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
        if ($this->issue->team_id != team()->id) {
            abort(403);
        }

        $this->validate();

        CompetitionIssueReply::create([
            'competition_issue_id' => $this->issue->id,
            'team_id' => team()->id,
            'user_id' => $this->issue->user_id,
            'sender' => CompetitionIssueSender::Team,
            'body' => $this->body,
        ]);

        ClubMessageNotefication::create([ //todo
            'user_id' => $this->issue->user_id,
            'title' => 'قام : ' . team()->name . ' بارسال رد',
            'link' => route('dashboard.competition-issues.show', [
                'competition' => $this->issue->competition->id,
                'competitionIssue' => $this->issue->id,
            ]),
            'body' => 'هناك رد على الشكوى',
        ]);

        session()->flash('success_message', 'تم ارسال الرد بنجاح');

        return redirect()->route('frontend.competition-issues.show', [
            'competition' => $this->issue->competition->id,
            'competitionIssue' => $this->issue->id,
        ]);
    }

    public function render()
    {
        return view('livewire.frontend.competition-issues.add-reply');
    }
}
