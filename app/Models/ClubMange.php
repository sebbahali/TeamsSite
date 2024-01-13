<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClubMange extends Model
{
    use HasFactory;

    protected $fillable = ['start', 'end'];

    public static function existActiveMange()
    {
        return (self::where('status', 1)->count() > 0);
    }

    public function scopeIsActive()
    {
        return ($this->status == 1);
    }

    public function clubMangeMembers()
    {
        return $this->hasMany(ClubMangeMember::class);
    }
}
