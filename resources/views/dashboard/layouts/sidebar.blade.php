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
                                <i class="bi bi-house-door me-2"></i>Ket Domisili
                            </a>
                            <a href="/dashboard/usaha" class="dropdown-item {{ Request::is('dashboard/usaha*') ? 'active' : '' }}">
                                <i class="bi bi-shop me-2"></i>Ket Usaha
                            </a>
                            <a href="/dashboard/sktm" class="dropdown-item {{ Request::is('dashboard/sktm*') ? 'active' : '' }}">
                                <i class="fa fa-user-alt-slash me-2"></i>Ket SKTM
                            </a>
                            <a href="/dashboard/kematian" class="dropdown-item {{ Request::is('dashboard/skk*') ? 'active' : '' }}">
                                <i class="fa fa-cross me-2"></i>Ket SKK
                            </a>
                            <a href="/dashboard/permohonankeramaian" class="dropdown-item {{ Request::is('dashboard/permohonankeramaian*') ? 'active' : '' }}">
                                <i class="fa fa-users me-2"></i>Ket PIK
                            </a>
                            <a href="/dashboard/SPPH" class="dropdown-item {{ Request::is('dashboard/SPPH*') ? 'active' : '' }}">
                                <i class="bi bi-card-list me-2"></i>Ket SPPH
                            </a>
                            <a href="/dashboard/hajat" class="dropdown-item {{ Request::is('dashboard/hajat*') ? 'active' : '' }}">
                                <i class="fa fa-calendar-alt me-2"></i>Ket Hajat
                            </a>
                            <a href="/dashboard/suratjalansapi" class="dropdown-item {{ Request::is('dashboard/suratjalansapi*') ? 'active' : '' }}">
                                <i class="fa fa-truck me-2"></i>Ket Jalansapi
                            </a>
                            <a href="/dashboard/sksp" class="dropdown-item {{ Request::is('dashboard/sksp*') ? 'active' : '' }}">
                                <i class="fa fa-ring me-2"></i>Ket Pernikahan
                            </a>
                            <a href="/dashboard/skln" class="dropdown-item {{ Request::is('dashboard/skln*') ? 'active' : '' }}">
                                <i class="fa fa-plane-departure me-2"></i>Ket KeLuar Negeri
                            </a>
                            <a href="/dashboard/skbi" class="dropdown-item {{ Request::is('dashboard/skbi*') ? 'active' : '' }}">
                                <i class="fa fa-id-badge me-2"></i>Ket Beda Identitas
                            </a>
                            <a href="/dashboard/skps" class="dropdown-item {{ Request::is('dashboard/skps*') ? 'active' : '' }}">
                                <i class="fa fa-users-cog me-2"></i>Ket Penduduk Sementara
                            </a>
                            <a href="/dashboard/telahmenikah" class="dropdown-item {{ Request::is('dashboard/telahmenikah*') ? 'active' : '' }}">
                                <i class="fa fa-heart me-2"></i>Ket Telah Menikah
                            </a>
                            <a href="/dashboard/izinsuami" class="dropdown-item {{ Request::is('dashboard/izinsuami*') ? 'active' : '' }}">
                                <i class="fa fa-user-check me-2"></i>Ket Izin Suami
                            </a>
                            <a href="/dashboard/ahliwaris" class="dropdown-item {{ Request::is('dashboard/ahliwaris*') ? 'active' : '' }}">
                                <i class="fa fa-file-invoice me-2"></i>Ket Ahli Waris
                            </a>
                            <a href="/dashboard/suratIzinOrtu" class="dropdown-item {{ Request::is('/dashboard/suratIzinOrtu*') ? 'active' : '' }}">
                                <i class="fa fa-users me-2"></i>Ket Izin Ortu
                            </a>
                        </div>
                    </div>
                </div>
                
            </nav>
        </div>
        <!-- Sidebar End -->

