<!DOCTYPE html>
<html lang="en">
<head>
    <title>Surat Keterangan Usaha</title>
    <style>
        body {
            margin: 0 auto;
            width: 600px;
            font-family: 'Cambria Math', 'Georgia';
        }
        table {
            width: 100%;
            margin-bottom: 5px;
        }
        .header-table {
            margin-bottom: 20px;
        }
        .header-table img {
            width: 90px;
            height: 90px;
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
                <td><img src="{{ asset('dashmin/img/lampung tengah.png') }}" alt="Logo" /></td>
                <td>
                    <div class="header-title">
                        <h1>PEMERINTAH KABUPATEN LAMPUNG TENGAH</h1>
                        <h2>KECAMATAN SEPUTIH BANYAK</h2>
                        <h3>KAMPUNG SUMBER BAHAGIA</h3>
                        <p><i>Alamat: Jl. Simpang Lima Sumber Bahagia, Kec. Seputih Banyak, Kab. Lampung Tengah</i></p>
                        <i>Kode Pos: 34156</i>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr style="border: 1px solid black" /></td>
            </tr>
        </table>

        <table class="content-table">
            <tr>
                <td style="text-align: center;" class="surat-title">
                    <u>SURAT KETERANGAN USAHA</u>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;" class="nomor-surat">Nomor: {{ $usaha->kodeSurat }}/{{ $usaha->noSurat }}/SKU/KP.01/I/2025</td>
            </tr>
        </table>

        <table class="content-table">
            <tr>
                <td colspan="3">Yang bertanda tangan di bawah ini Kepala Kampung Sumber Bahagia:</td>
            </tr>
            <tr>
                <td width="120">Nama</td>
                <td width="10">:</td>
                <td>SETIO HUDI</td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td>Kepala Kampung</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>Dusun V. RT/RW 019/004 Kampung Sumber Bahagia, Kec. Seputih Banyak, Kab. Lampung Tengah</td>
            </tr>
        </table>

        <table class="content-table">
            <tr>
                <td>Dengan ini menerangkan bahwa:</td>
            </tr>
        </table>

        <table class="content-table">
            <tr>
                <td width="120">Nama</td>
                <td width="10">:</td>
                <td>{{ $usaha->nama }}</td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td>{{ $usaha->nik }}</td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td>{{ $usaha->tempatTglLahir }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>{{ $usaha->jeniskelamin }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $usaha->alamat }}</td>
            </tr>
        </table>
        @php
        // Data dari database
        $alamat = $usaha->alamat; // Alamat utama
        $alamatUsaha = $usaha->alamatUsaha; // Alamat usaha
    
        // Fungsi untuk ekstrak RT dan RW
        function extractRtRw($alamat) {
            $rt = '';
            $rw = '';
    
            if (preg_match('/RT\.(\d+)/', $alamat, $matches)) {
                $rt = $matches[1];
            }
    
            if (preg_match('/RW\.(\d+)/', $alamat, $matches)) {
                $rw = $matches[1];
            }
    
            return ['rt' => $rt, 'rw' => $rw];
        }
    
        // Ekstrak RT dan RW dari masing-masing alamat
        $dataAlamat = extractRtRw($alamat);
        $dataAlamatUsaha = extractRtRw($alamatUsaha);
    
        // RT dan RW masing-masing
        $rtAlamat = $dataAlamat['rt'];
        $rwAlamat = $dataAlamat['rw'];
    
        $rtAlamatUsaha = $dataAlamatUsaha['rt'];
        $rwAlamatUsaha = $dataAlamatUsaha['rw'];
    @endphp
    
    



        <table class="content-table">
            <tr>
                <td>Bahwa tersebut diatas, benar-benar Penduduk Kampung Sumber Bahagia RT.{{$rtAlamat}} RW.{{$rwAlamat}}
                    , Yang saat ini memiliki dan menjalankan <i><b>USAHA : {{$usaha->jenisUsaha}}</b></i>   yang berlokasi di RT.{{ $rtAlamatUsaha }} RW.{{$rwAlamatUsaha}}  Kampung Sumber Bahagia.
                    Menurut dan sepanjang pengetahuan kami dan hingga surat ini dikeluarkan yang bersangkutan di kenal baik di lingkungan Masyarakat sekitar.
                    
                    </td>
            </tr>
        </table>

        <table class="content-table">
            <tr>
                <td>Demikian surat Keterangan ini di buat guna untuk {{$usaha->keterangan}}.</td>
            </tr>
        </table>

        <table class="signature-table">
            <tr>
                <td>Dikeluarkan di : Sumber Bahagia</td>
            </tr>
            <tr>
                <td style="text-decoration: underline; color: black;">Pada Tanggal : 15 Januari 2025</td>
            </tr>
            <tr>
                <td>Kepala Kampung Sumber Bahagia</td>
            </tr>
        </table>
        
        <!-- SETIO HUDI di luar tabel signature-table -->
        <div style="padding-top: 100px; position: absolute; right: 100px; text-decoration: underline; color: black;">
            SETIO HUDI
        </div>
        
        
    </center>
</body>
</html>
