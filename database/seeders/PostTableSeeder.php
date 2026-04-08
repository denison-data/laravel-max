<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('posts')->insert([
        //     'subject' => '첫 번째 게시글',
        //     'content' => '첫 번째 게시글의 내용입니다.!!!!',
        // ]);

        $faker = Faker::create();
        foreach(range(1, 100) as $index) {
            DB::table('posts')->insert([
                'subject' => $faker->sentence(5),
                'content' => $faker->paragraph(4),
                'email' => $faker->email(),
            ]);
        }   
    }
}
