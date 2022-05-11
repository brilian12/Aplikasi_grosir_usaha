<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticable;

class Admin extends Authenticable
{
    protected $table = 'admin';

    protected $guarded = [];

    public $timestamps = false;
}
