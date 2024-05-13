<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // show user register form
    public function create() {
        return view('users.register');
    }

    // create a new user
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique("users", "email")],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        // hash password
        $formFields['password'] = bcrypt($formFields['password']);

        // create a new user
        $user = User::create($formFields);

        // login user
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }
}
