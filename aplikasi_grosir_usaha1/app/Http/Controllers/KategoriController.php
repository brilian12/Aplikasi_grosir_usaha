<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
    public function index() {
        $data = [
            "kategori_produk" => Kategori::all()
        ];
        return view("/kategori.index", $data);
    }

    public function tambahkategori(Request $request) {
        Kategori::create($request->all());
        return redirect('/kategori');
    }

    public function insertkategori() {
        return view("/kategori.insert");
    }

    public function delete($id) {
        Kategori::where("id", $id)->delete();
        return redirect('/kategori');
    }

    public function update(Request $request) {
        Kategori::where("id", $request->id)->update([
        "nama_kategori" => $request->nama_kategori,
        ]);
        return redirect("/kategori");
    }


    public function edit($id) {

        $data = [
           "edit" => Kategori::where("id", $id)->first()
        ];
        
        return view('kategori/edit', $data);
    } 

}