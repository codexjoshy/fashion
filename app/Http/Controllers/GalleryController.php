<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $gallery = Gallery::all()->load('category');
        return view('admin.gallery.index', compact('categories', 'gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.gallery.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGalleryRequest $request)
    {
        $validated = $request->validated();
        $categoryName = Category::where('id', $validated['category_id'])->pluck('name')[0];
        $categoryName = explode(' ', $categoryName);
        $categoryName = strtolower(implode('-', $categoryName));
        $name = explode(' ', $validated['name']);
        $name = strtolower(implode('-', $name));

        //upload image
        $fileName = time() . rand(100, 999) . "_$name";
        $path = $request->image->storeAs("products/$categoryName", $fileName, 'public');
        $validated['image'] = $path;
        $validated['user_id'] = auth()->user()->id;
        Gallery::create($validated);
        return back()->with('success', 'products created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $categories = Category::all();
        return view('admin.gallery.edit', compact('gallery', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        $validated = $request->validated();
        if ($request->has('image')) {

            $categoryName = explode(' ', $gallery->category->name);
            $categoryName = strtolower(implode('-', $categoryName));
            $name = explode(' ', $validated['name']);
            $name = strtolower(implode('-', $name));
            //upload image
            $fileName = time() . rand(100, 999) . "_$name";
            $path = $request->image->storeAs("products/$categoryName", $fileName, 'public');
            unlink(storage_path() . "\\app\\public\\" . $gallery->image);
            $validated['image'] = $path;
        }
        Gallery::where('id', $gallery->id)->update($validated);
        return back()->with('success', 'products updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}