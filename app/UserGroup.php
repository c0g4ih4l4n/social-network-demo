<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    protected $table = 'usergroup';

    protected $fillable = [
    	'id', 'user_id', 'group_id'
	];

	protected $timestamp = false;
}
