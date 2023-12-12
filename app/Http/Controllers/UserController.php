<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request) {
        $incomingFields = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::create($incomingFields);

        return redirect('/');
    }

    public function login(Request $request) {
        $incomingFields = $request->validate([
            'login_name' => 'required',
            'login_password' => 'required'
        ]);

        if (auth() -> attempt(['name' => $incomingFields['login_name'], 'password' => $incomingFields['login_password']])) {
            $request->session()->regenerate();
        }
        
        return redirect('/');
    }

    public function logout(Request $request) {
        auth()->logout();
        return redirect('/');
    }
}
