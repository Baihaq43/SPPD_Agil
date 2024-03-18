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
        Schema::create('tabel_pengajuans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_pengajuan');
            $table->string('tujuan_perjalanan');
            $table->date('lama_perjalanan');
            $table->string('dokumen');
            $table->string('status');
            $table->foreignId('nik')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabel_pengajuans');
    }
};
