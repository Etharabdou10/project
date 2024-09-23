<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\Common;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Carbon\Carbon;



class UserController extends Controller
{
    use Common;
    public function index()
    {
        $users = User::get();
        return view('admin/users', compact('users'));
    }


    public function create()
    {
        $users = User::get();
        return view('admin/add_user', compact('users'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|confirmed|min:2',
            
        ]);

        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->active = 1;
        $user->email_verified_at = Carbon::now();
        $user->save();
        return redirect()->route('users.index');
    }

    public function show(string $id) {}


    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin/edit_user', compact('user'));
    }


    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $data = $request->validate([
            'email' => 'required|string|email|unique:users,email,' . $user->id,
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'username' => 'required|string|unique:users,username,' . $user->id,
            'password' => 'nullable|string|min:2',
        ]);

        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $data['published'] = isset($request->published);
        $data['active'] = isset($request->active);
        $user->update($data);
        return redirect()->route('users.index');
    }

    public function destroy(string $id)
    {
        //
    }
}
