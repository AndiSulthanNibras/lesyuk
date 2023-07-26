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
        Schema::create('murid_baru', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('matapelajaran', 100);
            $table->string('alamat', 100);
            $table->string('nohp', 100);
            $table->string('sarana', 100);
            $table->date('tglpsn');
            $table->string('status', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('murid_baru');
    }
};
