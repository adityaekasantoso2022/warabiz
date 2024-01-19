<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $user = User::create([
            'full_name' => 'Aditya Eka Santoso',
            'username' => 'aditya',
            'gender' => 'Laki-Laki',
            'email' => 'aditya@telkom.test',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('mentor');
    }
}
