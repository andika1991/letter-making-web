@extends('layouts.main')

@section('container')

    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-3 animated slideInDown">Web Arsip Surat Kampung Sumber Bahagia</h1>
                    <p class="animated slideInDown">
                        Website Arsip Surat ini merupakan karya dari Mahasiswa KKN MBKM  Universitas Lampung 2025 Periode 1, Semoga dengan adanya Web ini dapat membantu pihak Kampung dalam membuat surat dengan cepat dan menghemat waktu pengerjaan. Fitur yang tersedia meliputi arsip surat dan pencetakan surat dengan format PDF.
                    </p>
                    <a href="/dashboard" class="btn btn-primary py-3 px-4 animated slideInDown">Mulai Membuat Surat</a>
                </div>
                <div class="col-lg-6 animated fadeIn">
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;" src="img/heroWeb.png"
                        alt="">
                </div>
            </div>
        </div>
    </div>
<!-- Header End -->


<div class="row mt-5">
<div class="col-lg-4 text-center">
    <div class="feature-box">
        <i class="bi bi-file-earmark-text fs-1 text-primary"></i>
        <h4 class="mt-3">Arsip Surat</h4>
        <p class="text-muted">Simpan surat dengan aman dan mudah diakses kapan saja.</p>
    </div>
</div>
<div class="col-lg-4 text-center">
    <div class="feature-box">
        <i class="bi bi-printer fs-1 text-primary"></i>
        <h4 class="mt-3">Pencetakan PDF</h4>
        <p class="text-muted">Cetak surat langsung dalam format PDF dengan satu klik.</p>
    </div>
</div>
<div class="col-lg-4 text-center">
    <div class="feature-box">
        <i class="bi bi-search fs-1 text-primary"></i>
        <h4 class="mt-3">Pencarian Cepat</h4>
        <p class="text-muted">Cari surat dengan mudah menggunakan sistem pencarian yang efisien.</p>
    </div>
</div>
</div>
</div>
</div>
<!-- Header End -->

@endsection

    





    