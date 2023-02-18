<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserStoreRequest;
use App\Http\Requests\Admin\UserUpdateRequest;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }


    public function create()
    {
        $roles = User::getRoles();
        return view('admin.user.create', compact('roles'));
    }


    public function store(UserStoreRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password'] = Str::random(7));
        unset($data['photo']);
        if ($request->has('photo')) {
            $data['photo'] = $request->file('photo')->store('user-photo');
        }
        // User::create($data);
        User::firstOrCreate(['email' => $data['email']], $data);
        return redirect()->route('admin.user.index');
    }

    public function show(User $user)
    {

        return view('admin.user.show', compact('user'));
    }


    public function edit(User $user)
    {
        $roles = User::getRoles();
        return view('admin.user.edit', compact('user', 'roles'));
    }


    public function update(UserUpdateRequest $request, User $user)
    {
        $data = $request->validated();
        unset($data['photo']);
        $data['password'] = Hash::make($data['password']);
        User::firstOrCreate(['email' => $data['email']], $data);
        if ($request->has('photo')) {
            Storage::delete($user->photo);
            $data['photo'] = $request->file('photo')->store('user-photo');
        }

        $user->update($data);
        return view('admin.user.show', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
