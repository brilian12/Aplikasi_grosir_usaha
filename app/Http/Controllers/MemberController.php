<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Admin;
use App\Models\Member;
use Illuminate\Support\Facades\DB;


class MemberController extends Controller
{
    public function index() {
        $data = [
            "member" => Member::all()
        ];
        return view("/member.index", $data);
    }

    public function tambahmember() {
        return view("/member.insert");
    }
    
    public function insertdata(Request $request) {
        Member::create($request->all());
        return redirect('/member')->with('message','Data Berhasil Ditambahkan');
    } 

    public function update(Request $request) {
        Member::where("id", $request->id)->update([
        "nama_member" => $request->nama_member,
        "no_telp" => $request->no_telp,
        "pass_member" => $request->pass_member,
        "alamat" => $request->alamat,
        ]);
        return redirect("/member")->with('message','Data Berhasil Diubah');
    }

    public function edit($id) {

        $data = [
           "edit" => Member::where("id", $id)->first()
        ];
        
        return view('member/editdata', $data);
    } 

    public function delete($id) {
        Member::where("id", $id)->delete();
        return redirect('/member')->with('message','Data Berhasil Dihapus');
    } 


}