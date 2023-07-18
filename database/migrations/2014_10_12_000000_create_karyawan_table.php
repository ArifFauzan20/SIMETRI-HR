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
        Schema::create('t_karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nik')->unique();
            $table->string('nama');
            $table->string('jabatan')->nullable();
            $table->string('divisi')->nullable();
            $table->string('company')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('domisili')->nullable();
            $table->string('masa_kerja')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('nik_ktp')->nullable();
            $table->string('email')->nullable();
            $table->string('status_pernikahan')->nullable();
            $table->string('jumlah_anak')->nullable();
            $table->string('no_bpjs')->nullable();
            $table->string('no_hpkeluarga')->nullable();
            $table->string('KK')->nullable();
            $table->string('profile_photo')->nullable();
            $table->text('riwaya_penyakit')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_karyawan');
    }
};
