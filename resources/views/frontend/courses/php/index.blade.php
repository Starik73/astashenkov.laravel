<x-site-layout>
    <section class="site-hero site-hero-innerpage overlay" style="background-image: url({{ asset('images/big_image_1.jpg') }});">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="mb-5 element-animate">
                        <h1>PHP</h1>
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
                    <h2>Уроки по PHP</h2>
                    <p class="lead">
                        Начни изучать уже сегодня
                    </p>
                </div>
            </div>
            @if (!empty($blogs))
            <p>{{ $blogs->links() }}</p>
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="{{ route('courses.php_lesson', ['id' => $blog->id]) }}">
                                <div class="card w-95 h-100">
                                    <div class="card-body">
                                        <div class="blog-image">
                                        @if ($exist = File::exists($blog->img))
                                            <img class="img-fluid" src="{{ asset($blog->img) }}" alt="{{ $blog->updated_at }}">
                                        @else
                                            <img class="img-fluid" src="{{ asset('storage/uploads/php/php_no_image.png') }}" alt="No image">
                                        @endif
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            {{ $blog->title }}
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="text-muted">
                                            {{ $blog->updated_at }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <p>{{ $blogs->links() }}</p>
            @else
                <p>No DATA</p>
            @endif
        </div>
    </section>
    <!-- END section -->
</x-site-layout>
