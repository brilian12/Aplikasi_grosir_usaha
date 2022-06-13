<?php

namespace App\Http\Controllers\api\v1;
use Illuminate\Support\Facades\Validator;
use App\Models\Member;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $produk = Member::all();
        $data = [];
        foreach ($produk as $s) {
            $user = User::where('id', $s->id)->first();
            $data[] = [
                'id' => $user->id,
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
                'no_telp' => $s->no_telp,
                'alamat' => $s->alamat,
                'status' => $s->status,
            ];
        }
        return response()->json($data);
    }

    public function store(Request $request)
    {
        //validate data
        $validator = Validator::make(
            $request->all(),
            [
                'first_name'     => 'required',
                'last_name'   => 'required',
                'no_telp'     => 'required',
                'password'   => 'required',
                'alamat'     => 'required',
                'email'     => 'required',
            ],
            [
                'first_name.required' => 'Masukkan Title Post !',
                'last_name.required' => 'Masukkan Content Post !',
                'no_telp.required'     => 'required',
                'password.required'   => 'required',
                'alamat.required'     => 'required',
                'email.required'     => 'required'
            ]
        );

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ], 401);
        } else {

            $post = User::create([
                'first_name'     => $request->input('first_name'),
                'last_name'   => $request->input('last_name'),
                'email'     => $request->input('email'),
                "password" => bcrypt($request->password),
                'id_role'   => 3
            ]);
            Member::create([
                'alamat'     => $request->input('alamat'),
                'no_telp'     => $request->input('no_telp'),
            ]);

            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'Post Berhasil Disimpan!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Post Gagal Disimpan!',
                ], 401);
            }
        }
    }

    public function update(Request $request, $id)
    {
        //validate data
        $validator = Validator::make($request->all(), [
            'first_name'     => 'required',
            'last_name'   => 'required',
            'email'     => 'required',
            'no_telp'     => 'required',
            'password'   => 'required',
            'alamat'     => 'required',
        ],
            [
                'first_name.required' => 'Masukkan Title Post !',
                'last_name.required' => 'Masukkan Content Post !',
                'email.required' => 'Masukkan Content Post !',
                'no_telp.required'     => 'required',
                'password.required'   => 'required',
                'alamat.required'     => 'required',
            ]
        );

        if($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ],401);

        } else {

            $post = User::whereId($id)->update([
                'first_name'     => $request->input('first_name'),
                'last_name'   => $request->input('last_name'),
                'email'     => $request->input('email'),
                "password" => bcrypt($request->password)
                //'id_role'   => 3
            ]);

            Member::whereId($id)->update([
                'alamat'     => $request->input('alamat'),
                'no_telp'     => $request->input('no_telp'),
                ]);



            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'Member Berhasil Diupdate!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Member Gagal Diupdate!',
                ], 401);
            }

        }

    }
}
