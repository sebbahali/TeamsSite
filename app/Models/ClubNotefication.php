<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubNotefication extends Model
{
    use HasFactory, Uuid;

    public $incrementing = false;

    protected $keyType = 'uuid';

    protected $fillable = ['title','body', 'status', 'club_id', 'link'];
    protected $appends = ['body_text'];
    public function club()
    {
        $this->belongsTo(Club::class);
    }

    public function scopeUnReaded($query)
    {
        return $query->where('status', 0);
    }

    public function scopeReaded($query)
    {
        return $query->where('status', 1);
    }
    public function getBodyTextAttribute()
    {
        return str_replace("&nbsp;", '', strip_tags($this->body));

    }
}
