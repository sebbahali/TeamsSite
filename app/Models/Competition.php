<?php

namespace App\Models;

use App\Enums\CompetitionStatus;
use App\Enums\CompetitionType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function competitionTeam($team)
    {
        return CompetitionTeam::where('competition_id', $this->id)->where('team_id', $team)->first();
    }

    public function competitionTeams()
    {
        return $this->hasMany(CompetitionTeam::class);
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => CompetitionStatus::class,
        'type' => CompetitionType::class,
    ];

    public function scopeGeneralConditions($q)
    {
        $q->where('archive_at', null);
    }

    public function scopeArchive($q)
    {
        $q->where('archive_at', '!=', null);
    }

    public function getLogoAttribute($val)
    {
        if (empty($val)) return null;
        return getImg("clubs/competitions/$val");
    }
}
