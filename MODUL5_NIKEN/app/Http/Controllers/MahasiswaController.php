<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Dosen;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswas.index', compact('mahasiswas'));
    }

    public function create()
    {
        $dosens = Dosen::all();
        return view('mahasiswas.create', compact('dosens'));
    }

    public function edit($id)
    {

        $mahasiswa = Mahasiswa::findOrFail($id);

        $dosens = Dosen::all();
    
        return view('mahasiswas.edit', compact('mahasiswa', 'dosens'));
    }    


    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswas.show', compact('mahasiswa'));
    }

    public function getCreateForm()
    {
        return view('mahasiswas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required|string|unique:mahasiswas',
            'nama_mahasiswa' => 'required|string|max:255',
            'email' => 'required|email|unique:mahasiswas',
            'jurusan' => 'required|string|max:100',
            'dosen_id' => 'required|exists:dosens,id', 
        ]);

        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa berhasil ditambahkan!');
    }

    public function getEditForm($id)
    {
        $mahasiswa = Mahasiswa::FindOrFail($id);
        return view('mahasiswas.edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required|string|unique:mahasiswas,nim,' . $id,
            'nama_mahasiswa' => 'required|string|max:255',
            'email' => 'required|email|unique:mahasiswas,email,' . $id,
            'jurusan' => 'required|string|max:100',
            'dosen_id' => 'required|exists:dosens,id',  
        ]);

        $mahasiswa = Mahasiswa::FindOrFail($id);
        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::FindOrFail($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa berhasil dihapus!');
    }
}
