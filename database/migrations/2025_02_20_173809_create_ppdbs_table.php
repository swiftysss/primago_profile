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
        Schema::create('ppdbs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->bigInteger('nik');
            $table->string('tempat_tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->text('alamat');
            $table->bigInteger('nomer_hp');
            $table->string('nama_ayah_ibu');
            $table->string('pekerjaan_orang_tua');
            $table->string('pendidikan_orang_tua');
            $table->text('alamat_orang_tua');
            $table->string('nomor_hp_orang_tua_wali');
            $table->string('asal_sekolah');
            $table->text('alamat_sekolah');
            $table->bigInteger('nisn');
            $table->string('tahun_lulus');
            $table->decimal('nilai_rata_rata', 5, 2);
            $table->string('pilihan_prodi');
            $table->text('prestasi_akademik')->nullable();
            $table->text('riwayat_kesehatan')->nullable();
            $table->string('foto_akta');
            $table->string('foto_kartu_keluarga');
            $table->string('foto_ijazah');
            $table->string('foto');
            $table->string('foto_raport');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppdbs');
    }
};