@extends('layouts.app')

@section('judul', 'Daftar Mata Kuliah')

@section('konten')

    <h1>Daftar Mata Kuliah</h1>

    <a href="/matakuliah/create">Tambah Mata Kuliah</a>

    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">

        <thead>
            <tr>
                <th>No</th>
                <th>Kode MK</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Dosen Pengampu</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

            @forelse ($matakuliahs as $mk)

                <tr style="background-color: {{ $loop->even ? '#f2f2f2' : '#ffffff' }};">

                    <td>
                        {{ $loop->iteration }}
                    </td>

                    <td>
                        {{ $mk->kode_mk }}
                    </td>

                    <td>
                        {{ $mk->nama_mk }}
                    </td>

                    <td>
                        {{ $mk->sks }}
                    </td>

                    <td>
                        {{ $mk->semester }}
                    </td>

                    <td>
                        {{ $mk->dosen_pengampu ?? 'Belum tersedia' }}
                    </td>

                    <td>
                        @if ($mk->sks > 3)
                            <strong>SKS Besar</strong>
                        @else
                            -
                        @endif
                    </td>

                    <td>
                        <a href="{{ route('matakuliah.show', $mk->id) }}">
                            Lihat Detail
                        </a>
                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="8">
                        Belum ada data mata kuliah.
                    </td>
                </tr>

            @endforelse

        </tbody>

    </table>

@endsection
