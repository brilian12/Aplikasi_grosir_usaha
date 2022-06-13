<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk_Unit;
class ProdukUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk_Unit::create([
            "id" => 1,
            "unit" => "Renteng",
        ]);
    }
}
