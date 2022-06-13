<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Member extends Model
{ 
    protected $table = 'tb_member';

    protected $guarded = [''];

    //public $timestamps = false;
    public function getUser()
    {
        return $this->belongsTo("App\Models\User", "id", "id");
    }
}
