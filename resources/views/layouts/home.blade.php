<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style/home-global.css') }}">
    <link rel="stylesheet" href="@yield('style')">
    <title>GKPI TARUTUNG - @yield('title')</title>
</head>

<body>
    <div class="wrapper">
        <div id="sidebar" class="sidebar shadow-sm">
            <button id="sidebarclose"  class="btn-close-1">
                <i class="fa fa-times"></i>
            </button>
            <div class="logo d-flex flex-column gap-4 mb-4 align-items-center justify-content-center">
                <a href="{{ route('home.index') }}"><img src="{{ asset('img/icon.png') }}" alt=""></a>
                <strong style="font-size: 25px; border-bottom: 3px;" class="text-center">GKPI TARUTUNG KOTA</strong>
            </div>
            @foreach ($navbars as $navbar)
                @if (!$navbar['isGroup'])
                    <a href="{{ $navbar['url'] }}"
                        class="col-12 gap-2 navbar-item d-flex align-items-center {{ explode("?", $_SERVER['REQUEST_URI'])[0] === $navbar['url'] ? 'active shadow-sm' : '' }}">
                        {!! $navbar['icon'] !!}
                        <span>{{ $navbar['name'] }}</span>
                    </a>
                @else
                    <div class="col-12 navbar-group">
                        <span>{{ $navbar['name'] }}</span>
                        @foreach ($navbar['navbars'] as $child)
                            <a href="{{ $child['url'] }}"
                                class="d-flex gap-2 navbar-item align-items-center col-12 {{ explode("?", $_SERVER['REQUEST_URI'])[0] === $child['url'] ? 'active shadow-sm' : '' }}">
                                {!! $child['icon'] !!}
                                <span>{{ $child['name'] }}</span>
                            </a>
                        @endforeach
                    </div>
                @endif
            @endforeach
            <div class="col-12 navbar-group">
                <span>Data Keuangan</span>
                    <a href="{{ route('pendeta.datakeuangan') }}"
                        class="d-flex gap-2 navbar-item align-items-center col-12 {{ explode("?", $_SERVER['REQUEST_URI'])[0] === $child['url'] ? 'active shadow-sm' : '' }}">
                        <i class="fa fa-money text-white"></i>
                        <span>Kelola Keuangan</span>
                </a>
                <a href="{{ route('pendeta.datakeuangannonaktif') }}"
                        class="d-flex gap-2 navbar-item align-items-center col-12 {{ explode("?", $_SERVER['REQUEST_URI'])[0] === $child['url'] ? 'active shadow-sm' : '' }}">
                        <i class="fa fa-money text-white"></i>
                        <span>Kelola Keuangan Non-Aktif</span>
                </a>
                <a href="{{ route('pendeta.danapemasukan') }}"
                        class="d-flex gap-2 navbar-item align-items-center col-12 {{ explode("?", $_SERVER['REQUEST_URI'])[0] === $child['url'] ? 'active shadow-sm' : '' }}">
                        <i class="fa fa-money text-white"></i>
                        <span>Dana Pemasukan</span>
                </a>
                <a href="{{ route('pendeta.danapengeluaran') }}"
                        class="d-flex gap-2 navbar-item align-items-center col-12 {{ explode("?", $_SERVER['REQUEST_URI'])[0] === $child['url'] ? 'active shadow-sm' : '' }}">
                        <i class="fa fa-money text-white"></i>
                        <span>Dana Pengeluaran</span>
                </a>
            </div>

            <div class="col-12 navbar-group">
                <span>Laporan Keuangan</span>
                    <a href="{{ route('pendeta.laporankeuangan') }}"
                        class="d-flex gap-2 navbar-item align-items-center col-12 {{ explode("?", $_SERVER['REQUEST_URI'])[0] === $child['url'] ? 'active shadow-sm' : '' }}">
                        <i class="fa fa-money text-white"></i>
                        <span>Kelola Laporan Keuangan</span>
                </a>
                <a href="{{ route('pendeta.laporankeuangannonaktif') }}"
                        class="d-flex gap-2 navbar-item align-items-center col-12 {{ explode("?", $_SERVER['REQUEST_URI'])[0] === $child['url'] ? 'active shadow-sm' : '' }}">
                        <i class="fa fa-money text-white"></i>
                        <span>Kelola Laporan Keuangan Non-Aktif</span>
                </a>
                <a href="{{ route('pendeta.formcarilaporanmingguan') }}"
                        class="d-flex gap-2 navbar-item align-items-center col-12 {{ explode("?", $_SERVER['REQUEST_URI'])[0] === $child['url'] ? 'active shadow-sm' : '' }}">
                        <i class="fa fa-money text-white"></i>
                        <span>Laporan Keuangan Mingguan</span>
                </a>
                <a href="{{ route('pendeta.formcarilaporanbulanan') }}"
                        class="d-flex gap-2 navbar-item align-items-center col-12 {{ explode("?", $_SERVER['REQUEST_URI'])[0] === $child['url'] ? 'active shadow-sm' : '' }}">
                        <i class="fa fa-money text-white"></i>
                        <span>Laporan Keuangan Bulanan</span>
                </a>
                <a href="{{ route('pendeta.formcarilaporantahunan') }}"
                        class="d-flex gap-2 navbar-item align-items-center col-12 {{ explode("?", $_SERVER['REQUEST_URI'])[0] === $child['url'] ? 'active shadow-sm' : '' }}">
                        <i class="fa fa-money text-white"></i>
                        <span>Laporan Keuangan Tahunan</span>
                </a>
            </div>

            <div class="col-12 navbar-group">
                        <span>Berita Gereja</span>
                            <a href="{{ route('Berita.index') }}"
                                class="d-flex gap-2 navbar-item align-items-center col-12 {{ explode("?", $_SERVER['REQUEST_URI'])[0] === $child['url'] ? 'active shadow-sm' : '' }}">
                                <i class="fa fa-book text-white"></i>
                                <span>Lihat Berita Gereja</span>
                            </a>
                    </div>
            <div class="col-12 navbar-group">
                        <span>Pelayan Gereja</span>
                            <a href="{{ route('Tatausaha.index') }}"
                                class="d-flex gap-2 navbar-item align-items-center col-12 {{ explode("?", $_SERVER['REQUEST_URI'])[0] === $child['url'] ? 'active shadow-sm' : '' }}">
                                <i class="fa fa-user-plus text-white"></i>
                                <span>Tambah Pelayan</span>
                            </a>
                    </div>        
            
        </div>
        <div class="content">
            <div class="content-navbar shadow d-flex align-items-center px-3">
                <button class="btn btn-navbar fs-3" id="sidebaropen"><i class="fa fa-bars"></i></button>
                <h3>@yield('page_name')</h3>
                @yield('navbar_content')
                <div class="dropdown ms-auto navbar-logout">
                    <button class="btn dropdown-toggle d-flex align-items-center gap-3" type="button"
                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="rounded-circle" src="{{ asset(StaticVariable::$user->profile) }}" alt="">
                        {{ StaticVariable::$user->name }}
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            Profil Saya
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-cog" aria-hidden="true"></i>
                            Pengaturan
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('auth.logout') }}">
                            <i class="fa fa-sign-out"></i>
                            Keluar
                        </a>
                    </div>
                </div>
            </div>
            <div class="content-body p-3">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://use.fontawesome.com/cdd28e0189.js"></script>
    <script src="{{ asset('js/global.js') }}"></script>
    <script src="@yield('script')"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
