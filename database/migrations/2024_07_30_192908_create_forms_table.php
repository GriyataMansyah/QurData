<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('form', function (Blueprint $table) {
            $table->id(); // Kolom ID utama
            $table->string('nomor')->nullable(); // Kolom nomor, bisa null
            $table->string('kantor_pabean_muat_asal')->nullable(); // Kolom kantor pabean muat asal, bisa null
            $table->string('pelabuhan_muat_ekspor')->nullable(); // Kolom pelabuhan muat ekspor, bisa null
            $table->string('kantor_pabean_muat_ekspor')->nullable(); // Kolom kantor pabean muat ekspor, bisa null
            $table->string('jenis_ekspor')->nullable(); // Kolom jenis ekspor, bisa null
            $table->string('kategori')->nullable(); // Kolom kategori, bisa null
            $table->string('cara_dagang')->nullable(); // Kolom cara dagang, bisa null
            $table->string('cara_bayar')->nullable(); // Kolom cara bayar, bisa null
            $table->string('komoditi')->nullable(); // Kolom komoditi, bisa null
            $table->string('curah')->nullable(); // Kolom curah, bisa null
        
            $table->string('nama_eksportir')->nullable(); // Kolom nama eksportir, bisa null
            $table->string('alamat_eksportir')->nullable(); // Kolom alamat eksportir, bisa null
            $table->string('nama_penerima')->nullable(); // Kolom nama penerima, bisa null
            $table->string('alamat_penerima')->nullable(); // Kolom alamat penerima, bisa null
            $table->string('nama_pembeli')->nullable(); // Kolom nama pembeli, bisa null
            $table->string('alamat_pembeli')->nullable(); // Kolom alamat pembeli, bisa null
        
            $table->string('seri_kemasan')->nullable(); // Kolom seri kemasan, bisa null
            $table->integer('jumlah_kemasan')->nullable(); // Kolom jumlah kemasan, bisa null
            $table->string('jenis_kemasan')->nullable(); // Kolom jenis kemasan, bisa null
            $table->string('merek_kemasan')->nullable(); // Kolom merek kemasan, bisa null
            $table->string('ukuran_peti_kemas')->nullable(); // Kolom ukuran peti kemas, bisa null
            $table->string('jenis_peti_kemas')->nullable(); // Kolom jenis peti kemas, bisa null
            $table->string('type_peti_kemas')->nullable(); // Kolom type peti kemas, bisa null
        
            $table->string('valuta')->nullable(); // Kolom valuta, bisa null
            $table->string('ndpmb')->nullable(); // Kolom ndpmb, bisa null
            $table->string('cara_penyerahan')->nullable(); // Kolom cara penyerahan, bisa null
            $table->string('nilai_ekspor')->nullable(); // Kolom nilai ekspor, bisa null
            $table->string('freight')->nullable(); // Kolom freight, bisa null
            $table->string('asuransi')->nullable(); // Kolom asuransi, bisa null
            $table->string('nilai_maklan')->nullable(); // Kolom nilai maklan, bisa null
            $table->string('nilai_bea_keluar')->nullable(); // Kolom nilai bea keluar, bisa null
        
            $table->string('hs')->nullable(); // Kolom hs, bisa null
            $table->string('lartas')->nullable(); // Kolom lartas, bisa null
            $table->string('kode')->nullable(); // Kolom kode, bisa null
            $table->text('uraian')->nullable(); // Kolom uraian, bisa null
            $table->string('mark')->nullable(); // Kolom mark, bisa null
            $table->string('tipe')->nullable(); // Kolom tipe, bisa null
            $table->string('negara_asal_barang')->nullable(); // Kolom negara asal barang, bisa null
            $table->string('harga_fob')->nullable(); // Kolom harga fob, bisa null
            $table->string('volume_barang')->nullable(); // Kolom volume barang, bisa null
            $table->string('berat_bersih')->nullable(); // Kolom berat bersih, bisa null
            $table->string('berat_kotor')->nullable(); // Kolom berat kotor, bisa null
            $table->string('harga_satuan_fob')->nullable(); // Kolom harga satuan fob, bisa null
        
            $table->string('tempat_penerima')->nullable(); // Kolom tempat penerima, bisa null
            $table->date('tanggal')->nullable(); // Kolom tanggal, bisa null
            $table->string('nama')->nullable(); // Kolom nama, bisa null
            $table->string('jabatan')->nullable(); // Kolom jabatan, bisa null
        
            $table->unsignedBigInteger('id_guru')->nullable(); // Kolom id_guru bisa null
            $table->foreign('id_guru')->references('id')->on('Guru')->onDelete('cascade');
        
            $table->timestamps(); // Kolom timestamps
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Form');
    }
};
