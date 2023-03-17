<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function visimisi()
    {
        return view('pengguna.visimisi');
    }
}
