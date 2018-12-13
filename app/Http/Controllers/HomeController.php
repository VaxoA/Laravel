<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Http\Request;
use Auth;
use Image;
use App\User;
use App\Post;
use App\Http\Resources\UserResource;


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
        $posts = Post::all();

        return view('home', ['posts' => $posts]);
    }

//    public function profile($id)
//    {
//        $user = User::findOrFail($id);
//        $posts = Post::all()->where('user_id',$user->id);
//
//        return view('profile',compact('posts', 'user'));
//    }

    public function profile(){
        return view('profile', array('user' => Auth::user()) );
    }

    public function update_avatar(Request $request){

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

//            $posts = Post::all();

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();

        }

        return view('profile', compact('posts'),array('user' => Auth::user()) );
    }

    public function edit($id)
    {
        $user = User::where('id', auth()->user()->id)
            ->where('id', $id)
            ->first();

        return view('edit', compact('user', 'id'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=> 'required',
            'mobile' => 'required'
        ]);

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->mobile = $request->get('mobile');
        $user->save();

        return redirect('/home')->with('success', 'Stock has been updated');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/home')->with('success', 'User has been deleted!!');
    }


    public function getFriends()
    {
        return UserResource::collection(User::where('id', '!=', auth()->id())->get());
    }

}



