<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * This listing contains only "status=1" users
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check() === true){
            $users = DB::table('users')->where('status', 1)->get();
            return view('listAllUsers', ['users' => $users]);
        }
        return redirect()->route('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check() === true){
            return view('newUser');
        }
        return redirect()->route('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check() === true) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required'
            ]);
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->status = 1;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route('user.index');
        }
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if(Auth::check() === true) {
            return view('showUser', ['user' => $user]);
        }
        return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if(Auth::check() === true) {
            return view('editUser', ['user' => $user]);
        }
        return redirect()->route('login');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if(Auth::check() === true) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'status' => 'required|numeric|min:0|max:1'
                //'status' => 'required|regex:[0-1]'
            ]);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->status = $request->status;
            if (!empty($request->password)) {
                $user->password = Hash::make($request->password);
            }
            $user->save();
            return redirect()->route('user.index');
        }
        return redirect()->route('login');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if(Auth::check() === true) {
            //$user->delete();
            $user->status = 0;
            $user->save();
            return redirect()->route('user.index');
        }
        return redirect()->route('login');
    }
}
