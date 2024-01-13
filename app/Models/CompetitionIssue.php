<?php

namespace App\Models;

use App\Traits\Uuid;
use App\Enums\CompetitionIssueSender;
use App\Enums\CompetitionIssueStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionIssue extends Model
{
    use HasFactory, Uuid;

    public $incrementing = false;

    protected $keyType = 'uuid';

    protected $fillable = ['competition_id', 'team_id', 'user_id', 'sender', 'subject', 'body', 'file', 'status', 'type'];
    protected $appends = ['body_text'];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'sender' => CompetitionIssueSender::class,
        'status' => CompetitionIssueStatus::class,
    ];

    public function replys()
    {
        return $this->hasMany(CompetitionIssueReply::class)->orderBy('created_at');
    }

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }

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

    public function getFileAttribute($val)
    {
        if (empty($val)) return null;
        return getImg("clubs/competitions/$val");
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
