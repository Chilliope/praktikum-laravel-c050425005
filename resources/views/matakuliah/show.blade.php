@extends('layouts.app')

@section('judul', 'Detail Mata Kuliah')

@section('konten')

    <h1>Detail Mata Kuliah</h1>

    <p>
        <strong>Kode MK:</strong>
        {{ $matakuliah->kode_mk }}
    </p>

    <p>
        <strong>Nama Mata Kuliah:</strong>
        {{ $matakuliah->nama_mk }}
    </p>

    <p>
        <strong>SKS:</strong>
        {{ $matakuliah->sks }}
    </p>

    <p>
        <strong>Semester:</strong>
        {{ $matakuliah->semester }}
    </p>

    <p>
        <strong>Dosen Pengampu:</strong>
        {{ $matakuliah->dosen_pengampu ?? 'Belum tersedia' }}
    </p>

    <p>
        <strong>Keterangan:</strong>

        @if ($matakuliah->sks > 3)
            <span>SKS Besar</span>
        @else
            <span>SKS Normal</span>
        @endif
    </p>

    <br>

    <a href="{{ route('matakuliah.index') }}">
        &laquo; Kembali ke Daftar Mata Kuliah
    </a>

@endsection
