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
        Schema::create('kantor_muat_asal', function (Blueprint $table) {
            $table->increments("id");
            $table->string("nama");
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('kantor_muat_asal');
    }
};
