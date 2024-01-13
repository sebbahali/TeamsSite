<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubMessage extends Model
{
    use HasFactory, Uuid;

    public $incrementing = false;

    protected $keyType = 'uuid';

    public $fillable = ['sender_id', 'receiver_id', 'subject', 'body', 'file', 'status'];

    protected $appends = ['body_text'];
    public function senderUser()
    {
        return User::find($this->sender_id);
    }

    public function receiverUser()
    {
        return User::find($this->receiver_id);
    }

    public function orderInYear()
    {
        return ClubMessage::whereYear('created_at', $this->created_at->year)->count();
    }

    public function replys()
    {
        return $this->hasMany(ClubMessageReply::class)->orderBy('created_at');
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
