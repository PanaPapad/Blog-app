<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog App')</title>
    
    <!-- Main CSS -->
    @vite(['resources/css/app.css'])
    
    <!-- Additional CSS files will be added here -->
    @stack('styles')
    
    <!-- Modern JS loading - deferred by default -->
    @stack('head-scripts')
</head>
@yield('header')
<body style="display: flex; flex-direction: column; min-height: 100vh;">
    <!-- Main content -->
    <div style="flex: 1;">
        @yield('content')
    </div>
    
    <!-- Scripts that need to run after content (legacy or specific cases) -->
    @stack('body-scripts')
</body>
@yield('footer')
</html>
