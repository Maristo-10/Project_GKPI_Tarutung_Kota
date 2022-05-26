<?php
$navbars = StaticVariable::$navbarPendeta;
?>
@extends('layouts.home')
@section('title', 'Sistem Informasi Berbasis Web GKPI TArutung Kota - Beranda')
<link href="{{ asset('/css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet" />

@section('content')
<div class="row">
            <div class="col-md">
                <div class="header-body text-left mt-2 mb-4">
                    <div class="row justify-content">
                        <div class="row col-lg-12 col-md-4 border-bottom">
                            <div class="col-10">
                            <h2 class="text">Tambah Berita Gereja</h2>
                            <p class="text">Berita Gereja  jemaat  dapat dengan mudah mengetahui informasi seputar berita Gereja.</p>
                            </div>
                            <div class="col-2">
                            <a href="{{ route('Berita.index') }}" class="btn btn-success p-2 ms-auto">
                              <i class="fa fa-arrow-left"></i>
                             <span>Kembali</span>
                                 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="row">
    <div class="col mt-4">
        <div class="card  shadow h-100">
            <div class="card-header border-0">
                <h3 class="mb-0">Tambah Berita</h3>
            </div>
            <div class="card-body">
                <form autocomplete="off" action="{{  route('Berita.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                            <label class="form-control-label" for="tanggal">Tanggal</label>
                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" placeholder="Masukkan Tanggal ..." value="{{ old('tanggal') }}">
                            @error('tanggal')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Isi Berita</label>
                        <textarea class="form-control @error('isi') is-invalid @enderror" name="isi">{{ old('isi') }}</textarea>
                        @error('isi') <span class="invalid-feedback font-weight-bold">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="lampiran">Lampiran</label>
                        <input type="file" class="form-control @error('lampiran') is-invalid @enderror" name="lampiran" placeholder="Masukkan Tanggal ..." value="{{ old('lampiran') }}">
                            @error('lampiran')<span class="invalid-feedback font-weight-bold">{{ $message }}</span>@enderror
                    </div>
                    <button type="submit" class="btn btn-success btn-block" id="simpan">SIMPAN</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection