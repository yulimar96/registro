<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PhoneAreaCode;

class PhoneAreaCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        PhoneAreaCode::create(['name'=>'0212', 'state' =>'Caracas']);
        PhoneAreaCode::create(['name'=>'0234', 'state' =>'Valencia']);
        PhoneAreaCode::create(['name'=>'0241', 'state' =>'Maracay']);
        PhoneAreaCode::create(['name'=>'0251', 'state' =>'Barquisimeto']);
        PhoneAreaCode::create(['name'=>'0261', 'state' =>'Mérida']);
        PhoneAreaCode::create(['name'=>'0273', 'state' =>'San Cristóbal']);
        PhoneAreaCode::create(['name'=>'0281', 'state' =>'Maracaibo']);
        PhoneAreaCode::create(['name'=>'0292', 'state' =>'Barinas']);
        PhoneAreaCode::create(['name'=>'0293', 'state' =>'Acarigua']);
        PhoneAreaCode::create(['name'=>'0294', 'state' =>'Guanare']);
        PhoneAreaCode::create(['name'=>'0295', 'state' =>'Trujillo']);
        PhoneAreaCode::create(['name'=>'0296', 'state' =>'Valera']);
        PhoneAreaCode::create(['name'=>'0297', 'state' =>'Punto Fijo']);
        PhoneAreaCode::create(['name'=>'0298', 'state' =>'Cumana']);
        PhoneAreaCode::create(['name'=>'0299', 'state' =>'Maturín']);
    }
}
