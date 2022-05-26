<?php
$navbars = StaticVariable::$navbarPendeta;
?>
@extends('layouts.home')
@section('title', 'Sistem Informasi Berbasis Web GKPI TArutung Kota - Beranda')

    <!-- Icons -->
    <link href="{{ asset('/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
    <link href="{{ asset('/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    
@section('content')
    <section class="mb-5">
        <div class="row">
            <div class="col-md">
                <div class="header-body text-left mt-4 mb-4">
                    <div class="row justify-content">
                        <div class="row col-lg-12 col-md-4 border-bottom">
                            <div class="col-9">
                            <h2 class="text">Berita Gereja</h2>
                            <p class="tex">Berita Gereja  jemaat  dapat dengan mudah mengetahui informasi seputar berita Gereja.</p>
                            </div>
                            <div class="col-3">
                            <a href="{{ route('Berita.create') }}" class="btn btn-success p-2 ms-auto">
                              <i class="fa fa-plus"></i>
                             <span>Tambah Berita Gereja</span>
                                 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($warta_jemaat as $item)
                <div class="col-lg-6 col-md-2 mb-4">
                    <div class="card animate-up shadow">
                        
                        <div class="card-body text-center">
                        <img alt="" class="img-responsive img-fluid rounded" width="100" src="{{ asset('storage/' .$item->lampiran.'') }}">
                                <p><strong>{{ $item->isi }}</strong></p>
                                <p>Tanggal : {{ $item->tanggal }}</p>
                                <div class="mt-3 d-flex justify-content-between text-sm text-muted">
                                    <i class="fas fa-clock"> {{ $item->created_at->diffForHumans() }}</i>
                                    <i class=""> dibuat oleh, {{ $item->created_by }}</i>
                                </div>
                        </div>
                        <div class="row mt-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="/ubah-berita/{{$item->id}}" class="btn btn-sm btn-warning hapus-data col-5" title="Edit" style="color: white;"><i class="fa fa-edit"></i> Edit</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-sm btn-danger hapus-data col-5" data-nama="{{ $item->judul }}" data-action="" data-toggle="modal" href="#modal-hapus" title="Nonaktifkan"><i class="fa fa-trash"></i> Nonaktifkan</a>
                         </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
            
            @endsection

