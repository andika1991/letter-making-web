@extends('dashboard.layouts.main')

@section('container')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Buat Surat Keterangan Domisili</h6>
                    <form method="post" action="/dashboard/domisili" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="kodeSurat" class="form-label">Kode Surat</label>
                            <input 
                                type="text" 
                                class="form-control @error('kodeSurat') is-invalid @enderror" 
                                id="kodeSurat" 
                                name="kodeSurat" 
                                value="147.2" 
                                readonly>
                            @error('kodeSurat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="noSurat" class="form-label">Nomor Surat</label>
                            <input type="number" class="form-control @error('noSurat') is-invalid @enderror" id="noSurat" name="noSurat" placeholder="Urutan Nomor Surat Terbaru" required value="{{ old('noSurat') }}">
                            @error('noSurat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Warga</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Pemohon" required value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="number" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" required value="{{ old('nik') }}">
                            @error('nik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tempatTglLahir" class="form-label">Tempat, Tanggal Lahir</label>
                            <input type="text" class="form-control @error('tempatTglLahir') is-invalid @enderror" id="tempatTglLahir" name="tempatTglLahir" placeholder="Tempat, dd-mm-yyyy" required value="{{ old('tempatTglLahir') }}">
                            @error('tempatTglLahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Radio Button for Jenis Kelamin -->
                        <div class="mb-3">
                            <label class="form-label">Jenis Kelamin</label>
                            <div>
                                <input type="radio" id="laki-laki" name="jenisKelamin" value="Laki-Laki" {{ old('jenisKelamin') == 'Laki-Laki' ? 'checked' : '' }}> <label for="laki-laki">Laki-Laki</label>
                                <input type="radio" id="perempuan" name="jenisKelamin" value="Perempuan" {{ old('jenisKelamin') == 'Perempuan' ? 'checked' : '' }}> <label for="perempuan">Perempuan</label>
                            </div>
                            @error('jenisKelamin')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Select Option for Agama -->
                        <div class="mb-3">
                            <label for="agama" class="form-label">Agama</label>
                            <select class="form-select @error('agama') is-invalid @enderror" id="agama" name="agama" required>
                                <option value="" disabled selected>Pilih Agama</option>
                                <option value="Islam" {{ old('agama') == 'Islam' ? 'selected' : '' }}>Islam</option>
                                <option value="Kristen" {{ old('agama') == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                <option value="Katolik" {{ old('agama') == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                                <option value="Hindu" {{ old('agama') == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                <option value="Buddha" {{ old('agama') == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                                <option value="Konghucu" {{ old('agama') == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                            </select>
                            @error('agama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                            <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" required value="{{ old('pekerjaan') }}">
                            @error('pekerjaan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror" placeholder="Tulis alamat lengkap disini..." id="alamat" name="alamat" style="height: 150px;" required>{{ old('alamat') }}</textarea>
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Textarea for Alamat KK -->
                        <div class="mb-3">
                            <label for="alamatKK" class="form-label">Alamat KK</label>
                            <textarea class="form-control @error('alamatKK') is-invalid @enderror" placeholder="Tulis alamat sesuai Kartu Keluarga disini..." id="alamatKK" name="alamatKK" style="height: 150px;" required>{{ old('alamatKK') }}</textarea>
                            @error('alamatKK')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input id="keterangan" type="hidden" name="keterangan">
                            <trix-editor class="form-control @error('keterangan') is-invalid @enderror" input="keterangan" required>{{ old('keterangan') }}</trix-editor>
                            @error('keterangan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="tglSurat" class="form-label">Tanggal</label>
                            <input type="date" class="form-control @error('tglSurat') is-invalid @enderror" id="tglSurat" name="tglSurat" required value="{{ old('tglSurat') }}">
                            @error('tglSurat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="ttd" class="form-label">Yang Menandatangani</label>
                            <input type="text" class="form-control" id="ttd" name="ttd" value="Kepala Kampung" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="namaTtd" class="form-label">Nama Yang Menandatangani</label>
                            <input type="text" class="form-control" id="namaTtd" name="namaTtd" value="SETIO HUDI" readonly>
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Buat Surat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
