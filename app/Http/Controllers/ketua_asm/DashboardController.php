<?php

namespace App\Http\Controllers\ketua_asm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('ketua-asm.dashboard');
    }
}
