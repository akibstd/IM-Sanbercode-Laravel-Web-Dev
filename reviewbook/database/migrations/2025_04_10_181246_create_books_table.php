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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->string('title');
            $table->text('summary');
            $table->string('image');
            $table->integer('stock');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('user');

            $table->unsignedBigInteger('genre_id');
            $table->foreign('genre_id')->references('id')->on('genres');
         ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
