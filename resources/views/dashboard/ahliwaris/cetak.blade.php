<!DOCTYPE html>
<html lang="id">
<head>
    <title>Surat Kuasa Ahli Waris</title>
    <style>
        body {
            margin: 10px auto;
            width: 680px;
            font-family: 'Times New Roman', serif;
            font-size: 14px;
            line-height: 1.5;
        }
        table {
            width: 100%;
            border-spacing: 0;
            margin-bottom: 8px;
        }
        .header-table {
            width: 100%;
            margin-bottom: 20px;
        }
        .header-table td {
            vertical-align: top;
        }
        .header-table img {
            width: 100px;
            height: 100px;
        }
        .header-title {
            text-align: center;
        }
        .header-title h3 {
            margin: 2px 0;
            font-size: 16px;
            font-weight: bold;
        }
        .header-title h2 {
            margin: 2px 0;
            font-size: 20px;
            font-weight: bold;
        }
        .header-title p {
            margin: 1px 0;
            font-size: 12px;
        }
        hr {
            border: 1px solid black;
            margin: 10px 0;
        }
        .surat-title {
            text-align: center;
            font-size: 14px;
            font-weight: bold;
            text-decoration: underline;
            margin-bottom: 10px;
        }
        .nomor-surat {
            text-align: center;
            font-size: 12px;
            margin-bottom: 15px;
        }
        .content-table td {
            vertical-align: top;
            padding: 2px 0;
        }
        .signature-table {
            margin-top: 20px;
            text-align: center;
        }
        .signature {
            margin-top: 40px;
            font-weight: bold;
            text-decoration: underline;
        }
        .text-right {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .label-cell {
            white-space: nowrap;
            padding-right: 15px; /* Jarak lebih konsisten */
            vertical-align: top; /* Selaraskan dengan bagian atas */
        }
        .value-cell {
            padding-left: 5px; /* Jarak antar kolom lebih serasi */
            text-align: justify; /* Rata kanan-kiri untuk lebih rapi */
        }
        .content-table tr {
            margin-bottom: 5px; /* Tambahkan jarak antar baris */
        }
        .signature-table td p {
            margin: 5px 0;
        }
        .text-right p {
            margin: 5px 0;
        }
        .text-right .signature {
            margin-top: 20px;
        }
        .adjusted-spacing {
            margin-left: 30px; /* Menambahkan jarak ke kiri */
        }
    </style>
</head>
<body>
    <table class="header-table">
        <tr>
            <td><img src="dashmin/img/lampung tengah.png" alt="Logo" /></td>
            <td class="header-title">
                <h3>PEMERINTAH KABUPATEN LAMPUNG TENGAH</h3>
                <h3>KECAMATAN SEPUTIH BANYAK</h3>
                <h2>KAMPUNG SUMBER BAHAGIA</h2>
                <p>Alamat: Jl. Simpang Lima Sumber Bahagia, Kec. Seputih Banyak, Kab. Lampung Tengah</p>
                <p>Kode Pos: 34156</p>
            </td>
        </tr>
    </table>
    <hr>
    <div class="surat-title">SURAT KUASA AHLI WARIS</div>
    <div class="nomor-surat">Nomor: 140/{{$suratAhliWaris->nosurat}}/SKK/KP.01/IX/2024</div>

    <table class="content-table">
        <tr>
            <td colspan="2">Kami yang bertanda tangan di bawah ini adalah ahli waris yang sah dari almarhum <strong>{{$suratAhliWaris->nama_almarhum}}</strong> yang meninggal dunia pada Tahun {{$suratAhliWaris->tahun_meninggal}} di {{$suratAhliWaris->lokasi_meninggal}}.</td>
        </tr>
        <tr>
            <td colspan="2">Dengan ini menyatakan dengan sebenarnya bahwa hubungan kami dengan almarhum {{$suratAhliWaris->nama_almarhum}} adalah sebagai berikut:</td>
        </tr>
        @foreach ($ahliWarisData as $index => $data)
        <tr>
            <td class="label-cell">{{ $index + 1 }}. Nama</td>
            <td class="value-cell">: {{ $data->nama }} (Anak ke-{{ $data->anakke }}), Umur {{ $data->umur }} Tahun</td>
        </tr>
        <tr>
            <td class="label-cell">Alamat</td>
            <td class="value-cell">: {{ $data->alamat }}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="2">Demikian Surat Keterangan ini kami buat dengan sebenarnya untuk {{$suratAhliWaris->tujuan}}. Untuk hal tersebut di atas, kami sepakat menunjuk atau memberi kuasa atas sebidang tanah a/n <strong>{{$suratAhliWaris->nama_almarhum}}</strong> yang bertempat di Kampung Sumber Bahagia dengan luas tanah {{$suratAhliWaris->luas_tanah}} m² kepada salah satu ahli waris tersebut di atas yaitu <strong>{{$suratAhliWaris->penerima_kuasa}} (Anak Kedua)</strong>.</td>
        </tr>
    </table>

    <table class="signature-table">
        <tr>
            <td><strong>Yang Memberi Kuasa</strong></td>
            <td><strong>Yang Diberi Kuasa</strong></td>
        </tr>
        <tr>
            <td class="text-center">
                @foreach ($ahliWarisData as $data)
                    <p>{{ $loop->iteration }}. {{ $data->nama }} (Anak ke {{ $data->anakke }})</p>
                @endforeach
            </td>
            <td class="text-center">
                <p class="signature">{{$suratAhliWaris->penerima_kuasa}}</p>
            </td>
        </tr>
        <tr>
            <td colspan="2" >
                <p>Sumber Bahagia, {{ \Carbon\Carbon::parse($suratAhliWaris->tanggal_surat)->translatedFormat('d F Y') }}</p>
                <p class="adjusted-spacing">Mengetahui,</p>
                <p class="adjusted-spacing">Kepala Kampung Sumber Bahagia</p>
                <br><br><br>
                <p class="signature adjusted-spacing">SETIO HUDI</p>
            </td>
        </tr>
    </table>
</body>
</html>
