<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoomSedder;
use Database\Seeders\adminsedder;
use Database\Seeders\TableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            adminsedder::class,
            RoomSedder::class,
            TableSeeder::class,
        ]);
    }
}
