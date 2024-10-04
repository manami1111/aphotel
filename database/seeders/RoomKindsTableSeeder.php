<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class RoomKindsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table('roomkinds')->where('roomkindid', 1)->update(['image_path' => 'images/room1.jpg']);
        DB::table('roomkinds')->where('roomkindid', 2)->update(['image_path' => 'images/room2.jpg']);
        DB::table('roomkinds')->where('roomkindid', 3)->update(['image_path' => 'images/room3.jpg']);
        DB::table('roomkinds')->where('roomkindid', 4)->update(['image_path' => 'images/room4.jpg']);
    }
}
