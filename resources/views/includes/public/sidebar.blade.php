@if (auth()->user()->role=="admin")
<div class="col-lg-2">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin_dokumen') }}">
                        Dokumen
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin_laporan') }}">
                        Laporan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin_evaluasi') }}">
                        Lembar Evaluasi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin_users') }}">
                        List User
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
@elseif (auth()->user()->role=="pimpinan")
<div class="col-lg-2">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pimpinan_dokumen') }}">
                        Dokumen
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pimpinan_laporan') }}">
                        Laporan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pimpinan_evaluasi') }}">
                        <span data-feather="shopping-cart"></span>
                        Lembar Evaluasi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pimpinan_profile') }}">
                        <span data-feather="users"></span>
                        Profile
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
@elseif (auth()->user()->role=="kepaladepartemen")
<div class="col-lg-2">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kepaladepartemen_dokumen') }}">
                        Dokumen
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kepaladepartemen_laporan') }}">
                        Laporan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kepaladepartemen_evaluasi') }}">
                        <span data-feather="shopping-cart"></span>
                        Lembar Evaluasi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kepaladepartemen_profile') }}">
                        <span data-feather="users"></span>
                        Profile
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
@elseif (auth()->user()->role=="pelayan")
<div class="col-lg-2">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pelayan_dokumen') }}">
                        Dokumen
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pelayan_laporan') }}">
                        Laporan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pelayan_evaluasi') }}">
                        <span data-feather="shopping-cart"></span>
                        Lembar Evaluasi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pelayan_profile') }}">
                        <span data-feather="users"></span>
                        Profile
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
@endif

