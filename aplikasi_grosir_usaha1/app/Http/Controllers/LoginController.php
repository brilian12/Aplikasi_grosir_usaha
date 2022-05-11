<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index() {
        return view("/login.logins");
    }

    public function login(Request $request)
    {
        // validasi data
        $validate = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'email harus diisi',
            'email.email' => 'email tidak sesuai format',
            'password.required' => 'password harus diisi'
        ]);

        //cek validasi login
        if ($validate->fails()) {
            return back()->withErrors($validate->errors());
        }

        // cek email user
        $user = User::where('email', $request->email)->first();

        if ($user) {

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

                $request->session()->regenerate();

                return redirect()->route('index'); //index
            }
            // attempt logins
            return back()->WithErrors([
                'password' => 'Password yang anda masukan salah.'
            ]);
        }
        return back()->WithErrors([
            'email' => 'Email yang anda masukan salah.'
        ]);

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login.form');
    }
}
