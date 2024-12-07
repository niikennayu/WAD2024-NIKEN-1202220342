@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold">Selamat Datang!</h1>
            <p class="lead">Pilih salah satu menu di bawah untuk melanjutkan.</p>
        </div>

        <div class="row justify-content-center">
            <!-- Card untuk Daftar Mahasiswa -->
            <div class="col-md-5 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title mb-3">Daftar Mahasiswa</h5>
                        <p class="card-text">Lihat dan kelola daftar mahasiswa yang terdaftar.</p>
                        <a href="{{ route('mahasiswas.index') }}" class="btn btn-primary">
                            <i class="bi bi-person-lines-fill"></i> Lihat Daftar Mahasiswa
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card untuk Daftar Dosen -->
            <div class="col-md-5 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title mb-3">Daftar Dosen</h5>
                        <p class="card-text">Lihat dan kelola daftar dosen yang tersedia.</p>
                        <a href="{{ route('dosens.index') }}" class="btn btn-success">
                            <i class="bi bi-person-check-fill"></i> Lihat Daftar Dosen
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
