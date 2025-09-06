<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        Comment::create([
            'user_id' => 1,
            'post_id' => $request->post_id,
            'content' => $request->content
        ]);
        return view("post", ["post" => Post::find($request->post_id)]);
    }
}
