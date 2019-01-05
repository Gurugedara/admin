<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Image;
use App\Comment;

class forumController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        $posts = Post::orderBy('id','dsc')->take(5)->get();
        return view('admin.forum.index',compact('posts'));
    }
    public function post(Request $request){
        // dd($request);
        $request->validate([
            'content' => 'required',
        ]);
        $post = new Post();
        $post->content = $request->content;
        $post->likes = 0;
        $post->user_id = \Auth::user()->id;
        $post->save();
        if($request->has('imageFile')){
            foreach($request->imageFile as $image){
                $temp = new Image();
                $temp->name = $image->getFilename().$image->getClientOriginalExtension();
                $temp->path = $image->store('public/forum');
                $temp->post_id = $post->id;
                $temp->save();
            }
        }

        return back();
    }
    public function comment(Request $request){
        $comment = new Comment();
        $comment->content = $request->comment ;
        $comment->user_id = \Auth::user()->id;
        $comment->post_id = $request->post_id;
        $comment->save();
        return back();
    }
}
