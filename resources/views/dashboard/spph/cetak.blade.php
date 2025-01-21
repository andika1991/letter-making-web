<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Pernyataan Pemilik Hiburan</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            font-size: 15px;
            line-height: 1.5;
            margin: 30px;
        }
        .content-table {
            width: 100%;
            border-collapse: collapse;
        }
        .content-table td {
            vertical-align: top;
            padding: 2px 3px; /* Adjust padding to make it more compact */
        }
        .signature {
            margin-top: 20px;
            text-align: center;
        }
        .signature p {
            margin: 0;
            line-height: 1.5;
        }
        .materai {
            margin-top: 20px;
            text-align: center;
        }
        ol {
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <h3 style="text-align: center; text-decoration: underline; margin-bottom: 5px;">SURAT PERNYATAAN PEMILIK HIBURAN</h3>

    <p>Yang bertanda tangan di bawah ini :</p>
    <table class="content-table">
        <tr>
            <td style="width: 25%; padding-left:60px;">Nama</td>
            <td>: {{$spph->nama}}</td>
        </tr>
        <tr>
            <td style="padding-left:60px;">Umur</td>
            <td>:{{$spph->umur}} Tahun</td>
        </tr>
        <tr>
            <td style="padding-left:60px;">Pekerjaan</td>
            <td>: {{$spph->pekerjaan}}</td>
        </tr>
        <tr>
            <td style="padding-left:60px;">Hiburan</td>
            <td>: {{$spph->hiburan}}</td>
        </tr>
        <tr>
            <td style="padding-left:60px;">Alamat</td>
            <td>: {{$spph->alamat}}</td>
        </tr>
        <tr>
            <td style="padding-left:60px;">No HP</td>
            <td>: {{$spph->nohp}}</td>
        </tr>
    </table>

    <p>Sehubungan dengan permohonan tentang izin keramaian Dalam Rangka kegiatan Hiburan yang akan dilaksanakan pada:</p>
    <table class="content-table">
        <tr>
            <td style="width: 25%;padding-left:60px;">Hari / Tanggal</td>
            <td>: {{ Carbon\Carbon::parse($spph->haritgl)->translatedFormat('l, d F Y') }}
            </td>
        </tr>
        <tr>
            <td style="padding-left:60px;">Waktu</td>
            <td>: 09.00-22.00 WIB</td>
        </tr>
        <tr>
            <td style="padding-left:60px;">Tempat</td>
            <td>: {{$spph->tempat}}</td>
        </tr>
    </table>

    <p>Dengan ini kami selaku penyelenggara bersedia membuat pernyataan sebagai berikut:</p>
    <ol>
        <li>Setiap ada kegiatan masyarakat yang menyajikan Orkes, Orgen Tunggal, dan hiburan musik lainnya, sepakat untuk waktu kegiatan sampai Pukul 18.00 WIB. Dengan batas maksimal 21.00 WIB.</li>
        <li>Sanggup dan bersedia menjamin keamanan dan situasi kamtibmas yang kondusif selama kegiatan berlangsung.</li>
        <li>Sanggup dan bersedia mentaati dan mematuhi ketentuan yang tertera dalam surat izin keramaian.</li>
        <li>Sanggup melaksanakan permainan musik sesuai dengan waktu yang telah ditentukan dan dilarang musik disco/remix, serta koplo dan sejenisnya yang bertentangan dengan kepribadian bangsa Indonesia.</li>
        <li>Bilamana terdapat penyimpangan dan pelanggaran terhadap ketentuan dalam surat pernyataan ini, saya yang bertanda tangan dalam surat pernyataan ini sanggup untuk dapat dibubarkan, dan bersedia alat-alat hiburan orgen tunggal diamankan/dibawa ke Polres Lampung Tengah serta akan dikenai sanksi tidak boleh main dan izin dicabut dengan pihak terkait sampai batas waktu yang tidak ditentukan.</li>
    </ol>

    <p>Demikian Surat Pernyataan ini saya buat dengan sebenarnya dalam keadaan sehat jasmani dan rohani dan tanpa paksaan dari pihak manapun.</p>
    <div class="signature">
        <p>Sumber Bahagia, 02 Januari 2025</p>
        <p>Yang membuat pernyataan</p>
        <div class="materai">
            <p>Materai 10.000</p>
        </div>
        <p><strong>SETIO HUDI</strong></p>
    </div>
</body>
</html>
