<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use Illuminate\Support\MessageBag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function store(Request $request)
    {
        $like = Like::where('user_id', Auth::user()->id)->where('comment_id', $request->comment_id)->first();
        if ($like) {
            $like->delete();
            //     $errors= new MessageBag();
            //     $errors->add('like', 'Non più di uno!');
            //     return redirect()->route("posts.show", ["post" => Post::find($request->post_id)])->withErrors($errors);
        } else {
            Like::create([
                'user_id' => Auth::user()->id,
                'comment_id' => $request->comment_id,
            ]);
        }
        return view("post", ["post" => Post::find($request->post_id)]);
    }
}
