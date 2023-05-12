<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Admin',
            'role' => 'Admin',
            'no_hp' => '08962800',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
        ]);
    }
}
