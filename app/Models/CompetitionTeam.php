<?php

namespace App\Models;

use App\Enums\CompetitionTeamStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionTeam extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => CompetitionTeamStatus::class,
        'mange_members' => 'array',
        'loan_out_players' => 'array',
        'loan_in_players' => 'array',
        'players' => 'array',
    ];

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
