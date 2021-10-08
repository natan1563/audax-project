<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login() {
        return view("login");
    }

    public function auth(Request $request) {
        $this->validate($request, [
            'input_email' => 'required|email',
            'input_password' => 'required',
        ]);

        $bindCredentials = [
            'email' => $request->input_email,
            'password' => $request->input_password
        ];

        if(Auth::attempt($bindCredentials)) {

        }

        return redirect()->back()->with('danger', 'E-mail ou senha inválida');
    }
}
