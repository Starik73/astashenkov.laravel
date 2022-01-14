<x-site-layout>
    <section class="site-hero site-hero-innerpage overlay" style="background-image: url({{ asset('images/big_image_1.jpg') }});">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="mb-5 element-animate">
                        <h1>Онлайн уроки</h1>
                    </div>
                </div>
            </div>
        </div>
        @if(!empty($breadcrumbs))
            @include('components.breadcrumbs')
        @endif
    </section>
    <!-- END section -->
    <section class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <h2>Список уроков</h2>
                    <p class="lead">
                        Несколько бесплатных курсов по WEB разработке, которых будет достаточно для начала
                    </p>
                </div>
            </div>
            <div class="row justify-content-center top-course">
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <a href="#" class="course">
                        <h2>HTML</h2>
                        <img class="img-fluid" src="{{ asset('images/html.jpg') }}" alt="HTML">
                        <p>Базовые знания по верстке</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <a href="#" class="course">
                        <h2>CSS</h2>
                        <img class="img-fluid" src="{{ asset('images/css.jpg') }}" alt="CSS">
                        <p>Основы каскадных таблиц стилей</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <a href="#" class="course">
                        <h2>JavaScript</h2>
                        <img class="img-fluid" src="{{ asset('images/javascript.jpg') }}" alt="JavaScript">
                        <p>Начальные знания</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <a href="#" class="course">
                        <h2>PHP</h2>
                        <img src="images/php.png" alt="PHP">
                        <p>Первые шаги в программировании</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->
</x-site-layout>
