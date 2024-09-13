<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (auth()->check())
            return redirect()->route('home');
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if (auth()->check())
            return redirect()->route('home');
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials))
            return redirect()->intended('/admin');
        return redirect()->back()->withErrors(['email' => __('site.not_found')]);
    }

    public function showRegisterForm()
    {
        if (auth()->check())
            return redirect()->route('home');
        return view('auth.register');
    }

    public function register(Request $request)
    {
        if (auth()->check())
            return redirect()->route('home');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole('user');
        Auth::login($user);
        return redirect()->intended('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function forgot()
    {
        return view('auth.forgot');
    }
}
