<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Kuliah</title>
</head>
<body>

    <h1>Tambah Mata Kuliah</h1>

    <form action="/matakuliah" method="POST">
        @csrf

        <div>
            <label for="kode_mk">Kode Mata Kuliah</label><br>
            <input type="text" id="kode_mk" name="kode_mk" required>
        </div>

        <br>

        <div>
            <label for="nama_mk">Nama Mata Kuliah</label><br>
            <input type="text" id="nama_mk" name="nama_mk" required>
        </div>

        <br>

        <div>
            <label for="sks">SKS</label><br>
            <input type="number" id="sks" name="sks" min="1" max="4" required>
        </div>

        <br>

        <div>
            <label for="semester">Semester</label><br>
            <input type="number" id="semester" name="semester" min="1" max="8" required>
        </div>

        <br>

        <div>
            <label for="dosen_id">Dosen Pengampu</label><br>
            <select id="dosen_id" name="dosen_id" required>
                <option value="">-- Pilih Dosen --</option>

                @foreach ($dosens as $dosen)
                    <option value="{{ $dosen->id }}">
                        {{ $dosen->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <br>

        <button type="submit">Simpan</button>
    </form>

    <br>

    <a href="/matakuliah">Kembali</a>

</body>
</html>
