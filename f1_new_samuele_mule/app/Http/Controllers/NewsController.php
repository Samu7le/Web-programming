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
        return view("news", ["news_list" => $news->articles]);
    }

    public function home()
    {
        $url = "https://newsapi.org/v2/everything?q=f1&apiKey=" . env("API_KEY_NEWS", "");
        $client = new Client();
        $response = $client->get($url);
        $news = json_decode($response->getBody());
        // dd($news->articles);
        return view("home", ["news_list" => array_slice($news->articles,0,3)]);
    }

    public function show(string $title)
    {
        $url = "https://newsapi.org/v2/everything?q=f1&apiKey=" . env("API_KEY_NEWS", "");
        $client = new Client();
        $response = $client->get($url);
        $news = json_decode($response->getBody());
        $filtered = array_filter($news->articles, function ($n) use ($title) {
            return $n->title === $title;
        });
        $filtered = array_values($filtered);
        if (count($filtered) == 1){
            $tnews = $filtered[0];
        }
        return view("news", ["news_list" => $filtered]);
    }
}
