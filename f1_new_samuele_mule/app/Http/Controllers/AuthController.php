<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;

class AuthController extends Controller
{
    public function store()
    {
        $validated = request()->validate(
            [
                'name' => 'required|min:3|max:20',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed',
                'url_image' => 'required|url'
            ]
        );

        User::create(
            [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'url_image' => $validated['url_img']
            ]
        );
        auth()->attempt($validated);
        request()->session()->regenerate();

        return redirect()->route("home");
    }
    
    public function autheticate()
    {
        $validated = request()->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ]
        );

        if (auth()->attempt($validated)) {
            request()->session()->regenerate();

            return redirect()->route("home");

        }
        else{
            $errors= new MessageBag();
            $errors->add('credential', 'Credenziali errate!');
            return redirect()->route("users.get")->withErrors($errors);
        }
        return redirect()->route("register");
    }

    public function logout()
    {
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route("home");
    }
}
