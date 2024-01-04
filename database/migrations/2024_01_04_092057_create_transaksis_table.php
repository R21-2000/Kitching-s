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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id('idtransaksi');
            $table->unsignedBigInteger('idpesanan');
            $table->integer('Total');
            $table->integer('Bayar');
            $table->timestamps();

            $table->foreign('idpesanan')->references('idpesanan')->on('pesanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
