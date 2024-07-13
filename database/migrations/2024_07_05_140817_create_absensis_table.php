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
        Schema::create('Absensi', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('bulan');
            $table->string('minggu1');
            $table->string('minggu2');
            $table->string('minggu3');
            $table->string('minggu4');
            $table->UnsignedBigInteger('id_murid');
            $table->UnsignedBigInteger('id_guru');
            $table->foreign('id_murid')->references('id')->on('Murid')->onDelete('Cascade');
            $table->foreign('id_guru')->references('id')->on('Guru')->onDelete('Cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Absensi');
    }
};
