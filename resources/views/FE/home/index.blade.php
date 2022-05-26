@extends('Fe/template.header')
@section('title', 'Sistem Informasi Berbasis Web GKPI TArutung Kota - Beranda')

@section('content')
            <h1 class="text head" style="text-align: center;">
                Informasi Tentang GKPI Tarutung Kota
            </h1>
            <div class="col-md">
                <div class="header-body text-center mt-6 mb-4">
                    <div class="row justify-content-left">
                        <div class="col-lg-6 col-md-8">
                            <div class="header-body text-center mt-6 mb-4">
                            <h2 class="col-md">GKPI Jemaat Khusus Tarutung Kota</h2>
                            <p class="col-md text2">Gereja Kristen Protestan Indonesia (GKPI) Tarutung Kota adalah gereja yang terletak di Jl. Raja Saul 
                                            Lumbantobing, Hutatoruan VI, Tarutung, Kabupaten Tapanuli Utara, Sumatera Utara. GKPI Tarutung 
                                            Kota berdiri pada tanggal 31 Januari 1965 dan diresmikan pada tanggal 19 September 1965. Saat ini,
                                            Jemaat GKPI Tarutung Kota memiliki 284 Kepala Keluarga (KK) dengan 1360 jiwa jemaat. Pada hari minggu, GKPI Tarutung kota mengadakan ibadah yang terdiri dari ibadah anak sekolah minggu, ibadah minggu sesi I dan sesi II.</p>


                        </div>
                    </div>
                     <p class="col-lg-2"></p>
                         <img class="col-lg-6" style="width: 30%; height: 50%;" src="{{ asset('img/gkpi.png') }}">
                </div>
                </div>
            </div>
            <section class="mb-5">
        <div class="row">
            <div class="col-md">
                <div class="header-body text-center mt-6 mb-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8 border-bottom">
                            <h2 class="tex">Jadwal Ibadah</h2>
                            <p class="tex">Jadwal Ibadah untuk dapat dengan mudah mengetahui seputar jadwal ibadah Gereja.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($jadwal_ibadah as $item)
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card animate-up shadow">
                        
                        <div class="card-body text-center">
                                <p class="text">{{ $item->name }}</p>
                                <p>Tanggal : {{ $item->tanggal }}</p>
                                <p>Jam : {{ $item->waktu }}</p>
                                <p>Dilaksanakan: {{ $item->pengulangan }}</p>
                                <div class="mt-3 d-flex justify-content-between text-sm text-muted">
                                    <i class="fas fa-clock"> {{ $item->created_at->diffForHumans() }}</i>
                                    <i class="fas fa-eye"> {{ $item->dilihat }} Kali Dibaca</i>
                                </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md">
                <div class="header-body text-center mt-6 mb-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8 border-bottom">
                            <h2 class="tex">Berita Gereja</h2>
                            <p class="tex">Berita Gereja  jemaat  dapat dengan mudah mengetahui informasi seputar berita Gereja.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($warta_jemaat as $item)
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card animate-up shadow">
                        
                        <div class="card-body text-center">
                                <h5>{{ $item->nama }}</h5>
                                <p class="text">{{ $item->isi }}</p>
                                <p>Tanggal : {{ $item->tanggal }}</p>
                                <div class="mt-3 d-flex justify-content-between text-sm text-muted">
                                    <i class="fas fa-clock"> {{ $item->created_at->diffForHumans() }}</i>
                                    <i class="fas fa-eye"> {{ $item->dilihat }} Kali Dibaca</i>
                                </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </section>
            
            @endsection

