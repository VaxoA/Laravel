<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use App\Notifications\UserFollowed;


class UsersController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', auth()->user()->id)->get();
        return view('users.users', compact('users'));
    }

    public function follow(User $user)
    {
        $follower = auth()->user();
        if ($follower->id == $user->id) {
            return back()->withError("You can't follow yourself");
        }
        if(!$follower->isFollowing($user->id)) {
            $follower->follow($user->id);

            // sending a notification
            $user->notify(new UserFollowed($follower));

            return back()->withSuccess("You are now friends with {$user->name}");
        }
        return back()->withError("You are already following {$user->name}");
    }

    public function unfollow(User $user)
    {
        $follower = auth()->user();
        if($follower->isFollowing($user->id)) {
            $follower->unfollow($user->id);
            return back()->withSuccess("You are no longer friends with {$user->name}");
        }
        return back()->withError("You are not following {$user->name}");
    }
    public function notifications()
    {
        return auth()->user()->unreadNotifications()->limit(5)->get()->toArray();
    }

    public function user($id)
    {
        $user = User::find($id);
        return view('users.usersView', compact('user'));
    }

//    public function showfollow(int $userId)
//    {
//        $users = User::find($userId);
//        $followers = $users->followers;
//       // $followings = $users->followings;
//        return view('users.followers-show', compact('users', 'followers' , 'followings'));
//    }

//    public function show($id)
//    {
//        $user = User::findOrFail($id);
//        $posts = Post::all()->where('user_id',$user->id);
//
//        return view('users.show',compact('posts', 'user'));
//    }
}
