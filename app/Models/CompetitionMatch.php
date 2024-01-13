<?php

namespace App\Models;

use App\Enums\MatchStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionMatch extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => MatchStatus::class,
        'match_time' => 'datetime',
    ];

    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'home');
    }

    public function awayTeam()
    {
        return $this->belongsTo(Team::class, 'away');
    }

    public function isOpenForTeam()
    {
        if ($this->match_time <= now()->subMinutes(120))
        {
            return false;
        }

        return true;
    }
}
