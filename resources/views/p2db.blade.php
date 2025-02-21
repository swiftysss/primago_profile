<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMK TELEKOMUNIKASI TELESANDI BEKASI | P2DB</title>
    <link rel="icon" type="image/png" href="{{ asset('image/tels.png') }}">
    <link rel="stylesheet" href="{{ asset('css/output/index/style-p2db.css') }}">
    <script async src="https://tally.so/widgets/embed.js"></script>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        header {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        header h3 {
            margin: 0;
            font-size: 1.2em;
        }

        #logoutBtn button {
            background: none;
            border: none;
            color: white;
            cursor: pointer;
            font-size: 1em;
        }

        #logoutBtn button:hover {
            text-decoration: underline;
        }

        .sec-utama {
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 60px);
        }

        .form-container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            max-width: 700px;
            width: 100%;
        }

        .form-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form-container label {
            font-weight: bold;
            color: #555;
            margin-top: 10px;
            display: block;
            margin-bottom: 5px;
        }

        .form-container input,
        .form-container select,
        .form-container textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            margin-top: 5px;
        }

        .form-container textarea {
            resize: vertical;
        }

        .form-container button[type="submit"] {
            width: 100%;
            padding: 12px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }

        .form-container button[type="submit"]:hover {
            background: #218838;
        }

        .form-container a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }

        .form-container a:hover {
            text-decoration: underline;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .modal-content button {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .modal-content button#confirmBtn {
            background: #dc3545;
            color: white;
        }

        .modal-content button#confirmBtn:hover {
            background: #c82333;
        }

        .modal-content button#cancelBtn {
            background: #6c757d;
            color: white;
        }

        .modal-content button#cancelBtn:hover {
            background: #5a6268;
        }

        .alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 5px;
}

.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
}
    </style>
</head>
<body>
    <header id="header">
        <h3>Selamat Datang: <span id="textName"></span></h3>
        <div id="logoutBtn">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    </header>

    <!-- Modal Konfirmasi Logout -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <h2>KONFIRMASI</h2>
            <h4>Apakah Anda yakin ingin keluar dari akun ini?</h4>
            <button type="button" id="confirmBtn">Ya</button>
            <button type="button" id="cancelBtn">Batal</button>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
