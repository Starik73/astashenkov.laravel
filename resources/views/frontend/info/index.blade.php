<x-site-layout>
    <section class="site-hero site-hero-innerpage overlay" style="background-image: url({{ asset('images/big_image_1.jpg') }});">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="mb-5 element-animate">
                        <h1>Информация</h1>
                    </div>
                </div>
            </div>
        </div>
        @if(!empty($breadcrumbs))
            @include('components.breadcrumbs')
        @endif
    </section>
    <!-- END section -->
    <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(event) {
        console.log('ready');
        $(function() {
            $.ajax({
                method: "GET",
                url: "{{ route('info.getInfo') }}",
                success: function(result) {
                    $('h1').html( result );
                    console.log(result);
                },
            });
        });
    });
    </script>
</x-site-layout>
