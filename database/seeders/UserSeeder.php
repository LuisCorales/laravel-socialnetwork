<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'luis corales',
            'username' => 'luiscorales',
            'email' => 'username@test.com',
            'password' => Hash::make('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => 'test test',
            'username' => 'testuser',
            'email' => 'test@test.com',
            'password' => Hash::make('12345678'),
        ]);
    }
}
