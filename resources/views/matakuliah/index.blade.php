<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Mata Kuliah</title>
</head>
<body>

    <h1>Daftar Mata Kuliah</h1>

    <a href="/matakuliah/create">Tambah Mata Kuliah</a>

    <br><br>

    <table border="1" cellpadding="8">
        <tr>
            <th>Kode MK</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Dosen Pengampu</th>
        </tr>

        @foreach ($matakuliahs as $mk)
            <tr>
                <td>{{ $mk->kode_mk }}</td>
                <td>{{ $mk->nama_mk }}</td>
                <td>{{ $mk->sks }}</td>
                <td>{{ $mk->semester }}</td>
                <td>{{ $mk->dosen?->name ?? 'Belum ditentukan' }}</td>
            </tr>
        @endforeach

    </table>

</body>
</html>
