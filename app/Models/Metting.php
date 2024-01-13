<?php

namespace App\Models;

use App\Enums\MettingStatus;
use App\Enums\WeekDays;
use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metting extends Model
{
    use HasFactory, Uuid;

    public $incrementing = false;

    protected $keyType = 'uuid';

    protected $fillable = ['day', 'time', 'date', 'number', 'body', 'location', 'attendees', 'status'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => MettingStatus::class,
        'day' => WeekDays::class,
        'attendees' => 'array',
    ];

    public function replys()
    {
        return $this->hasMany(MettingReply::class);
    }
}
