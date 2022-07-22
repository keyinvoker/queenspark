<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function profile()
    {
        return view('profile');
    }

    public function update(Request $request)
    {
        $profile = $request->file('profile');
        $newName = Auth::user()->name . '.' . $profile->getClientOriginalExtension();
        Storage::putFileAs('public/profiles', $profile, $newName);
        $user = Auth::user();
        $user->profile = $newName;
        User::where('name', Auth::user()->name)->first()->save();
        return view('home');
    }
}
