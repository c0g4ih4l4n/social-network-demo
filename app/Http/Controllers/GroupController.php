<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

use App\Group;

class GroupController extends Controller
{

    public $user;
    public function __construct() {
        $this->user = Auth::user();
    }
	
    public function list() 
    {
        $groups = Group::all();

        $data = array (
            'list_group' => $groups,
        );
        return view('pages.groups')->with($data);
    }

    public function join ($groupId) 
    {

    }

    public function leave ($groupId) 
    {

    }

    public function create ()
    {

    }
}
