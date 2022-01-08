<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('js/app.js') }}" defer></script>
        <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery-migrate-3.0.0.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/popper.min.js') }}" defer></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}" defer></script>
        <script type="text/javascript" src="{{ asset('js/func.js') }}" defer></script>
        <script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation', ['nav_menu' => $nav_menu ?? []])
            <div class="container">
                @include('backend.components.flash-message')
            </div>
            @if (!empty($header))
            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
            @endif
            <!-- Page Content -->
            <main>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-2">
                            @include('backend.components.sidebar')
                        </div>
                        <div class="col-md-10">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
