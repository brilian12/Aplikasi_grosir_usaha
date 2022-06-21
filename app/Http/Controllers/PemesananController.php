<?php

namespace App\Http\Controllers;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\Detail_Pesanan;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PemesananController extends Controller
{
    public function index() {
        $pesanan = Pesanan::where("status_pesanan","1","ASC")->paginate(10);
        return view("/pemesanan/masuk", ['pesanan' => $pesanan]);
    }


    public function proses() {
        $pesanan = Pesanan::where("status_pesanan","2","ASC")->paginate(10);
        return view("/pemesanan/proses", ['pesanan' => $pesanan]);
    }

    public function riwayat() {
        $pesanan = Pesanan::where("status_pesanan","3","ASC")->paginate(10);
        return view("/pemesanan/riwayat", ['pesanan' => $pesanan]);
    }

    public function siap() {
        $pesanan = Pesanan::where("status_pesanan","4","ASC")->paginate(10);
        return view("/pemesanan/siap", ['pesanan' => $pesanan]);
    }


    public function detail($id) {

        $data = [
           "detail" => Detail_Pesanan::where("id", $id)->first(),
        ];
        
        return view("/pemesanan.detail", ['pesanan' => $data]);
    } 

    public function pesan(Request $request, $id) {
        $product = Produk::where('id', $request->id)->first();
        $date = Carbon::now();
        $user = new User;
        $delivery = new Pesanan;
        $delivery->waktru_pesanan = $date;
        $delivery->id_user = Auth::user()->id;

        $delivery->total = $product->price*$request->qty;
        $delivery->save();

        $detail = new Detail_Pesanan;
        $detail->id_pesanan = $delivery->id;
        $detail->id_produk = $id;
        $detail->qty = $request->qty;
        $detail->total = $product->harga_produk*$request->qty;
        $detail->save();

        return redirect("/product");
    }
}
