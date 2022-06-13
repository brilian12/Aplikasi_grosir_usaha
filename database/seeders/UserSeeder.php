<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "id" => 1,
            "first_name" => "Mohammad",
            "last_name" => "Ilham",
            "email" => "mohammadilham@gmail.com",
            "password" => bcrypt("super_admin"),
            "id_role" => 1,
        ]);
        User::create([
            "id" => 2,
            "first_name" => "Hakim",
            "last_name" => "Asrori",
            "email" => "hakimasrori@gmail.com",
            "password" => bcrypt("admin"),
            "id_role" => 2,
        ]);
        User::create([
            "id" => 3,
            "first_name" => "Farhan",
            "last_name" => "Ramadhan",
            "email" => "farhanramadhan1711@gmail.com",
            "password" => bcrypt("member"),
            "id_role" => 3,
        ]);
    }
}
