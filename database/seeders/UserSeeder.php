<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Surya Dinarta',
            'username' => 'Surya1810',
            'email' => 'surya@partnership.co.id',
            'phone' => '6289512776878',
            'status' => true,
            'instagram' => true,
            'twitter' => true,
            'youtube' => true,
            'facebook' => true,
            'about' => 'Perkenalkan saya hebat dari sana dan tinggal disini',
            'password' => bcrypt('123'),
        ]);
        $admin = User::create([
            'name' => 'Surya Dinarta Halim',
            'username' => 'Surya181003',
            'email' => 'suryadinarta8@gmail.com',
            'phone' => '6289512776878',
            'status' => false,
            'password' => bcrypt('123'),
        ]);
    }
}
