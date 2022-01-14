<x-site-layout>
    <!-- Banner section -->
    <section class="site-hero overlay"
        style="background-image: url({{ asset('images/big_image_1.jpg') }}");
    >
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-8 text-center" style="z-index: 100;">
                    <div class="mb-5 element-animate">
                        <h1>Ежедневное развитие</h1>
                        <p class="lead">
                            Каждый день узнавайте что-нибудь новое и день пройдет не зря.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->
    @if(!empty($breadcrumbs))
        @include('components.breadcrumbs')
    @endif
    <!-- School-features section -->
    <section class="school-features d-flex" style="background-image: url({{ asset('images/big_image_3.jpg') }}); opacity:0.9;">
        <div class="container-fluid mx-5">
            <div class="row">
                <div class="card col-lg-3 col-md-6 col-12 bg-transparent">
                    <div class="card-header bg-white m-3 rounded">
                        <h3 class="m-1 p-1">
                            <span class="flaticon-video-call"></span>
                            HTML
                        </h3>
                    </div>
                    <div class="card-body border border-dark m-3 rounded h-100">
                        <p class="text-justify text-white m-0">
                            (от англ. HyperText Markup Language — «язык гипертекстовой разметки»)
                            — стандартизированный язык разметки документов для просмотра веб-страниц в браузере.
                            Веб-браузеры получают HTML документ от сервера по протоколам HTTP/HTTPS или открывают с локального диска, далее
                            интерпретируют код в интерфейс, который будет отображаться на экране монитора.
                        </p>
                    </div>
                </div>
                <div class="card col-lg-3 col-md-6 col-12 bg-transparent">
                    <div class="card-header bg-white m-3 rounded">
                        <h3 class="m-1 p-1">
                            <span class="flaticon-video-call"></span>
                            CSS
                        </h3>
                    </div>
                    <div class="card-body border border-dark m-3 rounded h-100">
                        <p class="text-justify text-white m-0">
                            (от англ. Cascading Style Sheets «каскадные таблицы стилей») — формальный язык
                            описания внешнего вида документа (веб-страницы), написанного с использованием языка разметки
                            (чаще всего HTML или XHTML). Также может применяться к любым XML-документам, например, к SVG или
                            XUL.
                        </p>
                    </div>
                </div>
                <div class="card col-lg-3 col-md-6 col-12 bg-transparent">
                    <div class="card-header bg-white m-3 rounded">
                        <h3 class="m-1 p-1">
                            <span class="flaticon-video-call"></span>
                            JavaScript
                        </h3>
                    </div>
                    <div class="card-body border border-dark m-3 rounded h-100">
                        <p class="text-justify text-white m-0">
                            — мультипарадигменный язык программирования. Поддерживает объектно-ориентированный,
                            императивный и функциональный стили.
                            Является реализацией спецификации ECMAScript (стандарт ECMA-262).
                            JavaScript обычно используется как встраиваемый язык для программного доступа к объектам
                            приложений. Наиболее широкое применение находит в браузерах как язык сценариев для придания
                            интерактивности веб-страницам.
                        </p>
                    </div>
                </div>
                <div class="card col-lg-3 col-md-6 col-12 bg-transparent">
                    <div class="card-header bg-white m-3 rounded">
                        <h3 class="m-1 p-1">
                            <span class="flaticon-video-call"></span>
                            PHP
                        </h3>
                    </div>
                    <div class="card-body border border-dark m-3 rounded h-100">
                        <p class="text-justify text-white m-0">
                            (англ. PHP: Hypertext Preprocessor — «PHP: препроцессор гипертекста»;
                            первоначально PHP/FI (Personal Home Page / Form Interpreter), а позже названный Personal Home
                            Page Tools — «Инструменты для создания персональных веб-страниц») — скриптовый язык
                            общего назначения, интенсивно применяемый для разработки веб-приложений. В настоящее время
                            поддерживается подавляющим большинством хостинг-провайдеров и является одним из лидеров среди
                            языков, применяющихся для создания динамических веб-сайтов.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->
    <!-- Blog section -->
    <section class="site-section">
        <div class="container">
            <h4 class="text-center">
                Последние записи блога
            </h4>
            <section class="school-features text-dark d-flex">
                <div class="inner">
                    @if (!empty($blogs))
                        @foreach ($blogs as $blog)
                        <div class="media d-block feature card border">
                            <p class="badge">{{ $blog->author }}</p>
                            <div class="card-header icon">
                                <a href="{{ route('single_post', ['id' => $blog->id]) }}" class="blog-entry">
                                    @if ($exist = File::exists($blog->img))
                                        <img class="img-fluid my-0" src="{{ asset($blog->img) }}" alt="">
                                    @else
                                        <img class="img-fluid" src="{{ asset('images/no_image.png') }}" alt="">
                                    @endif
                                </a>
                            </div>
                            <div class="media-body card-body">
                                <h5 class="my-1">{{ $blog->title }}</h5>
                                <small>{{ $blog->description }}</small>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <p>Скоро будет</p>
                    @endif
                </div>
            </section>
        </div>
    </section>
    <!-- END section -->
    <!-- School section -->
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
                <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                    <a href="#" class="course">
                        <h2>HTML</h2>
                        <img class="img-fluid" src="{{ asset('images/html.jpg') }}" alt="HTML">
                        <p>Базовые знания по верстке</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                    <a href="#" class="course">
                        <h2>CSS</h2>
                        <img class="img-fluid" src="{{ asset('images/css.jpg') }}" alt="CSS">
                        <p>Основы каскадных таблиц стилей</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-12">
                    <a href="#" class="course">
                        <h2>JavaScript</h2>
                        <img class="img-fluid" src="{{ asset('images/javascript.jpg') }}" alt="JavaScript">
                        <p>Начальные знания</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-12">
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
    <!-- FeedBack section -->
    <section class="overflow">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-7 order-lg-3 order-1 mb-lg-0 mb-5">
                    <img src="images/person_testimonial_1.jpg" alt="Image placeholder" class="img-md-fluid">
                </div>
                <div class="col-lg-1 order-lg-2"></div>
                <div class="col-lg-4 order-lg-1 order-2 mb-lg-0 mb-5">
                    <blockquote class="testimonial">
                        &ldquo; Не волнуйтесь, если что-то не работает. Если бы всё работало, вас бы уволили. &rdquo;
                    </blockquote>
                    <p>Mosher’s Law of Software Engineering</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->
</x-site-layout>
