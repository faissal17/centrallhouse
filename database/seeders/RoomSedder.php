<?php

namespace Database\Seeders;

use App\Models\room;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        room::creat([
            'price'=>'200',
            'name'=>'Luxuary',
            'bed'=>'3',
            'bath'=>'2',
            'room'=>'3',
            'cover'=>'',
            'image'=>'',
            'description'=>'Luxuary room, comfortable and huge',
        ]),
    }
}
