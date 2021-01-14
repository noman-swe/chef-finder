<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // Regisration
    public function register(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'required|string|min:8',
        ];
        $this->validate($request, $rules);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'user_type' => 'user',
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->back()->with('success', 'Successfully account created.');
    }

    // Login
    public function login(Request $request)
    {
        $data = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];
        if (Auth::attempt($data)) {
            if (Auth()->User() && Auth()->User()->user_type == 'user') {
                return redirect()->route('user.profile');
            }

            if (Auth()->User() && Auth()->User()->user_type == 'admin') {
                return redirect()->route('admin.dashboard');
            }
        } else {
            return redirect()->back()->with('error', 'Email or password incorrect');
        }
    }


    // Logout
    public function logout(Request $request)
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('home');
    }
}
