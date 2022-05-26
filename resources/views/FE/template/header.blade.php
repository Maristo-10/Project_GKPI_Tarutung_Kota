
<!--

=========================================================
* Argon Dashboard - v1.1.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2020 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="base-url" content="{{ url('') }}">

    <!-- SEO Management-->
    <meta name="author" content="">

    <title>@yield('title')</title>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Icons -->
    <link href="{{ asset('/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{ asset('/css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" >
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" >
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    @yield('styles')
</head>

<body>
    <section>
        <input type="checkbox" id="check">
        <Header>
            <h2>
            <img src="{{asset ('img/icon.png')}}">&nbsp;
            <a class="navbar-brand" href="{{ route('home.index') }}" class="Logo"><b>GKPI Tarutung<br> 
            Kota</b></a>
            </h2>
            <div class="navigation">
                <a class="navbar-brand" href="{{ route('home.index') }}">
                <span class="nav-link-inner--text text1">Beranda</span>
                </a>
                <a class="navbar-brand" href="{{ route('BeritaGereja.index') }}">
                <span class="nav-link-inner--text text1">Berita Gereja</span>
                </a>
                <a class="navbar-brand" href="{{ route('home.index') }}">
                <span class="nav-link-inner--text text1">Data Gereja</span>
                </a>
                <a class="navbar-brand" href="{{ route('home.index') }}">
                <span class="nav-link-inner--text text1">Renungan Harian</span>
                </a>
                <a class="navbar-brand" href="{{ route('home.index') }}">
                <span class="nav-link-inner--text text1">Tentang Gereja</span>
                </a>
                <a class="navbar-brand" href="{{ route('auth.login') }}">
                <span class="nav-link-inner--text text1">Masuk</span>
                    <i class="fa fa-sign-in text"></i>
                </a>
            </div>       
            <label for="check">
                <i class="fas fa-bars menu-btn"></i>
                <i class="fas fa-times close-btn"></i> 
            </label>
        </Header> 
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <img src="{{ asset('img/SLider.png') }}" class="d-block w-100">
                    <div class="carousel-caption d-none d-md-block text-right">
                        <div class="row">
                            <div class="col-6"></div>
                            <h2 class="col-6 tulis">Lihat Semua Galeri tentang GKPI Tarutung Kota</h2>
                            <div class="col-7"></div>
                            <div class="col-4 tulis"><a class="navbar-brand" href=""><button class="but1 first">Lihat Galeri &nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button></a></div>
                            <div class="col-6"></div>
                            <div class="col-6"></div>
                        </div>
                    </div>
                </div> 
            </div>  
    </section>



    <!-- <div class="content"> -->
        <!-- Navbar -->
        <!-- <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
            <div class="container px-0">
                <a class="navbar-brand" href="{{ url('') }}">
                     <p style="text-align: center;"><a href="{{ route('home.index') }}">
                    <img src="{{asset ('img/icon.png')}}">&nbsp;&nbsp;&nbsp;
                </a></p>
                    <h2 class="h3 logo text"><b>GKPI Tarutung
                    <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kota</b></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-collapse-main"> -->
                    <!-- Navbar items -->
                    <!-- <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="{{ route('home.index') }}">
                                <span class="nav-link-inner--text text1">Beranda</span>
                            </a>
                        </li>
             
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="{{ route('BeritaGereja.index') }}">
                                <span class="nav-link-inner--text text1">Berita Gereja</span>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="">
                                <span class="nav-link-inner--text text1">Data Gereja</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="">
                                <span class="nav-link-inner--text text1">Renungan Harian</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="">
                                <span class="nav-link-inner--text text1">Tentang Gereja</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-icon" href="{{ route('auth.login') }}">
                                <span class="nav-link-inner--text text1">Masuk</span>
                                <i class="fa fa-sign-in text"></i>
                            </a>
                        </li>
                    </ul>        
                </div>
            </div>
        </nav> -->
        <!-- <div> -->
           <!-- Header -->
           <!-- <div class="header bg-gradient-primary py-0 py-lg-8 container mt-4 pb-5">
                </div>
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <img src="{{ asset('img/SLider.png') }}" class="d-block w-100">
                        <div class="carousel-caption d-none d-md-block text-right">
                        <div class="row">
                            <div class="col-6"></div>
                            <h1 class="col-6 tulis">Kamu Bisa Melihat Semua Galeri tentang GKPI Tarutung Kota</h1>
                            <div class="col-8"></div>
                            <div class="col-4 tulis"><a href=""><button class="but1 first">Lihat Galeri &nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button></a></div>
                            <div class="col-6"></div>
                            <div class="col-6"></div>
                        </div>
                        </div>
                        <div class="container">
                     </div> 
                    </div>
                </div>
           
        </div> -->
        <!-- Page content -->
        <div class="container mt-4 pb-5">
            @yield('content')
        </div>
        <footer class="py-5">
            <div class="container">
                <div class="row align-items-center justify-content-xl-between">
                    <div class="col-xl-4">
                        <div class="copyright text-center text-xl-left text-muted">
                             <h4 class="text-white">GKPI Jemaat Khusus Tarutung Kota </h4>
                             <a href="https://goo.gl/maps/fh9i7x2ZFGjhLb5Z7"><i class="fa fa-map-marker text foot" style="font-size:30px;"></i></a>
                             <span class="nav-link-inner--text text-white" ">Jl. Raja Saul Lumbantobing, Hutatoruan VI, 
                            Tarutung, Kabupaten Tapanuli Utara, Sumatera Utara.</span>
                        </div>
                    </div>
                    <div class="col-xl-2"><br>
                             <h4 class="text-white">Tentang </h4>
                              <ul>
                            <li class="p-b-10" style="color: white">
                                <a href="" class="stext-107 cl7 hov-cl1 trans-04" style="color: white;">
                                    Sejarah Gereja
                                </a>
                            </li>
                            <li class="p-b-10" style="color: white">
                                <a href="" class="stext-107 cl7 hov-cl1 trans-04" style="color: white;" >
                                    Struktur Kepengurusan
                                </a>
                            </li>
                            <li class="p-b-10" style="color: white">
                                <a href="" class="stext-107 cl7 hov-cl1 trans-04" style="color: white;">
                                    Persekutuan Gereja
                                </a>
                            </li>
                            </ul>
                    </div>
                    <div class="col-xl-3">
                    <h5 class="text-white">Hubungi Kami</h5>
                             <i class="fa fa-phone text foot" style="font-size:20px;"></i>
                             <span class="nav-link-inner--text text-white">081251259854</span>
                             <i class="fa fa-whatsapp" style="font-size:20px; color: green;"></i>
                             <span class="nav-link-inner--text text-white">081251259854</span>
                    <h5 class="text-white ">Sosial Media</h5>
                    <a href="https://www.instagram.com/pp_gkpi_tarutung_kota/">
                    <i class="fa fa-facebook" style="font-size:30px; color: blue;"></i></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-instagram" style="font-size:30px; color: red;"></i>

                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </footer>
        
        
</div>
</body>

</html>
