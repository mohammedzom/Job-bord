<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::all();

        return view('post.index', ['posts' => $data, 'pageTitle' => 'Blog']);
    }

    public function create()
    {
        Post::create([
            'title' => 'My Unique Post',
            'body' => 'This is the body of find unique post',
            'published' => true,
        ]);

        return redirect('/blog');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('post.show', ['post' => $post, 'pageTitle' => 'Blog']);
    }
}
