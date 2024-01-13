<?php

namespace App\Models;

use App\Enums\CompetitionIssueSender;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionIssueReply extends Model
{
    use HasFactory, Uuid;

    public $incrementing = false;

    protected $keyType = 'uuid';

    protected $fillable = ['competition_issue_id', 'team_id', 'user_id', 'sender', 'body'];
    protected $appends = ['body_text'];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'sender' => CompetitionIssueSender::class,
    ];

    public function sender()
    {
        if ($this->sender == CompetitionIssueSender::Club) {
            return $this->user;
        } elseif ($this->sender == CompetitionIssueSender::Team) {
            return $this->team;
        }
    }

    public function reciver()
    {
        if ($this->sender == CompetitionIssueSender::Club) {
            return $this->team;
        } elseif ($this->sender == CompetitionIssueSender::Team) {
            return $this->user;
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    public function getBodyTextAttribute()
    {
        return str_replace("&nbsp;", '', strip_tags($this->body));

    }
}
