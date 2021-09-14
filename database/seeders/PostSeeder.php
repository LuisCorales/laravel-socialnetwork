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
        for ($i=0; $i < 5; $i++) {
            DB::table('posts')->insert([
                'user_id' => '1',
                'caption' => "This is my post #{{ $i }}!",
                'image' => '',
            ]);
        }
    }
}
