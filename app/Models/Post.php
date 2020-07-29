<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'slug', 'image', 'description', 'user_id', 'category_id', 'published_at',
    ];

    protected $dates = [
        'published_at',
    ];
}
