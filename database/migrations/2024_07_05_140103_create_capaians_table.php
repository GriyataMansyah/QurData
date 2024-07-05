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
        Schema::create('Capaian', function (Blueprint $table) {
            $table->id();
            $table->string('nama_indikator');
            $table->string('status');
            $table->string('keterangan');
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
        Schema::dropIfExists('Capaian');
    }
};
