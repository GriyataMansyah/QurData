<?php

namespace Database\Seeders;

use App\Models\DataMaster;
use App\Models\KategoriEkspor;
use Illuminate\Database\Seeder;
use Database\Seeders\DataMasterSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriEksporSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KategoriEkspor::create([
            "nama" => "10 - Biasa",
        ]);

        KategoriEkspor::create([
            "nama" => "21 - Niper Dgn Pembebasan",
        ]);

        KategoriEkspor::create([
            "nama" => "22 -  Niper Dgn Pengembalian",
        ]);

        KategoriEkspor::create([
            "nama" => "23 - KITE dengan Pembebasan dan Pengembalian",
        ]);

        KategoriEkspor::create([
            "nama" => "31 - Khusus Barang Perwakilan Negara Asing",
        ]);

        KategoriEkspor::create([
            "nama" => "32 - Khusus Barang Badan Internasional",
        ]);

        KategoriEkspor::create([
            "nama" => "33 - Khusus Barang Kiriman (Pos atau Jasa Titipan)",
        ]);

        KategoriEkspor::create([
            "nama" => "34 - Khusus Barang Pindahan",
        ]);

        KategoriEkspor::create([
            "nama" => "35 - Khusus Barang Keperluan Umum",
        ]);     
    }
}
