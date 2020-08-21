<?php

namespace App\Http\Controllers;

use App\Post;
use App\Unit;
use Illuminate\Http\Request;

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
        $categories = \App\Category::get();
        $posts = Post::get();
        return view('home', compact('posts', 'categories') );
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
    public function show(Post $post)
    {
        //
        return view('posts.show', compact('post'));
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

    public function addComment(Post $post, Request $request)
    {
        $comment = new \App\Comment;
        $comment->text = $request->comment;
        $comment->user_id = auth()->user()->id;
        $post->comments()->save($comment);
        return redirect()->back();
    }

    public function addLike(Post $post)
    {
        if (!$post->likes->count()>0)
        {
            $post->likes()->attach(auth()->user()->id);
        }
        else 
        {
            $post->likes()->detach(auth()->user()->id);
        }
        return redirect()->back();
    }
}
