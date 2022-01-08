<header role="banner">
    <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}">
                Astashenkov
            </a>
            <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarsSite"
                aria-controls="navbarsSite"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navbar-light" id="navbarsSite">
                <ul class="navbar-nav mx-auto">
                    @include('frontend.common.nav-items-bootstrap', ['nav_menu' => $nav_menu])
                </ul>
                <ul class="navbar-nav absolute-right">
                    @include('frontend.common.nav-items-user')
                </ul>
            </div>
        </div>
    </nav>
</header>
<div class="container">

</div>
<!-- END header -->
