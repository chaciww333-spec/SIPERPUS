<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
           <span class="app-brand-logo demo">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 64 64 " fill="none">
                    <!-- Cover buku -->
                    <path d="M12 8H52V56H12C9.79 56 8 54.21 8 52V12C8 9.79 9.79 8 12 8Z" fill="#E75480"/>
                    <!-- Bagian samping buku -->
                    <path d="M52 8H44V56H52C54.21 56 56 54.21 56 52V12C56 9.79 54.21 8 52 8Z" fill="#d64572"/>
                    <!-- Garis dekorasi halaman -->
                    <path d="M16 16H40V20H16V16Z" fill="white"/>
                    <path d="M16 24H36V28H16V24Z" fill="white"/>
                    <path d="M16 32H32V36H16V32Z" fill="white"/>
                </svg>
            </span>

            <span class="app-brand-text demo menu-text fw-bold">SIPERPUS</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
            <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-item">
            <a href="{{ route('home') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-home"></i>
                Dashboard
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('admin.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users"></i>
                Admin
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('pustakawan.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-apps-off"></i>
                Pustakawan
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('anggota.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-users-group"></i>
                Anggota
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('buku.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-book"></i>
                Buku
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('kategori.index') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-clipboard"></i>
                Kategori
            </a>
        </li>

        <li class="menu-header small">
            <span class="menu-header-text" data-i18n="Components">Components</span>
        </li>

        <li class="menu-item">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons ti ti-arrow-up"></i>
                Peminjaman
            </a>
        </li>
        <li class="menu-item">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons ti ti-arrow-down"></i>
                Pengembalian
            </a>
        </li>


    </ul>
</aside>
