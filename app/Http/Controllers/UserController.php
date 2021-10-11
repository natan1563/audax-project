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

        if(!Auth::attempt($bindCredentials)) {
            return redirect()
                    ->back()
                    ->withErrors('E-mail ou senha inválida');
        }

        switch(Auth::user()->type_user) {
            case ('admin'):
                return redirect('/users');
            case ('solicitor'):
                return redirect('/solicitor');
            case ('approver'):
                return redirect('/approver');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
