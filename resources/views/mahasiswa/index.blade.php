@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Daftar Mahasiswa</h2>

    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">Tambah Mahasiswa</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Program Studi</th>
                    <th>Angkatan</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data as $mhs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mhs->nama_lengkap }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->program_studi }}</td>
                    <td>{{ $mhs->angkatan }}</td>
                    <td class="text-center">
                        <a href="{{ route('mahasiswa.show', $mhs->id) }}" class="btn btn-info btn-sm">Lihat</a>
                        <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin ingin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data mahasiswa.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection