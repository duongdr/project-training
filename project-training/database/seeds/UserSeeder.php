<?php

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
        \Illuminate\Support\Facades\DB::table('users')->insert([
            ['name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => Hash::make('123456'), 'role' => 1],
            ['name' => 'User', 'email' => 'user@gmail.com', 'password' => Hash::make('123456'), 'role' => 0]
        ]);
    }
}
