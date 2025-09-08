<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use App\Models\User;
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
Route::get('/', [NewsController::class, "home"])->name('home');

//news
Route::get('/news', [NewsController::class, "get"])->name('news.get');

//posts
Route::get('/posts', [PostsController::class, "get"])->name('posts.get')->middleware('auth');
Route::post('/posts', [PostsController::class, "store"])->name('posts.store')->middleware('auth');
Route::get('/posts/{post}', [PostsController::class, "show"])->name('posts.show');

//about
Route::get('/about', function () {
    return view('about');
});

//profile
Route::get('/profile', function () {
    return view('profile');
})->middleware('auth')->name('profile');
Route::post('/profile/name', [UserController::class, "changeName"])->name('change.name')->middleware('auth');
Route::post('/profile/password', [UserController::class, "changePassword"])->name('change.password')->middleware('auth');
Route::post('/profile/image', [UserController::class, "changeImage"])->name('change.image')->middleware('auth');

//comments
Route::post('/comments', [CommentController::class, "store"])->name('comments.store')->middleware('auth');

//likes
Route::post('/likes', [LikeController::class, "store"])->name('likes.store')->middleware('auth');

//auth
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/register', [AuthController::class, "store"])->name('users.store');
Route::post('/login', [AuthController::class, "autheticate"])->name('users.get');

Route::get('/logout', [AuthController::class, "logout"])->name('logout');