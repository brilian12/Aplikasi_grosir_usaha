<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;
class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Member::create([
            "id" => 3,
            "no_telp" => 62851561123,
            "alamat" => "Indramayu",
            "status" => false,
        ]);
    }
}

