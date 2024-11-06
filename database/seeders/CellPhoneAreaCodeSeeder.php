<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CellPhoneAreaCode;

class CellPhoneAreaCodeSeeder extends Seeder
{

    public function run()
    {
    $CellPhoneAreaCodes = [
    ['code' => '412', 'description' => 'Digitel'],
    ['code' => '414', 'description' => 'Digitel'],
    ['code' => '416', 'description' => 'Digitel'],
    ['code' => '424', 'description' => 'Movilnet'],
    ['code' => '426', 'description' => 'Movilnet'],

];

foreach ($CellPhoneAreaCodes as $CellPhoneAreaCode) {
    CellPhoneAreaCode::create($CellPhoneAreaCode);
}

}

}
