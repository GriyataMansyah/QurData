<?php

namespace Database\Seeders;

use App\Models\Komoditi;
use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KomoditiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Komoditi::create([
            "nama" => "1 - Migas",
        ]);  

        Komoditi::create([
            "nama" => "2 - Non Migas",
        ]);
    }
}
