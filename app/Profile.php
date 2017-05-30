<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';

    protected $fillable = [
    	'id', 'name', 'birthday', 'email', 'city', 'country', 'sex'
    ];

    protected $timestamp = true;

    public function user() 
    {
    	return $this->hasOne('App\User');
    }
}
