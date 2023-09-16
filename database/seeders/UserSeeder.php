<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
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
        $data = [
            [
                'name' => 'Ashar',
                'email' => 'qwerty@gmail.com',
                'username' => 'admin',
                'password' => Hash::make('123'),
                'level' => 'Admin',
            ],
            [
                'name' => 'Farhan',
                'email' => 'abcde@gmail.com',
                'username' => 'petugas',
                'password' => Hash::make('123'),
                'level' => 'Petugas',
            ],
        ];

        User::insert($data);
    }
}
