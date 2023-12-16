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
        Schema::create('validation', function (Blueprint $table) {
            $table->string('nama_kos');
            $table->decimal('harga_kos');
            $table->integer('jarak_kos');
            $table->mediumText('gambar_kos');
            $table->string('alamat');
            $table->string('jarak');
            $table->string('Deskripsi');
            $table->string('Fasilitas');
            $table->string('ContactPerson');
            $table->integer('KamarKosong');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validation');
    }
};
