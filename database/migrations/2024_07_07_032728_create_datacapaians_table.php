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
        Schema::create('Datacapaian', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->UnsignedBigInteger('admin_id');
            $table->foreign('admin_id')->references('id')->on('Admin')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Datacapaian');
    }
};
