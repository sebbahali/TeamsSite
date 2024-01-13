<?php

namespace App\Models;

use App\Enums\ClubTeamMessageSender;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubTeamMessageReply extends Model
{

    use HasFactory, Uuid;

    public $incrementing = false;

    protected $keyType = 'uuid';

    protected $fillable = ['club_team_message_id', 'team_id', 'user_id', 'sender', 'body'];
    protected $appends = ['body_text'];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'sender' => ClubTeamMessageSender::class,
    ];

    public function senderClub()
    {
        return User::find($this->user_id);
    }

    public function senderTeam()
    {
        return Team::find($this->team_id);
    }

    public function sender()
    {
        return ($this->sender->value == ClubTeamMessageSender::Team->value) ? $this->senderTeam() : $this->senderClub();
    }
    public function getBodyTextAttribute()
    {
        return str_replace("&nbsp;", '', strip_tags($this->body));

    }
}
