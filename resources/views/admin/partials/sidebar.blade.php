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

                <li class="nav-item nav-category">Menu</li>
                <li class="nav-item">
                    <a href="{{ url('/admin/kategori') }}" class="nav-link">
                        <i class="link-icon" data-feather="clipboard"></i>
                        <span class="link-title">Kategori</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/admin/sub-kategori') }}" class="nav-link">
                        <i class="link-icon" data-feather="file"></i>
                        <span class="link-title">Sub Kategori</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/admin/buku') }}" class="nav-link">
                        <i class="link-icon" data-feather="book-open"></i>
                        <span class="link-title">Buku or Ebook</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/admin/majding') }}" class="nav-link">
                        <i class="link-icon" data-feather="camera"></i>
                        <span class="link-title">Mading</span>
                    </a>
                </li>

                <li class="nav-item nav-category">Verifikasi</li>
                <li class="nav-item">
                    <a href="{{ url("/laporanindex") }}" class="nav-link">
                        <i class="link-icon" data-feather="check-circle"></i>
                        <span class="link-title">Buku</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url("/laporanindex") }}" class="nav-link">
                        <i class="link-icon" data-feather="check-square"></i>
                        <span class="link-title">Mading</span>
                    </a>
                </li>

                <li class="nav-item nav-category">Laporan</li>
                <li class="nav-item">
                    <a href="{{ url("/laporanindex") }}" class="nav-link">
                        <i class="link-icon" data-feather="folder"></i>
                        <span class="link-title">Data Anggota</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url("/de_index") }}" class="nav-link">
                        <i class="link-icon" data-feather="book"></i>
                        <span class="link-title">Data Ebook</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url("/dm_index") }}" class="nav-link">
                        <i class="link-icon" data-feather="clipboard"></i>
                        <span class="link-title">Data Mading</span>
                    </a>
                </li>

                <li class="nav-item nav-category">Master</li>
                <li class="nav-item">
                    <a href="{{ url("/admin/autentikasi/petugas") }}" class="nav-link">
                        <i class="link-icon" data-feather="user-plus"></i>
                        <span class="link-title">Admin</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/index') }}" class="nav-link">
                        <i class="link-icon" data-feather="book-open"></i>
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
