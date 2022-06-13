<?php

namespace Database\Seeders;
use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
                'status_name' => 'pesanan_masuk',
                'status' => true,
            ],
            [
                'status_name' => 'pesanan_proses',
                'status' => true,
            ],
            [
                'status_name' => 'pesanan_siap',
                'status' => true,
            ],
            [
                'status_name' => 'pesanan_selesai',
                'status' => true,
            ]
        ];

        foreach ($data as $key => $value) {
            Status::create($value);
        }
    }
}
