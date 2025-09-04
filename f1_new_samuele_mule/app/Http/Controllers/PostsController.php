<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function store(Request $request)
    {
        Post::create([
            'user_id' => 1,
            'title' => $request->title,
            'url_image' => $request->image,
            'description' => $request->description,
            'content' => $request->content
        ]);
        return view("home", ["news_list" => Post::all()]);
    }
}
