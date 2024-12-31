@extends('dashboard.layouts.main')

@section('container')

<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <a href="/dashboard/usaha" class="btn btn-success"><i class="bi bi-arrow-left-square"></i> Kembali</a>
            <a href="/dashboard/usaha/{{ $usaha->noSurat }}/cetak" class="btn btn-secondary"><i class="bi bi-printer"></i> Cetak</a>
        </div>
        <center style="margin-top: 50px">
            <table style="align-content: center">
                <tr>
                    <td><img src="{{ asset('dashmin/img/lampung tengah.png') }}" width="110" height="110" /></td>
                    <td style="font-family: 'Times New Roman', Times, serif; font-size: 13px">
                        <center>
                            <font size="5"><b>PEMERINTAH KABUPATEN PRINGSEWU</b></font><br />
                            <font size="4"><b>KECAMATAN GADINGREJO</b></font><br />
                            <font size="5"><b>DESA WONODADI</b></font><br />
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
            <table width="545">
                <tr>
                    <td style="font-family: 'Times New Roman', Times, serif; font-size: 18px; text-align: center; font-weight: bold">
                        <u>SURAT KETERANGAN USAHA</u>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center">Nomor: {{ $usaha->kodeSurat }}/{{ $usaha->noSurat }}/2024</td>
                </tr>
            </table>
            <br /><br /><br />
            <table width="545">
                <tr>
                    <td>Yang bertanda tangan di bawah ini, Kepala Desa Wonodadi, Kecamatan Gadingrejo, Kabupaten Pringsewu, menerangkan bahwa:</td>
                </tr>
            </table>
            <br /><br />
            <table width="545">
                <tr>
                    <td width="200">Nama</td>
                    <td width="10">:</td>
                    <td width="335">{{ $usaha->nama }}</td>
                </tr>
                <tr>
                    <td width="200">Tempat/Tgl Lahir</td>
                    <td width="10">:</td>
                    <td width="335">{{ $usaha->tempatTglLahir }}</td>
                </tr>
                <tr>
                    <td width="200">Jenis Kelamin</td>
                    <td width="10">:</td>
                    <td width="335">{{ $usaha->jenisKelamin }}</td>
                </tr>
                <tr>
                    <td width="200">Agama</td>
                    <td width="10">:</td>
                    <td width="335">{{ $usaha->agama }}</td>
                </tr>
                <tr>
                    <td width="200">Pekerjaan</td>
                    <td width="10">:</td>
                    <td width="335">{{ $usaha->pekerjaan }}</td>
                </tr>
                <tr>
                    <td width="200">Alamat</td>
                    <td width="10">:</td>
                    <td width="335">{{ $usaha->alamat }}</td>
                </tr>
            </table>
            <br /><br />
            <!-- Added spacing for clarity -->
            <table width="545">
                <tr>
                    <td style="font-weight: bold;">Adalah benar yang bersangkutan memiliki usaha dengan rincian sebagai berikut:</td>
                </tr>
            </table>
            <table width="545">
                <tr>
                    <td width="200">Nama Usaha</td>
                    <td width="10">:</td>
                    <td width="335">{{ $usaha->namaUsaha }}</td>
                </tr>
                <tr>
                    <td width="200">Jenis Usaha</td>
                    <td width="10">:</td>
                    <td width="335">{{ $usaha->jenisUsaha }}</td>
                </tr>
                <tr>
                    <td width="200">Alamat Usaha</td>
                    <td width="10">:</td>
                    <td width="335">{{ $usaha->alamatUsaha }}</td>
                </tr>
                <tr>
                    <td width="200">Mulai Berdiri</td>
                    <td width="10">:</td>
                    <td width="335">{{ $usaha->mulaiBerdiri }}</td>
                </tr>
            </table>
            <br /><br />
            <table width="545">
                <tr>
                    <td>
                        Usaha ini masih aktif berjalan hingga saat ini. Surat keterangan ini dibuat atas permintaan yang bersangkutan untuk keperluan [contoh: pengajuan pinjaman, pendaftaran NPWP, atau keperluan lain].
                    </td>
                </tr>
            </table>
            <br /><br />
            <table width="545">
                <tr>
                    <td>Demikian surat keterangan ini kami perbuat untuk dapat dipergunakan seperlunya.</td>
                </tr>
            </table>
            <br /><br /><br />
            <table width="545">
                <tr>
                    <td width="340"></td>
                    <td style="text-align: left">Wonodadi, {{ date('d M Y', strtotime($usaha->tglSurat)) }}</td>
                </tr>
                <tr>
                    <td width="340"></td>
                    <td style="text-align: left">Kepala Desa Wonodadi</td>
                </tr>
            </table>
            <br /><br />
            <table width="545" style="margin-bottom: 100px">
                <tr>
                    <td width="340"></td>
                    <td style="text-align: left">{{ $usaha->namaTtd }}</td>
                </tr>
            </table>
        </center>
    </div>
</div>

@endsection
