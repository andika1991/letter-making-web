<!DOCTYPE html>
<html lang="en">
<head>
    <title>Surat Izin Orang Tua</title>
    <style>
        body {
            margin: 0 auto;
            width: 600px;
            font-family: 'Cambria Math', 'Georgia';
            font-size: 14px;
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
                <td><img src="{{ asset('dashmin/img/lampung tengah.png') }}" alt="Logo" /></td>
                <td>
                    <div class="header-title">
                        <h1>PEMERINTAH KABUPATEN LAMPUNG TENGAH</h1>
                        <h2>KECAMATAN SEPUTIH BANYAK</h2>
                        <h3>KAMPUNG SUMBER BAHAGIA</h3>
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
                    <u>SURAT IZIN ORANG TUA</u>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;" class="nomor-surat">
                    Nomor: 140.2/{{ $surat->nomor_surat }}/KP.01/V/2025
                </td>
            </tr>
        </table>

        <table class="content-table" style="margin-top: 10px">
            <tr>
                <td colspan="3">Yang bertanda tangan di bawah ini Kepala Kampung Sumber Bahagia Kecamatan Seputih Banyak menerangkan:</td>
            </tr>
            <tr>
                <td style="padding-left:24px; padding-top:10px;"> <b>1. {{ strtoupper($surat->pemberi_izin_role) }}:</b></td>
            </tr>
            <tr>
                <td style="padding-left:44px;">Nama</td>
                <td>: {{ $surat->pemberi_izin_nama }}</td>
            </tr>
            <tr>
                <td style="padding-left:44px;">Tempat/Tgl Lahir</td>
                <td>: {{ $surat->pemberi_izin_tempat_lahir }}, {{ $surat->pemberi_izin_tgl_lahir }}</td>
            </tr>
            <tr>
                <td style="padding-left:44px;">NIK</td>
                <td>: {{ $surat->pemberi_izin_nik }}</td>
            </tr>
            <tr>
                <td style="padding-left:44px;">Jenis Kelamin</td>
                <td>: {{ $surat->pemberi_izin_jenis_kelamin }}</td>
            </tr>
            <tr>
                <td style="padding-left:44px;">Agama</td>
                <td>: {{ $surat->pemberi_izin_agama }}</td>
            </tr>
            <tr>
                <td style="padding-left:44px;">Pekerjaan</td>
                <td>: {{ $surat->pemberi_izin_pekerjaan }}</td>
            </tr>
            <tr>
                <td style="padding-left:44px;">Alamat</td>
                <td>: {{ $surat->pemberi_izin_alamat }}</td>
            </tr>
        </table>

        <table class="content-table" style="margin-top:10px;">
            <tr>
                <td colspan="3">Yang bertanda tangan di bawah ini Kepala Kampung Sumber Bahagia Kecamatan Seputih Banyak menerangkan:</td>
            </tr>
            <tr>
                <td style="padding-left:24px; padding-top:10px;"> <b>2. {{ strtoupper($surat->pemohon_izin_role) }}:</b></td>
            </tr>
            <tr>
                <td style="padding-left:44px;">Nama</td>
                <td>: {{ $surat->pemohon_izin_nama }}</td>
            </tr>
            <tr>
                <td style="padding-left:44px;">Tempat/Tgl Lahir</td>
                <td>: {{ $surat->pemohon_izin_tempat_lahir }}, {{ $surat->pemohon_izin_tgl_lahir }}</td>
            </tr>
            <tr>
                <td style="padding-left:44px;">NIK</td>
                <td>: {{ $surat->pemohon_izin_nik }}</td>
            </tr>
            <tr>
                <td style="padding-left:44px;">Jenis Kelamin</td>
                <td>: {{ $surat->pemohon_izin_jenis_kelamin }}</td>
            </tr>
            <tr>
                <td style="padding-left:44px;">Agama</td>
                <td>: {{ $surat->pemohon_izin_agama }}</td>
            </tr>
            <tr>
                <td style="padding-left:44px;">Pekerjaan</td>
                <td>: {{ $surat->pemohon_izin_pekerjaan }}</td>
            </tr>
            <tr>
                <td style="padding-left:44px;">Alamat</td>
                <td>: {{ $surat->pemohon_izin_alamat }}</td>
            </tr>
        </table>

        <table class="content-table" style="margin-top: 10px;">
            <tr>
                <td>Pada saat ini Nama tersebut diatas benar-benar telah mendapatkan izin dari  {{ strtoupper($surat->pemberi_izin_role) }} untuk {{ $surat->keperluan}} dengan persyaratan dan ketentuan yang telah ditetapkan.</td>
            </tr>
            <tr>
                <td colspan="3">Demikian Surat Izin ini kami buat untuk dapat dipergunakan sebagaimana mestinya.</td>
            </tr>
        </table>

        <table class="tanggal-surat" style="width: 100%; margin-top: 10px;">
            <tr>
                <td style="text-align: right;">Sumber Bahagia, {{ date('d F Y') }}</td>
            </tr>
        </table>
        
        <table class="signature-table" style="width: 100%; margin-top: 10px;">
            <tr>
                <td style="text-align: center; width: 50%;">
                    Yang Diberi Izin,<br><br><br>
                    <b><u>{{ strtoupper($surat->pemohon_izin_nama) }}</u></b><br>
                    {{ $surat->pemohon_izin_role }}
                </td>
                
                <td style="text-align: center; width: 50%;">
                    Yang Memberi Izin,<br><br><br>
                    <b><u>{{ strtoupper($surat->pemberi_izin_nama) }}</u></b><br>
                    {{ $surat->pemberi_izin_role }}
                </td>
            </tr>
        </table>

        <table style="width: 100%; margin-top: 20px;">
            <tr>
                <td style="text-align: center;">
                    Mengetahui,<br>Kepala Kampung Sumber Bahagia<br><br><br>
                    <b><u>{{ strtoupper($surat->kepala_kampung) }}</u></b>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
