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
        Schema::create('postings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan');
            $table->string('bidang_usaha');
            $table->string('lowongan_pekerjaan');
            $table->date('tanggal_posting');
            $table->date('tanggal_deadline');
            $table->text('deskripsi');
            $table->text('lokasi');
            $table->enum('status',['Pending','Dikonfirmasi'])->default('Pending');
            $table->text('foto');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postings');
    }
};
