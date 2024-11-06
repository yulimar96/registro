<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Federal_states;

class FederalStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Federal_states::create(['name' => 'Amazonas']);
        Federal_states::create(['name' => 'Anzoategui']);
        Federal_states::create(['name' => 'Apure']);
        Federal_states::create(['name' => 'Aragua']);
        Federal_states::create(['name' => 'Barinas']);
        Federal_states::create(['name' => 'Bolivar']);
        Federal_states::create(['name' => 'Carabobo']);
        Federal_states::create(['name' => 'Cojedes']);
        Federal_states::create(['name' => 'Delta Amacuro']);
        Federal_states::create(['name' => 'Distrito Capital']);
        Federal_states::create(['name' => 'Falcon']);
        Federal_states::create(['name' => 'Guarico']);
        Federal_states::create(['name' => 'Lara']);
        Federal_states::create(['name' => 'Merida']);
        Federal_states::create(['name' => 'Miranda']);
        Federal_states::create(['name' => 'Monagas']);
        Federal_states::create(['name' => 'Margarita']);
        Federal_states::create(['name' => 'Portuguesa']);
        Federal_states::create(['name' => 'Sucre']);
        Federal_states::create(['name' => 'Tachira']);
        Federal_states::create(['name' => 'Trujillo']);
        Federal_states::create(['name' => 'La Guaira']);
        Federal_states::create(['name' => 'Yaracuy']);
        Federal_states::create(['name' => 'Zulia']);

    }
}
