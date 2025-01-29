<!DOCTYPE html>
<html lang="id">
<head>
    <title>Surat Keterangan Beda Nama</title>
    <style>
        body {
            margin: 0 auto;
            width: 600px;
            font-family: 'Cambria Math', 'Georgia', serif;
            line-height: 1.2;
            font-size: 14px;
        }
        table {
            width: 100%;
            margin-bottom: 5px;
        }
        .header-table {
            margin-bottom: 10px;
        }
        .header-table img {
            width: 70px;
            height: 70px;
        }
        .header-title {
            text-align: center;
        }
        .header-title h1, .header-title h2, .header-title h3 {
            margin: 3px 0;
        }
        .header-title h1 {
            font-size: 18px;
            font-weight: bold;
        }
        .header-title h2 {
            font-size: 14px;
            font-weight: bold;
        }
        .header-title h3 {
            font-size: 12px;
        }
        .header-title p {
            margin: 1px 0;
            font-size: 11px;
        }
        hr {
            border: 1px solid black;
        }
        .surat-title {
            font-size: 14px;
            font-weight: bold;
            text-align: center;
            margin: 10px 0 5px 0;
        }
        .nomor-surat {
            font-size: 12px;
            text-align: center;
            margin-bottom: 10px;
        }
        .content-table td {
            padding: 2px 0;
            vertical-align: top;
        }
        .content-table td:first-child {
            width: 35%;
        }
        .signature-table {
            margin-top: 20px;
            text-align: right;
        }
        .signature-table td {
            padding-top: 10px;
        }
        .signature {
            margin-top: 10px;
            font-weight: bold;
            
            margin-right: 60px;
            text-align: right;
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
    </center>

    <div class="surat-title">
        SURAT KETERANGAN BEDA NAMA
    </div>
    <div class="nomor-surat">
        Nomor: 140.2 /{{$skbi->nosurat}}/KP.01/XI/2024
    </div>

    <p>Yang bertanda tangan di bawah ini Kepala Kampung Sumber Bahagia Kecamatan Seputih Banyak menerangkan:</p>

    <p><strong>Identitas di KK/KTP Tertulis:</strong></p>
    <table class="content-table">
        <tr>
            <td>Nama</td>
            <td>: {{$skbi->nama}}</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>: {{$skbi->nik}}</td>
        </tr>
        <tr>
            <td>Tempat, Tgl. Lahir</td>
            <td>: {{$skbi->ttl}} </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: {{ $skbi->jeniskelam == 'L' ? 'Laki-laki' : ($skbi->jeniskelam == 'P' ? 'Perempuan' : '-') }}</td>

        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: {{$skbi->pekerjaan}}</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>: {{$skbi->agama}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: {{$skbi->alamat}}</td>
        </tr>
    </table>

    <p><strong>Sedangkan identitas di sertifikat tertulis:</strong></p>
    <table class="content-table">
        <tr>
            <td>Nama</td>
            <td>: {{$skbi->nama_anggota}}</td>
        </tr>
        <tr>
            <td>No Hak Milik Sertifikat</td>
            <td>: {{$skbi->nohkms}}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: {{$skbi->jeniskelamin_anggota}}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>:  {{$skbi->pekerjaan}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:  {{$skbi->alamat_anggota}}</td>
        </tr>
    </table>

    <p>Identitas yang terdapat di KTP/KK/Sertifikat dengan tersebut di atas, merupakan orang yang sama. Masyarakat Kampung Sumber Bahagia Kecamatan Seputih Banyak menerangkan terdapat perbedaan nama antara KTP/KK dan sertifikatnya, yang benar adalah yang ada pada KTP/KK tersebut.</p>

    <p>Demikian surat keterangan ini dibuat dengan sebenarnya agar dapat dipergunakan sebagaimana mestinya.</p>

    <table  style="text-align: right">
        <tr>
            <td >Dikeluarkan di: Sumber Bahagia</td>
            
        </tr>
        <tr>
            <td>Pada Tanggal L:{{ \Carbon\Carbon::parse($skbi->created_at)->translatedFormat('d F Y') }}</td>
            
        </tr>
    </table>

    <div class="signature">
        Kepala Kampung Sumber Bahagia
        <br><br><br><br>
        <p style="padding-right: 80px;"><u>SETIO HUDI</u>  </p>
    </div>
    
</body>
</html>
