<?php

namespace App\Http\Controllers;
use App\Models\Pesanan;

use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index() {
        $pesanan = Pesanan::orderBy("id","ASC")->paginate(10);
        return view("/pemesanan/masuk", ['pesanan' => $pesanan]);
    }

    public function proses() {
        $pesanan = Pesanan::orderBy("id","ASC")->paginate(10);
        return view("/pemesanan/proses", ['pesanan' => $pesanan]);
    }

    public function riwayat() {
        $pesanan = Pesanan::orderBy("id","ASC")->paginate(10);
        return view("/pemesanan/riwayat", ['pesanan' => $pesanan]);
    }

    public function siap() {
        $pesanan = Pesanan::orderBy("id","ASC")->paginate(10);
        return view("/pemesanan/siap", ['pesanan' => $pesanan]);
    }
}
