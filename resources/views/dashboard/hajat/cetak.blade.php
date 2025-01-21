<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surat Pernyataan</title>
    <style>
        body {
        font-family: "Times New Roman", serif;
        margin: 8mm;
        font-size: 12px;
        line-height: 1.4;
    }

        h3 {
            font-size: 16px;
            text-decoration: underline;
            text-align: center;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            margin-bottom: 10px;
            border-collapse: collapse;
        }
        td {
            padding: 2px;
            border: none;
            vertical-align: top;
        }
        td:first-child {
            width: 30%;
        }
        table tr {
            line-height: 1.2;
        }
        ol {
            margin-left: 18px;
        }
        .text-center {
            text-align: center;
        }
        .mt-4 {
            margin-top: 10px; /* Jarak lebih kecil */
        }
        .mb-3 {
            margin-bottom: 5px; /* Jarak lebih kecil */
        }
        .table th, .table td {
            text-align: left;
        }
        .signature-section table {
            margin-top: 10px; /* Mengurangi jarak antar elemen tanda tangan */
        }
        @media print {
            body {
                margin: 5mm;
                font-size: 12px;
                line-height: 1.4;
            }
            h3 {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <h3 class="text-center text-decoration-underline mb-4">SURAT PERNYATAAN</h3>

    <p>Yang bertanda tangan di bawah ini:</p>
    <table class="table">
        <tr>
            <td>Nama</td>
            <td>: {{$hajat->nama}}</td>
        </tr>
        <tr>
            <td>Umur</td>
            <td>: {{$hajat->umur}} Tahun</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: {{$hajat->pekerjaan}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: {{$hajat->alamat}}</td>
        </tr>
        <tr>
            <td>No HP</td>
            <td>: {{$hajat->nohp}}</td>
        </tr>
    </table>

    <p>Sehubungan dengan permohonan tentang izin keramaian kepada Kapolsek Seputih Banyak:</p>
    <table class="table">
        <tr>
            <td>Nomor</td>
            <td>: 147.2/{{$hajat->nomor}}/Kp.01/I/2025</td>
        </tr>
        
            <td>Tanggal</td>
            <td>
                : {{
                    \Carbon\Carbon::parse(
                        \App\Models\Pik::where('nosurat', $hajat->nomor)->value('created_at')
                    )->translatedFormat(' d F Y') ?? '-'
                }}
            </td>
                
        </tr>
        <tr>
            <td>Dalam Rangka</td>
            <td>: {{$hajat->dalamrangka}}</td>
        </tr>
        <tr>
            <td>Dengan Hiburan</td>
            <td>: {{$hajat->denganhiburan}}</td>
        </tr>
    </table>

    <p>Yang akan dilaksanakan pada:</p>
    <table class="table">
        <tr>
            <td>Hari / Tanggal</td>
            <td>: {{ \Carbon\Carbon::parse($hajat->haritgl)->translatedFormat('l, d F Y') }}</td>

        </tr>
        <tr>
            <td>Waktu</td>
            <td>: {{$hajat->waktu}}</td>
        </tr>
        <tr>
            <td>Tempat</td>
            <td>: {{$hajat->tempat}}</td>
        </tr>
    </table>

    <p>Dengan ini kami selaku penyelenggara bersedia membuat pernyataan sebagai berikut:</p>
    <ol>
        <li>Hiburan Orgen Tunggal/Orkes Dangdut/Hiburan Musik lainnya hanya dilaksanakan sampai waktu Pukul 18.00 WIB dengan batas maksimal pukul 21.00 WIB.</li>
        <li>Sanggup dan bersedia menjamin keamanan dan situasi kamtibmas yang kondusif selama kegiatan berlangsung.</li>
        <li>Sanggup dan bersedia mentaati dan mematuhi ketentuan yang tertera dalam surat izin keramaian.</li>
        <li>Sanggup melaksanakan keramaian sesuai dengan waktu yang telah ditentukan, dan apabila kami melanggar maka kami siap dan bersedia untuk dibubarkan oleh pihak kepolisian.</li>
        <li>Ditempat dan seputaran lokasi menjamin untuk tidak memperbolehkan menyajikan dan menjual MINUMAN KERAS, NARKOBA, PERJUDIAN dalam bentuk apapun, dan membatasi musik disco/remix, serta koplo, dan sejenisnya yang bertentangan dengan kepribadian bangsa Indonesia selama kegiatan berlangsung.</li>
        <li>Apabila terjadi pelanggaran ataupun menyalahi peraturan yang telah ditentukan maka kami sanggup dan bersedia ditindak sesuai hukum yang berlaku dan surat izin akan dicabut tanpa ganti rugi.</li>
    </ol>

    <p>Demikian Surat Pernyataan ini saya buat dengan sebenarnya dalam keadaan sehat jasmani dan rohani dan tanpa paksaan dari pihak manapun.</p>

        <p style="text-align: right; ">Sumber Bahagia, 02 Januari 2025</p>
        <p style="text-align: right;" >Yang membuat pernyataan</p>
        <div style="text-align: right;" class="mb-3">Materai 10.000</div>
        <p style="text-align: right;"><strong>PAIMIN</strong></p>
    </div>

    <div class="signature-section" style="text-align: center;">
        <p>Mengetahui:</p>
        <table style="width: 100%; text-align: center;">
            <tr>
                <td>Camat Seputih Banyak</td>
                <td>Danramil Seputih Banyak</td>
                <td>Kapolsek Seputih Banyak</td>
            </tr>
            
            <tr>
                <td style="padding-top: 40px;">__________________________</td>
                <td style="padding-top: 40px;">__________________________</td>
                <td style="padding-top: 40px;">__________________________</td>
            </tr>
        </table>
    </div>
    
</body>
</html>
