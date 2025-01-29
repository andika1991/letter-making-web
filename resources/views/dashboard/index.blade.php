@extends('dashboard.layouts.main')

@section('container')
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-5">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-address-card fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Surat Keterangan Domisili</p>
                    <h6 class="mb-0">{{ $totalDomisili }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-5">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-briefcase fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Surat Keterangan Usaha</p>
                    <h6 class="mb-0">{{ $totalUsaha }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-5">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-heart-broken fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Surat Keterangan Tidak Mampu</p>
                    <h6 class="mb-0">{{ $totalSktm }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-5">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-calendar-check fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Surat Permohonan Izin Keramaian</p>
                    <h6 class="mb-0">{{ $totalPik }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-5">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-skull-crossbones fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Surat Keterangan Kematian</p>
                    <h6 class="mb-0">{{ $totalKematian }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-5">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-truck fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Surat Jalan Sapi</p>
                    <h6 class="mb-0">{{ $totalSapi }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-5">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-ring fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Surat Keterangan Status Pernikahan</p>
                    <h6 class="mb-0">{{ $totalSksp }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-5">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-plane-departure fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Surat Keterangan Keluar Negeri</p>
                    <h6 class="mb-0">{{ $totalSkln }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-5">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-id-card fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Surat Keterangan Beda Identitas</p>
                    <h6 class="mb-0">{{ $totalSkbi }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-5">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-users fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Surat Keterangan Penduduk Sementara</p>
                    <h6 class="mb-0">{{ $totalSkps }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-5">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-heart fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Surat Keterangan Telah Menikah</p>
                    <h6 class="mb-0">{{ $totalTelahMenikah }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-5">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-male fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Surat Izin Suami</p>
                    <h6 class="mb-0">{{ $totalIzinSuami }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-5">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-users fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Surat Ahli Waris</p>
                    <h6 class="mb-0">{{ $totalAhliWaris }}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-5">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-child fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Surat Izin Orang Tua</p>
                    <h6 class="mb-0">{{ $totalIzinOrtu }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Add Slider -->
<style>
    .row {
        display: flex;
        overflow-x: scroll;
        gap: 20px;
    }
    .col-sm-6 {
        flex: 0 0 auto;
        width: 250px; /* Adjust based on your preference */
    }
</style>




    <!-- Sale & Revenue End -->

    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Daftar Surat Keterangan Domisili Terbaru</h6>
                <a href="/dashboard/domisili">Lihat Semua</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No Surat</th>
                            <th scope="col">Nama Warga</th>
                            <th scope="col">Tanggal Surat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($domisilis as $domisili)
                        <tr>
                            <td>{{ $domisili->noSurat }}</td>
                            <td>{{ $domisili->nama }}</td>
                            <td>{{ date('d M Y', strtotime($domisili->tglSurat)); }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->

    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Daftar Surat Keterangan Usaha Terbaru</h6>
                <a href="/dashboard/usaha">Lihat Semua</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No Surat</th>
                            <th scope="col">Nama Warga</th>
                            <th scope="col">Tanggal Surat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usahas as $usaha)
                        <tr>
                            <td>{{ $usaha->noSurat }}</td>
                            <td>{{ $usaha->nama }}</td>
                            <td>{{ date('d M Y', strtotime($usaha->tglSurat)); }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->

    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Daftar Surat Keterangan Tidak Mampu Terbaru</h6>
                <a href="/dashboard/sktm">Lihat Semua</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No Surat</th>
                            <th scope="col">Nama Warga</th>
                            <th scope="col">Tanggal Surat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sktm as $sktms)
                        <tr>
                            <td>{{ $sktms->nosurat }}</td>
                            <td>{{ $sktms->nama }}</td>
                            <td>{{ date('d M Y', strtotime($sktms->created_at)); }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Daftar Surat Permohonan Izin Keramaian Terbaru</h6>
                <a href="/dashboard/permohonankeramaian">Lihat Semua</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No Surat</th>
                            <th scope="col">Nama Warga</th>
                            <th scope="col">Tanggal Surat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pik as $piks)
                        <tr>
                            <td>{{ $piks->nosurat }}</td>
                            <td>{{ $piks->nama }}</td>
                            <td>{{ date('d M Y', strtotime($piks->created_at)); }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Daftar Surat Keterangan Kematian Terbaru</h6>
                <a href="/dashboard/kematian">Lihat Semua</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No Surat</th>
                            <th scope="col">Nama Warga</th>
                            <th scope="col">Tanggal Surat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skk as $skks)
                        <tr>
                            <td>{{ $skks->nosurat }}</td>
                            <td>{{ $skks->nama }}</td>
                            <td>{{ date('d M Y', strtotime($skks->created_at)); }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Daftar Surat Jalan Sapi Terbaru</h6>
                <a href="/dashboard/suratjalansapi">Lihat Semua</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No Surat</th>
                            <th scope="col">Nama Warga</th>
                            <th scope="col">Tanggal Surat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($s as $ss)
                        <tr>
                            <td>{{ $ss->nosurat }}</td>
                            <td>{{ $ss->nama }}</td>
                            <td>{{ date('d M Y', strtotime($ss->created_at)); }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

       
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Daftar Surat Keterangan Status Pernikahan Terbaru</h6>
                <a href="/dashboard/sksp">Lihat Semua</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No Surat</th>
                            <th scope="col">Nama Warga</th>
                            <th scope="col">Tanggal Surat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sk as $sn)
                        <tr>
                            <td>{{ $sn->nosurat }}</td>
                            <td>{{ $sn->nama }}</td>
                            <td>{{ date('d M Y', strtotime($sn->created_at)); }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>







    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Daftar Surat Keterangan Keluar Negeri Terbaru</h6>
                <a href="/dashboard/skln">Lihat Semua</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No Surat</th>
                            <th scope="col">Nama Warga</th>
                            <th scope="col">Tanggal Surat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skln as $skn)
                        <tr>
                            <td>{{ $skn->nosurat }}</td>
                            <td>{{ $skn->nama }}</td>
                            <td>{{ date('d M Y', strtotime($skn->created_at)); }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Daftar Surat Keterangan Beda Identitas Terbaru</h6>
                <a href="/dashboard/skbi">Lihat Semua</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No Surat</th>
                            <th scope="col">Nama Warga</th>
                            <th scope="col">Tanggal Surat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skbi as $sknn)
                        <tr>
                            <td>{{ $sknn->nosurat }}</td>
                            <td>{{ $sknn->nama }}</td>
                            <td>{{ date('d M Y', strtotime($sknn->created_at)); }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Daftar Surat Keterangan Penduduk Sementara</h6>
                <a href="/dashboard/skps">Lihat Semua</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No Surat</th>
                            <th scope="col">Nama Warga</th>
                            <th scope="col">Tanggal Surat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skps as $skpsn)
                        <tr>
                            <td>{{ $skpsn->nosurat }}</td>
                            <td>{{ $skpsn->nama }}</td>
                            <td>{{ date('d M Y', strtotime($skpsn->created_at)); }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Daftar Surat Izin Suami Terbaru</h6>
                <a href="/dashboard/izinsuami">Lihat Semua</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No Surat</th>
                            <th scope="col">Nama Warga</th>
                            <th scope="col">Tanggal Surat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($izinSuami as $izsn)
                        <tr>
                            <td>{{ $izsn->nosurat }}</td>
                            <td>{{ $izsn->nama }}</td>
                            <td>{{ date('d M Y', strtotime($izsn->created_at)); }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Daftar Surat Ahli Waris Terbaru</h6>
                <a href="/dashboard/ahliwaris">Lihat Semua</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No Surat</th>
                            <th scope="col">Nama Warga</th>
                            <th scope="col">Tanggal Surat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ahliWaris as $awsn)
                        <tr>
                            <td>{{ $awsn->nosurat }}</td>
                            <td>{{ $awsn->nama }}</td>
                            <td>{{ date('d M Y', strtotime($awsn->created_at)); }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Daftar Surat Izin Orang Tua Terbaru</h6>
                <a href="/dashboard/suratIzinOrtu">Lihat Semua</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No Surat</th>
                            <th scope="col">Nama Warga</th>
                            <th scope="col">Tanggal Surat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($izinOrtu as $inrt)
                        <tr>
                            <td>{{ $inrt->nosurat }}</td>
                            <td>{{ $inrt->nama }}</td>
                            <td>{{ date('d M Y', strtotime($inrt->created_at)); }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    


@endsection