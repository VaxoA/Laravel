<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Input;
use Session;
use Image;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function post($id)
    {
        $user = User::findOrFail($id);
        $posts=Post::all()->where('user_id',$user->id);

        return view('posts.post',compact('posts', 'user'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [

            'text'      => 'required',
            'date'      => 'required',
            'images'      => 'required',

        ]);
        $posts = new Post;
        $posts->text      = $request->text;
        $posts->user_id   = Auth::user()->id;
        $posts->date = $request->date;


        // Check if file is present
        if( $request->hasFile('images') ) {
            $images = $request->file('images');
            $filename = time() . '.' . $images->getClientOriginalExtension();

            Image::make($images)->resize(600, 600)->save( public_path('/uploads/images/' . $filename ) );

            // Set post-thumbnail url
            $posts->images = $filename;
        }
        $posts->save();

        Session::flash( 'sucess', 'Post published.' );

        return redirect('/posts');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post','id'));
    }


    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'date' => 'required',
            'text' => 'required|max:255',
            'images' => 'required',
        ]);

        $post->update($request->all());

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $filename = time() . '.' . $images->getClientOriginalExtension();
            Image::make($images)->resize(300, 300)->save(public_path('/uploads/images/' . $filename));

            $post->images = $filename;
//            $posts->user_id = Auth::user()->id;

            $post->save();


//            return back()
//                ->with('success', 'Post info updated successfully.');
            return view('profile', array('user' => Auth::user()) );
        }
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts')->with('success', 'Post was deleted');
    }

}