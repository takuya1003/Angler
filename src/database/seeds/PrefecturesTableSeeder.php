<?php

use Illuminate\Database\Seeder;

class PrefecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prefectures')->insert([
            ['prefectures_name' => '北海道'],
            ['prefectures_name' => '青森'],
            ['prefectures_name' => '岩手'],
            ['prefectures_name' => '宮城'],
            ['prefectures_name' => '秋田'],
            ['prefectures_name' => '山形'],
            ['prefectures_name' => '福島'],
            ['prefectures_name' => '茨城'],
            ['prefectures_name' => '栃木'],
            ['prefectures_name' => '群馬'],
            ['prefectures_name' => '埼玉'],
            ['prefectures_name' => '千葉'],
            ['prefectures_name' => '東京'],
            ['prefectures_name' => '神奈川'],
            ['prefectures_name' => '新潟'],
            ['prefectures_name' => '富山'],
            ['prefectures_name' => '石川'],
            ['prefectures_name' => '福井'],
            ['prefectures_name' => '山梨'],
            ['prefectures_name' => '長野'],
            ['prefectures_name' => '岐阜'],
            ['prefectures_name' => '静岡'],
            ['prefectures_name' => '愛知'],
            ['prefectures_name' => '三重'],
            ['prefectures_name' => '滋賀'],
            ['prefectures_name' => '京都'],
            ['prefectures_name' => '大阪'],
            ['prefectures_name' => '兵庫'],
            ['prefectures_name' => '奈良'],
            ['prefectures_name' => '和歌山'],
            ['prefectures_name' => '鳥取'],
            ['prefectures_name' => '島根'],
            ['prefectures_name' => '岡山'],
            ['prefectures_name' => '広島'],
            ['prefectures_name' => '山口'],
            ['prefectures_name' => '徳島'],
            ['prefectures_name' => '香川'],
            ['prefectures_name' => '愛媛'],
            ['prefectures_name' => '高知'],
            ['prefectures_name' => '福岡'],
            ['prefectures_name' => '佐賀'],
            ['prefectures_name' => '長崎'],
            ['prefectures_name' => '熊本'],
            ['prefectures_name' => '大分'],
            ['prefectures_name' => '宮崎'],
            ['prefectures_name' => '鹿児島'],
            ['prefectures_name' => '沖縄']
            
        ]);
    }
}
