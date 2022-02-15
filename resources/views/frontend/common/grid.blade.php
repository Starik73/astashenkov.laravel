<p>{{ $blogs->links() }}</p>
<div class="row">
    @foreach ($blogs as $blog)
        <div class="col-md-4 col-sm-6 col-12">
            <a href="{{ route('single_post', ['id' => $blog->id]) }}">
                <div class="card w-95 h-100">
                    <div class="card-body">
                        <div class="blog-image text-center border">
                        @if ($exist = File::exists($blog->img))
                            <img class="img-fluid image-h300" src="{{ asset($blog->img) }}" alt="{{ $blog->updated_at }}">
                        @else
                            <img class="img-fluid image-h300" src="{{ asset('images/no_image.png') }}" alt="No image">
                        @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title h75px">
                            {{ $blog->title }}
                        </h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted h50px">
                            <code>{{ $blog->updated_at }}</code>
                        </p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
<p>{{ $blogs->links() }}</p>
