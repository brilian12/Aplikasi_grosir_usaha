<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Perusahaan;
use Illuminate\Support\Facades\DB;


class ProdukController extends Controller
{
    public function index() {
        $data = [
            "produk" => Produk::all()
        ];
        return view("/produk.index", $data);
    }

    public function tambahproduk() {
        $data = [
            "kategori" => Kategori::all(),
            "perusahaan" => Perusahaan::all()
        ];

        
        return view("/produk.insert", $data);
    }

    public function insertproduk(Request $request) {
       
        $validatedData = $request->validate([
            "gambar" => "image|file|max:1024",
            "nama_produk" => "required",
            "satuan_produk" => "required",
            "harga_produk" => "required",
            "stok_produk" => "required",
            "id_kategori" => "required",
            "expired" => "required",
            "id_perusahaan" => "required",
        ]);

        if($request->file("gambar")) {
            $validatedData["gambar"] = $request->file('gambar')->store('artikel');
            
        }

        Produk::create($validatedData);

        return redirect('/produk')->with('message','Data Berhasil Ditambahkan');
    } 

    public function delete($id) {
        Produk::where("id", $id)->delete();
        return redirect('/produk')->with('message','Data Berhasil Dihapus');
    } 

    public function update(Request $request) {
        Produk::where("id", $request->id)->update([
        "gambar" => $request->gambar,
        "nama_produk" => $request->nama_produk,
        "satuan_produk" => $request->satuan_produk,
        "harga_produk" => $request->harga_produk,
        "stok_produk" => $request->stok_produk,
        "id_kategori" => $request->id_kategori,
        "expired" => $request->expired,
        "id_perusahaan" => $request->id_perusahaan,
        ]);
        return redirect("/produk")->with('message','Data Berhasil Diubah');
    }

    public function edit($id) {

        $data = [
           "edit" => Produk::where("id", $id)->first()
        ];
        
        return view('produk/update', $data);
    } 
}