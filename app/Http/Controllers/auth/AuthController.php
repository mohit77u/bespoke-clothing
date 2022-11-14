<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //show login page
    public function getLoginPage()
    {
        return view('auth.login');
    }

    //show login page
    public function postLogin(Request $request)
    {
        $input = $request->validate([
            'user_id' => 'required',
            'password' => 'required',
        ]);

        // for rememeber me functionality
        $remember_me = $request->has('remember_me') ? true : false; 

        // If auth failed
        if(!Auth::attempt($input, $remember_me))
        {
            throw ValidationException::withMessages([
                'user_id'   => 'User id not verified or not exists.',
                'password'  => 'Invalid /Incorrect pasword',
            ]);
        }

        // auth user
        Auth::user();

        return redirect()->route('admin.dashboard')->with('success', 'Logged in successfully.');
    }
}
