<?php

namespace App\Models;

use App\Enums\LoanOutPlayerStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class OutLoanPlayer extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status' => LoanOutPlayerStatus::class,
    ];


    public function getSportImageAttribute($val)
    {
        if (empty($val)) return null;
        return getImg("teams/$val");
    }

    public function getFrontCardImageAttribute($val)
    {
        if (empty($val)) return null;
        return getImg("teams/$val");
    }
    public function getLoanLetterAttribute($val)
    {
        if (empty($val)) return null;
        return getImg("teams/$val");
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    public function scopeSearch($query, Request $request)
    {
        if (isset($request->id))$query->where('card_id','like',"%{$request->id}%");
    }
}
