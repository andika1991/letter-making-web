<!DOCTYPE html>
<html lang="en">
<head>
    <title>Surat Jalan Sapi</title>
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
        body {
            margin: 0 auto;
            width: 600px;
            font-family: 'Cambria Math', 'Georgia';
            font-size: 16px;
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
            font-size: 12px;}
    </style>
</head>
<body>
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

    <div class="surat-title">
        SURAT JALAN HEWAN TERNAK
    </div>
    <div class="nomor-surat">
        Nomor: 147.2/{{$sapi->nosurat}}/SKU/KP.01/XI/2025
    </div>

    <table class="content-table">
        <tr>
            <td colspan="2">
                Yang bertanda tangan di bawah ini Kepala Kampung Sumber Bahagia, Kecamatan Seputih Banyak, Kabupaten Lampung Tengah, menerangkan dengan sebenarnya bahwa:
            </td>
        </tr>
    </table>

    <table class="content-table">
        <tr>
            <td>Nama</td>
            <td>: {{$sapi->nama}}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: {{$sapi->jeniskelam}}</td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>: {{$sapi->umur}} Tahun</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: {{$sapi->pekerjaan}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: {{$sapi->alamat}}</td>
        </tr>
    </table>

    <table class="content-table">
        <tr>
            <td colspan="2">Mengangkut hewan ternak sebagai berikut:</td>
        </tr>
        <tr>
            <td>Diperoleh/Asal</td>
            <td>: {{$sapi->diperolehasal}}</td>
        </tr>
        <tr>
            <td>Jenis Hewan</td>
            <td>: {{$sapi->jenishewan}}</td>
        </tr>
        <tr>
            <td>Banyaknya</td>
            <td>: {{$sapi->banyaknya}} Ekor</td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>: {{$sapi->umur_hewan}} Tahun</td>
        </tr>
        <tr>
            <td>Warna</td>
            <td>: {{$sapi->warna}}</td>
        </tr>
        <tr>
            <td>Tujuan</td>
            <td>: {{$sapi->tujuan}}</td>
        </tr>
        <tr>
            <td>Jenis Angkutan</td>
            <td>: {{$sapi->jenisangkutan}}</td>
        </tr>
    </table>

    <table class="content-table">
        <tr>
            <td>Demikian Surat Keterangan ini dibuat dengan sebenarnya dan dapat dipergunakan sebagaimana mestinya.</td>
        </tr>
    </table>

    <table class="signature-table">
        <tr>
            <td>Sumber Bahagia, {{ \Carbon\Carbon::parse($sapi->created_at)->translatedFormat('d F Y') }}</td>
        </tr>
        <tr>
            <td>Kepala Kampung Sumber Bahagia</td>
        </tr>
        <br>
        <tr>
            <td style="padding-top: 50px;padding-right:70px;"><strong>SETIO HUDI</strong></td>
        </tr>
    </table>
</body>
</html>
