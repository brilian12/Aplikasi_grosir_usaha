<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Perusahaan;
use Illuminate\Support\Facades\DB;


class PerusahaanController extends Controller
{
    public function index()
    {
        $data = [
            "perusahaan" => Perusahaan::all()
        ];
        return view("/perusahaan.index", $data);
    }

    public function tambah()
    {
        return view("/perusahaan.insert");
    }

    public function insert(Request $request)
    {
        Perusahaan::create($request->all());
        return redirect('/perusahaan')->with('message', 'Data Berhasil Ditambahkan');
    }

    public function delete($id)
    {
        Perusahaan::where("id", $id)->delete();
        return redirect('/perusahaan')->with('message', 'Data Berhasi Dihapus');
    }

    public function update(Request $request)
    {
        Perusahaan::where("id", $request->id)->update([
            "nama_perusahaan" => $request->nama_perusahaan,
        ]);
        return redirect("/perusahaan")->with('message','Data Berhasil Diperbarui');
    }

    public function edit($id)
    {

        $data = [
            "edit" => Perusahaan::where("id", $id)->first()
        ];

        return view('perusahaan/edit', $data);
    }
}
