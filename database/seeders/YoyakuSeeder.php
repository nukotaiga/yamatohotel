<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YoyakusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ダミーデータを挿入
        DB::table('yoyakus')->insert([
            ['guest_id' => 1, 'name' => '山田 太郎', 'checkin' => '2024-10-05', 'checkout' => '2024-10-07'],
            ['guest_id' => 2, 'name' => '鈴木 花子', 'checkin' => '2024-10-06', 'checkout' => '2024-10-08'],
            ['guest_id' => 3, 'name' => '佐藤 一郎', 'checkin' => '2024-10-10', 'checkout' => '2024-10-12'],
            ['guest_id' => 4, 'name' => '高橋 次郎', 'checkin' => '2024-10-11', 'checkout' => '2024-10-14'],
            ['guest_id' => 5, 'name' => '田中 三郎', 'checkin' => '2024-10-15', 'checkout' => '2024-10-18'],
        ]);
    }
}
