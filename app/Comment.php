<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
    	'id', 'content', 'user_id', 'post_id'
    ];

    protected $timestamp = true;

    public function post()
    {
    	return $this->belongsTo('App\Post');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
