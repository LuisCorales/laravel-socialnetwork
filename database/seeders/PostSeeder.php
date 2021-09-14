<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 12; $i++) {
            DB::table('posts')->insert([
                'user_id' => '1',
                'caption' => "This is my post #{{ $i }}!",
                'image' => 'uploads/2B9Z7a9JSDvE7e9jaDKiPLBKadT92Rl0XMV48EdV.png',
            ]);
        }

        DB::table('posts')->insert([
            'user_id' => '2',
            'caption' => "This is my test post!",
            'image' => 'uploads/2B9Z7a9JSDvE7e9jaDKiPLBKadT92Rl0XMV48EdV.png',
        ]);
    }
}
