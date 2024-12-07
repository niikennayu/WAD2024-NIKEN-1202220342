@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Detail Dosen</h1>

        <div class="card">
            <div class="card-header">
                <h4>{{ $dosen->nama_dosen }}</h4>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-4"><strong>Kode Dosen:</strong></div>
                    <div class="col-md-8">{{ $dosen->kode_dosen }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4"><strong>NIP:</strong></div>
                    <div class="col-md-8">{{ $dosen->nip }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4"><strong>Email:</strong></div>
                    <div class="col-md-8">{{ $dosen->email }}</div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4"><strong>No. Telepon:</strong></div>
                    <div class="col-md-8">{{ $dosen->no_telepon }}</div>
                </div>
                <!-- Add other fields as needed -->
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('dosens.index') }}" class="btn btn-secondary">Kembali ke Daftar Dosen</a>
            <a href="{{ route('dosens.edit', $dosen->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
@endsection
