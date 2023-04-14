<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\toast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
            } elseif ($role == 'ketua_org') {
                return redirect()->route('ketua-org.dashboard');
            } elseif ($role == 'ketua_asm') {
                return redirect()->route('ketua-asm.dashboard');
            } elseif ($role == 'pengurus_asm') {
                return redirect()->route('pengurus-asm.dashboard');
            } else {
                return redirect()->route('home');
                // dd($role);
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

    public function storeRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:anggota',
            'password' => 'required'
        ]);

        $email = User::where('email', $request->email)->first();
        if ($email) {
            if ($validator->fails()) {
                return back()->with('Email sudah terdaftar silahkan login');
            }
        }

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role_id' => $request[2]
        ]);

        Auth::login($user);

        return redirect()->route('anggota.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
