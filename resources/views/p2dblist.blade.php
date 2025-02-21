<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pendaftaran</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px;">
    <div style="max-width: 1200px; background: white; padding: 30px; margin: auto; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1);">
        <h2 style="text-align: center; color: #333; margin-bottom: 20px;">Data Pendaftaran</h2>
        <div style="text-align: center; margin-top: 20px;">
            <a href="{{ route('p2db.exportCsv') }}" style="padding: 10px 20px; background: #17a2b8; color: white; text-decoration: none; border-radius: 5px; font-size: 14px;">Download CSV</a>
        </div>
        <div style="text-align: center; margin-top: 20px;">
            <a href="{{ route('p2db.exportExcel') }}" style="padding: 10px 20px; background: green; color: white; text-decoration: none; border-radius: 5px; font-size: 14px;">Download Excel</a>
        </div>
        
        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background-color: #28a745; color: white;">
                    <th style="padding: 12px; text-align: left; border: 1px solid #ddd;">No</th>
                    <th style="padding: 12px; text-align: left; border: 1px solid #ddd;">Nama Lengkap</th>
                    <th style="padding: 12px; text-align: left; border: 1px solid #ddd;">NIK</th>
                    <th style="padding: 12px; text-align: left; border: 1px solid #ddd;">Jenis Kelamin</th>
                    <th style="padding: 12px; text-align: left; border: 1px solid #ddd;">Agama</th>
                    <th style="padding: 12px; text-align: left; border: 1px solid #ddd;">Alamat</th>
                    <th style="padding: 12px; text-align: left; border: 1px solid #ddd;">Nomor HP</th>
                    <th style="padding: 12px; text-align: left; border: 1px solid #ddd;">Asal Sekolah</th>
                    <th style="padding: 12px; text-align: left; border: 1px solid #ddd;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $index => $student)
                <tr style="border-bottom: 1px solid #ddd;">
                    <td style="padding: 12px; border: 1px solid #ddd;">{{ $index + 1 }}</td>
                    <td style="padding: 12px; border: 1px solid #ddd;">{{ $student->nama_lengkap }}</td>
                    <td style="padding: 12px; border: 1px solid #ddd;">{{ $student->nik }}</td>
                    <td style="padding: 12px; border: 1px solid #ddd;">{{ $student->jenis_kelamin }}</td>
                    <td style="padding: 12px; border: 1px solid #ddd;">{{ $student->agama }}</td>
                    <td style="padding: 12px; border: 1px solid #ddd;">{{ $student->alamat }}</td>
                    <td style="padding: 12px; border: 1px solid #ddd;">{{ $student->nomer_hp }}</td>
                    <td style="padding: 12px; border: 1px solid #ddd;">{{ $student->asal_sekolah }}</td>
                    <td style="padding: 12px; border: 1px solid #ddd;">
                        <a href="{{ route('p2db.edit', $student->id) }}" style="padding: 5px 10px; background: #007bff; color: white; text-decoration: none; border-radius: 5px; margin-right: 5px;">Edit</a>
                        <form action="{{ route('p2db.destroy', $student->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="padding: 5px 10px; background: #dc3545; color: white; border: none; border-radius: 5px; cursor: pointer;">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div style="text-align: center; margin-top: 20px;">
            <a href="{{ route('p2db.create') }}" style="padding: 10px 20px; background: #28a745; color: white; text-decoration: none; border-radius: 5px; font-size: 14px;">Tambah Data Baru</a>
        </div>
    </div>
</body>
</html>