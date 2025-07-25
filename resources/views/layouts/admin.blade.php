@extends('layouts.base')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">@yield('page-title', 'Dashboard')</h1>
        <p class="mb-6">@yield('page-heading', 'Welcome to the Admin Dashboard')</p>
    </div>
@endsection
