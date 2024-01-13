<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TeamNotefication extends Model
{
    use HasFactory, Uuid;

    public $incrementing = false;

    protected $keyType = 'uuid';
    protected $appends = ['body_text'];
    protected $fillable = ['title', 'body', 'status', 'team_id', 'link'];

    public function team()
    {
        $this->belongsTo(Team::class);
    }

    public function scopeUnReaded($query)
    {
        return $query->where('status', 0);
    }

    public function scopeReaded($query)
    {
        return $query->where('status', 1);
    }

    public function scopeSearch($query, Request $request)
    {
        if (isset($request->status)) return $query->where('status', $request->status);
    }
    public function getBodyTextAttribute()
    {
        return str_replace("&nbsp;", '', strip_tags($this->body));
    }
}
