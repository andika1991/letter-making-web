<!DOCTYPE html>
<html lang="id">
<head>
    <title>Surat Keterangan Telah Menikah</title>
    <style>
        body {
            margin: 0 auto;
            width: 600px;
            font-family: 'Cambria Math', 'Georgia';
            font-size: 15px;
        }
        table {
            width: 100%;
            margin: 0;
            padding: 0;
            border-spacing: 0;
        }
        .header-table {
            margin-bottom: 15px;
        }
        .header-table img {
            width: 85px;
            height: 85px;
        }
        .header-title {
            text-align: center;
        }
        .header-title h1 {
            font-size: 18px;
            margin: 5px 0;
            font-weight: bold;
        }
        .header-title h2 {
            font-size: 16px;
            margin: 5px 0;
            font-weight: bold;
        }
        .header-title h3 {
            font-size: 14px;
            margin: 5px 0;
        }
        .header-title p {
            margin: 2px 0;
            font-size: 12px;
        }
        .content-table td {
            vertical-align: top;
            padding: 2px 0;
            padding-left: 30px;
        }
        .signature-table {
            margin-top: 20px;
        }
        .signature-table td {
            padding-top: 10px;
        }
        .surat-title {
            font-family: 'Cambria Math', serif;
            font-size: 16px;
            font-weight: bold;
        }
        .nomor-surat {
            font-family: 'Cambria Math', serif;
            font-size: 14px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <center>
        <table class="header-table">
            <tr>
                <td><img src="dashmin/img/lampung tengah.png" alt="Logo" /></td>
                <td>
                    <div class="header-title">
                        <h3>PEMERINTAH KABUPATEN LAMPUNG TENGAH</h3>
                        <h3>KECAMATAN SEPUTIH BANYAK</h3>
                        <h1>KAMPUNG SUMBER BAHAGIA</h1>
                        <p><i>Alamat: Jl. Simpang Lima Sumber Bahagia, Kec. Seputih Banyak, Kab. Lampung Tengah</i></p>
                        <p>Kode Pos: 34156</p>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr style="border: 1px solid black;" /></td>
            </tr>
        </table>

        <table class="content-table">
            <tr>
                <td style="text-align: center;" class="surat-title">
                    <u>SURAT KETERANGAN TELAH MENIKAH</u>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;" class="nomor-surat">
                    Nomor: 140.2/{{$telahmenikah->nosurat}}/Kp.01/XI/2024
                </td>
            </tr>
        </table>
    </center>

    <p>Yang bertanda tangan di bawah ini Kepala Kampung Sumber Bahagia Kecamatan Seputih Banyak menerangkan bahwa:</p>

    <table class="content-table">
        <tr>
            <td style="width: 20%;"><b>1.SUAMI</b></td>
            <td></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: {{$telahmenikah->namasuami}}</td>
        </tr>
        <tr>
            <td>Tempat/Tgl Lahir</td>
            <td>: {{$telahmenikah->ttlsuami}}</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>: {{$telahmenikah->niksuami}}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: Laki-Laki</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>: {{$telahmenikah->agama}}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: {{$telahmenikah->pekerjaan}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: {{$telahmenikah->alamat}}</td>
        </tr>
    </table>
<br>
    <table class="content-table">
        <tr>
            <td style="width: 20%;"><b>2.ISTRI</b></td>
            <td></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: {{$telahmenikah->namaistri}}</td>
        </tr>
        <tr>
            <td>Tempat/Tgl Lahir</td>
            <td>: {{$telahmenikah->ttlistri}}</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>: {{$telahmenikah->nikistri}}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: Perempuan</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>: {{$telahmenikah->agamaistri}}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: {{$telahmenikah->pekerjaanistri}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: {{$telahmenikah->alamatistri}}</td>
        </tr>
    </table>

    <p>Kedua nama di atas adalah benar pasangan suami istri yang menikah pada Tahun {{$telahmenikah->tahunmenikah}} hingga sekarang.</p>

    <p>Demikian surat keterangan ini kami buat untuk dapat dipergunakan sebagaimana mestinya.</p>

    <table class="signature-table">
        <tr>
            <td style="text-align: right;">Sumber Bahagia, {{ \Carbon\Carbon::parse($telahmenikah->created_at)->translatedFormat('d F Y') }}</td>
        </tr>
        <tr>
            <td style="text-align: right;">Yang Membuat Permohonan</td>
        </tr>
        <tr>
            <td style="padding-top: 50px; text-align: right; padding-right:40px;"><b><u>{{$telahmenikah->yangmembuatpernyataan}}</u></b></td>
        </tr>
        <tr>
            <td style="text-align: left;padding-left: 110px;">Mengetahui,</td>
        </tr>
        <tr>
            <td style="text-align: left; padding-left: 50px;">Kepala Kampung Sumber Bahagia</td>
        </tr>
        <tr>
            <td style="text-align: left;padding-top: 50px;padding-left: 110px;">SETIO HUDI</td>
        </tr>
    </table>
</body>
</html>
