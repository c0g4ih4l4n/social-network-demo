<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

// model
use App\User;
use App\Profile;

class ProfileController extends Controller
{

    public function __construct() 
    {

    }

    // show user profile
    public function showMyProfile() 
    {
        $profile = Profile::find(Auth::id());

        $data = array (
            'profile' => $profile
        );

        return view('pages.profile')->with($data);
    }
    
    // show other profile
    // input: $id
    public function showProfile() 
    {
        $id = Input::get('id', '');
        
        if ($id != null) 
        {
            $profile = Profile::find($id);
        }
        else 
        {
            $profile = Profile::find(Auth::id());
        }

        $data = array (
            'profile' => $profile
        );

        return view('pages.profile')->with($data);
    }

    public function edit($id) 
    {

    }

    public function update($id, $request) 
    {

    	
    }
}
