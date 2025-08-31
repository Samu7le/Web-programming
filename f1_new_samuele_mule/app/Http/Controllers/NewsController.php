<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function get()
    {
        $url = "https://newsapi.org/v2/everything?q=f1&apiKey=" . env("API_KEY_NEWS", "");
        $client = new Client();
        $response = $client->get($url);
        $news = json_decode($response->getBody());
        // dd($news->articles);
        return view("/news", ["news_list"=>$news->articles]);
    }
}
