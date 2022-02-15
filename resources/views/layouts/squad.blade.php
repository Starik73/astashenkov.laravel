<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Astashenkov.ru, сайт о программировании и мире IT, Асташенков Алексей Ульяновск HTML CSS JavaScript PHP LARAVEL +79021290036' }}</title>
    <meta content="{{ $description ?? 'Astashenkov.ru, сайт о программировании и мире IT, Асташенков Алексей Ульяновск HTML CSS JavaScript PHP LARAVEL +79021290036' }}" name="description">
    <meta content="{{ $keywords ?? 'Astashenkov.ru, сайт о программировании и мире IT, Асташенков Алексей Ульяновск HTML CSS JavaScript PHP LARAVEL +79021290036' }}" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}">
    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    {{-- Header --}}
    @include('squad_components.header')
    {{-- Hero --}}
    @include('squad_components.hero',[
            'post' => [
                'title'      => $post_title ?? 0,
                'updated_at' => $post_updated_at ?? 0,
                'author'     => $post_author ?? 0
            ]
        ]
    )
    {{-- Flash --}}
    <div class="container">
        <div class="col-md-4 offset-md-8">
            <div class="absolute mt-5">
                @include('components.flash-message')
            </div>
        </div>
    </div>
    {{-- Main --}}
    <main id="main">
        {{ $slot }}
    </main>
    <!-- End #main -->
    {{-- Footer --}}
    @include('squad_components.footer')
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
