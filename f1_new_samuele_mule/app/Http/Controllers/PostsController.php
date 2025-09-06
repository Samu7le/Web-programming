<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    public function store(Request $request)
    {
        $post = Post::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'url_image' => $request->image,
            'description' => $request->description,
            'content' => $request->content
        ]);
        return view("post", ["post" => $post]);
    }

    public function show(Post $post)
    {
        return view("post", ["post" => $post]);
    }
}
