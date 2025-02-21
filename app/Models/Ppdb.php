<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    protected $fillable = [
        'nama_lengkap', 'nik', 'tempat_tgl_lahir', 'jenis_kelamin', 'agama', 'alamat', 'nomer_hp',
        'nama_ayah_ibu', 'pekerjaan_orang_tua', 'pendidikan_orang_tua', 'alamat_orang_tua',
        'nomor_hp_orang_tua_wali', 'asal_sekolah', 'alamat_sekolah', 'nisn', 'tahun_lulus',
        'nilai_rata_rata', 'pilihan_prodi', 'prestasi_akademik', 'riwayat_kesehatan',
        'foto_akta', 'foto_kartu_keluarga', 'foto_ijazah', 'foto', 'foto_raport'
    ];
}