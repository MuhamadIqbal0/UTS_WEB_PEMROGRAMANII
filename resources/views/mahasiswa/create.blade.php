@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Mahasiswa</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('mahasiswa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_lengkap" value="{{ old('nama_lengkap') }}">
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" name="nim" value="{{ old('nim') }}">
        </div>

        <div class="mb-3">
            <label for="program_studi" class="form-label">Program Studi</label>
            <select class="form-select" name="program_studi">
                <option value="">-- Pilih --</option>
                <option value="Sistem Informasi" {{ old('program_studi') == 'Sistem Informasi' ? 'selected' : '' }}>Sistem Informasi</option>
                <option value="Teknik Informatika" {{ old('program_studi') == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <input type="text" class="form-control" name="angkatan" value="{{ old('angkatan') }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
    </form>
    <br>
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-secondary d-inline-flex align-items-center gap-1">
    <i class="bi bi-arrow-left-circle"></i> Kembali ke Halaman Utama
</a>
</div>
@endsection
