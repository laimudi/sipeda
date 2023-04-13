<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Psy\Readline\Hoa\Console;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function storeLogin(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);


        // dd($role);
        if (Auth::attempt($request->only('email', 'password'))) {
            $role = auth()->user()->role->nama;
            if ($role == 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($role == 'anggota') {
                return redirect()->route('anggota.dashboard');
            } else {
                // return redirect()->route('sejarah');
                dd($role);
            }
        }
        return back()->with('status', 'Username atau Password Salah');

        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);

        // if (Auth::attempt($credentials)) {
        //     $user = auth()->user()->role;
        //     if ($user == 'Admin') {
        //         return redirect()->route('admin.dashboard');
        //     } elseif ($user == 'Anggota') {
        //         return redirect()->route('anggota.dashboard');
        //     } else {
        //         return redirect()->route('dashboard_kepala');
        //     }
        // }

        // return redirect()->back();

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();

        //     return redirect()->intended('/');
        // }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
