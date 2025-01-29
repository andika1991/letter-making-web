@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded p-4">
                <h3 class="mb-4">Tambah Data Surat Keterangan</h3>

                <form action="{{ route('skps.store') }}" method="POST">
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
                        <label for="ttl" class="form-label">Tanggal Lahir</label>
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
                            <option value="L" {{ old('jeniskelam') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ old('jeniskelam') == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jeniskelam')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Agama -->
                    <div class="mb-3">
                        <label for="agama" class="form-label">Agama</label>
                        <input type="text" class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama" value="{{ old('agama') }}" required>
                        @error('agama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Pekerjaan -->
                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') }}" required>
                        @error('pekerjaan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Kewarganegaraan -->
                    <div class="mb-3">
                        <label for="kewarga" class="form-label">Kewarganegaraan</label>
                        <input type="text" class="form-control @error('kewarga') is-invalid @enderror" id="kewarga" name="kewarga" value="{{ old('kewarga') }}" required>
                        @error('kewarga')
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

                    <!-- Tujuan -->
                    <div class="mb-3">
                        <label for="tujuan" class="form-label">Tujuan</label>
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
