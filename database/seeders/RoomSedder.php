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
            'cover'=>"1681901335_1681141117_hero_4.jpg",
            'description'=>'Luxuary room, comfortable and huge',
        ]);
        room::create([
            'price'=>'100',
            'name'=>'Filo',
            'bed'=>'2',
            'bath'=>'2',
            'room'=>'3',
            'cover'=>"1681907190_1681464836_1680861389_menara-gardens-5924722.jpg",
            'description'=>'Luxuary room, comfortable and huge',
        ]);
    }
}
