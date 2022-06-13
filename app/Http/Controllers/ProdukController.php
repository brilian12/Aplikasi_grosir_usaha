<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Perusahaan;
use App\Models\Produk_Unit;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ProdukController extends Controller
{
    public function index() {
        $produk = Produk::orderBy("id", "DESC")->get();
        return view('produk.index', ['produk' => $produk]);
    }

    public function tambahproduk() {
        $data = [
            "kategori" => Kategori::all(),
            "produkUnit" => produk_Unit::all()
        ];

        
        return view("/produk.insert", $data);
    }

    public function insertproduk(Request $request) {
       
        $validatedData = $request->validate([
            "gambar" => "image|file|max:1024",
            "nama_produk" => "required",
            "harga_produk" => "required",
            "id_kategori" => "required",
            "id_unit" => "required",
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

        if ($request->file("gambar")) {
            if ($request->gambar_lama) {
                Storage::delete($request->gambar_lama);
            }

            $data = $request->file("gambar")->store("produk");
        } else {
            $data = $request->gambar_lama;
        }

        Produk::where("id", $request->id)->update([
        "gambar" => $data,
        "nama_produk" => $request->nama_produk,
        "id_unit" => $request->id_unit,
        "harga_produk" => $request->harga_produk,
        "id_kategori" => $request->id_kategori,
        ]);
        return redirect("/produk")->with('message','Data Berhasil Diubah');
    }

    public function edit($id) {

        $data = [
           "edit" => Produk::where("id", $id)->first(),
           "kategori" => Kategori::all(),
            "produkUnit" => Produk_Unit::all()
        ];
        
        return view("produk.update", $data);
    } 
}