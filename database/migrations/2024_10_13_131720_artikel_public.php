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
        Schema::create('tb_artikel', function (Blueprint $table) {
            $table->id();
            $table->string('artikel_image');
            $table->string('artikel_judul');
            $table->String('artikel_deskripsi');
            $table->string('artikel_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_artikel');
    }
};
