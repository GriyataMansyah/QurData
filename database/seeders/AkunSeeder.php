<?php

namespace Database\Seeders;

use App\Models\Akun;
use App\Models\Guru;
use App\Models\Admin;
use App\Models\Murid;
use App\Models\Superadmin;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Membuat akun khusus untuk superadmin, admin, dan guru
        $superadmin = Akun::create([
            'username' => 'superadmin',
            'password' => Hash::make('superadmin'),
            'role' => 'superadmin',
        ]);

        $admin = Akun::create([
            'username' => 'petugas',
            'password' => Hash::make('petugas'),
            'role' => 'admin',
        ]);

        $guru = Akun::create([
            'username' => 'ekspor',
            'password' => Hash::make('ekspor'),
            'role' => 'guru',
        ]);

        // Membuat data untuk superadmin, admin, dan guru
        Superadmin::create([
            'nama' => 'Superadmin',
            'nik' => '0000420230435300',
            'tanggal_lahir' => '2004-01-01',
            'jenis_kelamin' =>'Laki - Laki',
            'no_hp' => '081354174808',
            'id_akun' => $superadmin->id,
        ]);

        Admin::create([
            'nama' => 'Admin',
            'nik' => '0000420230435388',
            'tanggal_lahir' => '2005-01-01',
            'jenis_kelamin' =>'Laki - Laki',
            'no_hp' => '081354123538',
            'id_akun' => $admin->id,
        ]);

        Guru::create([
            'nama' => 'Guru',
            'nik' => '0000420230435336',
            'tanggal_lahir' => '2006-01-01',
            'jenis_kelamin' =>'Perempuan',
            'no_hp' => '087254728424',
            'id_akun' => $guru->id,
        ]);

        // Membuat 10 akun tambahan untuk Admin dan guru
        for ($i = 0; $i < 10; $i++) {
            $akunAdmin = Akun::create([
                'username' => $faker->userName,
                'password' => Hash::make('password'),
                'role' => 'admin',
            ]);

            Admin::create([
                'nama' => $faker->name,
                'nik' => $faker->unique()->numerify('00004202304353##'),
                'tanggal_lahir' => $faker->date,
                'jenis_kelamin' => $faker->randomElement(['Laki - Laki', 'Perempuan']),
                'no_hp' => $faker->phoneNumber,
                'id_akun' => $akunAdmin->id,
            ]);

            $akunGuru = Akun::create([
                'username' => $faker->userName,
                'password' => Hash::make('password'),
                'role' => 'guru',
            ]);

            Guru::create([
                'nama' => $faker->name,
                'nik' => $faker->unique()->numerify('00004202304353##'),
                'tanggal_lahir' => $faker->date,
                'jenis_kelamin' => $faker->randomElement(['Laki - Laki', 'Perempuan']),
                'no_hp' => $faker->phoneNumber,
                'id_akun' => $akunGuru->id,
            ]);
        }

        // Membuat Data Murid Sebanyak 10
        for ($i = 0; $i < 10; $i++) {
            Murid::create([
                'nama' => $faker->name,
                'nik' => $faker->unique()->numerify('00004202304353##'),
                'tanggal_lahir' => $faker->date,
                'jenis_kelamin' => $faker->randomElement(['Laki - Laki', 'Perempuan']),
                'no_hp' => $faker->phoneNumber,
                'id_guru' => '1',
            ]);
        }
    }
}