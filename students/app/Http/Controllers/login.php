<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->is_lecturer) {
                return redirect()->route('lecturer_dashboard');
            } else {
                return redirect()->route('student_dashboard');
            }
        }

        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid email or password']);
    }
}
