<?php

namespace App\Models;

use App\Enums\ClubTeamMessageTarget;
use App\Traits\Uuid;
use App\Enums\ClubTeamMessageSender;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ClubTeamMessage extends Model
{
    use HasFactory, Uuid;

    public $incrementing = false;

    protected $keyType = 'uuid';

    protected $fillable = ['team_id', 'user_id', 'sender', 'subject', 'body', 'file', 'status', 'target'];
    protected $appends = ['body_text'];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'sender' => ClubTeamMessageSender::class,
        'target' => ClubTeamMessageTarget::class,
    ];

    protected $hidden = [
        'team_id',
        'user_id',
    ];

    public function club()
    {
        return User::find($this->user_id);
    }

    public function team()
    {
        return Team::find($this->team_id);
    }

    public function sender()
    {
        return ($this->sender->value == ClubTeamMessageSender::Team->value) ? $this->team() : $this->club();
    }

    public function send()
    {
        if ($this->getRawOriginal('sender') == 'team') {
            return $this->belongsTo(Team::class, 'team_id');
        } else {
            return $this->belongsTo(Club::class, 'user_id');
        }
    }

    public function orderInYear()
    {
        return ClubTeamMessage::whereYear('created_at', $this->created_at->year)->count();
    }

    public function replys(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ClubTeamMessageReply::class)->orderBy('created_at');
    }

    public function scopeSearch($q, Request $request, Team $team)
    {
        if ($request->type == 'sender') {
            $q->where('sender', 'team');
        }
        if ($request->type == 'receiver') {
            $q->where('sender', 'club');
        }
        if (isset($request->status)) {
            $q->where('status', $request->status);
        }
    }

    public function getFileAttribute($val)
    {
        if (empty($val)) return null;
        return getImg("messages/$val");
    }

    public function getBodyTextAttribute()
    {
        return str_replace("&nbsp;", '', strip_tags($this->body));

    }

    /**
     * Get  the route key for model
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'id';
    }
}
