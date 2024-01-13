<?php

namespace App\Models;

use App\Enums\TeamMessageTarget;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TeamMessage extends Model
{
    use HasFactory, Uuid;

    public $incrementing = false;

    protected $keyType = 'uuid';

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'target' => TeamMessageTarget::class,
    ];

    protected $hidden = [
        'receiver_id',
        'sender_id',
        'team_id',
        'user_id',
    ];
    protected $fillable = ['sender_id', 'receiver_id', 'subject', 'body', 'file', 'status', 'target'];
    protected $appends = ['body_text'];

    public function senderTeam()
    {
        return Team::find($this->sender_id);
    }

    public function send()
    {
        return $this->belongsTo(Team::class, 'sender_id');
    }

    public function receiverTeam()
    {
        return Team::find($this->receiver_id);
    }

    public function orderInYear()
    {
        return TeamMessage::whereYear('created_at', $this->created_at->year)->count();
    }

    public function replys()
    {
        return $this->hasMany(TeamMessageReply::class)->orderBy('created_at');
    }

    public function scopeSearch($q, Request $request, Team $team)
    {
        if ($request->type == 'sender') {
            $q->where('sender_id', $team->id);
        }
        if ($request->type == 'receiver') {
            $q->where('receiver_id', $team->id);
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
    public function getRouteKeyName()
    {
        return 'id';
    }
}
