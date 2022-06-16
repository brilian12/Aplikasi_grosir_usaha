<?php

namespace App\Http\Controllers;
use App\Models\Pesanan;

use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index() {
        $pesanan = Pesanan::orderBy("id","ASC")->paginate(10);
        return view("/pemesanan/index", ['pesanan' => $pesanan]);
    }
}
