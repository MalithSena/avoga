<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        // $roles = Role::pluck('name', 'id');
        // return view('users.create', compact('roles'));
        return view('users.create');
    }

public function store(Request $request)
    {
        $user = User::create($request->validated());
        $user->roles()->sync($request->input('roles', []));
        return redirect()->route('users.index');
    }

    public function show(User $user)
    {
        $roles = Role::all();
        return view('users.show', compact('user', 'roles'));
    }

    public function edit(User $user)
    {
        // $users = User::all();
        // $roles = Role::pluck('name', 'id');
        // $user->load('roles');
        $users = User::with('roles')->get();
        // $roles = Role::all();
        return view('users.edit', compact('users'));
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->validated());
        $user->roles()->sync($request->input('roles', []));
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {


        $user->delete();

        return redirect()->route('users.index');
    }
}
