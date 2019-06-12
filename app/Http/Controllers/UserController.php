<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
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
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:25',
            'email' => 'required|email|max:60|unique:students|unique:users',
            'agency' => 'max:20',
        ]);

        // Generate a password for the new users
        $password = User::passwordAuto();

        $user = new User();
        $user->name  = $request->name;
        $user->email = $request->email;
        $user->agency = $request->agency;
        $user->is_admin = 0;
        $user->is_active = 1;
        $user->password = $password;

        $user->save();

//        $user = User::create($data);

        return response()->json($user,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|max:25',
            'email' => 'required|email|max:60',
            'agency' => 'max:20',
        ]);

        $user->name = request('name');
        $user->email = request('email');
        $user->agency = request('agency');
        $user->save();

        return response()->json($user,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return response()->json(['message' => 'Deleted student item'], 200);
    }
}

