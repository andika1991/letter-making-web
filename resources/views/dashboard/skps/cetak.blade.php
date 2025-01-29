<!DOCTYPE html>
<html lang="id">
<head>
    <title>Surat Keterangan Penduduk Sementara</title>
    <style>
        body {
            margin: 0 auto;
            padding: 20px;
            width: 600px;
            font-family: 'Cambria Math', 'Georgia', serif;
            line-height: 1.6;
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        .header-table {
            margin-bottom: 20px;
        }
        .header-table img {
            width: 70px;
            height: 70px;
        }
        .header-title {
            text-align: center;
        }
        .header-title h1, .header-title h2, .header-title h3 {
            margin: 5px 0;
        }
        .header-title h1 {
            font-size: 20px;
            font-weight: bold;
        }
        .header-title h2 {
            font-size: 18px;
            font-weight: bold;
        }
        .header-title h3 {
            font-size: 14px;
        }
        .header-title p {
            margin: 2px 0;
            font-size: 12px;
        }
        hr {
            border: 1px solid black;
            margin: 10px 0;
        }
        .surat-title {
            text-decoration: underline;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            margin: 20px 0 10px 0;
        }
        .nomor-surat {
            font-size: 14px;
            text-align: center;
            margin-bottom: 20px;
        }
        .content-table td {
            padding: 5px 0;
            vertical-align: top;
        }
        .content-table td:first-child {
            width: 35%;
        }
        .content-table td:nth-child(2) {
            width: 5%;
        }
        .content-table td:last-child {
            width: 60%;
        }
        .signature-section {
            text-align: right;
            margin-top: 30px;
        }
        .signature {
            font-weight: bold;
            
            margin-bottom: 10px;
            padding-left: 80px;
        }
    </style>
</head>
<body>
    <center>
        <table class="header-table">
            <tr>
                <td><img src="dashmin/img/lampung tengah.png'" alt="Logo" /></td>
                <td>
                    <div class="header-title">
                        <h3>PEMERINTAH KABUPATEN LAMPUNG TENGAH</h3>
                        <h3>KECAMATAN SEPUTIH BANYAK</h3>
                        <h1>KAMPUNG SUMBER BAHAGIA</h1>
                        <p><i>Alamat: Jl. Simpang Lima Sumber Bahagia, Kec. Seputih Banyak, Kab. Lampung Tengah</i></p>
                        <p><i>Kode Pos: 34156</i></p>
                    </div>
                </td>
            </tr>
        </table>
        <hr />
    </center>

    <p class="surat-title">SURAT KETERANGAN PENDUDUK SEMENTARA</p>
    <p class="nomor-surat">Nomor: 147.2/{{$skps->nosurat}}/SK.PS/KP.01/VII/2024</p>

    <table class="content-table">
        <tr>
            <td colspan="3">
                Kepala Kampung Sumber Bahagia Kecamatan Seputih Banyak Kabupaten Lampung Tengah, menerangkan bahwa:
            </td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">Nama</td>
            <td>:</td>
            <td>{{$skps->nama}}</td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">NIK</td>
            <td>:</td>
            <td>{{$skps->nik}}</td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td>{{$skps->ttl}}</td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">Jenis Kelamin</td>
            <td>:</td>
            <td>
                @if ($skps->jeniskelam == 'L')
                    Laki-Laki
                @else
                    Perempuan
                @endif
            </td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">Agama</td>
            <td>:</td>
            <td>{{$skps->agama}}</td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">Pekerjaan</td>
            <td>:</td>
            <td>{{$skps->pekerjaan}}</td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">Kewarganegaraan</td>
            <td>:</td>
            <td>{{$skps->kewarga}}</td>
        </tr>
        <tr>
            <td style="padding-left: 50px;">Alamat</td>
            <td>:</td>
            <td>{{$skps->alamat}}</td>
        </tr>
    </table>

    <p>Adalah benar-benar penduduk sementara yang tinggal pada alamat tersebut di atas. Surat keterangan ini dibuat untuk keperluan {{$skps->tujuan}}.</p>

    <p>Demikian surat ini dibuat, agar dapat digunakan sebagaimana mestinya.</p>
    <div class="signature-section">
        <table style="width: 100%;">
            <tr>
                <td style="text-align: left; vertical-align: bottom; padding-left: 50px; width: 50%;">
                    <p ><b>Tanda Tangan YBS</b></p>
                    <br><br>
                    <p>{{$skps->nama}}</p>
                </td>
                <td style="text-align: right; vertical-align: bottom; padding-right: 50px; width: 50%;">
                    <p>Dikeluarkan di: Sumber Bahagia</p>
                    <p>Pada Tanggal: {{ \Carbon\Carbon::parse($skps->created_at)->translatedFormat('d F Y') }}</p>
                <p > <b>Kepala Kampung Sumber Bahagia</b></p>
                    <br><br>
                    <p style="padding-right:70px;">SETIO HUDI</p>
                </td>
            </tr>
        </table>
    </div>
    
    
    
</body>
</html>
