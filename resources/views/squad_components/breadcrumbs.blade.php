<!-- Breadcrumbs Section -->
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Автор: {{ $author }}</h2>
            <ol>
                <li><a href="{{ route('squad') }}"><i class="fa fa-home"></i>&nbsp;</a></li>
                <li>{{ $title }}</li>
            </ol>
        </div>
    </div>
</section>
<!-- End Breadcrumbs Section -->
