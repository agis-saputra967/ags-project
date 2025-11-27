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
        Schema::create('ruangan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_ruangan');
            $table->string('kode_ruangan');
            $table->unsignedInteger('bangunan_id');
            $table->foreign('bangunan_id')->references('id')->on('bangunan')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    Schema::dropIfExists('ruangan');
    }
};
