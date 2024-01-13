<?php

namespace App\Models;

use App\Enums\ClubMangeRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubMangeMember extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'avatar', 'role', 'club_mange_id'];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'role' => ClubMangeRole::class,
    ];

    public function clubMange()
    {
        return $this->belongsTo(ClubMange::class);
    }
    public function getAvatarAttribute($val){
        if(empty($val)) return null;
        return getImg("clubs/$val");
    }
}
