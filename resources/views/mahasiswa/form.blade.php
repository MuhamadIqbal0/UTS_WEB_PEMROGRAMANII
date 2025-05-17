<div class="mb-3">
    <label>Nama Lengkap</label>
    <input type="text" name="nama" value="{{ old('nama', $mahasiswa->nama ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label>NIM</label>
    <input type="text" name="nim" value="{{ old('nim', $mahasiswa->nim ?? '') }}" class="form-control" required>
</div>

<div class="mb-3">
    <label for="program_studi" class="form-label">Program Studi</label>
    <select name="program_studi" id="program_studi" class="form-select" required>
        <option value="">-- Pilih Program Studi --</option>
        <option value="Sistem Informasi" {{ old('program_studi', $mhs->program_studi ?? '') == 'Sistem Informasi' ? 'selected' : '' }}>Sistem Informasi</option>
        <option value="Teknik Informatika" {{ old('program_studi', $mhs->program_studi ?? '') == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
    </select>
</div>
<div class="mb-3">
    <label>Angkatan</label>
    <input type="number" name="angkatan" value="{{ old('angkatan', $mahasiswa->angkatan ?? '') }}" class="form-control" required>
</div>

@if ($errors->any())
<div class="alert alert-danger mt-3">
    <ul>
        @foreach ($errors->all() as $err)
        <li>{{ $err }}</li>
        @endforeach
    </ul>
</div>
@endif
