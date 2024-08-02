<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AkunSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(AkunSeeder::class);
        $this->call(CaraBayarSeeder::class);
        $this->call(CaraPenyerahanSeeder::class);
        $this->call(CurahSeeder::class);
        $this->call(JenisEksporSeeder::class);
        $this->call(KantorMuatAsalSeeder::class);
        $this->call(KategoriEksporSeeder::class);
        $this->call(KomoditiSeeder::class);
    }
}
