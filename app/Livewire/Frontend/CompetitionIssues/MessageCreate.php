<?php

namespace App\Http\Livewire\Frontend\CompetitionIssues;

use App\Enums\CompetitionIssueSender;
use App\Enums\CompetitionIssueStatus;
use App\Http\Livewire\Trix;
use App\Models\ClubMessageNotefication;
use App\Models\Competition;
use App\Models\CompetitionIssue;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class MessageCreate extends Component
{
    use WithFileUploads;

    public Competition $competition;

    public string $subject = '';

    public string $body = '';

    public $file;

    public User $user;

    public $listeners = [
        Trix::EVENT_VALUE_UPDATED,
    ];

    protected array $rules = [
        'subject' => ['required', 'string'],
        'body' => ['required', 'string'],
        'file' => ['nullable', 'file', 'max:5000'],
    ];

    public function trix_value_updated($value)
    {
        $this->body = $value;
    }

    public function mount(Competition $competition)
    {
        $this->competition = $competition;
        $this->user = User::whereRoleIs('competition_manger')->first();
    }

    public function updatedProperty($property): void
    {
        $this->validate($property);
    }

    public function submitForm()
    {
        $this->validate();

        $file_path = ($this->file) ? $this->file->store('competition_issues', 'competitions') : null;

        $issue = CompetitionIssue::create([
            'competition_id' => $this->competition->id,
            'team_id' => team()->id,
            'user_id' => $this->user->id,
            'sender' => CompetitionIssueSender::Team,
            'subject' => $this->subject,
            'body' => $this->body,
            'file' => $file_path,
            'status' => CompetitionIssueStatus::Open,
            'type' => 'message',
        ]);

        ClubMessageNotefication::create([
            'user_id' => $this->user->id,
            'title' => 'رسالة جديدة من فريق : ' . team()->name,
            'link' => route('dashboard.competition-issues.show', [
                'competition' => $this->competition,
                'competitionIssue' => $issue,
            ]),
            'body' => 'لقد قام فريق ' . team()->name . ' بارسال رسالة',
        ]);

        session()->flash('success_message', 'تم ارسال الرسالة بنجاح');

        return redirect()->route('frontend.competition-issues.show', [
            'competition' => $this->competition,
            'competitionIssue' => $issue,
        ]);
    }

    public function render()
    {
        return view('livewire.frontend.competition-issues.message-create');
    }
}
