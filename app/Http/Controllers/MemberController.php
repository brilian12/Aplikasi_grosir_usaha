<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Admin;
use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class MemberController extends Controller
{
    public function index() {
        $member = Member::orderBy("id","ASC")->paginate(10);
        return view("/member/index",  ['member' => $member]);
    }

    public function tambahmember() {
        return view("/member.insert");
    }
    
    public function insertdata(Request $request) {
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt("asatidz");
        $user->id_role = 3;
        $user->save();

        $member = new Member;
        $member->id = $user->id;
        $member->no_telp = $request->no_telp;
        $member->alamat = $request->alamat;
        $member->save();
        return redirect('/member')->with('message','Data Berhasil Ditambahkan');
    } 

    public function update(Request $request) {
        User::where("id", $request->id)->update([
            "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "password" => bcrypt($request->password)

        ]);

        Member::where("id", $request->id)->update([
            "no_telp" => $request->no_telp,
            "alamat" => $request->alamat
        ]);
        return redirect("/member")->with('message','Data Berhasil Diubah');
    }

    public function edit(Request $request) {

        $data = [
           "edit" => User::where("id", $request->id)->first(),
           "edits" => Member::where("id", $request->id)->first()
        ];
        
        return view('member/editdata', $data);
    } 

    public function delete($id) {
        User::where("id", $id)->delete();

        Member::where("id", $id)->delete();

        return redirect('/member')->with('message','Data Berhasil Dihapus');
    } 


}