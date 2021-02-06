<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Lahore Medical Center',
            'email' => 'admin@lmc.com.pk',
            'password' => Hash::make('Lmc@123'),
        ]);
    }
}
