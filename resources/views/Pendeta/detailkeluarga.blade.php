<?php
    $navbars = StaticVariable::$navbarPendeta;
?>
@extends('layouts.home')

@section('style', asset('css/style/pendeta.css'))
@section('title', 'Login')
@section('page_name', $keluarga->nama_keluarga)
@section('content')
    @include('components.detailkeluarga')
@endsection
