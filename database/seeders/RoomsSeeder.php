<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ダミーデータを挿入
        DB::table('rooms')->insert([
            ['roomtype_id' => 1, 'room_number' => '101'],
            ['roomtype_id' => 1, 'room_number' => '102'],
            ['roomtype_id' => 2, 'room_number' => '201'],
            ['roomtype_id' => 2, 'room_number' => '202'],
            ['roomtype_id' => 3, 'room_number' => '301'],
            ['roomtype_id' => 3, 'room_number' => '302'],
            ['roomtype_id' => 4, 'room_number' => '401'],
            ['roomtype_id' => 5, 'room_number' => '501'],
        ]);
    }
}
