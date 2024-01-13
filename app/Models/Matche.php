<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matche extends Model
{
    use HasFactory;
    protected $guarded = [];
  protected $appends = ['match_at'];
    public function getMatchAtAttribute()
    {
        return substr($this->match_time, 0, strrpos($this->match_time, ':')) . ' ' . $this->match_date;
    }
}
