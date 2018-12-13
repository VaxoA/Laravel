<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use App\User;
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Facades\Auth ;
//use App\Notifications\NewCommentPost;


class CommentsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }


    public function store(CommentRequest $request)
    {
        $post = Post::findOrFail($request->post_id);

        Comment::create([
            'body' => $request->body,
            'user_id' => Auth::id(),
            'post_id' => $post->id,
        ]);

//       return redirect()->route('post.show', $post->id);
        return back();
    }

//    public function store(CommentRequest $request)
//    {
//        $post = Post::findOrFail($request->post_id);
//        $comment = Comment::create([
//            'body' => $request->body,
//            'user_id' => Auth::id(),
//            'post_id' => $post->id
//        ]);
//        if ($post->user_id != $comment->user_id) {
//            $user = User::find($post->user_id);
//            //auth()->user()->notify(new NewCommentPost($comment,$user));
//            $user->notify(new NewCommentPost($comment));
//
//        }
//        return redirect()->route('home', $post->id);
//    }
}