<!DOCTYPE html>
<html lang="en">
<head>
    <title>Surat Keterangan Status Pernikahan</title>
    <style>
        body {
            margin: 0 auto;
            width: 600px;
            font-family: 'Times New Roman', serif;
            font-size: 16px;
        }
        table {
            width: 100%;
            margin: 0;
            padding: 0;
            border-spacing: 0;
        }
        .header-table {
            margin-bottom: 20px;
        }
        .header-table img {
            width: 85px;
            height: 85px;
        }
        .header-title {
            text-align: center;
        }
        .header-title h1, .header-title h2, .header-title h3 {
            margin: 0;
            font-weight: bold;
        }
        .header-title p {
            margin: 2px 0;
            font-size: 12px;
        }
        .content-table td {
            vertical-align: top;
            padding: 5px 0;
        }
        .content-table td:first-child {
            width: 35%;
        }
        .signature-table {
            margin-top: 20px;
        }
        .signature-table td {
            padding-top: 10px;
            text-align: right;
        }
        .surat-title {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            text-decoration: underline;
            margin-bottom: 10px;
        }
        .nomor-surat {
            text-align: center;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 20px;
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
            font-size: 18px; /* Kurangi ukuran font judul */
            margin: 0;
            font-weight: bold;
        }
        .header-title h2 {
            font-size: 15px;
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
    </style>
</head>
<body>
    <table class="header-table">
        <tr>
            <td><img src="dashmin/img/lampung tengah.png" alt="Logo" /></td>
            <td>
                <div class="header-title">
                    <h2>PEMERINTAH KABUPATEN LAMPUNG TENGAH</h2>
                    <h2>KECAMATAN SEPUTIH BANYAK</h2>
                    <h1>KAMPUNG SUMBER BAHAGIA</h1>
                    <p><i>Alamat: Jl. Simpang Lima Sumber Bahagia, Kec. Seputih Banyak, Kab. Lampung Tengah</i></p>
                    <p><i>Kode Pos: 34156</i></p>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2"><hr /></td>
        </tr>
    </table>

    <div class="surat-title">
        SURAT KETERANGAN STATUS PERNIKAHAN
    </div>
    <div class="nomor-surat">
        Nomor: 140/{{$sksp->nosurat}}/KP.01/XI/2025
    </div>

    <p>Yang bertanda tangan di bawah ini Kepala Kampung Sumber Bahagia Kecamatan Seputih Banyak Kabupaten Lampung Tengah menerangkan bahwa:</p>

    <table class="content-table">
        <tr>
            <td>Nama</td>
<td>: {{$sksp->nama}}</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>: {{$sksp->nik}}</td>
        </tr>
        <tr>
            <td>Tempat/Tgl Lahir</td>
            <td>: {{$sksp->ttl}}</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>: {{$sksp->agama}}</td>
        </tr>
        <tr>
            <td>Status Perkawinan</td>
            <td>: {{$sksp->status}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: {{$sksp->alamat}}</td>
        </tr>
    </table>

    <p>Bahwa tersebut di atas benar-benar penduduk Kampung Sumber Bahagia dengan status <b>{{ $sksp->status }}</b> 
        @if($sksp->status == 'CERAI HIDUP' || $sksp->status == 'CERAI MATI')
            dan belum menikah lagi.
        @endif
    </p>
    

    <p>Demikian surat keterangan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</p>

    <table class="signature-table">
        <tr>
            <td>Sumber Bahagia,{{ \Carbon\Carbon::parse($sksp->created_at)->translatedFormat('d F Y') }}</td>
        </tr>
        <tr>
            <td>Kepala Kampung Sumber Bahagia</td>
        </tr>
        <tr>
            <td style="padding-right: 70px;"><br><br><br><b>SETIO HUDI</b></td>
        </tr>
    </table>
</body>
</html>
