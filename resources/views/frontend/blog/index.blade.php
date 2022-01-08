<x-site-layout>
    <section class="site-hero site-hero-innerpage overlay" style="background-image: url({{ asset('images/big_image_1.jpg') }});">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="mb-5 element-animate">
                        <h1>Мой блог</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8 text-center">
                    <h2>Несколько интересных статей</h2>
                    <p class="lead">
                        Различная информация из сферы IT
                    </p>
                </div>
            </div>
            @if (!empty($blogs))
            <p>{{ $blogs->links() }}</p>
                <div class="row">
                    @foreach ($blogs as $blog)
                        <div class="col-md-4 col-sm-6 col-12">
                            <a href="{{ route('single_post', ['id' => $blog->id]) }}">
                                <div class="card w-95 h-100">
                                    <div class="card-body">
                                        <div class="blog-image">
                                        @if ($exist = File::exists($blog->img))
                                            <img class="img-fluid" src="{{ asset($blog->img) }}" alt="{{ $blog->updated_at }}">
                                        @else
                                            <img class="img-fluid" src="{{ asset('images/no_image.png') }}" alt="No image">
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
