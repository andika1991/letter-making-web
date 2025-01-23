@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded p-4">
                <h3 class="mb-4">Tambah Data Surat Jalan Sapi</h3>

                <form action="{{ route('suratjalansapi.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="nosurat" class="form-label">No Surat</label>
                        <input type="text" class="form-control @error('nosurat') is-invalid @enderror" id="nosurat" name="nosurat" value="{{ old('nosurat') }}" required>
                        @error('nosurat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="jeniskelam" class="form-label">Jenis Kelamin</label>
                        <select class="form-control @error('jeniskelam') is-invalid @enderror" id="jeniskelam" name="jeniskelam" required>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-laki" {{ old('jeniskelam') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ old('jeniskelam') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jeniskelam')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" class="form-control @error('umur') is-invalid @enderror" id="umur" name="umur" value="{{ old('umur') }}" required>
                        @error('umur')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="pekerjaan" class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan') }}" required>
                        @error('pekerjaan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3" required>{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="diperolehasal" class="form-label">Diperoleh Dari/Asal</label>
                        <input type="text" class="form-control @error('diperolehasal') is-invalid @enderror" id="diperolehasal" name="diperolehasal" value="{{ old('diperolehasal') }}" required>
                        @error('diperolehasal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="jenishewan" class="form-label">Jenis Hewan</label>
                        <input type="text" class="form-control @error('jenishewan') is-invalid @enderror" id="jenishewan" name="jenishewan" value="{{ old('jenishewan') }}" required>
                        @error('jenishewan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="banyaknya" class="form-label">Banyaknya</label>
                        <input type="number" class="form-control @error('banyaknya') is-invalid @enderror" id="banyaknya" name="banyaknya" value="{{ old('banyaknya') }}" required>
                        @error('banyaknya')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="umur_hewan" class="form-label">Umur Hewan</label>
                        <input type="number" class="form-control @error('umur_hewan') is-invalid @enderror" id="umur_hewan" name="umur_hewan" value="{{ old('umur_hewan') }}" required>
                        @error('umur_hewan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="warna" class="form-label">Warna</label>
                        <input type="text" class="form-control @error('warna') is-invalid @enderror" id="warna" name="warna" value="{{ old('warna') }}" required>
                        @error('warna')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tujuan" class="form-label">Tujuan</label>
                        <input type="text" class="form-control @error('tujuan') is-invalid @enderror" id="tujuan" name="tujuan" value="{{ old('tujuan') }}" required>
                        @error('tujuan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="jenisangkutan" class="form-label">Jenis Angkutan</label>
                        <input type="text" class="form-control @error('jenisangkutan') is-invalid @enderror" id="jenisangkutan" name="jenisangkutan" value="{{ old('jenisangkutan') }}" required>
                        @error('jenisangkutan')
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
