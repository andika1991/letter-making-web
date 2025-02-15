@extends('dashboard.layouts.main')

@section('container')
<!-- Total SKTM Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-5">
            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <i class="fa fa-chart-line fa-3x text-primary"></i>
                <div class="ms-3">
                    <p class="mb-2">Total Surat Pernyataan Pemilik Hiburan</p>
                    <h6 class="mb-0">{{ $totalSpph}}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Total SKTM End -->

<!-- Daftar SKTM Start -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa fa-check-circle me-2"></i>{{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Daftar Surat Pernyataan Pemilik Hiburan</h6>
            <a href="/dashboard/SPPH/create" class="btn btn-primary">Tambah SPPH</a>
        </div>
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">ID</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Surat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($spph as $spphs)
                    <tr>
                        <td>{{ $spphs->id }}</td>
                        <td>{{ $spphs->nama }}</td>
                        <td>{{ date('d M Y', strtotime($spphs->created_at)) }}</td>
                        <td>
                                <form action="/dashboard/SPPH/{{ $spphs->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-sm btn-danger border-0" onclick="return confirm('Klik Oke untuk Menghapus')">Hapus</button>
                            </form>
                            <a href="{{ route('spph.cetak', $spphs->id) }}" class="btn btn-sm btn-success" target="_blank">Print</a>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex mt-3">
                {{ $spph->links() }}
            </div>
        </div>
    </div>
</div>
<!-- Daftar SKTM End -->
@endsection
