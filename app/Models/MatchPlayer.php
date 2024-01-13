<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchPlayer extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'g' => 'array',
        'y' => 'array',
        'r' => 'array',
        's' => 'array',
    ];

    public function player()
    {
        if (in_array($this->join_type, ['player', 'loan_in'])) {
            return $this->belongsTo(Player::class, 'player_id', 'card_id');
        } elseif ($this->join_type == 'loan_out') {
            return $this->belongsTo(OutLoanPlayer::class, 'player_id', 'card_id');
        }
    }

    public function getPlayerNumber()
    {
        return $this->number ? $this->number : "غير متاح";
    }
}
