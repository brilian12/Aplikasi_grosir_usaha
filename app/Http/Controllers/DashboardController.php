<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\models\Kategori;
use App\models\Admin;
use App\models\Perusahaan;
use App\models\Member;
use App\models\Produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $kategori = Kategori::count();
        $admin = Admin::count();
        $perusahaan = Perusahaan::count();
        $member = Member::count();
        $produk = Produk::count();

        return view('/dashboard', compact('kategori', 'admin','perusahaan','member','produk'));
    }
}