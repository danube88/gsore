@extends('layouts.siteApp')

@section('header')
    <x-header.header/>
    <x-header.mobile-header/>
    <x-header.mobile-offcanvas-menu/>
    <x-header.popup-add-cart/>
    <x-header.offcanvas-overlay/>
@endsection

@section('breadcrumb')
    <li class="page-breadcrumb__nav">Home</li>
@endsection

@section('main')
    <x-home.main/>
@endsection

@section('footer')
    <x-footer.footer/>
@endsection
