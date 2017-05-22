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

class MemberController extends Controller
{

    public function __construct()
    {

    }

    public function list() 
    {
        $session_user = Auth::user();

        $users = User::all();

        // get friend list
        $friends = UserFriend::where('user_id', '=', $session_user->id)->get();
        $friendsId = array();
        foreach ($friends as $friend) {
            $friendsId []= $friend->friend_id;
        }
        $friends = UserFriend::where('friend_id', '=', $session_user->id)->get();
        foreach ($friends as $friend) {
            $friendsId []= $friend->user_id;
        }

        $friendRequests = FriendRequest::where('requester_id', '=', $session_user->id)->get();
        $friendRequestsId = array();
        foreach ($friendRequests as $friendRequest) {
            $friendRequestsId []= $friendRequest->user_id;
        }

        $friendRequestSents = FriendRequest::where('user_id', '=', $session_user->id)->get();
        $friendRequestSentsId = array();
        foreach ($friendRequestSents as $friendRequestSent) {
            $friendRequestSentsId []= $friendRequestSent->requester_id;
        }
        $data = array (
            'session_user' => $session_user,
            'users' => $users,
            'friendsId' => $friendsId,
            'friendRequestsId' => $friendRequestsId,
            'friendRequestSentsId' => $friendRequestSentsId
        );

        return view('pages.members')->with($data);
    }

    public function addfr ($userId) 
    {
        $id = Auth::id();

        // if userId already not friend and not have friend request
        if ($this->getFriendRelation($id, $userId)->isEmpty() 
            && $this->getFriendRequest(['userId' => $id, 'checkId' => $userId])->isEmpty())
        {
            // create friend request
            $friendRequest = new FriendRequest();
            $friendRequest->user_id = $id;
            $friendRequest->requester_id = $userId;

            // save request
            $friendRequest->save();
        } 

        return redirect()->route('member');
    }

    public function unf ($userId) 
    {
        $id = Auth::id();
        // if userId already friend   
        $friendRelation = $this->getFriendRelation($id, $userId);
        if (!$friendRelation->isEmpty())
        {
            $friendRelation->delete();
        } 

        return redirect()->route('member');
    }

    // if they were friend 
    // return true
    // else return false
    public function getFriendRelation ($userId, $checkId) 
    {
        $result = UserFriend::where([
            ['user_id', '=', $userId],
            ['friend_id', '=', $checkId],
        ])->get();

        return $result;
    }

    // get friend request
    // given userId and checkId
    public function getFriendRequest ($data, $type = 'relation') 
    {
        if ($type == 'relation') 
            $result = FriendRequest::where([
                ['user_id', '=', $data['userId']],
                ['requester_id', '=', $data['checkId']],
            ])->get();
        else if ($type == 'userId') {
            $result = FriendRequest::where(
                'user_id', '=', $data
            )->get();
        }

        return $result;
    }

    public function accept ($userId) 
    {
        $request = $this->getFriendRequest($userId, 'userId');
        if ($request->isEmpty())
        {
            return redirect()->route('member');
        }

        $friendRelation = new UserFriend();

        $friendRelation->user_id = $request->first()->user_id;
        $friendRelation->friend_id = $request->first()->requester_id;

        $friendRelation->save();

        $request->first()->delete();

        return redirect()->route('member');
    }

    public function decline ($requestId) 
    {
        $request = $this->getFriendRequest($requestId, 'id');
        if (!$request->isEmpty())
        {
            $request->delete();
        }

        return redirect()->route('member');
    }
}
