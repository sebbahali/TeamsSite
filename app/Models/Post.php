<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'body', 'image'];

      /**
     * Get  the route key for model
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function getImageAttribute($val)
    {
        if (empty($val)) return null;
        return getImg("clubs/$val");
    }
}
