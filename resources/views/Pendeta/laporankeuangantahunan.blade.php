<?php
$navbars = StaticVariable::$navbarPendeta;
?>
@extends('layouts.home')

@section('style', asset('css/style/pendeta.css'))
@section('title', 'Login')
@section('page_name', 'Laporan Keuangan Tahunan')
@section('navbar_content')

@endsection
@section('content')
    @include('components.laporankeuangantahunan')
@endsection