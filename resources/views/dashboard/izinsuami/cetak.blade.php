<!DOCTYPE html>
<html lang="id">
<head>
    <title>Surat Keterangan Izin Suami</title>
    <style>
        body {
            margin: 0 auto;
            width: 650px;
            font-family: 'Times New Roman', serif;
            font-size: 14px; /* Ukuran font lebih kecil */
            line-height: 1.2; /* Jarak antar baris lebih rapat */
        }
        table {
            width: 100%;
            border-spacing: 0;
            margin-bottom: 10px;
        }
        .header-table {
            margin-bottom: 15px;
        }
        .header-table img {
            width: 70px; /* Ukuran logo lebih kecil */
            height: 70px;
        }
        .header-title {
            text-align: center;
        }
        .header-title h1, .header-title h2, .header-title h3 {
            margin: 0;
            font-weight: bold;
        }
        .header-title h1 {
            font-size: 18px; /* Ukuran font lebih kecil */
        }
        .header-title h2 {
            font-size: 15px;
        }
        .header-title h3 {
            font-size: 12px;
        }
        .header-title p {
            margin: 2px 0;
            font-size: 10px;
        }
        hr {
            border: 1px solid black;
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
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .content-table td {
            vertical-align: top;
            padding: 2px 0;
            font-size: 13px; /* Ukuran font isi lebih kecil */
        }
        .content-table td:first-child {
            width: 30%; /* Rasio kolom pertama lebih kecil */
        }
        .text-right {
            text-align: right;
            margin-right: 100px;
        }
        .signature-table {
            width: 100%;
            margin-top: 15px; /* Jarak tanda tangan lebih kecil */
            text-align: center;
        }
        .signature {
            margin-top: 40px;
            font-weight: bold;
            text-decoration: underline;
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
                    <p>Kode Pos: 34156</p>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2"><hr /></td>
        </tr>
    </table>

    <div class="surat-title">SURAT KETERANGAN IZIN SUAMI</div>
    <div class="nomor-surat">Nomor: 140.2/{{$Izinsuami->nosurat}}/Kp.01/XI/2024</div>

    <p>Yang bertanda tangan di bawah ini Kepala Kampung Sumber Bahagia Kecamatan Seputih Banyak, menerangkan:</p>

    <table class="content-table">
        <tr>
            <td colspan="2"><strong>1. SUAMI:</strong></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: {{$Izinsuami->namasuami}}</td>
        </tr>
        <tr>
            <td>Tempat/Tgl Lahir</td>
            <td>: {{$Izinsuami->ttlsuami}}</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>: {{$Izinsuami->niksuami}}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: Perempuan</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>: {{$Izinsuami->agamasuami}}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: {{$Izinsuami->pekerjaansuami}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:{{$Izinsuami->alamat}}</td>
        </tr>
    </table>

    <p>Dengan ini saya selaku suami dari nama tersebut di bawah ini:</p>

    <table class="content-table">
        <tr>
            <td colspan="2"><strong>2. ISTRI:</strong></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: {{$Izinsuami->namaistri}}</td>
        </tr>
        <tr>
            <td>Tempat/Tgl Lahir</td>
            <td>: {{$Izinsuami->ttlsuami}}</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>: {{$Izinsuami->niksuami}}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: Perempuan</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>: {{$Izinsuami->agamaistri}}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: {{$Izinsuami->pekerjaanistri}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:  {{$Izinsuami->alamatistri}}</td>
        </tr>
    </table>

    <p>Pada saat ini nama tersebut di atas benar-benar telah mendapatkan izin dari SUAMI {{$Izinsuami->tujuan}} dengan persyaratan dan ketentuan yang telah ditetapkan.</p>
    <p>Demikian Surat Izin ini kami buat untuk dapat dipergunakan sebagaimana mestinya.</p>

    <table class="content-table">
        <tr>
            <td class="text-right">Sumber Bahagia, {{ \Carbon\Carbon::parse($Izinsuami->createdat)->format('d-F-Y') }}</td>
        </tr>
    </table>

    <table class="signature-table">
        <tr>
            <td>Yang Diberi Izin</td>
            <td>Yang Memberi Izin</td>
        </tr>
        <tr>
            <td><br><br><br></td>
            <td></td>
        </tr>
        <tr>
            <td><u>{{$Izinsuami->namaistri}}</u><br>Istri</td>
            <td><u>{{$Izinsuami->namasuami}}</u><br>Suami</td>
        </tr>
        <tr>
            <td colspan="2"><br>Kepala Kampung Sumber Bahagia</td>
        </tr>
        <br><br><br>
        <tr>
            <td colspan="2"><br><u>SETIO HUDI</u></td>
        </tr>
    </table>
</body>
</html>
