<?php

namespace App\Models;

use App\Enums\YearUpdateStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearUpdateTeam extends Model
{
    use HasFactory;

    protected $table = 'year_update_team';

    protected $guarded = [];

    public $incrementing = true;

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => YearUpdateStatus::class,
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
