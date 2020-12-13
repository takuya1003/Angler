<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id' => 1,
                'prefectures_id' => 1,
                'facility_name' => 'hoge',
                'content' => 'test'
            ],
            [
                'user_id' => 1,
                'prefectures_id' => 1,
                'facility_name' => 'hogehoge',
                'content' => 'test2'
            ],
            [
                'user_id' => 1,
                'prefectures_id' => 1,
                'facility_name' => 'hogehogehoge',
                'content' => 'test3'
            ]
        ]);
    }
}
