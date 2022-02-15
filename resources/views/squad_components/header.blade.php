<!-- Header -->
<header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
            <h1 class="text-light"><a href="{{ route('squad') }}"><span>ASTASHENKOV.RU</span></a></h1>
        </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="nav-link scrollto active" href="#hero">
                        <i class="fa fa-home"></i>&nbsp;
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto" href="#about">Информация</a>
                </li>
                <li class="dropdown"><a href="#"><span>Онлайн уроки</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">HTML</a></li>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JavaScript</a></li>
                        <li><a href="#">PHP</a></li>
                        {{--
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        --}}
                    </ul>
                </li>
                <li>
                    <a class="nav-link scrollto" href="{{ route('blog') }}">Блог</a>
                </li>
                {{--
                <li>
                    <a class="nav-link scrollto" href="#team">Team</a>
                </li>
                --}}
                <li><a class="nav-link scrollto" href="#contact">Контакты</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header>
<!-- End Header -->
