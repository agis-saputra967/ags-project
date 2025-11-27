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
        Schema::create('bangunan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_bangunan');
            $table->string('kode_bangunan');
            $table->unsignedInteger('tanah_id');
            $table->foreign('tanah_id')->references('id')->on('tanah')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    Schema::dropIfExists('bangunan');
    }
};
