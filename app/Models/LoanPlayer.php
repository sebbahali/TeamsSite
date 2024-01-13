<?php

namespace App\Models;

use App\Enums\LoanStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class LoanPlayer extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => LoanStatus::class,
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'basic_team_id',
        'send_team_id',
        'player_id',
        'transaction_id',
        'created_at',
        'updated_at',
    ];

    public function player()
    {
        return $this->belongsTo(Player::class, 'player_id', 'card_id');
    }

    public function sender()
    {
        return $this->belongsTo(Team::class, 'send_team_id', 'id');
    }

    public function basic()
    {
        return $this->belongsTo(Team::class, 'basic_team_id', 'id');
    }

    public function scopeSearch($q, Request $request, Team $team)
    {
        if ($request->type == 'sender') {
            $q->where('send_team_id', $team->id);
        }
        if ($request->type == 'receiver') {
            $q->where('basic_team_id', $team->id);
        }
        if ($request->card_id) {
            $q->whereHas('player', function ($q) use ($request) {
                $q->where('card_id', $request->card_id);
            });
        }
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
