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
    <section class="game container">
        <div class="card text-center">
            <div class="card-header">
                <span class="btn" id="startgame">Играть</span>
            </div>
            <div class="card-body mx-auto">
                <canvas id="canvas" class="border" width="288" height="512"></canvas>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="{{ asset('js/game.js') }}" defer></script>
    <!-- END section -->
</x-site-layout>
