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
                'status_name' => 'Pesanan Masuk',
                'status' => 1,
            ],
            [
                'status_name' => 'Pesanan Diproses',
                'status' => 2,
            ],
            [
                'status_name' => 'Pesanan Siap Diambil',
                'status' => 3,
            ],
            [
                'status_name' => 'Riwayat Pesanan',
                'status' => 4
            ]
        ];

        foreach ($data as $key => $value) {
            Status::create($value);
        }
    }
}
