<section class="inner-page">
    <div class="container">
        <section class="site-section bg-light py-2">
            <h4 class="text-center py-3">{{ $blog->title }}</h4>
            <div class="container border bg-white">
                <div class="blog-content">
                    {!! $blog->content !!}
                </div>
                <p>
                    <a class="btn btn-secondary" href="{{ url()->previous() }}">Назад</a>
                    <a class="btn btn-secondary" href="{{ route('blog') }}">Список постов</a>
                </p>
            </div>
        </section>
    </div>
</section>

