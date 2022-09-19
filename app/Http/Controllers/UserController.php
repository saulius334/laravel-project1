<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create() { //show register create form
        return view('users.register');
    }

    public function store(Request $request) {
        $forms = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required | confirmed | min:6'
        ]);
        $forms['password'] = bcrypt($forms['password']);

        $user = User::create($forms); // create user
        auth()->login($user);
        return redirect()->route('l_home')
        ->with('message', 'User created! Welcome!');
    }
    public function login() { //show register create form
        return view('users.register');
    }
}
