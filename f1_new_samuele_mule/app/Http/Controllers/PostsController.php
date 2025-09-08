<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

class PostsController extends Controller
{
    public function store(Request $request)
    {
        $post = Post::where('user_id', Auth::user()->id)->where('title', $request->title)->first();
        if ($post){
            $errors= new MessageBag();
            $errors->add('post', 'Non più di uno!');
            return redirect()->route("posts.show", ["post" => $post])->withErrors($errors);
        }
        $post = Post::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'url_image' => $request->image,
            'description' => $request->description,
            'content' => $request->content
        ]);
        return redirect()->route("posts.show", ["post" => $post]);
    }

    public function show(Post $post)
    {
        return view("post", ["post" => $post]);
    }

    public function get()
    {
        return view("posts", ["posts" => Post::all()]);
    }
}
