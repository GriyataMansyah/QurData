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
        Schema::create('Superadmin', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('no_hp');
            $table->unsignedBigInteger('id_akun');
            $table->foreign('id_akun')->references('id')->on('Akun')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Superadmin');
    }
};
