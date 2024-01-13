<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMessageReply extends Model
{
    use HasFactory, Uuid;

    public $incrementing = false;

    protected $keyType = 'uuid';
    protected $appends = ['body_text'];
    protected $fillable = ['team_message_id', 'team_id', 'body'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    public function getBodyTextAttribute()
    {
        return str_replace("&nbsp;", '', strip_tags($this->body));

    }
}
