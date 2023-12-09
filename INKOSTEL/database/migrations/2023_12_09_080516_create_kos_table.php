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
        Schema::create('kos', function (Blueprint $table) {
            $table->bigIncrements('KosID');
            $table->string('NamaKos');
            $table->decimal('Harga');
            $table->string('alamat');
            $table->string('Jarak');
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
        Schema::dropIfExists('kos');
    }
};
