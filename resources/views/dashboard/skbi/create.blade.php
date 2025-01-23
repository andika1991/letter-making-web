@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded p-4">
                <h3 class="mb-4">Tambah Data Surat Keterangan</h3>

                <form action="{{ route('skbi.store') }}" method="POST">
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
                        <input type="date" class="form-control @error('ttl') is-invalid @enderror" id="ttl" name="ttl" value="{{ old('ttl') }}" required>
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

                    <!-- Pekerjaan -->
                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') }}" required>
                        @error('pekerjaan')
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

                    <!-- Alamat -->
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3" required>{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Nama Anggota -->
                    <div class="mb-3">
                        <label for="nama_anggota" class="form-label">Nama Anggota</label>
                        <input type="text" class="form-control @error('nama_anggota') is-invalid @enderror" id="nama_anggota" name="nama_anggota" value="{{ old('nama_anggota') }}" required>
                        @error('nama_anggota')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Nomor Kartu Identitas -->
                    <div class="mb-3">
                        <label for="nohkms" class="form-label">Nomor Kartu Identitas</label>
                        <input type="text" class="form-control @error('nohkms') is-invalid @enderror" id="nohkms" name="nohkms" value="{{ old('nohkms') }}" required>
                        @error('nohkms')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Jenis Kelamin Anggota -->
                    <div class="mb-3">
                        <label for="jeniskelamin_anggota" class="form-label">Jenis Kelamin Anggota</label>
                        <select class="form-control @error('jeniskelamin_anggota') is-invalid @enderror" id="jeniskelamin_anggota" name="jeniskelamin_anggota" required>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="L" {{ old('jeniskelamin_anggota') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ old('jeniskelamin_anggota') == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jeniskelamin_anggota')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Alamat Anggota -->
                    <div class="mb-3">
                        <label for="alamat_anggota" class="form-label">Alamat Anggota</label>
                        <textarea class="form-control @error('alamat_anggota') is-invalid @enderror" id="alamat_anggota" name="alamat_anggota" rows="3" required>{{ old('alamat_anggota') }}</textarea>
                        @error('alamat_anggota')
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
