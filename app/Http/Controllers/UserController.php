<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Gate::allows('user-show')) {
            $users = User::all();
            return view('users.index', compact('users'));
        }
       abort(403);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Gate::allows('user-create'))
            return view('users.create');
        abort(403);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        if (Gate::allows('user-create')){
            User::create($request->all());
            return redirect()->route('users.index');
        }
        abort(403);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        if (Gate::allows('user-update'))
            return view('users.edit', compact('user'));
        abort(403);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        if (Gate::allows('user-update')){
            $user->update($request->all());
            return redirect()->route('users.index');
        }
        abort(403);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if (Gate::allows('user-delete')) {
            $user->delete();
            return redirect()->route('users.index');
        }
        abort(403);
    }
}
