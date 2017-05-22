<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wall extends Model
{
    protected $table = 'walls';

    protected $fillable = [
    	'id'
    ];

    protected $timestamp = true;
}
