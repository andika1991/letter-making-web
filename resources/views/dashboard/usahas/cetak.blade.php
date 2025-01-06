<!DOCTYPE html>
<html lang="en">
<head>
    <title>Surat Keterangan Usaha</title>
    <style>
        /* Center the body in dompdf */
        body {
            margin: 0 auto;
            width: 600px;
            font-family: 'Times New Roman', Times, serif;
        }
        table {
            width: 100%;
            margin-bottom: 10px; /* Reduce spacing between tables */
        }
        .header-table {
            margin-bottom: 20px; /* Reduce header-table margin */
        }
        .header-table img {
            width: 90px; /* Adjusted logo size */
            height: 90px; /* Adjusted logo size */
        }
        .header-title {
            text-align: center;
        }
        .header-title h5 {
            font-size: 18px; /* Adjust font size */
            margin: 2px 0; /* Reduce space between lines */
        }
        .header-title h4 {
            font-size: 16px; /* Adjust font size */
            margin: 2px 0; /* Reduce space between lines */
        }
        .header-title h3 {
            font-size: 14px; /* Adjust font size */
            margin: 2px 0; /* Reduce space between lines */
        }
        .header-title p {
            margin: 2px 0; /* Reduce space between lines */
            font-size: 12px;
        }
        .content-table {
            margin-top: 15px; /* Reduce content-table margin */
        }
        .signature-table {
            margin-top: 30px; /* Adjust spacing for signatures */
            text-align: left;
        }
        .qr-code {
            width: 80px;
            height: 80px;
            margin-bottom: 10px; /* Adjust QR code spacing */
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
                        <h5><b>PEMERINTAH KABUPATEN LAMPUNG TENGAH</b></h5>
                        <h4><b>KECAMATAN SEPUTIH BANYAK</b></h4>
                        <h3><b>KAMPUNG SUMBER BAHAGIA</b></h3>
                        <p><i>Jalan desa No.01, Sumber Bahagia</i></p>
                        <p><i>Kode Pos: 34156</i></p>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr style="border: 1px solid" /></td>
            </tr>
        </table>

        <!-- Content remains unchanged -->
        <table class="content-table">
            <tr>
                <td style="text-align: center; font-size: 18px; font-weight: bold;">
                    <u>SURAT KETERANGAN USAHA</u>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">Nomor : {{ $usaha->kodeSurat }}/{{ $usaha->noSurat }}/2023</td>
            </tr>
        </table>

        <table class="content-table">
            <tr>
                <td>Yang bertanda tangan di bawah ini,Kepala Kampung Sumber Bahagia Kecamatan Seputih Banyak Kabupaten Lampung Tengah,menerangkan bahwa:</td>
            </tr>
        </table>

        <table class="content-table">
            <tr>
                <td width="120">Nama</td>
                <td width="10">:</td>
                <td>{{ $usaha->nama }}</td>
            </tr>
            <tr>
                <td width="120">NIK</td>
                <td width="10">:</td>
                <td>{{ $usaha->nik }}</td>
            </tr>
            <tr>
                <td width="120">Tempat, Tanggal Lahir</td>
                <td width="10">:</td>
                <td>{{ $usaha->tempatTglLahir }}</td>
            </tr>
            <tr>
                <td width="120">Pekerjaan</td>
                <td width="10">:</td>
                <td>{{ $usaha->pekerjaan }}</td>
            </tr>
            <tr>
                <td width="120">Alamat</td>
                <td width="10">:</td>
                <td>{{ $usaha->alamat }}</td>
            </tr>
        </table>

        <table class="content-table">
            <tr>
                <td>Adalah benar yang bersangkutan memiliki usaha dengan rincian sebagai berikut:</td>
            </tr>
        </table>

        <table class="content-table">
            <tr>
                <td width="120">Nama Usaha</td>
                <td width="10">:</td>
                <td>{{ $usaha->namaUsaha }}</td>
            </tr>
            <tr>
                <td width="120">Jenis Usaha</td>
                <td width="10">:</td>
                <td>{{ $usaha->jenisUsaha }}</td>
            </tr>
            <tr>
                <td width="120">Alamat Usaha</td>
                <td width="10">:</td>
                <td>{{ $usaha->alamatUsaha }}</td>
            </tr>
            <tr>
                <td width="120">Mulai Berdiri</td>
                <td width="10">:</td>
                <td>{{ $usaha->mulaiBerdiri }}</td>
            </tr>
        </table>

        <table class="content-table">
            <tr>
              <td >
                Usaha ini masih aktif berjalan hingga saat ini. Surat keterangan ini dibuat atas permintaan yang bersangkutan untuk keperluan {{ strip_tags($usaha->keterangan) }}
                .
            </td>
            </tr>
        </table>

        <table class="content-table">
            <tr>
                <td>Demikian surat keterangan ini kami perbuat untuk dapat dipergunakan seperlunya.</td>
            </tr>
        </table>

        <table class="signature-table">
            <tr>
                <td width="300"></td>
                <td style="text-align: left">Sumber Bahagia, {{ date('d M Y', strtotime($usaha->tglSurat)); }}</td>
            
              </tr>
            <tr>
                <td width="340" style="text-align: right; margin-top: 30px;">
                    <img src="{{ asset($usaha->qrcode) }}" class="qr-code" alt="QR Code" />
                </td>
                <td width="300"></td>
                <td style="text-align: left">An. {{ $usaha->ttd }}</td>
            </tr>
        </table>

        <table class="signature-table" style="margin-bottom: 50px">
            <tr>
                <td width="300"></td>
                <td style="text-align: left">{{ $usaha->namaTtd }}</td>
            </tr>
        </table>
    </center>
</body>
</html>
