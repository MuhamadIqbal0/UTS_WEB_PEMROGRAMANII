@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Mahasiswa</h2>

    <div class="card">
    <div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Detail Mahasiswa</h5>
    </div>
    <div class="card-body">
        <div class="row mb-2">
            <div class="col-md-4 fw-bold">Nama</div>
            <div class="col-md-8">{{ $mahasiswa->nama_lengkap }}</div>
        </div>
        <div class="row mb-2">
            <div class="col-md-4 fw-bold">NIM</div>
            <div class="col-md-8">{{ $mahasiswa->nim }}</div>
        </div>
        <div class="row mb-2">
            <div class="col-md-4 fw-bold">Program Studi</div>
            <div class="col-md-8">{{ $mahasiswa->program_studi }}</div>
        </div>
        <div class="row mb-2">
            <div class="col-md-4 fw-bold">Angkatan</div>
            <div class="col-md-8">{{ $mahasiswa->angkatan }}</div>
        </div>
    </div>
</div>

    </div>

    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    <br>
    <br>
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-secondary d-inline-flex align-items-center gap-1">
    <i class="bi bi-arrow-left-circle"></i> Kembali ke Halaman Utama
</div>
@endsection