@endif

    <!-- Form Pendaftaran -->
    <section class="sec-utama">
        <div class="form-container">
            <h2>Form Pendaftaran</h2>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <form action="{{ isset($student) ? route('p2db.update', $student->id) : route('p2db.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($student))
                    @method('PUT')
                @endif

                <!-- Input Fields -->
                <label for="nama_lengkap">Nama Lengkap:</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap', $student->nama_lengkap ?? '') }}" required>

                <label for="nik">NIK:</label>
                <input type="number" id="nik" name="nik" value="{{ old('nik', $student->nik ?? '') }}" required>

                <label for="tempat_tgl_lahir">Tempat, Tanggal Lahir:</label>
                <input type="text" id="tempat_tgl_lahir" name="tempat_tgl_lahir" value="{{ old('tempat_tgl_lahir', $student->tempat_tgl_lahir ?? '') }}" required>

                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select id="jenis_kelamin" name="jenis_kelamin" required>
                    <option value="Laki-laki" {{ old('jenis_kelamin', $student->jenis_kelamin ?? '') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ old('jenis_kelamin', $student->jenis_kelamin ?? '') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>

                <label for="agama">Agama:</label>
                <input type="text" id="agama" name="agama" value="{{ old('agama', $student->agama ?? '') }}" required>

                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" required>{{ old('alamat', $student->alamat ?? '') }}</textarea>

                <label for="nomer_hp">Nomor HP:</label>
                <input type="text" id="nomer_hp" name="nomer_hp" value="{{ old('nomer_hp', $student->nomer_hp ?? '') }}" required>

                <label for="nama_ayah_ibu">Nama Ayah/Ibu:</label>
                <input type="text" id="nama_ayah_ibu" name="nama_ayah_ibu" value="{{ old('nama_ayah_ibu', $student->nama_ayah_ibu ?? '') }}" required>

                <label for="pekerjaan_orang_tua">Pekerjaan Orang Tua:</label>
                <input type="text" id="pekerjaan_orang_tua" name="pekerjaan_orang_tua" value="{{ old('pekerjaan_orang_tua', $student->pekerjaan_orang_tua ?? '') }}" required>

                <label for="pendidikan_orang_tua">Pendidikan Orang Tua:</label>
                <input type="text" id="pendidikan_orang_tua" name="pendidikan_orang_tua" value="{{ old('pendidikan_orang_tua', $student->pendidikan_orang_tua ?? '') }}" required>

                <label for="alamat_orang_tua">Alamat Orang Tua:</label>
                <textarea id="alamat_orang_tua" name="alamat_orang_tua" required>{{ old('alamat_orang_tua', $student->alamat_orang_tua ?? '') }}</textarea>

                <label for="nomor_hp_orang_tua_wali">Nomor HP Orang Tua/Wali:</label>
                <input type="text" id="nomor_hp_orang_tua_wali" name="nomor_hp_orang_tua_wali" value="{{ old('nomor_hp_orang_tua_wali', $student->nomor_hp_orang_tua_wali ?? '') }}" required>

                <label for="asal_sekolah">Asal Sekolah:</label>
                <input type="text" id="asal_sekolah" name="asal_sekolah" value="{{ old('asal_sekolah', $student->asal_sekolah ?? '') }}" required>

                <label for="alamat_sekolah">Alamat Sekolah:</label>
                <textarea id="alamat_sekolah" name="alamat_sekolah" required>{{ old('alamat_sekolah', $student->alamat_sekolah ?? '') }}</textarea>

                <label for="nisn">NISN:</label>
                <input type="number" id="nisn" name="nisn" value="{{ old('nisn', $student->nisn ?? '') }}" required>

                <label for="tahun_lulus">Tahun Lulus:</label>
                <input type="number" id="tahun_lulus" name="tahun_lulus" value="{{ old('tahun_lulus', $student->tahun_lulus ?? '') }}" required>

                <label for="nilai_rata_rata">Nilai Rata-rata:</label>
                <input type="number" step="0.01" id="nilai_rata_rata" name="nilai_rata_rata" value="{{ old('nilai_rata_rata', $student->nilai_rata_rata ?? '') }}" required>

                <label for="pilihan_prodi">Pilihan Prodi:</label>
                <input type="text" id="pilihan_prodi" name="pilihan_prodi" value="{{ old('pilihan_prodi', $student->pilihan_prodi ?? '') }}" required>

                <label for="riwayat_kesehatan">Riwayat Kesehatan:</label>
                <textarea id="riwayat_kesehatan" name="riwayat_kesehatan">{{ old('riwayat_kesehatan', $student->riwayat_kesehatan ?? '') }}</textarea>

                <label for="prestasi_akademik">Prestasi Akademik:</label>
                <input type="file" id="prestasi_akademik" name="prestasi_akademik">

                <label for="foto_akta">Foto Akta:</label>
                <input type="file" id="foto_akta" name="foto_akta">
                @if(isset($student) && $student->foto_akta)
                    <img src="{{ asset('storage/' . $student->foto_akta) }}" alt="Foto Akta" width="100" style="margin-top: 10px;">
                @endif

                <label for="foto_kartu_keluarga">Foto Kartu Keluarga:</label>
                <input type="file" id="foto_kartu_keluarga" name="foto_kartu_keluarga">
                @if(isset($student) && $student->foto_kartu_keluarga)
                    <img src="{{ asset('storage/' . $student->foto_kartu_keluarga) }}" alt="Foto KK" width="100" style="margin-top: 10px;">
                @endif

                <label for="foto_ijazah">Foto Ijazah:</label>
                <input type="file" id="foto_ijazah" name="foto_ijazah">
                @if(isset($student) && $student->foto_ijazah)
                    <img src="{{ asset('storage/' . $student->foto_ijazah) }}" alt="Foto Ijazah" width="100" style="margin-top: 10px;">
                @endif

                <label for="foto">Foto:</label>
                <input type="file" id="foto" name="foto">
                @if(isset($student) && $student->foto)
                    <img src="{{ asset('storage/' . $student->foto) }}" alt="Foto" width="100" style="margin-top: 10px;">
                @endif

                <label for="foto_raport">Foto Raport:</label>
                <input type="file" id="foto_raport" name="foto_raport">
                @if(isset($student) && $student->foto_raport)
                    <img src="{{ asset('storage/' . $student->foto_raport) }}" alt="Foto Raport" width="100" style="margin-top: 10px;">
                @endif

                <button type="submit">Simpan</button>
            </form>
            <a href="{{ route('p2db.index') }}">Kembali</a>
        </div>
    </section>

    <script>
        // JavaScript untuk Modal Konfirmasi Logout
        const logoutBtn = document.querySelector('#logoutBtn button');
        const modal = document.getElementById('myModal');
        const confirmBtn = document.getElementById('confirmBtn');
        const cancelBtn = document.getElementById('cancelBtn');

        logoutBtn.addEventListener('click', (e) => {
            e.preventDefault();
            modal.style.display = 'flex';
        });

        confirmBtn.addEventListener('click', () => {
            document.querySelector('#logoutBtn form').submit();
        });

        cancelBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });
    </script>
</body>
</html>