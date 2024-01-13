<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\TeamMangeRole;

class TeamMangeMember extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'avatar', 'role', 'team_mange_id', 'team_id'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'role' => TeamMangeRole::class,
    ];

    public function teamMange()
    {
        return $this->belongsTo(TeamMange::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function getAvatarAttribute($val){
        if (empty($val)) return null;
        return getImg("teams/$val");
    }

}
