<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use App\Models\JenisEkspor;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisEksporSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        JenisEkspor::create([
            "nama" => "1 - Ekspor Biasa",
        ]);

        JenisEkspor::create([
            "nama" => "2 - Ekspor Re-Import",
        ]);

        JenisEkspor::create([
            "nama" => "3 - Ekspor Re-Ekspor",
        ]); 
    }
}

