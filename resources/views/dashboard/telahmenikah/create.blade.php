@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded p-4">
                <h3 class="mb-4">Tambah Data Surat Pernyataan Telah Menikah</h3>

                <form action="{{ route('telahmenikah.store') }}" method="POST">
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
                        <label for="ttlsuami" class="form-label">Tempat /Tanggal Lahir Suami</label>
                        <input type="text" class="form-control @error('ttlsuami') is-invalid @enderror" id="ttlsuami" name="ttlsuami" value="{{ old('ttlsuami') }}" required>
                        @error('ttlsuami')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="niksuami" class="form-label">NIK Suami </label>
                        <input type="text" class="form-control @error('niksuami') is-invalid @enderror" id="niksuami" name="niksuami" value="{{ old('niksuami') }}" required maxlength="16">
                     @error('niksuami')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="jeniskelam" class="form-label">Jenis Kelamin Suami</label>
                        <select class="form-control @error('jeniskelam') is-invalid @enderror" id="jeniskelam" name="jeniskelam" required>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="L" {{ old('jeniskelam') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ old('jeniskelam') == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jeniskelam')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="agama" class="form-label">Agama Suami</label>
                        <input type="text" class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama" value="{{ old('agama') }}" required>
                        @error('agama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan Suami</label>
                        <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') }}">
                        @error('pekerjaan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Suami</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3" required>{{ old('alamat') }}</textarea>
                        @error('alamat')
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
                        <label for="ttlistri" class="form-label">Tempat / Tanggal Lahir Istri</label>
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
                        <label for="jeniskelaministri" class="form-label">Jenis Kelamin Istri</label>
                        <select class="form-control @error('jeniskelaministri') is-invalid @enderror" id="jeniskelaministri" name="jeniskelaministri" required>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="L" {{ old('jeniskelaministri') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ old('jeniskelaministri') == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jeniskelaministri')
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

                    <!-- Data Pernikahan -->
                    <h5>Data Pernikahan</h5>
                    <div class="mb-3">
                        <label for="yangmembuatpernyataan" class="form-label">Yang Membuat Pernyataan</label>
                        <input type="text" class="form-control @error('yangmembuatpernyataan') is-invalid @enderror" id="yangmembuatpernyataan" name="yangmembuatpernyataan" value="{{ old('yangmembuatpernyataan') }}" required>
                        @error('yangmembuatpernyataan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tahunmenikah" class="form-label">Tahun Menikah</label>
                        <input type="number" class="form-control @error('tahunmenikah') is-invalid @enderror" id="tahunmenikah" name="tahunmenikah" value="{{ old('tahunmenikah') }}" required>
                        @error('tahunmenikah')
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
