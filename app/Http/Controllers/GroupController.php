<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

// request
use App\Http\Requests\CreateGroupRequest;

use App\Group;
use App\UserGroup;

class GroupController extends Controller
{

    public $user;
    public function __construct() {
        $this->user = Auth::user();
    }
	
    public function list() 
    {
        // get list of all group and current user
        $groups     = Group::all();
        $this->user = Auth::user();

        // get list id of group joined
        $relations     = UserGroup::where('user_id' , '=', $this->user->id)->get();
        $groupJoinedId = array ();
        foreach ($relations as $relation) {
            $groupJoinedId []= $relation->group_id;
        }

        // data to pass to view
        $data = array (
            'user'          => $this->user,
            'list_group'    => $groups,
            'groupJoinedId' => $groupJoinedId,
        );

        return view('pages.groups')->with($data);
    }

    public function join ($groupId) 
    {
        $this->user = Auth::user();

        // check group exist
        $group = Group::find($groupId);
        if ($group == null) 
            return $this->list();

        // create new relation
        $relation           = new UserGroup();
        $relation->user_id  = $this->user->id;
        $relation->group_id = $groupId;
        $relation->save();

        return $this->list();
    }

    public function leave ($groupId) 
    {
        $this->user = Auth::user();

        // check group exist
        $group = Group::find($groupId);
        if ($group == null) 
            return $this->list();

        // create new relation
        $relation = UserGroup::where([
            ['user_id', '=', $this->user->id],
            ['group_id', '=', $groupId],
        ])->delete();

        // if ($relation->isEmpty()) 
        //     return $this->list();


        return $this->list();
    }

    public function viewCreateGroup ()
    {
        $this->user = Auth::user();
        
        return view('pages.createNewGroup');
    }

    public function create(CreateGroupRequest $request) 
    {
        $this->user = Auth::user();
        
        $group              = new Group();
        $group->name        = $request->name;
        $group->description = $request->description;
        $group->user_id     = $this->user->id;
        $group->save();

        $this->join($group->id);

        return $this->list();
    }
}
