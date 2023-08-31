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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('barangs_id');
            $table->bigInteger('users_id');
            $table->string('phone_number_pms');
            $table->string('alamat_pms');
            $table->string('tgl_pms');
            $table->bigInteger('pembayarans_id');
            $table->string('jumlah_pms');
            $table->string('status_pms');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
