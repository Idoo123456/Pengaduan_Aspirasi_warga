<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kategori_pengaduan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('sla_hari');
            $table->string('prioritas');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kategori_pengaduans');
    }
};
