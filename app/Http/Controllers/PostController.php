<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::with('comments')->get(); // Fetch posts with comments

        return response()->json($posts); // Return the posts in JSON format
    }



    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        $post = Post::with('comments')->findOrFail($id); // Fetch post by ID or fail
        return response()->json($post);
    }

    public function update(Request $request, Post $post)
    {
        
    }

    public function destroy(Post $post)
    {
        
    }
}
