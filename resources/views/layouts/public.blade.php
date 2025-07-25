@extends('layouts.base')
@section('title', '@yield("page-title", "Blog App")') 

@push('styles')
    @vite(['resources/css/navbar.css'])
@endpush
@section('header')
    <x-public-navbar />
@endsection

@section('content')
    
    <!-- Main content area for child pages -->
    <main class="public-main">
        @yield('public-content')
    </main>

@endsection
@section('footer')
    <x-footer />
@endsection
