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
            'full_name' => 'Muhamad Rafli Al Farizqi',
            'username' => 'xrafffcode',
            'gender' => 'Laki-Laki',
            'email' => 'xrafffcode@dinacom.test',
            'password' => bcrypt('password'),
        ]);

        $user->assignRole('mentor');
    }
}
