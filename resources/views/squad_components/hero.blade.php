<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container" data-aos="fade-up">
        @if (!empty($post) && (!array_filter($post, 'is_int')))
            <h1>{{ $post['title'] }}</h1>
            <h2>Автор: {{ $post['author'] }}</h2>
            <p>{{ $post['updated_at'] }}</p>
        @else
            <h1>'БЛОГ PHP ПРОГРАММИСТА'</h1>
            <h2>HTML, CSS, JavaScript, PHP, Laravel</h2>
            <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
        @endif
    </div>
</section>
<!-- End Hero -->
