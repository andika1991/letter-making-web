<!DOCTYPE html>
<html lang="en">
<head>
    <title>Surat Keterangan Tidak Mampu</title>
    <style>
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
            font-size: 12px;
        }
        .content-table td {
            vertical-align: top;
            padding: 2px 0;
        }
      
     
        .signature-table {
            margin-top: 20px;
            padding-left: 300px;
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
                    <u>SURAT KETERANGAN TIDAK MAMPU</u>
                </td>
            </tr>
            <tr>
                <td style="text-align: center;" class="nomor-surat">
                    Nomor: 147.2/{{$sktm->nosurat}}/SKU/KP.01/XI/2025
                </td>
            </tr>
        </table>

        <table class="content-table">
            <tr>
                <td colspan="3">Yang bertanda tangan di bawah ini Kepala Kampung Sumber Bahagia:</td>
            </tr>
            <tr>
                <td style="padding-left:44px;">Nama</td>
                <td >      : SETIO HUDI</td>
                
            </tr>
            <tr>
                <td style="padding-left:44px;">Jabatan</td>
                <td>: Kepala Kampung</td>
            
            </tr>
            <tr>
                <td style="padding-left:44px;">Alamat</td>
                <td>: Dusun V, RT/RW 019/004 Kampung Sumber Bahagia, Kec. Seputih Banyak, Kab. Lampung Tengah</td>
            
            </tr>
        </table>

        <table class="content-table">
            <tr>
                <td colspan="3">Dengan ini menerangkan bahwa:</td>
            </tr>
            <tr>
                <td style="padding-left:44px;">Nama</td>
                <td>: {{$sktm->nama}}</td>
                
            </tr>
            <tr>
                <td style="padding-left:44px;">Jenis Kelamin</td>
                <td>: {{$sktm->jeniskelamin}}</td>
            </tr>
            <tr>
                <td style="padding-left:44px;">Tempat Tgl. Lahir</td>
                <td>: {{$sktm->tempattgllahir}}</td>
                
            </tr>
            <tr>
                <td style="padding-left:44px;">Agama</td>
                <td>: {{$sktm->agama}}</td>
                
            </tr>
            <tr>
                <td style="padding-left:44px;">Alamat</td>
                <td>: {{$sktm->alamat}}</td>
            
            </tr>
        </table>

        <table class="content-table">
            <tr>
                <td colspan="3">Warga tersebut di atas adalah benar penduduk Kampung Sumber Bahagia yang bertempat tinggal di alamat tersebut. Menurut sepengetahuan kami, yang bersangkutan tergolong orang yang tidak mampu/miskin.</td>
            </tr>
            <tr>
                <td colspan="3">Surat keterangan ini kami berikan atas permintaan yang bersangkutan untuk dipergunakan sebagai {{$sktm->tujuan}}.</td>
            </tr>
        </table>

        <table class="content-table">
            <tr>
                <td style="padding-left:44px;">Nama Lengkap</td>
                <td>: {{$sktm->nama}}</td>
                
            </tr>
            <tr>
                <td style="padding-left:44px;">Umur</td>
                <td>: {{$sktm->umur}} Tahun</td>
                
            </tr>
            <tr>
                <td style="padding-left:44px;">Murid/Mahasiswa dari</td>
                <td>: {{$sktm->muridmhs}}</td>
                
            </tr>
            <tr>
                <td style="padding-left:44px;">Alamat</td>
                <td>: {{$sktm->alamat2}}</td>
                
            </tr>
        </table>

        <table class="content-table">
            <tr>
                <td colspan="3">Demikian surat keterangan ini diberikan kepada yang bersangkutan untuk dapat dipergunakan sebagaimana mestinya.</td>
            </tr>
        </table>
<br>
        <table class="content-table">
            <tr>
                <td style="padding-left:310px;">Dikeluarkan di</td>
                <td>:</td>
                <td >Sumber Bahagia</td>
            </tr>
            <tr>
                <td style="padding-left:310px;text-decoration: underline; text-decoration-color: black;"><u>Pada Tanggal</u></td>
                <td>:</td>
                <td style="text-decoration: underline; text-decoration-color: black;"><u>{{ \Carbon\Carbon::parse($sktm->createdat)->format('d-F-Y') }}
                </u></td>

            </tr>
        </table>
        

        <table class="signature-table">
            <tr>
                <td colspan="3">a.n. Kepala Kampung Sumber Bahagia</td>
            </tr>
            <tr>
                <td colspan="3" style="padding-left: 50px;">Sekretaris Kampung</td>
            </tr>
            <tr>
                <td colspan="3" style="padding-left: 50px;"><br><br><u>NUR ALI IMRON</u></td>
            </tr>
        </table>
    </center>
</body>
</html>
