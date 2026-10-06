<!DOCTYPE html>
<html>

<head>
    <title>Halaman Sapa</title>
</head>

<body>
    <h1>Halo, {{ $nama }}!</h1>
    <p>Selamat datang di aplikasi Laravel.</p>

    {{-- komentar Blade --}}
    @php
    $tahunSekarang = date('Y');
    @endphp

    <p>Tahun sekarang: {{ $tahunSekarang }}</p>
    <p>Julukan: {{ $julukan ?? 'Belum ada julukan' }}</p>

    <p>Escaped: {{ $kontenHtml }}</p>
    <p>Tidak di-escape: {!! $kontenHtml !!}</p>

</body>

</html>
