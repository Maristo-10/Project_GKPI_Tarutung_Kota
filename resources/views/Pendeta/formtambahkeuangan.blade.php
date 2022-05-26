<?php
    $navbars = StaticVariable::$navbarPendeta;
?>
@extends('layouts.home')

@section('style', asset('css/style/pendeta.css'))
@section('title', 'Login')
@section('page_name', "Data Keuangan")
@section('content')
    @include("components.formtambahkeuangan")
@endsection