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
        Schema::create('carikos', function (Blueprint $table) {
            $table->bigIncrements('id_kos');
            $table->string('nama_kos');
            $table->decimal('harga_kos');
            $table->integer('jarak_kos');
            $table->string('gambar_kos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carikos');
    }
};
