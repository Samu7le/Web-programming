<?php

namespace App\Http\Controllers;

use App\Models\Post;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function get()
    {
        $url = env("URL","") . env("API_KEY_NEWS", "");
        $client = new Client();
        $response = $client->get($url);
        $news = json_decode($response->getBody());
        return view("news", ["news_list" => $news->articles]);
    }

    public function home()  
    {
        return view("home", ["posts" => Post::orderBy("created_at", "desc")->get()->take(3)]);
    }

}
