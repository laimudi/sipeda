<?php

namespace App\Http\Controllers\ketua_org;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = User::where('id', auth()->user()->id);
        return view('ketua-org.dashboard', compact('user'));
    }
}
