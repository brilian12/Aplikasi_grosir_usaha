<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\InsertmemberController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\models\Kategori;
use App\models\Admin;
use App\models\Member;
use App\models\Perusahaan;
use App\models\Produk;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//login_admin
Route::get("/login", [LoginController::class, "index"])->name('login.form');
Route::post('/login', [LoginController::class, "login"])->name('login');
Route::get('/register', [RegisterController::class, "index"])->name('register.form');
Route::post('/register', [RegisterController::class, "register"])->name('register');

Route::middleware(['auth:web'])->group(function () {
    
    Route::get("/", function(){
        $kategori = Kategori::count();
        $admin = Admin::count();
        $perusahaan = Perusahaan::count();
        $member = Member::count();
        $produk = Produk::count();

        return view('/dashboard/index', compact('kategori', 'admin','perusahaan','member','produk'));
    })->name('index');
    
    //dashboard
    // Route::get("/dashboard", [DashboardController::class, 'index']);
    //Perusahaan
    Route::get("/perusahaan", [PerusahaanController::class, "index"]);
    Route::get("/tambahperusahaan", [PerusahaanController::class, "tambah"]);
    Route::post("/insertperusahaan", [PerusahaanController::class, "insert"]);
    Route::get("deleteperusahaan/{id}", [PerusahaanController::class, "delete"]);
    Route::get("editperusahaan/{id}", [PerusahaanController::class, "edit"]);
    Route::post("/updateperusahaan/{id}", [PerusahaanController::class, "update"]);
    //admin
    Route::get("/admin", [AdminController::class, "index"]);
    Route::get("/tambahadmin", [AdminController::class, "tambah"]);
    Route::post("/insertadmin", [AdminController::class, "insert"]);
    Route::get("deleteadmin/{id}", [AdminController::class, "delete"]);
    Route::get("editadmin/{id}", [AdminController::class, "edit"]);
    Route::post("/updateadmin/{id}", [AdminController::class, "update"]);

    //member
    Route::get("/member", [MemberController::class, "index"]);
    Route::get("/tambahmember", [MemberController::class, "tambahmember"]);
    Route::post("/insertdata", [MemberController::class, "insertdata"]);
    Route::get("editdata/{id}", [MemberController::class, "edit"]);
    Route::post("/updatedata/{id}", [MemberController::class, "update"]);
    Route::get("deletedata/{id}", [MemberController::class, "delete"]);

    Route::get("/kategori", [KategoriController::class, "index"]);
    Route::post("/tambahkategori", [KategoriController::class, "tambahkategori"]);
    Route::get("/insertkategori", [KategoriController::class, "insertkategori"]);
    Route::get("deletekategori/{id}", [KategoriController::class, "delete"]);
    Route::post("/updatekategori/{id}", [KategoriController::class, "update"]);
    Route::get("editkategori/{id}", [KategoriController::class, "edit"]);
    //Produk
    Route::get("/produk", [ProdukController::class, "index"]);
    Route::get("/tambahproduk", [ProdukController::class, "tambahproduk"]);
    Route::post("/insertproduk", [ProdukController::class, "insertproduk"]);
    Route::get("deleteproduk/{id}", [ProdukController::class, "delete"]);
    Route::post("/updateproduk/{id}", [ProdukController::class, "update"]);
    Route::get("editproduk/{id}", [ProdukController::class, "edit"]);

    Route::post('logout', [LoginController::class, "logout"])->name('logout');
}); //baru
    