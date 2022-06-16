<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';

    protected $guarded = [''];

    public function getUser()
    {
        return $this->belongsTo("App\Models\User", "id_member", "id");
    }

    public function getStatus()
    {
        return $this->belongsTo("App\Models\Status", "status_pesanan", "id");
    }

}
