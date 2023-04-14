<?php

namespace Database\Seeders;

use Faker\Factory;
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
        $faker = Factory::create();

        room::create([
            'price'=>'200',
            'name'=>'Luxuary',
            'bed'=>'3',
            'bath'=>'2',
            'room'=>'3',
            'cover'=>$faker->imageUrl('./images/hos.jpg'),
            'description'=>'Luxuary room, comfortable and huge',
        ]);
    }
}
