@extends('layouts.siteApp')

@section('header')
    <x-header.header/>
    <x-header.mobile-header/>
    <x-header.mobile-offcanvas-menu/>
    <x-header.popup-add-cart/>
    <x-header.offcanvas-overlay/>
@endsection

@section('breadcrumb')
    <li class="page-breadcrumb__nav"><a href="{{ route('index') }}">Home</a></li>
    <li class="page-breadcrumb__nav active">Shop - Grid Left Sidebar</li>
@endsection

@section('main')
    <x-shop.layout.grid-sidebar.left-main/>
@endsection

@section('footer')
    <x-footer.footer/>
@endsection
