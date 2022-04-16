<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Member extends Model
{ 
    protected $table = 'member';

    protected $guarded = [''];

    //public $timestamps = false;
}
