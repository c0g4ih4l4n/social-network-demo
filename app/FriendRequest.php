<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FriendRequest extends Model
{
    protected $table = 'friendrequests';

    protected $fillable = [
    	'id', 'user_id', 'requester_id'
    ];

    protected $timestamp = true;
}
