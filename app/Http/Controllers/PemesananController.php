<?php

namespace App\Http\Controllers;
use App\Models\Pesanan;

use Illuminate\Http\Request;

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
}
