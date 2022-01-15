<x-site-layout>
    <section class="site-hero site-hero-innerpage overlay" style="background-image: url({{ asset('images/big_image_1.jpg') }});">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-8 text-center">
                    <div class="mb-5 element-animate">
                        <h1>Игра</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if(!empty($breadcrumbs))
        @include('components.breadcrumbs')
    @endif
    <section class="game container">
        <div class="row">
            <div class="col-6">
                <div class="card text-center">
                    <div class="card-header">
                        <span class="btn" id="startgame">Играть "The bird"</span>
                    </div>
                    <div class="card-body mx-auto">
                        <canvas id="canvas" class="border" width="288" height="512"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card text-center">
                    <div class="card-header">
                        <span class="btn" id="play_bejeweled">Играть Три в ряд</span>
                    </div>
                    <div class="card-body mx-auto" width="288" height="512">
                        <div id="gamefield" class="border"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="{{ asset('js/game.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/jquery.touchSwipe.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/bejeweled.js') }}" defer></script>
    <!-- END section -->
</x-site-layout>
