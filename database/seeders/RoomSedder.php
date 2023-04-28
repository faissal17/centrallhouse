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
        room::create([
            'price'=>'200',
            'name'=>'Luxuary',
            'bed'=>'3',
            'bath'=>'2',
            'room'=>'3',
            'cover'=>"1682670676_4066189-riad-72-hotel-marrakech-morocco.jpg",
            'description'=>'Luxuary room, comfortable and huge',
        ]);
        room::create([
            'price'=>'100',
            'name'=>'Filo',
            'bed'=>'2',
            'bath'=>'2',
            'room'=>'3',
            'cover'=>"1682670506_1681817726_hotelroom.jpg",
            'description'=>'Luxuary room, comfortable and huge',
        ]);
    }
}
