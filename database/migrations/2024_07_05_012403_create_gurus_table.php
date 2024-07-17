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
        Schema::create('Guru', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin');
            $table->string('no_hp')->nullable();
            $table->unsignedBigInteger('id_akun');
            $table->foreign('id_akun')->references('id')->on('akun')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Guru');
    }
};
