<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
       return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        // dd($request->all());
           $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }
    public function register_view()
    {

        return view('backend.auth.register');
    }

    public function register(Request $request)
    {

        $user=new User();
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password =$request->password;
        $user->display_name = $request->name;
        $user->avatar_url = 'mathi.com';
        $user->prefereces = 'just';
        $user->save();
        return redirect()->route('login');

    }
    public function dashboard()
    {
        if (Auth::check()) {

             return redirect()->route('post.index');
        }
        return redirect()->route('login')->with('error', 'You must be logged in to access the dashboard.');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('success', 'You have been logged out successfully.');
    }
}
