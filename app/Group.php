<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'groups';

    protected $fillable = [
    	'id', 'name', 'description', 'user_id'
    ];

    protected $timestamp = true;
}
