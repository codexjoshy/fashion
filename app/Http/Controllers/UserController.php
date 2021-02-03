<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserCreationRequest;
use App\Http\Requests\ProfileUpdateRequest;

class UserController extends Controller
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

    public function getUsers($type)
    {

        $users = User::whereHas('roles', function ($q, $type) {
            $q->where('name', $type);
        })->get();
        dd($users);
        // $customer = Role::where('name', 'customer')->first()->user()->get();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mgt.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreationRequest $request)
    {
        // $pass = Str::random(5);
        $pass = "password";
        $user = User::create([
            "email" => $request->email,
            "name" => $request->name,
            "phone" => $request->mobile,
            "address" => $request->address,
            "city" => $request->city,
            "state" => $request->state,
            "password" => Hash::make($pass)
        ]);
        $roleId = Role::where('name', strtolower($request->type))->value('id');
        $user->roles()->attach($roleId);
        //initiate an event
        return back()->with('success', 'User Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function createProfile(Request $request)
    {
        $user = auth()->user();
        $tailor = $user->tailors ?? false;
        if (Gate::allows('isAdmin')) {
            return View('admin.profile.show', compact('user', 'tailor'));
        }
        return View('user.profile.show', compact('user', 'tailor'));
    }
    public function updateProfile(ProfileUpdateRequest $request)
    {
        $user = auth()->user();
        $user->phone = $request->mobile;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->address = $request->address;

        if ($request->avatar) {
            $path = $request->avatar->store('avatars', 'public');
            $user->avatar = $path;
        }
        $user->save();
        return back()->with('success', 'Profile Updated Successfully');
    }
}