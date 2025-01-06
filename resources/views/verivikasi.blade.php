<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Surat</title>
    <style>
        /* Styling tombol */
        .btn {
            padding: 10px 15px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            background-color: #007bff;
        }
        .btn-success {
            background-color: #28a745;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .btn-success:hover {
            background-color: #218838;
        }

        /* Styling weher */
        .weher {
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .weher-usaha {
            background-color: #f0f8ff; /* Biru muda */
            border: 2px solid #007bff;
        }
        .weher-domisili {
            background-color: #fff8e1; /* Kuning muda */
            border: 2px solid #ffc107;
        }
    </style>
</head>
<body>
    <h1>Verifikasi Surat</h1>

    @if ($data)
        @if ($data->kodeSurat == '510')
            <!-- Weher untuk Usaha -->
            <div class="weher weher-usaha">
                <h2>Surat Usaha Ditemukan</h2>
                <p><strong>Kode Surat:</strong> {{ $data->kodeSurat }}</p>
                <p><strong>No Surat:</strong> {{ $data->noSurat }}</p>
                <p><strong>Tahun:</strong> {{ $data->created_at->year }}</p>
                <h3>Dokumen ini telah ditandatangani secara digital oleh: <strong>{{ $data->ttd }}</strong></h3>
                <p><strong>Nama Penandatangan:</strong> {{ $data->namaTtd }}</p>

                @if ($data->ttdscan)
                    <h3>Tanda Tangan:</h3>
                    <img src="{{ asset('storage/' . $data->ttdscan) }}" alt="Tanda Tangan Digital" style="max-width: 200px; height: auto;">
                @else
                    <p><strong>Tanda Tangan:</strong> Tidak tersedia.</p>
                @endif

                <!-- Tombol untuk melihat atau mengunduh dokumen -->
                <a class="btn btn-success" href="{{ url('/dashboard/usaha/' . $data->noSurat . '/cetak') }}" target="_blank">
                    Lihat Dokumen
                </a>
            </div>
        @elseif ($data->kodeSurat == '410')
            <!-- Weher untuk Domisili -->
            <div class="weher weher-domisili">
                <h2>Surat Domisili Ditemukan</h2>
                <p><strong>Kode Surat:</strong> {{ $data->kodeSurat }}</p>
                <p><strong>No Surat:</strong> {{ $data->noSurat }}</p>
                <p><strong>Tahun:</strong> {{ $data->created_at->year }}</p>
                <h3>Dokumen ini telah ditandatangani secara digital oleh: <strong>{{ $data->ttd }}</strong></h3>
                <p><strong>Nama Penandatangan:</strong> {{ $data->namaTtd }}</p>

                @if ($data->ttdscan)
                    <h3>Tanda Tangan:</h3>
                    <img src="{{ asset('storage/' . $data->ttdscan) }}" alt="Tanda Tangan Digital" style="max-width: 200px; height: auto;">
                @else
                    <p><strong>Tanda Tangan:</strong> Tidak tersedia.</p>
                @endif

                <!-- Tombol untuk melihat atau mengunduh dokumen -->
                <a class="btn btn-success" href="{{ url('/dashboard/domisili/' . $data->noSurat . '/cetak') }}" target="_blank">
                    Lihat Dokumen
                </a>
            </div>
        @endif
    @else
        <div class="not-found">
            <h2>Data Tidak Ditemukan</h2>
            <p>Silakan periksa kembali informasi yang Anda masukkan.</p>
        </div>
    @endif
</body>
</html>
