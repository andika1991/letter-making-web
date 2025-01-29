@extends('dashboard.layouts.main')

@section('container')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Buat Surat Keterangan Usaha</h6>
                    <form method="post" action="/dashboard/usaha" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="kodeSurat" class="form-label">Kode Surat</label>
                            <input type="text" 
                                   class="form-control @error('kodeSurat') is-invalid @enderror" 
                                   id="kodeSurat" 
                                   name="kodeSurat" 
                                   placeholder="Ketik 510 untuk ket Usaha" 
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
                        <div class="mb-3">
                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                            <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" required value="{{ old('pekerjaan') }}">
                            @error('pekerjaan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Gender Field (Select Dropdown) -->
                        <div class="form-group">
                            <label for="jenisKelamin">Jenis Kelamin</label><br>
                            <input type="radio" id="laki-laki" name="jenisKelamin" value="Laki-laki" {{ old('jenisKelamin') == 'Laki-laki' ? 'checked' : '' }} required>
                            <label for="laki-laki">Laki-laki</label>
                            
                            <input type="radio" id="perempuan" name="jenisKelamin" value="Perempuan" {{ old('jenisKelamin') == 'Perempuan' ? 'checked' : '' }} required>
                            <label for="perempuan">Perempuan</label>
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea 
                                class="form-control @error('alamat') is-invalid @enderror" 
                                id="alamat" 
                                name="alamat" 
                                style="height: 150px;" 
                                required>{{ old('alamat', ' Dusun VI RT.006 RW.002 Kampung Sumber Bahagia') }}</textarea>
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="namaUsaha" class="form-label">Nama Usaha</label>
                            <input type="text" class="form-control @error('namaUsaha') is-invalid @enderror" id="namaUsaha" name="namaUsaha" placeholder="Nama Usaha" required value="{{ old('namaUsaha') }}">
                            @error('namaUsaha')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="jenisUsaha" class="form-label">Jenis Usaha</label>
                            <input type="text" class="form-control @error('jenisUsaha') is-invalid @enderror" id="jenisUsaha" name="jenisUsaha" placeholder="Jenis Usaha" required value="{{ old('jenisUsaha') }}">
                            @error('jenisUsaha')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamatUsaha" class="form-label">Alamat Usaha</label>
                            <textarea 
                                class="form-control @error('alamatUsaha') is-invalid @enderror" 
                                id="alamatUsaha" 
                                name="alamatUsaha" 
                                style="height: 150px;" 
                                required>{{ old('alamatUsaha', 'Dusun VI RT.006 RW.002 Kampung Sumber Bahagia') }}</textarea>
                            @error('alamatUsaha')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="mulaiBerdiri" class="form-label">Mulai Berdiri usaha</label>
                            <input type="date" class="form-control @error('mulaiBerdiri') is-invalid @enderror" id="mulaiBerdiri" name="mulaiBerdiri" required value="{{ old('mulaiBerdiri') }}">
                            @error('mulaiBerdiri')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Surat dipergunakan untuk</label>
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
                            <select class="form-control @error('ttd') is-invalid @enderror" id="ttd" name="ttd" required>
                                <option value="" disabled selected>Pilih</option>
                                <option value="Kepala Kampung" {{ old('ttd') == 'Kepala Kampung' ? 'selected' : '' }}>Kepala Kampung</option>
                                <option value="Sekretaris Kampung" {{ old('ttd') == 'Sekretaris Kampung' ? 'selected' : '' }}>Sekretaris Kampung</option>
                            </select>
                            @error('ttd')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="namaTtd" class="form-label">Nama Yang Menandatangani</label>
                            <input type="text" 
                                   class="form-control @error('namaTtd') is-invalid @enderror" 
                                   id="namaTtd" 
                                   name="namaTtd" 
                                   required 
                                   value="{{ old('namaTtd', 'Setiohudi') }}">
                            @error('namaTtd')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        


                        
                        <button type="submit" class="btn btn-primary">Buat Surat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
