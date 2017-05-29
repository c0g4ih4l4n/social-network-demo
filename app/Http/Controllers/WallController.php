<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

// model
use App\User;
use App\Profile;
use App\UserFriend;
use App\FriendRequest;
use App\Wall;
use App\Post;

class WallController extends Controller
{
    
    public function __construct()
    {

    }


    public function showWall ($wallId) 
    {
    	$user = Auth::user();

    	$userWall = User::where('wall_id', '=', $wallId)->get();
    	$wall = Wall::find($wallId);
    	if ($wall == null || $userWall == null) 
    		return redirect()->route('home');

    	// get post
		$posts = Post::where('wall_id', '=', $wallId)->get();
		
		$data = array (
			'user'     => $user,
			'userWall' => $userWall,
			'wall'     => $wall,
			'posts'    => $posts
    	);

    	return view('pages.wall')->with($data);
    }
}
