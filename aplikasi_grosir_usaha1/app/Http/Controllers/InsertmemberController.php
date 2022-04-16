<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;


class InsertmemberController extends Controller
{
    public function index() {
        return view("/member.insert");
    }
}