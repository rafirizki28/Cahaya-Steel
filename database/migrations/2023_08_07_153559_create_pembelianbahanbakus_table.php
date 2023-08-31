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
        Schema::create('pembelianbahanbakus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pbb');
            $table->date('tanggal_pbb');
            $table->string('jumlah_pbb');
            $table->string('harga_pbb');
            $table->string('foto_pbb');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelianbahanbakus');
    }
};
