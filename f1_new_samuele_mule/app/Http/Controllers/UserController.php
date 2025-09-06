<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function changeName()
    {
        $validated = request()->validate(
            [
                'name' => 'required|min:3|max:20'
            ]
        );
        $user = User::find(Auth::user()->id);
        $user->name = $validated['name'];
        $user->save();
        return redirect()->route('profile');
    }

    public function changePassword(Request $request)
    {
        if (auth()->attempt(['email' => Auth::user()->email, 'password' => $request->actual_password])) {


            $validated = request()->validate(
                [
                    'password' => 'required|confirmed'
                ]
            );
            $user = User::find(Auth::user()->id);
            $user->password = Hash::make($validated['password']);
            $user->save();
            return redirect()->route('profile');
        }
    }

    public function changeImage()
    {
        $validated = request()->validate(
            [
                'image' => 'required|url'
            ]
        );
        $user = User::find(Auth::user()->id);
        $user->url_image = $validated['image'];
        $user->save();
        return redirect()->route('profile');
    }
}
