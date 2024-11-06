<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(FederalStateSeeder::class);
        $this->call(MunicipalitiesSeeder::class);
        $this->call(ParishesSeeder::class);
        $this->call(CellPhoneAreaCodeSeeder::class);
        $this->call(PhoneAreaCodeSeeder::class);
    }
}
