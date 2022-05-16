<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\models\Kategori;
use App\models\Admin;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $kategori = Kategori::count();
        $admin = Admin::count();
        return view('/dashboard.index', compact('kategori', 'admin'));
    }
}