<!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="/" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><img width="35px" src="{{ asset('img/iconWeb.png') }}" alt="iconWeb"> Arsip Surat</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('dashmin/img/user.png') }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                        <span>{{ auth()->user()->username }}</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/dashboard" class="nav-item nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                        <i class="fa fa-home me-2"></i>Dashboard
                    </a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Request::is('domisili') || Request::is('usaha') ? 'active' : '' }}" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope-open-text me-2"></i>Surat
                        </a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="/dashboard/domisili" class="dropdown-item {{ Request::is('dashboard/domisili*') ? 'active' : '' }}">
                                <i class="fa fa-house-chimney me-2"></i>Keterangan Domisili
                            </a>
                            <a href="/dashboard/skbi" class="dropdown-item {{ Request::is('dashboard/skbi*') ? 'active' : '' }}">
                                <i class="fa fa-person-circle-xmark me-2"></i>Ket Beda Identitas
                            </a>
                            <a href="/dashboard/skps" class="dropdown-item {{ Request::is('dashboard/skps*') ? 'active' : '' }}">
                                <i class="fa fa-house-circle-exclamation me-2"></i>Ket Pend Sementara
                            </a>
                            <a href="/dashboard/usaha" class="dropdown-item {{ Request::is('dashboard/usaha*') ? 'active' : '' }}">
                                <i class="bi bi-shop me-2"></i>Keterangan Usaha
                            </a>
                            <a href="/dashboard/sktm" class="dropdown-item {{ Request::is('dashboard/sktm*') ? 'active' : '' }}">
                                <i class="fa fa-address-card me-2"></i>Ket Tidak Mampu
                            </a>
                            <a href="/dashboard/kematian" class="dropdown-item {{ Request::is('dashboard/kematian*') ? 'active' : '' }}">
                                <i class="fa fa-book-skull   me-2"></i>Keterangan Kematian
                            </a>
                            <a href="/dashboard/ahliwaris" class="dropdown-item {{ Request::is('dashboard/ahliwaris*') ? 'active' : '' }}">
                                <i class="fa fa-users me-2"></i>Ket Ahli Waris
                            </a>
                            <a href="/dashboard/suratjalansapi" class="dropdown-item {{ Request::is('dashboard/suratjalansapi*') ? 'active' : '' }}">
                                <i class="fa fa-cow me-2"></i>Ket Jalan Sapi
                            </a>
                            <a href="/dashboard/sksp" class="dropdown-item {{ Request::is('dashboard/sksp*') ? 'active' : '' }}">
                                <i class="fa fa-ring me-2"></i>Keterangan Pernikahan
                            </a>
                            <a href="/dashboard/skln" class="dropdown-item {{ Request::is('dashboard/skln*') ? 'active' : '' }}">
                                <i class="fa fa-plane-departure me-2"></i>Ket Ke Luar Negeri
                            </a>
                            <a href="/dashboard/telahmenikah" class="dropdown-item {{ Request::is('dashboard/telahmenikah*') ? 'active' : '' }}">
                                <i class="fa fa-heart me-2"></i>Ket Telah Menikah
                            </a>
                            <a href="/dashboard/SPPH" class="dropdown-item {{ Request::is('dashboard/SPPH*') ? 'active' : '' }}">
                                <i class="bi bi-file-earmark-text me-2"></i>SPn Pemilik Hiburan
                            </a>
                            <a href="/dashboard/hajat" class="dropdown-item {{ Request::is('dashboard/hajat*') ? 'active' : '' }}">
                                <i class="bi bi-file-earmark-text me-2"></i>SPn Hajat
                            </a>
                            <a href="/dashboard/permohonankeramaian" class="dropdown-item {{ Request::is('dashboard/permohonankeramaian*') ? 'active' : '' }}">
                                <i class="fa fa-volume-high me-2"></i>Izin Keramaian
                            </a>
                            <a href="/dashboard/izinsuami" class="dropdown-item {{ Request::is('dashboard/izinsuami*') ? 'active' : '' }}">
                                <i class="fa fa-envelope me-2"></i>Surat Izin Suami
                            </a>
                            <a href="/dashboard/suratIzinOrtu" class="dropdown-item {{ Request::is('/dashboard/suratIzinOrtu*') ? 'active' : '' }}">
                                <i class="fa fa-envelope me-2"></i>Surat Izin Ortu
                            </a>
                        </div>
                    </div>
                </div>
                
            </nav>
        </div>
        <!-- Sidebar End -->

