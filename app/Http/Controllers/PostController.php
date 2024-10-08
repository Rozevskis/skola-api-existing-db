<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        return Post::all();
    }



    public function store(Request $request)
    {
        
    }

    public function show(Post $post)
    {
        
    }

    public function update(Request $request, Post $post)
    {
        
    }

    public function destroy(Post $post)
    {
        
    }
}
