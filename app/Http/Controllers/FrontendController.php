<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('frontend.index', compact('categories'));
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function steps()
    {
        return view('frontend.works');
    }
    public function products()
    {

        return view('frontend.product.index');
    }
    public function productList()
    {
        return view('frontend.product.show');
    }
}