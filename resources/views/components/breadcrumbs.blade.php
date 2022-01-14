@if (!empty($breadcrumbs))
    <section class="bg-dark" id="breadcrumb">
        <div class="container">
            <nav label="breadcrumb">
                <ol class="breadcrumb bg-dark">
                    <li class="breadcrumb-item">
                        <a class="text-white opacity-50" href="{{ route('index') }}">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    @foreach($breadcrumbs as $route => $name)
                        <li class="breadcrumb-item">
                            <a class="text-white opacity-50" href="{{ route($route) }}" style="opacity: .4;">
                                {{ $name }}
                            </a>
                        </li>
                    @endforeach
                    @if(!empty($title))
                        <li class="breadcrumb-item active">
                            {{ $title }}
                        </li>
                    @endif
                </ol>
            </nav>
        </div>
    </section>
@endif
