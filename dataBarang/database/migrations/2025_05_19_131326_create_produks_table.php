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
        //sintak di bawah ini untuk membuat table produk
        Schema::create('tb_produk', function (Blueprint $table) {
            $table->id('id_produk');
            $table->string('nama_produk',255);
            $table->integer('harga',);
            $table->text('deskripsi_produk');
            $table->integer('kategori_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
