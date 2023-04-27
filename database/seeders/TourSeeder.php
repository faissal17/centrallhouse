<?php

namespace Database\Seeders;

use App\Models\Tour;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tour::create([
            'price'=>'80',
            'name'=>'jemaa el fna',
            'description'=>'A tour around jamaa el fna including food and events',
            'image'=>'1682603223_1681225106_morocco-2746495.jpg',
        ]);
    }
}
