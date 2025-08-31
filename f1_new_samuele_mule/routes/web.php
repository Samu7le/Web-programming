<?php

use App\Http\Controllers\NewsController;
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
Route::get('/', function () {
    return view('home');
});

//news
Route::get('/news', [NewsController::class, "get"]);

//auto
Route::get('/auto', function () {
    return view('auto');
});

//profile
Route::get('/profile', function () {
    return view('profile');
});