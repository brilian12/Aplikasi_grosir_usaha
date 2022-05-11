<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index() {
        return view("register.register");
    }

    public function register(Request $request)
    {
        // validasi
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirmation_password' => 'required|same:password',
        ], [
            'name.required' => 'name harus diisi',
            'email.required' => 'email harus diisi',
            'email.email' => 'tidak sesuai format',
            'password.required' => 'password harus diisi',
            'confirmation_password.required' => 'password harus diisi',
            'confirmation_password.same' => 'konfirmasi password tidak sesuai'
        ]
    );

    if ($validate->fails()){
        return back()->withErrors($validate->errors());
    }

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'role_id' => 1
    ]);

    return back();

    }
}
