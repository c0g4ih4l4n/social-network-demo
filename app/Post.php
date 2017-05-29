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

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function comment ()
    {
    	return $this->hasMany('App\Comment');
    }

    public function wall ()
    {
        return $this->belongsTo('App\Wall');
    }
}
