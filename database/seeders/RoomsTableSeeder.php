<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('rooms')->insert([
            [
                'roomid' => 'R001',
                'roomkindid' => 1, // スイートルーム
                'roomnumber' => '201',
                'image_path' => 'images/room1.jpg',
            ],
            [
                'roomid' => 'R002',
                'roomkindid' => 3, // ダブルルーム
                'roomnumber' => '202',
                'image_path' => 'images/room2.jpg',
            ],
            [
                'roomid' => 'R003',
                'roomkindid' => 2, // ファミリールーム
                'roomnumber' => '101',
                'image_path' => 'images/room3.jpg',
            ],
            [
                'roomid' => 'R004',
                'roomkindid' => 4, // シングルルーム
                'roomnumber' => '102',
                'image_path' => 'images/room4.jpg',
            ],
        ]);
    }
}
