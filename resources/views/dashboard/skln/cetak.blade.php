<!DOCTYPE html>
<html lang="id">
<head>
    <title>Surat Keterangan Keluar Negeri</title>
    <style>
        body {
            margin: 0 auto;
            width: 600px;
            font-family: 'Cambria Math', 'Georgia', serif;
            line-height: 1.4;
            font-size: 14px; /* Ukuran font dikurangi sedikit */
        }
        table {
            width: 100%;
            margin-bottom: 5px; /* Margin antar tabel dikurangi */
            border-spacing: 0;
        }
        .header-table {
            margin-bottom: 10px; /* Jarak header dikurangi */
        }
        .header-table img {
            width: 60px;
            height: 60px; /* Ukuran logo diperkecil */
        }
        .header-title {
            text-align: center;
        }
        .header-title h1 {
            font-size: 16px; /* Ukuran font judul dikurangi */
            margin: 4px 0; /* Margin antar judul dikurangi */
            font-weight: bold;
        }
        .header-title h2 {
            font-size: 14px;
            margin: 3px 0;
            font-weight: bold;
        }
        .header-title h3 {
            font-size: 13px;
            margin: 2px 0;
        }
        .header-title p {
            font-size: 11px;
            margin: 2px 0;
        }
        hr {
            border: 1px solid black;
            margin: 8px 0; /* Jarak garis horizontal dikurangi */
        }
        .surat-title {
            font-size: 15px;
            font-weight: bold;
            text-align: center;
            margin: 8px 0; /* Margin judul surat dikurangi */
            text-decoration: underline;
        }
        .nomor-surat {
            font-size: 13px;
            text-align: center;
            margin-bottom: 10px; /* Margin nomor surat dikurangi */
        }
        .content-table td {
            padding: 3px 0; /* Padding antar baris dikurangi */
            vertical-align: top;
        }
        .content-table td:first-child {
            width: 35%;
        }
        .signature-table {
            margin-top: 15px; /* Jarak atas tanda tangan dikurangi */
            text-align: right;
        }
        .signature-table td {
            padding-top: 5px; /* Jarak antar baris tanda tangan dikurangi */
        }
        .content-table td {
            vertical-align: top;
            padding: 2px 0; /* Padding antar konten lebih kecil */
        }
        .footer-info {
            margin-top: 10px; /* Margin bawah untuk penutup */
        }
    </style>
</head>
<body>
    <center>
        <table class="header-table">
            <tr>
                <td><img  style="width: 80px;heigh:110px;"   src="dashmin/img/lampung tengah.png" alt="Logo" /></td>
                <td>
                    <div class="header-title">
                        <h1>PEMERINTAH KABUPATEN LAMPUNG TENGAH</h1>
                        <h2>KECAMATAN SEPUTIH BANYAK</h2>
                        <h3>KAMPUNG SUMBER BAHAGIA</h3>
                        <p><i>Alamat: Jl. Simpang Lima Sumber Bahagia, Kec. Seputih Banyak, Kab. Lampung Tengah</i></p>
                        <p><i>Kode Pos: 34156</i></p>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr /></td>
            </tr>
        </table>
    </center>

    <div class="surat-title">
        SURAT KETERANGAN KELUAR NEGERI
    </div>
    <div class="nomor-surat">
        Nomor: 147.2/{{$skln->nosurat}}/SK/KP.01/XI/2024
    </div>

    <p>Yang bertanda tangan di bawah ini Kepala Kampung Sumber Bahagia:</p>
    <table class="content-table">
        <tr>
            <td>Nama</td>
            <td>: SETIO HUDI</td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>: Kepala Kampung</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: Dusun V RT.019 RW.004 Kampung Sumber Bahagia, Kec. Seputih Banyak, Kab. Lampung Tengah</td>
        </tr>
    </table>

    <p>Dengan ini menerangkan bahwa:</p>
    <table class="content-table">
        <tr>
            <td>Nama</td>
            <td>: {{$skln->nama}}</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>: {{$skln->nik}}</td>
        </tr>
        <tr>
            <td>Tempat, Tgl. Lahir</td>
            <td>: {{$skln->ttl}}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: {{$skln->jeniskelam}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: {{$skln->alamat}}</td>
        </tr>
    </table>

    <p>Bahwa tersebut di atas benar-benar penduduk Kampung Sumber Bahagia yang saat ini <b><i>Bekerja: {{$skln->kondisi}}</i></b>. Menurut pengetahuan kami, hingga surat ini dikeluarkan, yang bersangkutan masih bekerja di luar negeri.</p>

    <p>Demikian surat keterangan ini dibuat guna keperluan {{$skln->kondisi}}.</p>

    <table >
        <tr>
            <td style="padding-left:310px;">Dikeluarkan di</td>
            <td>:</td>
            <td>Sumber Bahagia</td>
        </tr>
        <tr>
            <td style="padding-left:310px;text-decoration: underline;">Pada Tanggal</td>
            <td>:</td>
            <td style="text-decoration: underline;">{{ \Carbon\Carbon::parse($skln->created_at)->translatedFormat('d F Y') }}</td>
        </tr>
    </table>

    <table class="signature-table">
        <tr>
            <td colspan="3" style="text-align: left;">a.n. Kepala Kampung Sumber Bahagia</td>
        </tr>
        <tr>
            <td colspan="3" style="padding-left: 50px; text-align: left;">Sekretaris Kampung</td>
        </tr>
        <tr>
            <td colspan="3" style="padding-left: 50px; text-align: left;"><br><br><u>NUR ALI IMRON</u></td>
        </tr>
    </table>
</body>
</html>
