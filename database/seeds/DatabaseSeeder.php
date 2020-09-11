<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            'address' => 'Yangon',
            'phone_number' => '09969630514',
            'isAdmin' => '1',
            'password' => Hash::make('Admin123'),
            'premium_user' => '1',
            'pro_user' => '1',
            'starter_user' => '1'
        ]);
    }
}
