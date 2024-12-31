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
              <font size="4"><b>PEMERINTAH KABUPATEN LAMPUNG TENGAH</b> </font><br />
              <font size="4"><b>KECAMATAN SEPUTIH BANYAK</b></font
              ><br />
              <font size="4"><b>KAMPUNG SUMBER BAHAGIA</b></font
              ><br /> <br><br>
              <font size="2"><i>JLN. Tgk, WAHAB DAHLAWI KM.1</i></font
              ><br />
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
            <u>SURAT KETERANGAN DOMISILI</u>
          </td>
        </tr>
        <tr>
          <td style="text-align: center">Nomor : {{ $domisili->kodeSurat }}/{{ $domisili->noSurat }}/2023</td>
        </tr>
      </table>
      <br /><br /><br />
      <table width="450">
        <tr>
          <td>Yang bertanda tangan di bawah ini, Kepala Kampung Sumber Bahagia Kecamatan Seputih Banyak Kabupaten Lampung Tengah menerangkan bahwa:</td>
        </tr>
      </table>
      <br /><br />
      <table width="450">
        <tr>
          <td width="120">Nama</td>
          <td width="10">:</td>
          <td width="335">{{ $domisili->nama }}</td>
        </tr>
        <tr>
          <td width="120">NIK</td>
          <td width="10">:</td>
          <td width="335">{{ $domisili->nik }}</td>
        </tr>
        <tr>
          <td width="120">Tempat, Tanggal Lahir</td>
          <td width="10">:</td>
          <td width="335">{{ $domisili->tempatTglLahir }}</td>
        </tr>
        <tr>
          <td width="120">Pekerjaan</td>
          <td width="10">:</td>
          <td width="335">{{ $domisili->pekerjaan }}</td>
        </tr>
        <tr>
          <td width="120">Alamat</td>
          <td width="10">:</td>
          <td width="335">{{ $domisili->alamat }}</td>
        </tr>
      </table>
      <br /><br />
      <table width="450">
        <tr>
          <td >
            {!! $domisili->keterangan !!}
          </td>
        </tr>
      </table>
     <br>
      <table width="450">
        <tr>
          <td >Demikian surat keterangan ini kami perbuat untuk dapat dipergunakan seperlunya.</td>
        </tr>
      </table>
      <br /><br /><br /><br>
      <table width="500">
        <tr>
          <td width="300"></td>
          <td style="text-align: left">Sumber Bahagia, {{ date('d M Y', strtotime($domisili->tglSurat)); }}</td>
        </tr>
        <tr>
          <td width="300"></td>
          <td style="text-align: left">An. {{ $domisili->ttd }}</td>
        </tr>
      </table>
      <br /><br />
      <table width="500" style="margin-bottom: 100px">
        <tr>
          <td width="300"></td>
          <td style="text-align: left">{{ $domisili->namaTtd }}</td>
        </tr>
      </table>
    </center>
  </body>
</html>
