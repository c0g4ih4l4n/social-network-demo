<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFriend extends Model
{
    protected $table = 'userfriend';

    protected $fillable = [
    	'id', 'user_id', 'friend_id'
    ];

    protected $timestamp = true;
}
