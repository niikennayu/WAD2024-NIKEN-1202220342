@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="fw-bold">Daftar Dosen</h1>
            <a href="{{ route('dosens.create') }}" class="btn btn-primary">
                <i class="bi bi-person-plus-fill"></i> Tambah Dosen
            </a>
        </div>

        @if($dosens->isEmpty())
            <div class="alert alert-warning text-center">
                <i class="bi bi-exclamation-triangle-fill"></i> Belum ada data dosen yang tersedia.
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-hover table-bordered align-middle">
                    <thead class="table-primary text-center">
                        <tr>
                            <th>#</th>
                            <th>Kode Dosen</th>
                            <th>Nama Dosen</th>
                            <th>NIP</th>
                            <th>Email</th>
                            <th>No. Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dosens as $dosen)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $dosen->kode_dosen }}</td>
                                <td>{{ $dosen->nama_dosen }}</td>
                                <td>{{ $dosen->nip }}</td>
                                <td>{{ $dosen->email }}</td>
                                <td>{{ $dosen->no_telepon }}</td>
                                <td class="text-center">
                                    <a href="{{ route('dosens.show', $dosen->id) }}" class="btn btn-info btn-sm">
                                        <i class="bi bi-eye-fill"></i> Detail
                                    </a>
                                    <a href="{{ route('dosens.edit', $dosen->id) }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <form action="{{ route('dosens.destroy', $dosen->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                            <i class="bi bi-trash-fill"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
@endsection
