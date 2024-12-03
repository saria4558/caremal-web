<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('tb_artikel', function (Blueprint $table) {
            // Ubah kolom `status` menjadi ENUM
            $table->enum('artikel_status', ['waiting', 'Disetujui', 'Ditolak'])->default('waiting')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    
     public function down()
    {
        Schema::table('tb_artikel', function (Blueprint $table) {
            // Kembalikan kolom `status` ke tipe string
            $table->string('artikel_status')->default('waiting')->change();
        });
    }
};

