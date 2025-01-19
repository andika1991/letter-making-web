@extends('dashboard.layouts.main')

@section('container')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edit Surat Keterangan Domisili</h6>
                <form method="post" action="/dashboard/domisili/{{ $domisili->noSurat }}">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="kodeSurat" class="form-label">Kode Surat</label>
                        <input 
                            type="text" 
                            class="form-control @error('kodeSurat') is-invalid @enderror" 
                            id="kodeSurat" 
                            name="kodeSurat" 
                            readonly 
                            value="{{ old('kodeSurat', $domisili->kodeSurat) }}">
                        @error('kodeSurat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="noSurat" class="form-label">Nomor Surat</label>
                        <input 
                            type="number" 
                            class="form-control @error('noSurat') is-invalid @enderror" 
                            id="noSurat" 
                            name="noSurat" 
                            placeholder="Urutan Nomor Surat Terbaru" 
                            required 
                            value="{{ old('noSurat', $domisili->noSurat) }}">
                        @error('noSurat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Warga</label>
                        <input 
                            type="text" 
                            class="form-control @error('nama') is-invalid @enderror" 
                            id="nama" 
                            name="nama" 
                            placeholder="Nama Pemohon" 
                            required 
                            value="{{ old('nama', $domisili->nama) }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input 
                            type="number" 
                            class="form-control @error('nik') is-invalid @enderror" 
                            id="nik" 
                            name="nik" 
                            required 
                            value="{{ old('nik', $domisili->nik) }}">
                        @error('nik')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="tempatTglLahir" class="form-label">Tempat, Tanggal Lahir</label>
                        <input 
                            type="text" 
                            class="form-control @error('tempatTglLahir') is-invalid @enderror" 
                            id="tempatTglLahir" 
                            name="tempatTglLahir" 
                            placeholder="Tempat, dd-mm-yyyy" 
                            required 
                            value="{{ old('tempatTglLahir', $domisili->tempatTglLahir) }}">
                        @error('tempatTglLahir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <div>
                            <input type="radio" id="laki-laki" name="jenisKelamin" value="Laki-Laki" 
                                {{ old('jenisKelamin', $domisili->jeniskelamin) == 'Laki-Laki' ? 'checked' : '' }}> 
                            <label for="laki-laki">Laki-Laki</label>
                            <input type="radio" id="perempuan" name="jenisKelamin" value="Perempuan" 
                                {{ old('jenisKelamin', $domisili->jeniskelamin) == 'Perempuan' ? 'checked' : '' }}> 
                            <label for="perempuan">Perempuan</label>
                        </div>
                        @error('jenisKelamin')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="agama" class="form-label">Agama</label>
                        <select 
                            class="form-select @error('agama') is-invalid @enderror" 
                            id="agama" 
                            name="agama" 
                            required>
                            <option value="" disabled>Pilih Agama</option>
                            <option value="Islam" {{ old('agama', $domisili->agama) == 'Islam' ? 'selected' : '' }}>Islam</option>
                            <option value="Kristen" {{ old('agama', $domisili->agama) == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                            <option value="Katolik" {{ old('agama', $domisili->agama) == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                            <option value="Hindu" {{ old('agama', $domisili->agama) == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                            <option value="Buddha" {{ old('agama', $domisili->agama) == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                            <option value="Konghucu" {{ old('agama', $domisili->agama) == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                        </select>
                        @error('agama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea 
                            class="form-control @error('alamat') is-invalid @enderror" 
                            id="alamat" 
                            name="alamat" 
                            required 
                            style="height: 150px;">{{ old('alamat', $domisili->alamat) }}</textarea>
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
