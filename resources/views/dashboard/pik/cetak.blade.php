<!DOCTYPE html>
<html lang="en">
<head>
    <title>Surat Permohonan Izin Keramaian</title>
    <style>
        body {
            margin: 0 auto;
            width: 700px;
            font-family: 'Cambria Math', serif;
            font-size: 16px; /* Kurangi ukuran font */
            line-height: 1.2; /* Kurangi jarak antar baris */
        }
        table {
            width: 100%;
            margin-bottom: 3px; /* Kurangi margin antar tabel */
        }
        .header-table {
            margin-bottom: 10px; /* Kurangi margin bawah */
        }
        .header-table img {
            width: 80px; /* Kurangi ukuran logo */
            height: 80px;
        }
        .header-title {
            text-align: center;
        }
        .header-title h1 {
            font-size: 14px; /* Kurangi ukuran font judul */
            margin: 0;
            font-weight: bold;
        }
        .header-title h2 {
            font-size: 13px;
            margin: 2px 0;
            font-weight: bold;
        }
        .header-title h3 {
            font-size: 12px;
            margin: 2px 0;
        }
        .header-title p {
            margin: 2px 0;
            font-size: 11px;
        }
        .content-table td {
            vertical-align: top;
            padding: 2px 0;
            font-size: 13px; /* Kurangi ukuran font isi tabel */
        }
        .to-recipient {
            margin-top: -150px; /* Kurangi jarak ke penerima */
            padding-left: 360px;
        }
        hr {
            border: 1px solid black;
            margin: 5px 0; /* Kurangi margin horizontal */
        }
        .signature-table td {
            text-align: center;
        }
    </style>
</head>
<body>
    <center>
        <table class="header-table">
            <tr>
                <td><img src="{{ asset('dashmin/img/lampung tengah.png') }}" alt="Logo" /></td>
                <td>
                    <div class="header-title">
                        <h1>PEMERINTAH KABUPATEN LAMPUNG TENGAH</h1>
                        <h2>KECAMATAN SEPUTIH BANYAK</h2>
                        <h3>KAMPUNG SUMBER BAHAGIA</h3>
                        <p>Alamat: Jalan Simpang Lima Sumber Bahagia, Kec. Seputih Banyak, Kab. Lampung Tengah</p>
                        <p>Kode Pos: 34156</p>
                    </div>
                </td>
            </tr>
        </table>
        <hr />
    </center>

    <table class="content-table">
        <tr>
            <td style="width: 15%;">Nomor</td>
            <td>: 147.2/{{$pik->nosurat}}/Kp.01/I/2025</td>
        </tr>
        <tr>
            <td>Lampiran</td>
            <td>: -</td>
        </tr>
        <tr>
            <td>Perihal</td>
            <td>: <u><b>Permohonan Izin Keramaian</b></u></td>
        </tr>
    </table>

    <div class="to-recipient">
        <p style="margin: 0;">Kepada Yth,</p>
        <p style="margin: 0;">Bapak Kapolsek Seputih Banyak</p>
        <p style="margin: 0;">Di-</p>
        <p style="margin: 0;">Tempat</p>
    </div>
    <?php
    $tanggal = $pik->tanggal_lahir; // Misalnya "2025-01-18"
    
    try {
        $dateObject = new \DateTime($tanggal);
        echo $dateObject->format('d-m-Y'); // Output: 18-01-2025
    } catch (\Exception $e) {
        echo "Terjadi kesalahan: " . $e->getMessage();
    }
