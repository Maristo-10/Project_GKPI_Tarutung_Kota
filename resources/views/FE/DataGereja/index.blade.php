@extends('Fe/template.header')
@section('title', 'Data Gereja')

@section('content')
            <section class="mb-5">
        <div class="row">
            <div class="col-md">
                <div class="header-body text-center mt-6 mb-4">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8 border-bottom">
                            <h2 class="text">Data Gereja</h2>
                            <p class="tex">Data Gereja  untuk memudahkan jemaat  mengetahui informasi seputar Data Gereja.</p>
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
                                <p>{{ $item->isi }}</p>
                                <p>{{ $item->tanggal }}</p>
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

