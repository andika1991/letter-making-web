@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded p-4">
                <h3 class="mb-4">Tambah Data Surat Kematian</h3>

                <form action="{{ route('kematian.store') }}" method="POST">
                    @csrf
                
                    <div class="mb-3">
                        <label for="nosurat" class="form-label">No Surat</label>
                        <input type="text" class="form-control @error('nosurat') is-invalid @enderror" id="nosurat" name="nosurat" value="{{ old('nosurat') }}" required>
                        @error('nosurat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <div class="mb-3">
                        <label for="tempatTanggallahir" class="form-label">Tempat & Tanggal Lahir</label>
                        <input type="text" class="form-control @error('tempatTanggallahir') is-invalid @enderror" id="tempatTanggallahir" name="tempatTanggallahir" value="{{ old('tempatTanggallahir') }}" required>
                        @error('tempatTanggallahir')
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
                        <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-control @error('jeniskelamin') is-invalid @enderror" id="jeniskelamin" name="jeniskelamin" required>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-Laki" {{ old('jeniskelamin') == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                            <option value="Perempuan" {{ old('jeniskelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jeniskelamin')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <div class="mb-3">
                        <label for="agama" class="form-label">Agama</label>
                        <input type="text" class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama" value="{{ old('agama') }}" required>
                        @error('agama')
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
                        <label for="tglmeninggal" class="form-label">Tanggal Meninggal</label>
                        <input type="date" class="form-control @error('tglmeninggal') is-invalid @enderror" id="tglmeninggal" name="tglmeninggal" value="{{ old('tglmeninggal') }}" required>
                        @error('tglmeninggal')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <div class="mb-3">
                        <label for="waktu" class="form-label">Waktu Meninggal</label>
                        <input type="time" class="form-control @error('waktu') is-invalid @enderror" id="waktu" name="waktu" value="{{ old('waktu') }}" required>
                        @error('waktu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <div class="mb-3">
                        <label for="tempatkematian" class="form-label">Tempat Kematian</label>
                        <input type="text" class="form-control @error('tempatkematian') is-invalid @enderror" id="tempatkematian" name="tempatkematian" value="{{ old('tempatkematian') }}" required>
                        @error('tempatkematian')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <div class="mb-3">
                        <label for="lokasipemakaman" class="form-label">Lokasi Pemakaman</label>
                        <input type="text" class="form-control @error('lokasipemakaman') is-invalid @enderror" id="lokasipemakaman" name="lokasipemakaman" value="{{ old('lokasipemakaman') }}" required>
                        @error('lokasipemakaman')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <div class="mb-3">
                        <label for="sebabkematian" class="form-label">Sebab Kematian</label>
                        <input type="text" class="form-control @error('sebabkematian') is-invalid @enderror" id="sebabkematian" name="sebabkematian" value="{{ old('sebabkematian') }}" required>
                        @error('sebabkematian')
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
