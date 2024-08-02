<?php

namespace Database\Seeders;

use App\Models\CaraBayar;
use App\Models\DataMaster;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CaraBayarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CaraBayar::create([
            "nama" => "1 - Biasa/Tunai",
        ]);

        CaraBayar::create([
            "nama" => "2 - Berkala",
        ]);

        CaraBayar::create([
            "nama" => "3 - Dengan Jaminan",
        ]);

        CaraBayar::create([
            "nama" => "9 - Gabungan/Lainnya",
        ]);
    }
}
