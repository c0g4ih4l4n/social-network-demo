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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $data = array (
            'groups' => $user->groups,
            'user' => $user
            );

        return view ('pages.home')->with($data);
    }

    public function showLoginForm ()
    {
        return view ('pages.loginPage');
    }
    /**
     * Test View
     * @return view pages
     */
    public function test()
    {
        return view('pages.profile');
    }
}
