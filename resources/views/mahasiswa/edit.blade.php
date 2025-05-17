@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Mahasiswa</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error) <li>{{ $error }}</li> @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_lengkap" value="{{ old('nama_lengkap', $mahasiswa->nama_lengkap) }}">
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" name="nim" value="{{ old('nim', $mahasiswa->nim) }}">
        </div>

        <div class="mb-3">
            <label for="program_studi" class="form-label">Program Studi</label>
            <select class="form-select" name="program_studi">
                <option value="Sistem Informasi" {{ $mahasiswa->program_studi == 'Sistem Informasi' ? 'selected' : '' }}>Sistem Informasi</option>
                <option value="Teknik Informatika" {{ $mahasiswa->program_studi == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="angkatan" class="form-label">Angkatan</label>
            <input type="text" class="form-control" name="angkatan" value="{{ old('angkatan', $mahasiswa->angkatan) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
    </form>
    <br>
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-secondary d-inline-flex align-items-center gap-1">
    <i class="bi bi-arrow-left-circle"></i> Kembali ke Halaman Utama
</div>
@endsection
