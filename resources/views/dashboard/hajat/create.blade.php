@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded p-4">
                <h3 class="mb-4">Tambah Data Hajat</h3>

                <form action="{{ route('hajat.store') }}" method="POST">
                    @csrf
<p><b>Data Pribadi</b></p>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                        @error('nama')
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
                        <label for="nohp" class="form-label">No HP</label>
                        <input type="text" class="form-control @error('nohp') is-invalid @enderror" id="nohp" name="nohp" value="{{ old('nohp') }}" required>
                        @error('nohp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nomor" class="form-label">Nomor Surat</label>
                        <input type="text" class="form-control @error('nomor') is-invalid @enderror" id="nomor" name="nomor" value="{{ old('nomor') }}" required>
                        @error('nomor')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <p><b>Data Acara</b></p>

                    <div class="mb-3">
                        <label for="dalamrangka" class="form-label">Dalam Rangka</label>
                        <input type="text" class="form-control @error('dalamrangka') is-invalid @enderror" id="dalamrangka" name="dalamrangka" value="{{ old('dalamrangka') }}" placeholder="Tasyakuran/Pernikahan/Khitanaan" required>
                        @error('dalamrangka')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="denganhiburan" class="form-label">Dengan Hiburan</label>
                        <input type="text" class="form-control @error('denganhiburan') is-invalid @enderror" id="denganhiburan" name="denganhiburan" value="{{ old('denganhiburan') }}" placeholder="Andika Music">
                        @error('denganhiburan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="haritgl" class="form-label">Hari dan Tanggal</label>
                        <input type="date" class="form-control @error('haritgl') is-invalid @enderror" id="haritgl" name="haritgl" value="{{ old('haritgl') }}" required>
                        @error('haritgl')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="waktu" class="form-label">Waktu</label>
                        <input type="text" class="form-control @error('waktu') is-invalid @enderror" id="waktu" name="waktu" value="{{ old('waktu') }}" required>
                        @error('waktu')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tempat" class="form-label">Tempat</label>
                        <input type="text" class="form-control @error('tempat') is-invalid @enderror" id="tempat" name="tempat" value="{{ old('tempat') }}" required>
                        @error('tempat')
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
