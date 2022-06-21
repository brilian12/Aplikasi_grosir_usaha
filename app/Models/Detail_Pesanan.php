<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Pesanan extends Model
{
    use HasFactory;
    protected $table = 'detail_pesanan';
    protected $guarded = [];
    
    public function getPesanan()
    {
        return $this->belongsTo("App\Models\Pesanan", "id_pesanan", "id");
    }

    public function getProduk()
    {
        return $this->belongsTo("App\Models\Produk", "id_produk", "id");
    }
}
