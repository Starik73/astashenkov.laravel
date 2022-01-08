<x-site-layout>
    <section class="site-hero site-hero-innerpage overlay" style="background-image: url({{ asset($blog->img ?? 'images/big_image_1.jpg') }});">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="mb-5 element-animate">
                        <h1 class="mb-3 cutted-text">{{ $blog->title }}</h1>
                        <p class="post-meta">
                            {{ $blog->updated_at }} &bull;
                            Автор: <b>{{ $blog->author }}</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="site-section bg-light py-2 card">
        <h4 class="text-center py-3">{{ $blog->title }}</h4>
        <div class="container border bg-white card-body">
            <div class="blog-content text-black">
                {!! $blog->content !!}
            </div>
            <p>
                @if (!empty($prev))
                    <a class="btn btn-sm btn-outline-secondary" href="{{ route('courses.php_lesson', ['id' => $prev->id]) }}">
                        {{ $prev->title }}
                    </a>
                @else
                    <span class="btn btn-sm">Отсутствует</span>
                @endif
                @if (!empty($next))
                    <a class="btn btn-sm btn-outline-secondary" href="{{ route('courses.php_lesson', ['id' => $next->id]) }}">
                        {{ $next->title }}
                    </a>
                @else
                    <span class="btn btn-sm">Отсутствует</span>
                @endif
                <a class="btn btn-sm btn-secondary pull-right" href="{{ url()->previous() }}">Назад</a>
                <a class="btn btn-sm btn-secondary pull-right" href="{{ route('courses.php') }}">Список постов</a>
            </p>
        </div>
    </section>
</x-site-layout>
