<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Admin;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function index() {
        $data = [
            "admin" => Admin::all()
        ];
    
        return view("/admin/index", $data);
    }

    public function insert(Request $request) {
        Admin::create($request->all());
        return redirect('/admin');
    } 

    public function tambah() {
        return view("/admin.insert");
    }

    public function delete($id) {
        Admin::where("id_kategori", $id)->delete();
        return redirect('/admin');
    }

    public function edit($id) {

        $data = [
           "edit" => Admin::where("id_kategori", $id)->first()
        ];
        
        return view('admin/edit', $data);
    } 

    public function update(Request $request) {
        Admin::where("id_kategori", $request->id)->update([
        "nama_admin" => $request->nama_admin,
        "username" => $request->username,
        "pass_admin" => $request->pass_admin,
        ]);
        return redirect("/admin");
    }
}
