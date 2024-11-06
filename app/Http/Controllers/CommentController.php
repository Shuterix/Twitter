<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $comment = new Comment();
		$comment->post_id = $post->id;
		$comment->user_id = auth()->id();
		$comment->content = $request->get('content');
		$comment->save();	

        return redirect()->route('dashboard', $post->id)->with('success', 'Comment added successfully');
    }
}