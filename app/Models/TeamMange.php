<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamMange extends Model
{
    use HasFactory;

    protected $fillable = ['start', 'end'];

    protected $hidden = [
        'team_id',
        'created_at',
        'updated_at',
    ];

    public static function existActiveMange()
    {
        return (self::where('status', 1)->count() > 0);
    }

    public function scopeIsActive()
    {
        return ($this->status == 1);
    }

    public function teamMangeMembers()
    {
        return $this->hasMany(TeamMangeMember::class);
    }

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        if (auth('team')->check()) {
            static::addGlobalScope('team', function ($builder) {
                if(auth('api-team')->check()){
                    $builder->where('team_id', auth('api-team')->user()->id);
                }else{
                    $builder->where('team_id', team()->id);
                }
            });
        }

        static::creating(function ($model) {
            if(auth('api-team')->check()){
                $model->team_id = auth('api-team')->user()->id;
            }else{
                $model->team_id = team()->id;
            }
        });
    }
}
