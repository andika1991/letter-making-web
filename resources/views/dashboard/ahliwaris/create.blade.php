@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <h2>Form Input Surat Ahli Waris</h2>
    <!-- Tambahkan id untuk memanipulasi form surat -->
    <form id="form-surat" action="{{ route('ahliwaris.store') }}" method="POST" style="{{ session('surat_id') ? 'display: none;' : '' }}">
        @csrf
        <div class="mb-3">
            <label for="nosurat" class="form-label">Nomor Surat</label>
            <input type="text" name="nosurat" id="nosurat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nama_almarhum" class="form-label">Nama Almarhum</label>
            <input type="text" name="nama_almarhum" id="nama_almarhum" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tahun_meninggal" class="form-label">Tahun Meninggal</label>
            <input type="number" name="tahun_meninggal" id="tahun_meninggal" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="lokasi_meninggal" class="form-label">Lokasi Meninggal</label>
            <input type="text" name="lokasi_meninggal" id="lokasi_meninggal" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tujuan" class="form-label">Tujuan</label>
            <input type="text" name="tujuan" id="tujuan" class="form-control" placeholder="contoh : Pengajuan Kredit di Bank BRI Seputih Banyak" required>
        </div>
        <div class="mb-3">
            <label for="luas_tanah" class="form-label">Luas Tanah</label>
            <input type="number" name="luas_tanah" id="luas_tanah" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="alamat_tanah" class="form-label">Alamat Tanah</label>
            <textarea name="alamat_tanah" id="alamat_tanah" class="form-control" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="penerima_kuasa" class="form-label">PENERIMA KUASA</label>
            <input type="text" name="penerima_kuasa" id="penerima_kuasa" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_surat" class="form-label">Tanggal Surat</label>
            <input type="date" name="tanggal_surat" id="tanggal_surat" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Surat</button>
    </form>

    @if(session('surat_id'))
        <hr>
        <h3>Data Ahli Waris</h3>
        <form action="{{ route('ahliwaris.store') }}" method="POST">
            @csrf
            <input type="hidden" name="surat_ahli_waris_id" value="{{ session('surat_id') }}">
            <div id="ahli-waris-container">
                <div class="ahli-waris-item">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="ahli_waris[0][nama]" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="anakke" class="form-label">Anak ke-</label>
                        <input type="number" name="ahli_waris[0][anakke]" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input type="number" name="ahli_waris[0][umur]" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="ahli_waris[0][alamat]" class="form-control" rows="3" required></textarea>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-secondary" onclick="addAhliWaris()">Tambah Ahli Waris</button>
            <button type="submit" class="btn btn-success">Simpan Ahli Waris</button>
        </form>
    @else
        <p class="text-muted">Isi data Surat Ahli Waris terlebih dahulu untuk menambahkan data ahli waris.</p>
    @endif
</div>

<script>
    let ahliWarisCount = 1;

    function addAhliWaris() {
        const container = document.getElementById('ahli-waris-container');
        const newItem = document.createElement('div');
        newItem.classList.add('ahli-waris-item');
        newItem.innerHTML = `
            <hr>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="ahli_waris[${ahliWarisCount}][nama]" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="anakke" class="form-label">Anak ke-</label>
                <input type="number" name="ahli_waris[${ahliWarisCount}][anakke]" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">Umur</label>
                <input type="number" name="ahli_waris[${ahliWarisCount}][umur]" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="ahli_waris[${ahliWarisCount}][alamat]" class="form-control" rows="3" required></textarea>
            </div>
        `;
        container.appendChild(newItem);
        ahliWarisCount++;
    }
</script>

@endsection
