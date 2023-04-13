<?php

namespace App\Http\Controllers\pengurus_asm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pengurus-asm.dashboard');
    }
}