?>    

    <p>Kepala Kampung Sumber Bahagia, Kecamatan Seputih Banyak, Kabupaten Lampung Tengah, dengan ini memberi rekomendasi kepada:</p>

    <table class="content-table">
        <tr>
            <td style="width: 25%; padding-left:60px;">Nama</td>
            <td>: {{$pik->nama}}</td>
        </tr>
        <tr>
            <td style="padding-left:60px;">Tempat/Tgl Lahir</td>
            <td>: {{$pik->tempat_lahir}},{{ \Carbon\Carbon::parse($pik->tanggal_lahir)->format('d-m-Y') }}

            </td>
        </tr>
        <tr>
            <td style="padding-left:60px;">Pekerjaan</td>
            <td>: {{$pik->pekerjaan}}</td>
        </tr>
        <tr>
            <td style="padding-left:60px;">Jenis Kelamin</td>
            <td>: {{$pik->jenis_kelamin}}</td>
        </tr>
        <tr>
            <td style="padding-left:60px;">Agama</td>
            <td>: {{$pik->agama}}</td>
        </tr>
        <tr>
            <td style="padding-left:60px;">Status Perkawinan</td>
            <td>: {{$pik->status_perkawinan}}</td>
        </tr>
        <tr>
            <td style="padding-left:60px;">Alamat</td>
            <td>: {{$pik->alamat}}</td>
        </tr>
        <tr>
            <td style="padding-left:60px;">No. HP</td>
            <td>: {{$pik->no_hp}}</td>
        </tr>
    </table>

    <p>Yang bersangkutan di atas dimohon kiranya untuk dapat diberikan izin keramaian yang akan dipergunakan pada:</p>

    <table class="content-table">
        <tr>
            <td style="width: 25%; padding-left:60px;">Hari</td>
            <td>: {{$pik->hariac}}</td>
        </tr>
        <tr>
            <?php
$tanggalac = $pik->tanggalac; // Contoh: "2025-01-18"

try {
    $dateObject = new \DateTime($tanggalac);
    echo $dateObject->format('d-F-Y'); // Output: 18-January-2025
} catch (\Exception $e) {
    echo "Terjadi kesalahan: " . $e->getMessage();
}

function formatTanggalIndonesia($tanggal) {
    $bulan = [
        1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    ];

    $dateObject = new \DateTime($tanggal);
    $bulanNama = $bulan[(int)$dateObject->format('m')];
    return $dateObject->format('d') . '-' . $bulanNama . '-' . $dateObject->format('Y');
}

$tanggalac = $pik->tanggalac; // Contoh: "2025-01-18"
echo formatTanggalIndonesia($tanggalac);
?>
            <td style="padding-left:60px;">Tanggal</td>
            <td>: {{ \Carbon\Carbon::parse($pik->tanggalac)->locale('id')->translatedFormat('d-F-Y') }}
            </td>
        </tr>
        <tr>
            <td style="padding-left:60px;">Waktu/Jam</td>
            <td>: {{$pik->waktuac}}</td>
        </tr>
        <tr>
            <td style="padding-left:60px;">Acara</td>
            <td>: {{$pik->acaraac}}</td>
        </tr>
        <tr>
            <td style="padding-left:60px;">Alamat</td>
            <td>: {{$pik->alamatac}}</td>
        </tr>
    </table>

    <p>Demikian surat permohonan ini kami buat dengan sebenarnya. Atas pemberian izin kami ucapkan terima kasih.</p>

    <table class="signature-table" style="margin-top: 10px; width: 100%;">
        <tr>
            <td>
                <p>Pemohon Izin</p>
                <br><br>
                <p><u><b>PAIMIN</b></u></p>
            </td>
            <td>
                <p>Kepala Kampung Sumber Bahagia</p>
                <br><br>
                <p><u><b>SETIO HUDI</b></u></p>
            </td>
        </tr>
    </table>
    <p style="text-align: center">Mengetahui:</p>
    <table class="signature-table" style="margin-top: 20px; width: 100%;">
        
              
           
        <tr>
            <td style="width: 33%; text-align: center;">
                <p>Camat Seputih Banyak</p>
                <br><br>
                <p>....................................</p>
            </td>
            <td style="width: 33%; text-align: center;">
                <p>Danramil Seputih Banyak</p>
                <br><br>
                <p>....................................</p>
            </td>
            <td style="width: 33%; text-align: center;">
                <p>Kapolsek Seputih Banyak</p>
                <br><br>
                <p>....................................</p>
            </td>
        </tr>
    </table>
</body>
</html>
