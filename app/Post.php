<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
    	'id', 'content', 'user_id', 'wall_id'
    ];

    protected $timestamp = true;
}
