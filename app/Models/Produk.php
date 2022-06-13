<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';

    protected $guarded = [''];

    //public $timestamps = false;
    public function getKategori()
    {
        return $this->belongsTo("App\Models\kategori", "id_kategori", "id");
    }

    public function getUnit()
    {
        return $this->belongsTo("App\Models\Produk_Unit", "id_unit", "id");
    }
}
