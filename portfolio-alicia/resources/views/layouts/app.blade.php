<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <!--- Basic Page Needs -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Alicia')</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS -->
    <link href="{{ asset('css/vendor.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
</head>
<body id="top">

    @include('partials.preloader')

    <div id="page" class="s-pagewrap">
        @include('partials.header')

        <main id="content" class="s-content">
            @yield('content')
        </main>

        @include('partials.cta')
        @include('partials.footer')
    </div>

    <!-- Java Script
    ================================================== -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    @stack('scripts') <!-- Untuk tambahan script dari child -->
</body>
</html>
