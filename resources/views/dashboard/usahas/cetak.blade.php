<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Contoh Surat</title>
    <style>
      /* add body to center in dompdf */
      body {
        margin: 0 auto;
        width: 600px;
      }
    </style>
  </head>
  <body>
    <center>
      <table width="450">
        <tr>
          <td><img src="{{ asset('dashmin/img/lampung tengah.png') }}" width="110" height="110" /></td>
          <td style="font-family: 'Times New Roman', Times, serif; font-size: 13px">
            <center>
              <font size="5"><b>PEMERINTAH KABUPATEN LAMPUNG TENGAH</b> </font><br />
              <font size="4"><b>KECAMATAN SEPUTIH BANYAK</b></font><br />
              <font size="5"><b>KAMPUNG SUMBER BAHAGIA</b></font><br />
              <font size="3"><i>Jl. Raya Desa Wonodadi No. 123, Kecamatan Gadingrejo, Kabupaten Pringsewu</i></font><br />
              <font size="3"><i>Kode Pos: 35372</i></font><br />
            </center>
          </td>
        </tr>
        <tr>
          <td colspan="2"><hr style="border: 1px solid" /></td>
        </tr>
      </table>
      <br />
      <table width="450">
        <tr>
          <td style="font-family: 'Times New Roman', Times, serif; font-size: 18px; text-align: center; font-weight: bold" class="text">
            <u>SURAT KETERANGAN USAHA</u>
          </td>
        </tr>
        <tr>
          <td style="text-align: center">Nomor : {{ $usaha->kodeSurat }}/{{ $usaha->noSurat }}/2023</td>
        </tr>
      </table>
      <br /><br /><br />
      <table width="450">
        <tr>
          <td>Yang bertanda tangan di bawah ini, Keuchik Gampong Paya Punteuet Kecamatan Muara Dua Pemerintah Kota Lhokseumawe, menerangkan bahwa:</td>
        </tr>
      </table>
      <br /><br />
      <table width="450">
        <tr>
          <td width="120">Nama</td>
          <td width="10">:</td>
          <td width="335">{{ $usaha->nama }}</td>
        </tr>
        <tr>
          <td width="120">NIK</td>
          <td width="10">:</td>
          <td width="335">{{ $usaha->nik }}</td>
        </tr>
        <tr>
          <td width="120">Tempat, Tanggal Lahir</td>
          <td width="10">:</td>
          <td width="335">{{ $usaha->tempatTglLahir }}</td>
        </tr>
        <tr>
          <td width="120">Pekerjaan</td>
          <td width="10">:</td>
          <td width="335">{{ $usaha->pekerjaan }}</td>
        </tr>
        <tr>
          <td width="120">Alamat</td>
          <td width="10">:</td>
          <td width="335">{{ $usaha->alamat }}</td>
        </tr>
      </table>
      <br /><br />

      <!-- Start of the business details section -->
      <table width="450">
        <tr>
          <td>
            Adalah benar yang bersangkutan memiliki usaha dengan rincian sebagai berikut:
          </td>
        </tr>
      </table>
      <br /><br />
      <table width="450">
        <tr>
          <td width="120">Nama Usaha</td>
          <td width="10">:</td>
          <td width="335">{{ $usaha->namaUsaha }}</td>
        </tr>
        <tr>
          <td width="120">Jenis Usaha</td>
          <td width="10">:</td>
          <td width="335">{{ $usaha->jenisUsaha }}</td>
        </tr>
        <tr>
          <td width="120">Alamat Usaha</td>
          <td width="10">:</td>
          <td width="335">{{ $usaha->alamatUsaha }}</td>
        </tr>
        <tr>
          <td width="120">Masa Berlaku</td>
          <td width="10">:</td>
          <td width="335">{{ $usaha->masaBerlaku }}</td>
        </tr>
      </table>
      <br /><br />
      <!-- End of the business details section -->

      <table width="450">
        <tr>
          <td>
            {!! $usaha->keterangan !!}
          </td>
        </tr>
      </table>
      <br /><br />
      <table width="450">
        <tr>
          <td>Demikian surat keterangan ini kami perbuat untuk dapat dipergunakan seperlunya.</td>
        </tr>
      </table>
      <br /><br /><br />
      <table width="450">
        <tr>
          <td width="300"></td>
          <td style="text-align: left">Paya Punteuet, {{ date('d M Y', strtotime($usaha->tglSurat)); }}</td>
        </tr>
        <tr>
          <td width="300"></td>
          <td style="text-align: left">An. {{ $usaha->ttd }}</td>
        </tr>
      </table>
      <br /><br />
      <table width="450" style="margin-bottom: 100px">
        <tr>
          <td width="300"></td>
          <td style="text-align: left">{{ $usaha->namaTtd }}</td>
        </tr>
      </table>
    </center>
  </body>
</html>
