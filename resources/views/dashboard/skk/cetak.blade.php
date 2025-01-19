<!DOCTYPE html>
<html lang="id">
<head>
    <title>Surat Keterangan Kematian</title>
    <style>
        body {
            margin: 0 auto;
            width: 600px;
            font-family: 'Cambria Math', 'Georgia', serif;
            line-height: 1.2;
            font-size: 16px;
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
            font-size: 16px;
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
            margin-top: 40px;
            font-weight: bold;
            text-decoration: underline;
            margin-right: 60px;
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

    <h2 class="surat-title">SURAT KETERANGAN KEMATIAN</h2>
    <p class="nomor-surat">Nomor: 140/{{$skk->nosurat}}/SKK/KP.01/X/2025</p>

    <p>Yang bertanda tangan di bawah ini, Kepala Kampung Sumber Bahagia, dengan ini menerangkan bahwa:</p>

    <table class="content-table">
        <tr>
            <td style="padding-left:30px;">Nama</td>
            <td>:<b>{{$skk->nama}}</b></td>
        </tr>
        <tr>
            <td style="padding-left:30px;">Tempat/Tanggal Lahir</td>
            <td>: {{$skk->tempatTanggallahir}}</td>
        </tr>
        <tr>
            <td style="padding-left:30px;">Umur Terakhir</td>
            <td>: {{$skk->umur}} Tahun</td>
        </tr>
        <tr>
            <td style="padding-left:30px;">Jenis Kelamin</td>
            <td>: {{$skk->jeniskelamin}}</td>
        </tr>
        <tr>
            <td style="padding-left:30px;">Agama</td>
            <td>: {{$skk->agama}}</td>
        </tr>
        <tr>
            <td style="padding-left:30px;">Pekerjaan</td>
            <td>: {{$skk->pekerjaan}}</td>
        </tr>
        <tr>
            <td style="padding-left:30px;">Alamat</td>
            <td>: {{$skk->alamat}}</td>
        </tr>
    </table>
    <?php
    function hariDalamBahasaIndonesia($tanggal)
    {
        $hariInggris = date('l', strtotime($tanggal));
        $hariIndonesia = [
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu',
        ];
    
        return $hariIndonesia[$hariInggris];
    }
    
    $tanggal = $skk->tglmeninggal; // Misalnya: 2025-01-22
    $formatTanggal = hariDalamBahasaIndonesia($tanggal) . ', ' . date('d-m-Y', strtotime($tanggal));
    ?>
    <p>Telah meninggal dunia pada:</p>

    <table class="content-table">
        <tr>
            <td style="padding-left:30px;">Hari/Tanggal</td>
            <td>: {{$formatTanggal}}</td>

        </tr>
        <tr>
            <td style="padding-left:30px;">Waktu</td>
            <td>: {{$skk->waktu}} WIB</td>
        </tr>
        <tr>
            <td style="padding-left:30px;">Tempat Kematian</td>
            <td>: {{$skk->tempatkematian}}</td>
        </tr>
        <tr>
            <td style="padding-left:30px;">Lokasi Pemakaman</td>
            <td>: {{$skk->lokasipemakaman}}</td>
        </tr>
        <tr>
            <td style="padding-left:30px;">Sebab Kematian</td>
            <td>: {{$skk->sebabkematian}}</td>
        </tr>
    </table>

    <p>Demikian Surat Keterangan Kematian ini dikeluarkan agar dapat dipergunakan sebagaimana mestinya.</p>

    <table class="signature-table">
        <tr>
            <td>
                <p>Sumber Bahagia, {{ \Carbon\Carbon::parse($skk->createdat)->format('d F Y') }}</p>
                <p>Kepala Kampung Sumber Bahagia</p>
                <br><br>
                <div class="signature">SETIO HUDI</div>
            </td>
        </tr>
    </table>
</body>
</html>
