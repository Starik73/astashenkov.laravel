<footer class="site-footer" style="background-image: url({{ asset('images/big_image_3.jpg') }});">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-4">
                <h3>{{ request()->root() }}</h3>
                <small>
                    Большинство программ на сегодняшний день подобны египетским пирамидам из миллиона кирпичиков друг на друге и без конструктивной целостности — они просто построены грубой силой и тысячами рабов.
                </small>
                <span class="badge badge-secondary">Alan Kay</span>
            </div>
            <div class="col-md-7 ml-auto">
                <div class="row">
                    <div class="col-md-3 border">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('courses') }}">Онлайн уроки</a></li>
                            <li class="border-top"></li>
                            <li><a href="{{ route('courses.html') }}">HTML</a></li>
                            <li><a href="{{ route('courses.css') }}">CSS</a></li>
                            <li><a href="{{ route('courses.js') }}">JS</a></li>
                            <li><a href="{{ route('courses.php') }}">PHP</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 border">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('info') }}">Информация</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 border">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('blog') }}">Блог</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 border">
                        <ul class="list-unstyled">
                            <li><a href="{{ route('contact') }}">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right">
                <p>
                    <a class="text-center" href="{{ route('index') }}">
                        {{ config('app.name') }}
                    </a>
                    &nbsp;&copy;{{ date('Y') }}
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- END footer -->

<!-- loader -->
<div id="loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#f4b214" />
    </svg>
</div>
