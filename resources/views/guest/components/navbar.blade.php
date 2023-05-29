    <!-- navbar -->
    <div class="navbar bg-main sticky top-0">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </label>
                <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>Aktifitas</a></li>
                    <li><a>Perpustakaan</a></li>
                    <li><a>Pelayanan Anggota</a></li>
                    <li><a>Wisudawan</a></li>
                    <li><a>Protect</a></li>
                    <li><a>IPW</a></li>
                    <li><a>Kajian</a></li>
                    <li><a>Pembayaran Kas</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost">
                <img class="h-12 lg:block md:hidden sm:hidden" src="{{ asset('assets/channels4_profile.jpg.png') }}" />
            </a>
        </div>
        <div class="navbar-center align-middle hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a>Aktifitas</a></li>
                <li><a>Perpustakaan</a></li>
                <li><a>Pelayanan Anggota</a></li>
                <li><a>Wisudawan</a></li>
                <li><a>Protect</a></li>
                <li><a>IPW</a></li>
                <li><a>Kajian</a></li>
                <li><a>Pembayaran Kas</a></li>
            </ul>
        </div>
        <div class="navbar-end">
            <a class="btn" href="/login">Log In</a>
        </div>
    </div>
    <!-- Navbar -->
