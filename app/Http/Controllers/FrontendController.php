<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 'active')->get();
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
    public function productShow($categorySlug, $gallerySlug)
    {
        $gallery = Gallery::where('slug', $gallerySlug)->first();
        if (!$gallery) abort(404, 'No Category of such');
        $similarProducts = Gallery::where('category_id', $gallery->category_id)
            ->where('id', '!=', $gallery->id)->get();
        return view('frontend.product.show', compact('gallery', 'similarProducts'));
    }
    public function productCategoryList($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $galleries = $category->galleries()->simplePaginate(12);
        if (!$category) abort(404, 'No Category of such');
        return view('frontend.product.index', compact('category', 'galleries'));
    }
}