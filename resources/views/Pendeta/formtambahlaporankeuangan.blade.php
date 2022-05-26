<?php
    $navbars = StaticVariable::$navbarPendeta;
?>
@extends('layouts.home')

@section('style', asset('css/style/pendeta.css'))
@section('title', 'Login')
@section('page_name', "Tambah Laporan Keuangan")
@section('content')
    @include("components.formtambahlaporankeuangan")
@endsection