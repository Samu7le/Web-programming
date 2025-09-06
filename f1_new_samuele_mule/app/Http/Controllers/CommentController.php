<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        Comment::create([
            'user_id' => Auth::user()->id,
            'post_id' => $request->post_id,
            'content' => $request->content
        ]);
        return view("post", ["post" => Post::find($request->post_id)]);
    }
}
