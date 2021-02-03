<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function user()
    {
        $user = auth()->user();
        return view('user.dashboard', compact('user'));
    }
    public function admin()
    {
        $user = auth()->user();

        return view('admin.dashboard', compact('user'));
    }
    public function tailor()
    {
        $user = auth()->user();

        return view('user.tailor-dashboard', compact('user'));
    }
}