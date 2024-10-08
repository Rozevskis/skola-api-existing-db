<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index($postId)
    {
        $comments = Comment::where('post_id', $postId)->get();
        return response()->json($comments);
    }

    public function store(Request $request, $postId)
    {
        $request->validate([
            'comment_content' => 'required|string',
            'commenter' => 'required|string',
        ]);

        $comment = Comment::create([
            'post_id' => $postId,
            'comment_content' => $request->comment_content,
            'commenter' => $request->commenter,
        ]);

        return response()->json($comment, 201);
    }

    public function show($postId, $commentId)
    {
        $comment = Comment::where('post_id', $postId)->where('comment_id', $commentId)->firstOrFail();
        return response()->json($comment);
    }

    public function update(Request $request, $postId, $commentId)
    {
        $request->validate([
            'comment_content' => 'sometimes|required|string',
            'commenter' => 'sometimes|required|string',
        ]);

        $comment = Comment::where('post_id', $postId)->where('comment_id', $commentId)->firstOrFail();
        $comment->update($request->only(['comment_content', 'commenter']));

        return response()->json($comment);
    }

    public function destroy($postId, $commentId)
    {
        $comment = Comment::where('post_id', $postId)->where('comment_id', $commentId)->firstOrFail();
        $comment->delete();

        return response()->json(null, 204);
    }
}
