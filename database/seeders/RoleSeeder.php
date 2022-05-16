<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'role_name' => 'admin',
                'role_status' => true,
            ],
            [
                'role_name' => 'member',
                'role_status' => true,
            ]
        ];

        foreach ($data as $key => $value) {
            Role::create($value);
        }
    }
}
