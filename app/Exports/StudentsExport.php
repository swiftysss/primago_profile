<?php

namespace App\Exports;

use App\Models\Ppdb;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

class StudentsExport implements FromCollection, WithHeadings, WithMapping, WithDrawings
{
    public function collection()
    {
        return Ppdb::all();
    }

    public function headings(): array
    {
        return [
            'Nama Lengkap',
            'NIK',
            'Tempat Tanggal Lahir',
            'Jenis Kelamin',
            'Agama',
            'Alamat',
            'Nomor HP',
            'Nama Ayah/Ibu',
            'Pekerjaan Orang Tua',
            'Pendidikan Orang Tua',
            'Alamat Orang Tua',
            'Nomor HP Orang Tua/Wali',
            'Asal Sekolah',
            'Alamat Sekolah',
            'NISN',
            'Tahun Lulus',
            'Nilai Rata-rata',
            'Pilihan Prodi',
            'Riwayat Kesehatan',
            'Foto Akta',
            'Foto Kartu Keluarga',
            'Foto Ijazah',
            'Foto',
            'Foto Raport',
            'Foto Prestasi Akademik',
        ];
    }

    public function map($student): array
    {
        return [
            $student->nama_lengkap,
            $student->nik,
            $student->tempat_tgl_lahir,
            $student->jenis_kelamin,
            $student->agama,
            $student->alamat,
            $student->nomer_hp,
            $student->nama_ayah_ibu,
            $student->pekerjaan_orang_tua,
            $student->pendidikan_orang_tua,
            $student->alamat_orang_tua,
            $student->nomor_hp_orang_tua_wali,
            $student->asal_sekolah,
            $student->alamat_sekolah,
            $student->nisn,
            $student->tahun_lulus,
            number_format($student->nilai_rata_rata, 2), // Format nilai rata-rata
            $student->pilihan_prodi,
            $student->riwayat_kesehatan,
            // Kembalikan nilai kosong untuk kolom "Prestasi Akademik"
            '', // Kosongkan untuk kolom Prestasi Akademik
        ];
    }

    public function drawings()
    {
        $drawings = [];
        $students = Ppdb::all();
        $row = 2; // Mulai dari baris kedua (baris pertama adalah header)
    
        foreach ($students as $student) {
            // Menyisipkan gambar untuk setiap siswa
            $fileFields = [
                'foto_akta',
                'foto_kartu_keluarga',
                'foto_ijazah',
                'foto',
                'foto_raport',
                'prestasi_akademik'
            ];
    
            foreach ($fileFields as $index => $fileField) {
                if ($student->$fileField) {
                    $drawing = new Drawing();
                    $drawing->setName($fileField);
                    $drawing->setDescription($fileField);
                    $drawing->setPath(public_path('storage/' . $student->$fileField)); // Path ke gambar
                    $drawing->setHeight(50); // Atur tinggi gambar
    
                    // Mengatur koordinat sel untuk gambar
                    // Kolom T adalah kolom ke-20, U adalah kolom ke-21, V adalah kolom ke-22, dst.
                    $column = chr(84 + $index); // Kolom T (84) + index
                    if ($index >= 1) { // Jika index >= 1, tambahkan 1 untuk melewatkan kolom T
                        $column++;
                    }
                    $drawing->setCoordinates($column . $row); // Atur koordinat sel untuk gambar
                    $drawings[] = $drawing;
                }
            }
            $row++; // Pindah ke baris berikutnya
        }
    
        return $drawings;
    }
}