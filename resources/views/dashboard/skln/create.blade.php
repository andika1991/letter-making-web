@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded p-4">
                <h3 class="mb-4">Tambah Data Surat Keterangan KeLuar Negeri</h3>

                <form action="{{ route('skln.store') }}" method="POST">
                    @csrf

                    <!-- Nomor Surat -->
                    <div class="mb-3">
                        <label for="nosurat" class="form-label">No Surat</label>
                        <input type="text" class="form-control @error('nosurat') is-invalid @enderror" id="nosurat" name="nosurat" value="{{ old('nosurat') }}" required>
                        @error('nosurat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Nama -->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- NIK -->
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik') }}" required maxlength="16">
                        @error('nik')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Tanggal Lahir -->
                    <div class="mb-3">
                        <label for="ttl" class="form-label">Tempat Tanggal Lahir</label>
                        <input type="text" class="form-control @error('ttl') is-invalid @enderror" id="ttl" name="ttl" value="{{ old('ttl') }}" required>
                        @error('ttl')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Jenis Kelamin -->
                    <div class="mb-3">
                        <label for="jeniskelam" class="form-label">Jenis Kelamin</label>
                        <select class="form-control @error('jeniskelam') is-invalid @enderror" id="jeniskelam" name="jeniskelam" required>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-Laki" {{ old('jeniskelam') == 'Laki-Laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ old('jeniskelam') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jeniskelam')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Alamat -->
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3" required>{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Kondisi -->
                    <div class="mb-3">
                        <label for="kondisi" class="form-label">Kondisi saat ini</label>
                        <input type="text" class="form-control @error('kondisi') is-invalid @enderror" id="kondisi" name="kondisi" value="{{ old('kondisi') }}"
                        placeholder="diLuar Negeri (Taiwan) Selama 6 Tahun" required>
                        @error('kondisi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Tujuan -->
                    <div class="mb-3">
                        <label for="tujuan" class="form-label">Tujuan pembuatan surat</label>
                        <input type="text" class="form-control @error('tujuan') is-invalid @enderror" id="tujuan" name="tujuan" value="{{ old('tujuan') }}" required>
                        @error('tujuan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
