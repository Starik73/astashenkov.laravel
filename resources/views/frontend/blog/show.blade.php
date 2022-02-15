<x-squad-layout>
    @if (!empty($blog))
        <x-slot name="post_title">{{ $blog->title }}</x-slot>
        <x-slot name="post_updated_at">{{ $blog->updated_at }}</x-slot>
        <x-slot name="post_author">{{ $blog->author }}</x-slot>
    @endif
    <!-- Content -->
        {{-- Breadcrumbs --}}
        @include('squad_components.breadcrumbs', [
                'title' => $blog->title ?? 'Single post',
                'author' => $blog->author ?? 'Author'
            ]
        )
        {{-- Single page --}}
        @include('frontend.squad.single', ['blog' => $blog])
    <!-- Content -->

    {{-- <section class="">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="mb-5 element-animate">
                        <h1 class="mb-3 cutted-text">{{  }}</h1>
                        <p class="post-meta">
                            {{ $blog->updated_at }} &bull;
                            Автор: <b>{{ $blog->author }}</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- END section -->
</x-squad-layout>
