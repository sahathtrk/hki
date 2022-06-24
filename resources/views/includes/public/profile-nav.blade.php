    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded" aria-label="First navbar example">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarsExample01">
                <ul class="navbar-nav me-auto mb-2">
                    <li class="nav-item">
                        <a class="nav-link" href="
                        @if (auth()->user()->role == 'admin')
                            /admin/profile/
                        @elseif (auth()->user()->role == 'pimpinan')
                            /pimpinan/profile
                        @elseif (auth()->user()->role == 'kepaladepartemen')
                            /kepaladepartemen/profile
                        @elseif (auth()->user()->role == 'pelayan')
                            /pelayan/profile/data-pribadi
                        @endif">Data Pribadi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="
                        @if (auth()->user()->role == 'admin')
                            /admin/profile/data-gerejawi
                        @elseif (auth()->user()->role == 'pimpinan')
                            /pimpinan/profile/data-gerejawi
                        @elseif (auth()->user()->role == 'kepaladepartemen')
                            /kepaladepartemen/profile/data-gerejawi
                        @elseif (auth()->user()->role == 'pelayan')
                            /pelayan/profile/data-gerejawi
                        @endif">Data Gerejawi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="
                        @if (auth()->user()->role == 'admin')
                            /admin/profile/data-formal
                        @elseif (auth()->user()->role == 'pimpinan')
                            /pimpinan/profile/data-formal
                        @elseif (auth()->user()->role == 'kepaladepartemen')
                            /kepaladepartemen/profile/data-formal
                        @elseif (auth()->user()->role == 'pelayan')
                            /pelayan/profile/data-formal
                        @endif">Data Pendidikan
                            Formal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="
                        @if (auth()->user()->role == 'admin')
                            /admin/profile/data-informal
                        @elseif (auth()->user()->role == 'pimpinan')
                            /pimpinan/profile/data-informal
                        @elseif (auth()->user()->role == 'kepaladepartemen')
                            /kepaladepartemen/profile/data-informal
                        @elseif (auth()->user()->role == 'pelayan')
                            /pelayan/profile/data-informal
                        @endif">Data Pendidikan
                            Informal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="
                        @if (auth()->user()->role == 'admin')
                            /admin/profile/data-pasangan
                        @elseif (auth()->user()->role == 'pimpinan')
                            /pimpinan/profile/data-pasangan
                        @elseif (auth()->user()->role == 'kepaladepartemen')
                            /kepaladepartemen/profile/data-pasangan
                        @elseif (auth()->user()->role == 'pelayan')
                            /pelayan/profile/data-pasangan
                        @endif">Data Pasangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="
                        @if (auth()->user()->role == 'admin')
                            /admin/profile/data-anak
                        @elseif (auth()->user()->role == 'pimpinan')
                            /pimpinan/profile/data-anak
                        @elseif (auth()->user()->role == 'kepaladepartemen')
                            /kepaladepartemen/profile/data-anak
                        @elseif (auth()->user()->role == 'pelayan')
                            /pelayan/profile/data-anak
                        @endif">Data Anak</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
