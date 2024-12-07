@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Detail Mahasiswa</h1>

        <div class="card">
            <div class="card-header">
                <h4>{{ $mahasiswa->nama_mahasiswa }}</h4>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-4"><strong>NIM:</strong></div>
                    <div class="col-md-8">{{ $mahasiswa->nim }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4"><strong>Nama Mahasiswa:</strong></div>
                    <div class="col-md-8">{{ $mahasiswa->nama_mahasiswa }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4"><strong>Email:</strong></div>
                    <div class="col-md-8">{{ $mahasiswa->email }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4"><strong>Jurusan:</strong></div>
                    <div class="col-md-8">{{ $mahasiswa->jurusan }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4"><strong>Dosen Wali:</strong></div>
                    <div class="col-md-8">{{ $mahasiswa->dosen->nama_dosen }}</div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('mahasiswas.index') }}" class="btn btn-secondary">Kembali ke Daftar Mahasiswa</a>
            <a href="{{ route('mahasiswas.edit', $mahasiswa->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
@endsection
