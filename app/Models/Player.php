<?php

namespace App\Models;

use App\Enums\LoanStatus;
use App\Enums\PlayerApproveStatus;
use App\Enums\PlayerJoinStatus;
use App\Enums\PlayerYearStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Player extends Model
{
    use HasFactory, SoftDeletes;

    // protected $fillable = [
    //     'card_id',
    //     'name',
    //     'birth_date',
    //     'phone',
    //     'location',
    //     'player_img',
    //     'card_identy_front',
    //     'card_identy_back',
    //     'birth_doc',
    //     'father_check_doc',
    //     'father_identy_card',
    //     'team_id',
    //     'player_disaple_id',
    //     'approve_status',
    //     'join_status',
    //     'register_number'
    // ];

    protected $guarded = [];

    protected $primaryKey = 'card_id';

    protected $hidden = [
        'transaction_id',
        'team_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'approve_status' => PlayerApproveStatus::class,
        'join_status' => PlayerJoinStatus::class,
        'year_status' => PlayerYearStatus::class,
    ];

    /**
     * Get  the route key for model
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'card_id';
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function loan()
    {
        return $this->hasMany(LoanPlayer::class, 'player_id', 'card_id');
    }

    public function runingLoan()
    {
        return $this->loan->where('status', LoanStatus::Done)->first();
    }

    public function scopeHasNoLoan($query)
    {
        return $query->where('status', 0);
    }

    public function getPlayerImgAttribute($val)
    {
        if (empty($val)) return null;
        return getImg("teams/players/$val");
    }

    public function getSportImageAttribute($val)
    {
        if (empty($val)) return null;
        return getImg("teams/$val");
    }
    public function getCardIdentyFrontAttribute($val)
    {
        if (empty($val)) return null;
        return getImg("teams/players/$val");
    }
    public function getCardIdentyBackAttribute($val)
    {
        if (empty($val)) return null;
        return getImg("teams/players/$val");
    }
    public function getBirthDocAttribute($val)
    {
        if (empty($val)) return null;
        return getImg("teams/players/$val");
    }
    public function getFatherCheckDocAttribute($val)
    {
        if (empty($val)) return null;
        return getImg("teams/players/$val");
    }
    public function getFatherIdentyCardAttribute($val)
    {
        if (empty($val)) return null;
        return getImg("teams/players/$val");
    }

    public function scopeSearch($query, Request $request)
    {
        if (isset($request->id)) $query->where('card_id', $request->id);
    }
}
