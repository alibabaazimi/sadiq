<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Resources\PostCollection;
use App\Post;
use App\User;
use App\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\json_decode;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::with('image')->get();
        return $posts;

        // return new PostCollection(Post::with('image')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $units = Unit::get();
        return view('posts.create', compact('units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $ad = new Post();
        $ad->title = $request->title;
        $ad->desc = $request->desc;
        $ad->unit_id = $request->unit_id;
        $ad->amount = $request->amount;
        $ad->posted_by = auth()->id();
        $ad->save();
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($post)
    {
        //
        $post = Post::with(['image', 'user', 'likes'])->where('id', '=', $post)->first();

            
        // $post = Post::find($post);

        // foreach ($post->comments as $comment) {
        //     $user = $comment->user;
        //     $image = $comment->user->image->path;
        // }
        
        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $Post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    public function postsByUser($user)
    {
        //
        $posts = Post::with('image')->where('posted_by', $user)->get();
        return $posts;

        // return new PostCollection(Post::with('image')->get());
    }

    public function comments(Post $post)
    {
        $comments = Comment::where([['commentable_type', 'App\Post'], ['commentable_id', $post->id]])->get();
        $comments->load('user.image');

        return $comments;
    }

    public function addComment(Request $request)
    {
        $post = \App\Post::find($request->post_id);
        $comment = new \App\Comment;
        $comment->text = $request->comment_text;
        $comment->user_id = $request->user()->id;
        $post->comments()->save($comment);
        return redirect()->back();
    }

    public function addLike(Post $post)
    {
        if (!$post->user_liked->count()>0) {
            $post->likes()->attach(auth()->user()->id);
        } else {
            $post->likes()->detach(auth()->user()->id);
        }
        return redirect()->back();
    }
}
