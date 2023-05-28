<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            } else {
                return redirect()->route('home');
                // dd($role);
            }
        }
        return back()->with('status', 'Username atau Password Salah');
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
            'role_id' => 'anggota',
            'password' => 'required'
        ]);

        $email = User::where('email', $request->email)->first();
        if ($email) {
            if ($validator->fails()) {
                return back()->with('Email sudah terdaftar silahkan login');
            }
        }

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'role_id' => $request['role_id'],
            'password' => Hash::make($request['password'])
        ]);

        return redirect()->route('anggota.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
