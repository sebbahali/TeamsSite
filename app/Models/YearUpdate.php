<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class YearUpdate extends Pivot
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'year_updates';

    public $incrementing = true;

    public function teams()
    {
        return $this->belongsToMany(Team::class);
    }
}
