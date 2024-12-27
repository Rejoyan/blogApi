<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //

    // Create a new post
    public function create(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = Post::create($request->all());
        return response()->json($post, 201);
    }

    // List all posts
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    // View a single post
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return response()->json($post);
    }
}
