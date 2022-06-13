<?php

namespace App\Http\Controllers;
use App\models\Produk_Unit;
use Illuminate\Http\Request;

class ProdukUnitController extends Controller
{
    public function index()
    {
        $data = [
            "produkUnit" => Produk_Unit::paginate(10)
        ];
        return view("/produkUnit.index", $data);
    }

    public function tambah()
    {
        return view("/produkUnit.insert");
    }

    public function insert(Request $request)
    {
        Produk_Unit::create($request->all());
        return redirect('/produkUnit')->with('message', 'Data Berhasil Ditambahkan');
    }

    public function delete($id)
    {
        Produk_Unit::where("id", $id)->delete();
        return redirect('/produkUnit')->with('message', 'Data Berhasi Dihapus');
    }

    public function update(Request $request)
    {
        Produk_Unit::where("id", $request->id)->update([
            "unit" => $request->unit,
        ]);
        return redirect("/produkUnit")->with('message','Data Berhasil Diperbarui');
    }

    public function edit($id)
    {

        $data = [
            "edit" => Produk_Unit::where("id", $id)->first()
        ];

        return view('produkUnit/edit', $data);
    }
}
