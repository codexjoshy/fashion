<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

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
    function app()
    {
        $user = auth()->user();
        if (Gate::allows('isAdmin')) {
            return redirect()->route('admin.dashboard', compact('user'));
            // return view('admin.dashboard', compact('user'));
        }
        if (Gate::allows('isTailor')) {
            return redirect()->route('tailor.dashboard');
            // return view('user.tailor-dashboard', compact('user'));
        }
        return redirect()->route('user.dashboard');
        // return view('user.dashboard', compact('user'));
    }
}