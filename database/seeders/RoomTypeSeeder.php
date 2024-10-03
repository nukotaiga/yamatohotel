<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ダミーデータを挿入
        DB::table('roomtype')->insert([
            ['name' => 'シングルルーム', 'number_of_guests' => 1],
            ['name' => 'ダブルルーム', 'number_of_guests' => 2],
            ['name' => 'ツインルーム', 'number_of_guests' => 2],
            ['name' => 'スイートルーム', 'number_of_guests' => 4],
            ['name' => 'デラックスルーム', 'number_of_guests' => 3],
        ]);
    }
}
