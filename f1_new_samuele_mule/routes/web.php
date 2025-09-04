<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//home
Route::get('/', [NewsController::class, "home"]);

//news
Route::get('/news', [NewsController::class, "get"]);
Route::get('/news/{title}', [NewsController::class, "show"])->name('news.show');
Route::post('/posts', [PostsController::class, "store"])->name('posts.store');

//about
Route::get('/about', function () {
    return view('about');
});

//profile
Route::get('/profile', function () {
    return view('profile');
});