<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

     
     public function run()
     {
         $this->call(RoomsSeeder::class);
         $this->call(RoomTypeSeeder::class);
         $this->call(YoyakusSeeder::class);
     }
}
