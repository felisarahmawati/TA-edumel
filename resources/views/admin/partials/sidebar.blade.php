<div class="main-wrapper">
    <nav class="sidebar">
        <div class="sidebar-header">
            <a href="#" class="sidebar-brand">
               E<span>Dumel</span>
            </a>
            <div class="sidebar-toggler not-active">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="sidebar-body">
            <ul class="nav">
                <li class="nav-item nav-category">Main</li>
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link">
                        <i class="link-icon" data-feather="box"></i>
                        <span class="link-title">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item nav-category">
                    Menu
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#ebooks" role="button" aria-expanded="false" aria-controls="ebooks">
                        <i class="link-icon" data-feather="book">
                        </i>
                        <span class="link-title">
                            Ebook
                        </span>
                        <i class="link-arrow" data-feather="chevron-down">
                        </i>
                    </a>
                    <div class="collapse" id="ebooks">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="{{ url('/admin/kategori') }}" class="nav-link">
                                    Kategori
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/admin/sub-kategori') }}" class="nav-link">
                                    Sub Kategori
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/admin/buku') }}" class="nav-link">
                                    Buku
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/admin/majding') }}" class="nav-link">
                        <i class="link-icon" data-feather="image"></i>
                        <span class="link-title">Mading</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#verifikasi" role="button" aria-expanded="false" aria-controls="verifikasi">
                        <i class="link-icon" data-feather="check-circle">
                        </i>
                        <span class="link-title">
                            Verifikasi
                        </span>
                        <i class="link-arrow" data-feather="chevron-down">
                        </i>
                    </a>
                    <div class="collapse" id="verifikasi">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="{{ url("/admin/verifikasi/v_ebook") }}" class="nav-link">
                                    Buku
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url("/admin/verifikasi/v_mading") }}" class="nav-link">
                                    Mading
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#folders" role="button" aria-expanded="false" aria-controls="folders">
                        <i class="link-icon" data-feather="folder">
                        </i>
                        <span class="link-title">
                            Laporan
                        </span>
                        <i class="link-arrow" data-feather="chevron-down">
                        </i>
                    </a>
                    <div class="collapse" id="folders">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="{{ url("/admin/laporan/dataanggota") }}" class="nav-link">
                                    Data Anggota
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url("/admin/laporan/dataebook") }}" class="nav-link">
                                    Data Ebook
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url("/admin/laporan/datamading") }}" class="nav-link">
                                    Data Mading
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
                        <i class="link-icon" data-feather="settings">
                        </i>
                        <span class="link-title">
                            Setting
                        </span>
                        <i class="link-arrow" data-feather="chevron-down">
                        </i>
                    </a>
                    <div class="collapse" id="emails">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="{{ url('admin/tampilan/landingpage') }}" class="nav-link">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#"  class="nav-link">
                                    About
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('admin/tampilan/footer') }}"  class="nav-link">
                                    Footer
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item nav-category">Master</li>
                <li class="nav-item">
                    <a href="{{ url("/admin/autentikasi/petugas") }}" class="nav-link">
                        <i class="link-icon" data-feather="user-plus"></i>
                        <span class="link-title">Admin</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url("/admin/autentikasi/anggota") }}" class="nav-link">
                        <i class="link-icon" data-feather="users"></i>
                        <span class="link-title">Anggota</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <nav class="settings-sidebar">
        <div class="sidebar-body">
            <a href="#" class="settings-sidebar-toggler">
                <i data-feather="settings"></i>
            </a>
            <h6 class="text-muted mb-2">Sidebar:</h6>
            <div class="mb-3 pb-3 border-bottom">
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
                    <label class="form-check-label" for="sidebarLight">
                        Light
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
                    <label class="form-check-label" for="sidebarDark">
                        Dark
                    </label>
                </div>
            </div>
        </div>
    </nav>
</div>
