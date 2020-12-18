<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;

class Auth extends Controller
{
    public function register(Request $request) {
        return view("register");
    }

    public function login(Request $request) {
        return view("login");
    }

    public function create(Request $request) {
        $this->validate($request, [
            'email' => 'email',
            'password' => 'required|confirmed|min:6',
            "name" => 'required'
        ]);

        User::create([
            "email"=>$request->email,
            "password"=>$request->password,
            "name"=>$request->name
        ]);

        return redirect(route("students.index"));
    }
}
