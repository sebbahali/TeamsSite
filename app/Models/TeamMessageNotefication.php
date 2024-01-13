<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMessageNotefication extends Model
{
    use HasFactory, Uuid;

    public $incrementing = false;

    protected $keyType = 'uuid';

    protected $fillable = ['title','body', 'status', 'team_id', 'link'];
    protected $appends = ['body_text'];
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
