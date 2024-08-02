<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use App\Models\CaraPenyerahan;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CaraPenyerahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    CaraPenyerahan::create([
        "nama"=>'CFR - Cost and Freight',
    ]);

    CaraPenyerahan::create([
        "nama"=>'CFR - CIF - Cost, Insurance and Freight',
    ]);

    CaraPenyerahan::create([
        "nama"=>'CIP - Carriage and Insurance Paid To',
    ]);

    CaraPenyerahan::create([
        "nama"=>'CPT - Carriage Paid To',
    ]);
    
    CaraPenyerahan::create([
        "nama"=>'DAP - Delivered At Place',
    ]);

    CaraPenyerahan::create([
        "nama"=>'DAT - Delivered At Terminal',
    ]);

    CaraPenyerahan::create([
        "nama"=>'DDP - Delivered Duty Paid',
    ]);

    CaraPenyerahan::create([
        "nama"=>'EXW - Ex Works',
    ]);

    CaraPenyerahan::create([
        "nama"=>'FAS - Free Alongside Ship',
    ]);
}
}