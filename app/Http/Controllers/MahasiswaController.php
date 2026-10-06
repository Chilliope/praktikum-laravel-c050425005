<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        $ujiXss = "<script>alert('XSS')</script>";

        return view('mahasiswa.index', compact('mahasiswa', 'ujiXss'));
    }

    public function create() { return 'create: form tambah mahasiswa'; }
    public function store(Request $request) { return 'store: simpan data baru'; }

    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    public function edit($id) { return "edit: form edit mahasiswa id {$id}"; }
    public function update(Request $request, $id) { return "update: perbarui data id {$id}"; }
    public function destroy($id) { return "destroy: hapus data id {$id}"; }
}

