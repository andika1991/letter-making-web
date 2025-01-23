@extends('dashboard.layouts.main')

@section('container')

<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <a href="/dashboard/SuratIzinOrangTua" class="btn btn-success"><i class="bi bi-arrow-left-square"></i> Kembali</a>
            <a href="/dashboard/SuratIzinOrangTua/{{ $surat->nomor_surat }}/cetak" class="btn btn-secondary"><i class="bi bi-printer"></i> Cetak</a>
        </div>
        <center style="margin-top: 50px">
            <table style="align-content: center">
                <tr>
                    <td><img src="{{ asset('dashmin/img/lampung tengah.png') }}" width="110" height="110" /></td>
                    <td style="font-family: 'Times New Roman', Times, serif; font-size: 13px">
                        <center>
                            <font size="5"><b>PEMERINTAH KABUPATEN LAMPUNG TENGAH</b></font><br />
                            <font size="4"><b>KECAMATAN SEPUTIH BANYAK</b></font><br />
                            <font size="5"><b>KAMPUNG SUMBER BAHAGIA</b></font><br />
                            <font size="3"><i>Jl. Raya Desa  No. 123</i></font><br />
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

        <table class="content-table">
            <tr>
                <td colspan="3">Yang bertanda tangan di bawah ini Kepala Kampung Sumber Bahagia Kecamatan Seputih Banyak menerangkan:</td>
            </tr>
            <tr>
                <td style="padding-left:24px;">1. {{ strtoupper($surat->pemberi_izin_role) }}:</td>
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

        <table class="content-table">
            <tr>
                <td colspan="3">Dengan ini saya selaku {{ $surat->pemberi_izin_role }} dari nama tersebut di bawah ini:</td>
            </tr>
            <tr>
                <td style="padding-left:44px;">Nama</td>
                <td>: {{ $surat->pemohon_izin_nama }}</td>
            </tr>
            <tr>
                <td style="padding-left:44px;">Jenis Kelamin</td>
                <td>: {{ $surat->pemohon_izin_jenis_kelamin }}</td>
            </tr>
            <tr>
                <td style="padding-left:44px;">Tempat/Tgl Lahir</td>
                <td>: {{ $surat->pemohon_izin_tempat_lahir }}, {{ $surat->pemohon_izin_tgl_lahir }}</td>
            </tr>
            <tr>
                <td style="padding-left:44px;">Agama</td>
                <td>: {{ $surat->pemohon_izin_agama }}</td>
            </tr>
            <tr>
                <td style="padding-left:44px;">Alamat</td>
                <td>: {{ $surat->pemohon_izin_alamat }}</td>
            </tr>
        </table>

        <table class="content-table">
            <tr>
                <td>Pada saat ini Nama tersebut diatas benar-benar telah mendapatkan izin dari  {{ strtoupper($surat->pemberi_izin_role) }} untuk {{ $surat->keperluan}} dengan persyaratan dan ketentuan yang telah ditetapkan.</td>
            </tr>
            <tr>
                <td colspan="3">Demikian Surat Izin ini kami buat untuk dapat dipergunakan sebagaimana mestinya.</td>
            </tr>
        </table>

        <table class="signature-table">
            <tr>
                <td style="text-align: center;">
                    Yang Diberi Izin,<br><br><br>
                    <u>{{ strtoupper ($surat->pemohon_izin_nama) }}</u><br>
                    {{ $surat->pemohon_izin_role }}
                </td>
                <td style="text-align: center;">
                    Yang Memberi Izin,<br><br><br>
                    <u>{{ strtoupper($surat->pemberi_izin_nama) }}</u><br>
                    {{ $surat->pemberi_izin_role }}
                </td>
            </tr>
            <tr>
                <td style="text-align: center;">
                    Mengetahui,<br>Kepala Kampung Sumber Bahagia<br><br><br>
                    <u>{{ strtoupper($surat->kepala_kampung) }}</u>
                </td>
            </tr>
        </table>
            
        </center>
    </div>
</div>

@endsection
