<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
           <span class="app-brand-logo demo">
                <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 64 64 " fill="none">
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
    <style>
        .app-brand-logo svg{
            width:80px !important;
            height:80px !important;
        }
        .nav-link span.emoji {
            font-size: 1.3rem;
            transition: transform 0.2s, filter 0.2s;
            display: inline-block;
        }

        
        .nav-link:hover span.emoji {
            transform: scale(1.2);
            filter: brightness(1.3);
        }

        
        .nav-link span.text {
            transition: color 0.2s, font-weight 0.2s;
        }

        .nav-link:hover span.text {
            color: #0d6efd; 
            font-weight: bold;
        }
    </style>


   <ul class="nav flex-column">

        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link d-flex align-items-center">
                <span class="emoji me-2">🏠</span>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.index') }}" class="nav-link d-flex align-items-center">
                <span class="emoji me-2">👨‍💻</span>
                <span class="text">Admin</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('pustakawan.index') }}" class="nav-link d-flex align-items-center">
                <span class="emoji me-2">🧑‍🏫</span>
                <span class="text">Pustakawan</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('anggota.index') }}" class="nav-link d-flex align-items-center">
                <span class="emoji me-2">🧑‍🤝‍🧑</span>
                <span class="text">Anggota</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('buku.index') }}" class="nav-link d-flex align-items-center">
                <span class="emoji me-2">📖</span>
                <span class="text">Buku</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('kategori.index') }}" class="nav-link d-flex align-items-center">
                <span class="emoji me-2">📚</span>
                <span class="text">Kategori</span>
            </a>
        </li>
        <li class="menu-header small">
                <span class="menu-header-text" data-i18n="Components">Components</span>
        </li>
        <li class="nav-item">
            <a href="{{ route('peminjaman.index') }}" class="nav-link d-flex align-items-center">
                <span class="emoji me-2">📥</span>
                <span class="text">Peminjaman</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('pengembalian.index') }}" class="nav-link d-flex align-items-center">
                <span class="emoji me-2">📤</span>
                <span class="text">Pengembalian</span>
            </a>
        </li>
    </ul>
</aside>
