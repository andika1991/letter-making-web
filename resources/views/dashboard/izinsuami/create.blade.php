@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded p-4">
                <h3 class="mb-4">Tambah Data Surat Izin Suami</h3>

                <form action="{{ route('izinsuami.store') }}" method="POST">
                    @csrf

                    <!-- Nomor Surat -->
                    <div class="mb-3">
                        <label for="nosurat" class="form-label">Nomor Surat</label>
                        <input type="text" class="form-control @error('nosurat') is-invalid @enderror" id="nosurat" name="nosurat" value="{{ old('nosurat') }}" required>
                        @error('nosurat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Data Suami -->
                    <h5>Data Suami</h5>
                    <div class="mb-3">
                        <label for="namasuami" class="form-label">Nama Suami</label>
                        <input type="text" class="form-control @error('namasuami') is-invalid @enderror" id="namasuami" name="namasuami" value="{{ old('namasuami') }}" required>
                        @error('namasuami')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="ttlsuami" class="form-label">Tanggal Lahir Suami</label>
                        <input type="text" class="form-control @error('ttlsuami') is-invalid @enderror" id="ttlsuami" name="ttlsuami" value="{{ old('ttlsuami') }}" required>
                        @error('ttlsuami')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="niksuami" class="form-label">NIK Suami</label>
                        <input type="text" class="form-control @error('niksuami') is-invalid @enderror" id="niksuami" name="niksuami" value="{{ old('niksuami') }}" required maxlength="16">
                        @error('niksuami')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jeniskelamsuami" class="form-label">Jenis Kelamin Suami</label>
                        <select class="form-control @error('jeniskelamsuami') is-invalid @enderror" id="jeniskelamsuami" name="jeniskelamsuami" required>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="L" {{ old('jeniskelamsuami') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ old('jeniskelamsuami') == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jeniskelamsuami')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="agamasuami" class="form-label">Agama Suami</label>
                        <input type="text" class="form-control @error('agamasuami') is-invalid @enderror" id="agamasuami" name="agamasuami" value="{{ old('agamasuami') }}" required>
                        @error('agamasuami')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaansuami" class="form-label">Pekerjaan Suami</label>
                        <input type="text" class="form-control @error('pekerjaansuami') is-invalid @enderror" id="pekerjaansuami" name="pekerjaansuami" value="{{ old('pekerjaansuami') }}">
                        @error('pekerjaansuami')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamatsuami" class="form-label">Alamat Suami</label>
                        <textarea class="form-control @error('alamatsuami') is-invalid @enderror" id="alamatsuami" name="alamatsuami" rows="3" required>{{ old('alamatsuami') }}</textarea>
                        @error('alamatsuami')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Data Istri -->
                    <h5>Data Istri</h5>
                    <div class="mb-3">
                        <label for="namaistri" class="form-label">Nama Istri</label>
                        <input type="text" class="form-control @error('namaistri') is-invalid @enderror" id="namaistri" name="namaistri" value="{{ old('namaistri') }}" required>
                        @error('namaistri')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="ttlistri" class="form-label">Tanggal Lahir Istri</label>
                        <input type="text" class="form-control @error('ttlistri') is-invalid @enderror" id="ttlistri" name="ttlistri" value="{{ old('ttlistri') }}" required>
                        @error('ttlistri')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nikistri" class="form-label">NIK Istri</label>
                        <input type="text" class="form-control @error('nikistri') is-invalid @enderror" id="nikistri" name="nikistri" value="{{ old('nikistri') }}" required maxlength="16">
                        @error('nikistri')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jeniskelamistri" class="form-label">Jenis Kelamin Istri</label>
                        <select class="form-control @error('jeniskelamistri') is-invalid @enderror" id="jeniskelamistri" name="jeniskelamistri" required>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="L" {{ old('jeniskelamistri') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ old('jeniskelamistri') == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jeniskelamistri')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="agamaistri" class="form-label">Agama Istri</label>
                        <input type="text" class="form-control @error('agamaistri') is-invalid @enderror" id="agamaistri" name="agamaistri" value="{{ old('agamaistri') }}" required>
                        @error('agamaistri')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaanistri" class="form-label">Pekerjaan Istri</label>
                        <input type="text" class="form-control @error('pekerjaanistri') is-invalid @enderror" id="pekerjaanistri" name="pekerjaanistri" value="{{ old('pekerjaanistri') }}">
                        @error('pekerjaanistri')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamatistri" class="form-label">Alamat Istri</label>
                        <textarea class="form-control @error('alamatistri') is-invalid @enderror" id="alamatistri" name="alamatistri" rows="3" required>{{ old('alamatistri') }}</textarea>
                        @error('alamatistri')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Tujuan -->
                    <div class="mb-3">
                        <label for="tujuan" class="form-label">Tujuan Surat</label>
                        <input type="text" class="form-control @error('tujuan') is-invalid @enderror" id="tujuan" name="tujuan" value="{{ old('tujuan') }}" placeholder="Untuk bekerja sebagai TKI di Taiwan" required>
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
