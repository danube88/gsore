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
    <li class="page-breadcrumb__nav active">Contact Us</li>
@endsection

@section('main')
    <x-contact.main/>
@endsection

@section('footer')
    <x-footer.footer/>
@endsection

@push('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGM-62ap9R-huo50hJDn05j3x-mU9151Y"></script>
@endpush
