<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns:og="http://ogp.me/ns#">
    <head>
        <!-- SEO -->
        <meta charset="utf-8">
        <title>{{ config('app.name', 'Astashenkov Aleksey, HTML, PHP, JS, Laravel') }}</title>
        <meta name="description" content="{{ $description ?? 'Описание страницы'}}" />
        <meta name="robots" content="index,follow" />
        <meta name="keywords" content={{ $keywords ?? "Программирование, HTML, CSS, JS, PHP, Laravel"}} />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- OG meta -->
        <meta property="og:title" content="{{ $og_title ?? 'Astashenkov Aleksey, HTML, PHP, JS, Laravel' }}" />
        <meta property="og:image" content="{{ $og_image ?? route('index').'/images/img_2.jpg' }}" />
        <meta property="og:image:width" content="1200"/>
        <meta property="og:image:height" content="630"/>
        <meta property="og:description" content="{{ $og_description ?? 'Асташенков Алексей, блог PHP программиста, первые шаги в WEB разработке' }}"/>
        <meta property="og:type" content="article"/>
        <meta property="og:url" content= "{{ $og_ulr ?? route('index') }}"/>
        <meta property="og:site_name" content="{{ $og_site_name ?? 'Блог о программировании. Асташенков Алексей. HTML, CSS, JS, PHP, Laravel' }}"/>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('fonts/ionicons/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
        <!-- Site Style -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
        <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}" defer></script>
        <script type="text/javascript" src="{{ asset('js/jquery-migrate-3.0.0.js') }}" defer></script>
        <script type="text/javascript" src="{{ asset('js/popper.min.js') }}" defer></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}" defer></script>
        <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
        <script type="text/javascript" src="{{ asset('js/jquery.waypoints.min.js') }}" defer></script>
        <script type="text/javascript" src="{{ asset('js/jquery.stellar.min.js') }}" defer></script>
        <script type="text/javascript" src="{{ asset('js/main.js') }}" defer></script>
        <script type="text/javascript" src="{{ asset('js/func.js') }}" defer></script>
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ route('index') . '/favicon.ico' }}" />
    </head>
    <body>
        @include('frontend.common.navigation')
        {{ $slot }}
        @include('frontend.common.footer')
    </body>
</html>
