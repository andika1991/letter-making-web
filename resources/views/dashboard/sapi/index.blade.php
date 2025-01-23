@extends('dashboard.layouts.main')

@section('container')
<!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-5">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-chart-bar fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Surat Jalan Sapi</p>
                        <h6 class="mb-0">{{ $totalSapi }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->

    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fa fa-check-circle me-2"></i>{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Daftar Surat Jalan Sapi</h6>
                <a href="/dashboard/suratjalansapi/create" class="btn btn-primary">Tambah Surat</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">No Surat</th>
                            <th scope="col">Nama Warga</th>
                            <th scope="col">Tanggal Surat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sapi as $sapis)
                        <tr>
                            <td>{{ $sapis->nosurat }}</td>
                            <td>{{ $sapis->nama }}</td>
                            <td>{{ date('d M Y', strtotime($sapis->created_at)); }}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="/dashboard/suratjalansapi/{{ $sapis->nosurat }}">Detail</a>
                                <a class="btn btn-sm btn-warning" href="/dashboard/suratjalansapi/{{ $sapis->nosurat }}/edit">Edit</a>
                                <form action="/dashboard/suratjalansapi/{{ $sapis->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf 
                                    <button class="btn btn-sm btn-danger border-0" onclick="return confirm('Kilik Oke Untuk Menghapus')">Hapus</button>
                                </form>
                                <a href="{{ route('suratjalansapi.cetak', $sapis->id) }}" class="btn btn-sm btn-success" target="_blank">Print</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex mt-3">
                    {{ $sapi->links() }}
                </div>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->
@endsection