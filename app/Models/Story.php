<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        'name',
        'role',
        'quote',
        'story',
        'photo_url',
        'slug',
    ];
}
