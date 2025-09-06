<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function store(Request $request)
    {
        Like::create([
            'user_id' => 1,
            'comment_id' => $request->comment_id,
        ]);
        return view("post", ["post" => Post::find($request->post_id)]);
    }
}
