<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk_Unit extends Model
{
    use HasFactory;

    protected $table = "produk_unit";

    protected $guarded = [''];

    protected $fillable = ["unit"];
}
