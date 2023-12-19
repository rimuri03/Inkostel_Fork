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
            $table->bigIncrements('id_kos');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nama_kos');
            $table->decimal('harga_kos');
            $table->integer('jarak_kos');
            $table->string('gambar_kos');
            $table->string('alamat');
            $table->string('Deskripsi');
            $table->string('Fasilitas')->nullable();
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
