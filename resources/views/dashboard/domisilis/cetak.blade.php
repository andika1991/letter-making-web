<!DOCTYPE html>
<html lang="id">
<head>
    <title>Surat Keterangan Domisili</title>
    <style>
        body {
            margin: 0 auto;
            width: 600px;
            font-family: 'Cambria Math', 'Georgia';
            line-height: 1.4;
            font-size: 14px;
        }
        table {
            width: 100%;
            margin-bottom: 5px;
            border-spacing: 0;
        }
        .header-table {
            margin-bottom: 10px;
        }
        .header-table img {
            padding-left: 15px;
            width: 75px;
            height: 100px;
        }
        .header-title {
            text-align: center;
        }
        .header-title h1 {
            font-size: 20px;
            margin: 2px 0px;
            font-weight: bold;
        }
        .header-title h2 {
            font-size: 18px;
            margin: 2px 0px;
            font-weight: bold;
        }
        .header-title h3 {
            font-size: 14px;
            margin: 2px 0px;
            font-weight: bold;
        }
        .header-title p {
            margin: 2px 0;
            font-size: 12px;
            font-weight: bold;
        }
        .content-table {
            margin-top: 10px;
        }
        .content-table td {
            vertical-align: top;
            padding: 2px 0;
        }
        .signature-table {
            margin-top: 20px;
            text-align: right;
        }
        .signature-table td {
            padding-top: 10px;
        }
        /* Apply Cambria Math font to the specific elements */
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
                        <h2>PEMERINTAH KABUPATEN LAMPUNG TENGAH</h2>
                        <h2>KECAMATAN SEPUTIH BANYAK</h2>
                        <h1>KAMPUNG SUMBER BAHAGIA</h1>
                        <p><i>Alamat: Jl. Simpang Lima Sumber Bahagia, Kec. Seputih Banyak, Kab. Lampung Tengah</i></p>
                        <p><i>Kode Pos: 34156</i></p>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr style="border: 1px solid black" /></td>
            </tr>
        </table>
        <div class="surat-title"><u>SURAT KETERANGAN DOMISILI</u></div>
        <div class="nomor-surat">No: 147.2/ {{$domisili->noSurat}} / KP.01 / VI /2025</div>
    </center>
    <p>Yang bertandatangan di bawah ini Kepala Kampung Sumber Bahagia Kecamatan Seputih Banyak Kabupaten Lampung Tengah menerangkan bahwa:</p>
    <table class="content-table">
        <tr>
            <td>Nama</td>
            <td>: {{$domisili->nama}}</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>: {{$domisili->nik}}</td>
        </tr>
        <tr>
            <td>Tempat/Tanggal Lahir</td>
            <td>: {{$domisili->tempatTglLahir}}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: {{$domisili->jeniskelamin}}</td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>: {{$domisili->agama}}</td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td>: {{$domisili->pekerjaan}}</td>
        </tr>
        <tr>
            <td>Alamat KK</td>
            <td>: {{$domisili->alamatkk}}</td>
        </tr>
        <tr>
            <td>Alamat Tempat Tinggal</td>
            <td>: {{$domisili->alamat}}</td>
        </tr>
        <?php
        // Data alamat dari database
        $alamat = $domisili->alamat; // Contoh: "Dusun 06 RT.021 RW.002 Kamp. Sumber Bahagia Kec. Seputih Banyak Kab. Lampung Tengah"
        
        // Fungsi untuk ekstrak Dusun, RT, dan RW
        function extractDusunRtRw($alamat) {
            $dusun = '';
            $rt = '';
            $rw = '';
        
            // Ekstraksi dengan regex
            if (preg_match('/Dusun (\d+)/i', $alamat, $matches)) {
                $dusun = $matches[1];
            }
            if (preg_match('/RT\.(\d+)/i', $alamat, $matches)) {
                $rt = $matches[1];
            }
            if (preg_match('/RW\.(\d+)/i', $alamat, $matches)) {
                $rw = $matches[1];
            }
        
            return ['dusun' => $dusun, 'rt' => $rt, 'rw' => $rw];
        }
        
        // Ekstraksi data dari alamat
        $dataAlamat = extractDusunRtRw($alamat);
        
        // Ambil hasil
        $dusun = $dataAlamat['dusun'];
        $rt = $dataAlamat['rt'];
        $rw = $dataAlamat['rw'];
        

        ?>
        
    </table>
    <p class="text-justify">Menerangkan bahwa yang tersebut di atas, adalah benar-benar Warga kami dan berdomisili di Kampung Sumber Bahagia  {{$dusun}} RT.{{$rt}} RW.{{$rw}} Kecamatan Seputih Banyak Kabupaten Lampung Tengah. Surat Keterangan ini dibuat sebagai {{ strip_tags($domisili->keterangan) }}</p>
    <p>Demikian Surat Keterangan ini dibuat dengan sebenarnya dan dapat dipergunakan sebagaimana mestinya.</p>
    <table class="signature-table">
        <tr>
            <td>Sumber Bahagia, {{ \Carbon\Carbon::parse($domisili->created_at)->translatedFormat('d F Y') }}</td>
        </tr>
        <tr>
            <td style="padding-top: 0px;" >Kepala Kampung Sumber Bahagia</td>
        </tr>
        <tr>
            <td style="padding-top: 60px; font-weight: bold;padding-right:60px;">SETIO HUDI</td>
        </tr>
    </table>
</body>
</html>
