<?php

namespace Database\Seeders;

use App\Models\Table;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Table::create([
            'price'=>'200',
            'name'=>'Tajin Table',
            'image'=>"1682670758_1681907190_1681222665_hotelresturent.jpg",
            'description'=>'the famous moroccan dish the Tajin',
        ]);
    }
}
