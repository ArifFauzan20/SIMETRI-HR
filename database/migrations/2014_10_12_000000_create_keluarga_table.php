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
        Schema::create('t_keluarga', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_karyawan');
            $table->string('nama_anggota');
            $table->string('jenis_kelamin')->nullable();
            $table->string('hubungan_keluarga')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->string('KIA')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_keluarga');
    }
};
