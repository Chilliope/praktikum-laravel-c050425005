@extends('layouts.app')

@section('judul', 'Daftar Mahasiswa')

@section('konten')

    <h1>Daftar Mahasiswa</h1>

    <p>Jumlah data: {{ $mahasiswa->count() }}</p>

    @forelse ($mahasiswa as $mhs)

        <p style="background-color: {{ $loop->even ? '#f2f2f2' : '#ffffff' }}; padding: 10px;">

            No: {{ $loop->iteration }} <br>

            NIM: {{ $mhs->nim }} <br>

            Nama: {{ $mhs->nama ?? 'Nama tidak tersedia' }} <br>

            Prodi: {{ $mhs->prodi ?? 'Prodi tidak tersedia' }} <br>

            Semester: {{ $mhs->semester ?? 'Semester tidak tersedia' }} <br>

            Status:
            @switch(true)

                @case($mhs->semester <= 2)
                    <span>Mahasiswa Baru</span>
                    @break

                @case($mhs->semester >= 7)
                    <span>Tingkat Akhir</span>
                    @break

                @default
                    <span>Mahasiswa Aktif</span>

            @endswitch

            <br>

            <a href="{{ route('mahasiswa.show', $mhs->id) }}">
                Lihat Detail
            </a>

        </p>

        <hr>

    @empty

        <p>Belum ada data mahasiswa.</p>

    @endforelse


    <h2>Pengujian XSS</h2>

    <p>Menggunakan Blade Escaped:</p>

    {{ $ujiXss }}

    {{--
    <p>Menggunakan Blade Unescaped:</p>
    {!! $ujiXss !!}
    --}}

@endsection
