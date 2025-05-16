<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    /**
     * Menampilkan daftar semua dosen.
     */
    public function index()
    {
        $dosens = Dosen::all();
        return view('Dosen.index', compact('dosens'));
    }

    /**
     * Menampilkan form untuk menambahkan dosen baru.
     */
    public function create()
    {
        return view('Dosen.form');
    }

    /**
     * Menyimpan dosen baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nidn'   => 'required|numeric|unique:dosens,nidn',
            'nama'   => 'required|string',
            'email'  => 'required|email|unique:dosens,email',
            'rumpun' => 'required|string',
            'nohp'   => 'required|string',
        ]);

        $dosen = new Dosen();
        $dosen->nidn   = $request->nidn;
        $dosen->nama   = $request->nama;
        $dosen->email  = $request->email;
        $dosen->rumpun = $request->rumpun;
        $dosen->nohp   = $request->nohp;
        $dosen->save();

        return redirect('/dosen')->with('success', 'Data dosen berhasil ditambahkan!');
    }

    /**
     * Menampilkan data dosen (detail) — belum diimplementasikan.
     */
    public function show(string $id)
    {
        // bisa diisi kalau ingin menampilkan detail dosen
    }

    /**
     * Menampilkan form edit dosen — belum diimplementasikan.
     */
    public function edit(string $id)
    {
        // tampilkan form edit data dosen
    }

    /**
     * Memperbarui data dosen — belum diimplementasikan.
     */
    public function update(Request $request, string $id)
    {
        // proses update data dosen
    }

    /**
     * Menghapus data dosen — belum diimplementasikan.
     */
    public function destroy(string $id)
    {
        // proses hapus data dosen
    }
}
