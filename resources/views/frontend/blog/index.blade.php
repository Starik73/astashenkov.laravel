<x-squad-layout>
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
                @include('frontend.common.grid', ['blogs' => $blogs])
            @else
                <p>No DATA</p>
            @endif
        </div>
    </section>
    <!-- END section -->
</x-squad-layout>
