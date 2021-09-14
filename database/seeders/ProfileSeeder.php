<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'user_id' => '1',
            'title' => "I'm Luis Corales!",
            'description' => 'I built this app :)',
            'url' => 'https://github.com/LuisCorales',
        ]);

        DB::table('profiles')->insert([
            'user_id' => '2',
            'title' => "I'm a test user!",
            'description' => 'Hello!',
            'url' => 'https://google.com',
        ]);
    }
}
