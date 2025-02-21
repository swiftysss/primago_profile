<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;
use App\Exports\StudentsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class P2dbController extends Controller{

    public function index()
    {
        $students = Ppdb::all(); 
        return view('p2db', compact('students'));
    }

    public function edit($id)
    {
        $student = Ppdb::findOrFail($id);
        return view('p2db', compact('student'));
    }

    public function list()
    {
        $students = Ppdb::all(); 
        return view('p2dblist', compact('students'));
    }

    public function create()
    {
        return view('p2db'); 
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nik' => 'required|numeric|digits:16',
            'tempat_tgl_lahir' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
            'agama' => 'required|string|max:50',
            'alamat' => 'required|string|max:500',
            'nomer_hp' => 'required|string|regex:/^\d{10,15}$/',
            'nama_ayah_ibu' => 'required|string|max:255',
            'pekerjaan_orang_tua' => 'required|string|max:255',
            'pendidikan_orang_tua' => 'required|string|max:255',
            'alamat_orang_tua' => 'required|string|max:500',
            'nomor_hp_orang_tua_wali' => 'required|string|regex:/^\d{10,15}$/',
            'asal_sekolah' => 'required|string|max:255',
            'alamat_sekolah' => 'required|string|max:500',
            'nisn' => 'required|numeric|digits:10',
            'tahun_lulus' => 'required|numeric|digits:4',
            'nilai_rata_rata' => 'required|numeric|between:0,100',
            'pilihan_prodi' => 'required|string|max:255',
            'riwayat_kesehatan' => 'nullable|string|max:500',
        ]);
    
        $fileFields = ['foto_akta', 'foto_kartu_keluarga', 'foto_ijazah', 'foto', 'foto_raport','prestasi_akademik'];
        foreach ($fileFields as $fileField) {
            if ($request->hasFile($fileField)) {
                $data[$fileField] = $request->file($fileField)->store('uploads', 'public');
            }
        }
    
        Ppdb::create($data);
    
        return redirect()->route('p2db.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function show($id)
    {
        return response()->json(Ppdb::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nik' => 'required|numeric|digits:16',
            'tempat_tgl_lahir' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|in:Laki-laki,Perempuan',
            'agama' => 'required|string|max:50',
            'alamat' => 'required|string|max:500',
            'nomer_hp' => 'required|string|regex:/^\d{10,15}$/',
            'nama_ayah_ibu' => 'required|string|max:255',
            'pekerjaan_orang_tua' => 'required|string|max:255',
            'pendidikan_orang_tua' => 'required|string|max:255',
            'alamat_orang_tua' => 'required|string|max:500',
            'nomor_hp_orang_tua_wali' => 'required|string|regex:/^\d{10,15}$/',
            'asal_sekolah' => 'required|string|max:255',
            'alamat_sekolah' => 'required|string|max:500',
            'nisn' => 'required|numeric|digits:10',
            'tahun_lulus' => 'required|numeric|digits:4',
            'nilai_rata_rata' => 'required|numeric|between:0,100',
            'pilihan_prodi' => 'required|string|max:255',
            'riwayat_kesehatan' => 'nullable|string|max:500',
        ]);

        $ppdb = Ppdb::findOrFail($id);
        $fileFields = ['foto_akta', 'foto_kartu_keluarga', 'foto_ijazah', 'foto', 'foto_raport', 'prestasi_akademik'];
        
        foreach ($fileFields as $fileField) {
            if ($request->hasFile($fileField)) {
                if ($ppdb->$fileField) {
                    Storage::disk('public')->delete($ppdb->$fileField);
                }
                $data[$fileField] = $request->file($fileField)->store('uploads', 'public');
            }
        }

        $ppdb->update($data);

        return redirect()->route('p2db.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $student = Ppdb::findOrFail($id);
        foreach (['foto_akta', 'foto_kartu_keluarga', 'foto_ijazah', 'foto', 'foto_raport'] as $fileField) {
            if ($student->$fileField) {
                Storage::disk('public')->delete($student->$fileField);
            }
        }
        $student->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }

    public function exportCsv()
    {
        $students = Ppdb::all();
        $filename = "data_pendaftaran.csv";
    
        // Membuka file untuk ditulis
        $handle = fopen($filename, 'w');
    
        // Menulis header CSV
        fputcsv($handle, [
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
            'Prestasi Akademik', 
            'Riwayat Kesehatan',
            'Foto Akta', // Menambahkan kolom untuk foto akta
            'Foto Kartu Keluarga', // Menambahkan kolom untuk foto kartu keluarga
            'Foto Ijazah', // Menambahkan kolom untuk foto ijazah
            'Foto', // Menambahkan kolom untuk foto
            'Foto Raport', // Menambahkan kolom untuk foto raport
            'Foto Prestasi Akademik' // Menambahkan kolom untuk foto prestasi akademik
        ]);
    
        // Menulis data siswa ke dalam CSV
        foreach ($students as $student) {
            fputcsv($handle, [
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
                $student->prestasi_akademik, 
                $student->riwayat_kesehatan,
                asset('storage/' . $student->foto_akta), // Menyertakan path foto akta
                asset('storage/' . $student->foto_kartu_keluarga), // Menyertakan path foto kartu keluarga
                asset('storage/' . $student->foto_ijazah), // Menyertakan path foto ijazah
                asset('storage/' . $student->foto), // Menyertakan path foto
                asset('storage/' . $student->foto_raport), // Menyertakan path foto raport
                asset('storage/' . $student->prestasi_akademik) // Menyertakan path foto prestasi akademik
            ]);
        }
    
        // Menutup file
        fclose($handle);
    
        // Mengunduh file CSV
        return response()->download($filename)->deleteFileAfterSend(true);
    }
    public function exportExcel()
{
    return Excel::download(new StudentsExport, 'data_pendaftaran.xlsx');
}
    }
