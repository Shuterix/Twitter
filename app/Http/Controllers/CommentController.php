<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required|min:5|max:255',
        ]);

        $post->comments()->create([
            'content' => $request->input('content'),
        ]);

        return redirect()->route('dashboard')->with('success', 'Comment added successfully');
    }
}