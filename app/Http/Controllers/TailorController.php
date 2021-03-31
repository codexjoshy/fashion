<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTailorRequest;
use App\Models\Tailor;
use Illuminate\Http\Request;

class TailorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTailorRequest $request)
    {
        $user = auth()->user();
        $tailor = Tailor::updateOrCreate(["user_id" => $user->id], [
            "company_name" => $request->company_name,
            "description" => $request->description,
        ]);
        $tailor->categories()->attach($request->category);
        return back()->with('success', 'Tailors Profile Details Updated Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tailor  $tailor
     * @return \Illuminate\Http\Response
     */
    public function show(Tailor $tailor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tailor  $tailor
     * @return \Illuminate\Http\Response
     */
    public function edit(Tailor $tailor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tailor  $tailor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tailor $tailor)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tailor  $tailor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tailor $tailor)
    {
        //
    }
    function UpdateBank(CreateTailorRequest $request)
    {
        $user = auth()->user();
        Tailor::updateOrCreate(["user_id" => $user->id], [
            "bank_name" => $request->bank_name,
            "account_name" => $request->account_name,
            "account_number" => $request->account_number
        ]);
        return back()->with('success', 'Tailors Profile Details Updated Successfully');
    }
}