@extends('dashboard.layouts.main')

@section('container')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Surat Keterangan Usaha</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/dashboard/surat-usaha">Surat Keterangan Usaha</a></li>
            <li class="breadcrumb-item active">Edit Surat</li>
        </ol>
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="/dashboard/usaha/{{ $usaha->noSurat }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required value="{{ old('nama', $usaha->nama) }}">
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="number" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" required value="{{ old('nik', $usaha->nik) }}">
                                @error('nik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tempatTglLahir" class="form-label">Tempat, Tanggal Lahir</label>
                                <input type="text" class="form-control @error('tempatTglLahir') is-invalid @enderror" id="tempatTglLahir" name="tempatTglLahir" placeholder="Tempat, dd-mm-yyyy" required value="{{ old('tempatTglLahir', $usaha->tempatTglLahir) }}">
                                @error('tempatTglLahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" required value="{{ old('pekerjaan', $usaha->pekerjaan) }}">
                                @error('pekerjaan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" style="height: 150px;" required>{{ old('alamat', $usaha->alamat) }}</textarea>
                                @error('alamat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="namaUsaha" class="form-label">Nama Usaha</label>
                                <input type="text" class="form-control @error('namaUsaha') is-invalid @enderror" id="namaUsaha" name="namaUsaha" placeholder="Nama Usaha" required value="{{ old('namaUsaha', $usaha->namaUsaha) }}">
                                @error('namaUsaha')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jenisUsaha" class="form-label">Jenis Usaha</label>
                                <input type="text" class="form-control @error('jenisUsaha') is-invalid @enderror" id="jenisUsaha" name="jenisUsaha" placeholder="Jenis Usaha" required value="{{ old('jenisUsaha', $usaha->jenisUsaha) }}">
                                @error('jenisUsaha')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="alamatUsaha" class="form-label">Alamat Usaha</label>
                                <textarea class="form-control @error('alamatUsaha') is-invalid @enderror" id="alamatUsaha" name="alamatUsaha" style="height: 150px;" required>{{ old('alamatUsaha', $usaha->alamatUsaha) }}</textarea>
                                @error('alamatUsaha')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="mulaiBerdiri" class="form-label">Mulai Berdiri</label>
                                <input type="date" class="form-control @error('mulaiBerdiri') is-invalid @enderror" id="mulaiBerdiri" name="mulaiBerdiri" required value="{{ old('mulaiBerdiri', $usaha->mulaiBerdiri) }}">
                                @error('mulaiBerdiri')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <input id="keterangan" type="hidden" name="keterangan" value="{{ old('keterangan', $usaha->keterangan) }}">
                                <trix-editor class="form-control @error('keterangan') is-invalid @enderror" input="keterangan" required></trix-editor>
                                @error('keterangan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="tglSurat" class="form-label">Tanggal</label>
                                <input type="date" class="form-control @error('tglSurat') is-invalid @enderror" id="tglSurat" name="tglSurat" required value="{{ old('tglSurat', $usaha->tglSurat) }}">
                                @error('tglSurat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="ttd" class="form-label">Yang Menandatangai</label>
                                <input type="text" class="form-control @error('ttd') is-invalid @enderror" id="ttd" name="ttd" placeholder="Keuchik/Sekdes" required value="{{ old('ttd', $usaha->ttd) }}">
                                @error('ttd')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="namaTtd" class="form-label">Nama Yang Menandatangai</label>
                                <input type="text" class="form-control @error('namaTtd') is-invalid @enderror" id="namaTtd" name="namaTtd" required value="{{ old('namaTtd', $usaha->namaTtd) }}">
                                @error('namaTtd')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="ttdscan" class="form-label">Upload Tanda Tangan</label>
                                <input 
                                    type="file" 
                                    class="form-control @error('ttdscan') is-invalid @enderror" 
                                    id="ttdscan" 
                                    name="ttdscan" 
                                    accept="image/*" 
                                    onchange="previewImage(event)">
                                @error('ttdscan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="imagePreview" class="form-label">Pratinjau Tanda Tangan</label>
                                <img 
                                    id="imagePreview" 
                                    src="{{ asset('storage/' . old('ttdscan', $usaha->ttdscan ?? '#')) }}" 
                                    alt="Pratinjau Tanda Tangan" 
                                    style="display: {{ old('ttdscan', $usaha->ttdscan ?? false) ? 'block' : 'none' }}; 
                                           max-width: 300px; 
                                           max-height: 200px; 
                                           border: 1px solid #ccc; 
                                           padding: 5px; 
                                           margin-top: 10px;">
                            </div>
                            
                            
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('imagePreview');
    
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // Tampilkan pratinjau gambar
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                // Reset jika file dibatalkan
                preview.src = '#';
                preview.style.display = 'none';
            }
        }
    </script>
@endsection
