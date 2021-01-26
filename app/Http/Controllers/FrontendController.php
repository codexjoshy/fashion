<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function steps()
    {
        return view('frontend.works');
    }
}