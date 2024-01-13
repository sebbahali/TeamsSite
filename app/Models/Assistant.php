<?php

namespace App\Models;

use App\Enums\AssistantsRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assistant extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'role' => AssistantsRole::class,
    ];
    protected $appends = ['role_id'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function getSportImageAttribute($val)
    {
        if (empty($val)) return null;
        return getImg("teams/$val");
    }

    public function getRoleIdAttribute(){
        $role = $this->role->value;
        return technicalRoles($role,'id');
    }
    public function getFrontImageAttribute($val)
    {
        if (empty($val)) return null;
        return getImg("teams/$val");
    }
}
