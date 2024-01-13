<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamHeaderImage extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        if (auth('team')->check()) {
            static::addGlobalScope('team', function ($builder) {
                $builder->where('team_id', team()->id);
            });
        }

        static::creating(function ($model) {
            $model->team_id = team()->id;
        });
    }
}
