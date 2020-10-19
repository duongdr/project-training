<?php

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
//        factory(\App\Models\Post::class, 30)->create();
        DB::table('posts')->insert([
            [
                'title' => '',
                'description' => '',
                'content' => '',
                'user_id' => 1
            ],
            [
                'title' => '',
                'description' => '',
                'content' => '',
                'user_id' => 1
            ],
            [
                'title' => '',
                'description' => '',
                'content' => '',
                'user_id' => 1
            ]
        ]);
    }
}
