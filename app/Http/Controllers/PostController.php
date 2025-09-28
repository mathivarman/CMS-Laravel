<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd("PostController");
        $posts = Post::all();
        return view('backend.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */

        public function store(Request $request)
        {
            $post = new Post();
            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->excerpt = $request->excerpt;
            $post->body = $request->body;
            $post->status = $request->status;
            $post->published_at = $request->published_at;
            $post->expires_at = $request->expires_at;
            $post->is_featured = $request->is_featured;
            $post->featured_media_id = $request->featured_media_id;
            $post->meta = $request->meta;
            $post->auther_id = $request->auther_id;
            $post->editor_id = $request->editor_id;
            $post->deleted_at = "2025-09-23 06:09:02";
            $post->save();

            return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('backend.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;
        $post->status = $request->status;
        $post->published_at = $request->published_at;
        $post->expires_at = $request->expires_at;
        $post->is_featured = $request->is_featured;
        $post->featured_media_id = $request->featured_media_id;
        $post->meta = $request->meta;
        $post->auther_id = $request->auther_id;
        $post->editor_id = $request->editor_id;
        $post->deleted_at = "2025-09-23 06:09:02";
        $post->save();

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('post.index');
    }
}
