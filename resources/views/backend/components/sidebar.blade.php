<div class="card">
    <div class="card-header">
        Навигация:
    </div>
    <div class="card-body">
        @foreach ($nav_menu as $nav_route => $nav_label)
        <p>
            @if (is_string($nav_label) && is_string($nav_route))
            <a href="{{ route($nav_route) }}"
                class="btn @if (request()->routeIs($nav_route)) btn-dark @else btn-outline-dark @endif btn-block"
            >
                {{ $nav_label }}
            </a>
            @elseif (is_array($nav_label))
            @foreach ($nav_label as $drop_name => $drop_menu)
                <div class="dropdown">
                    <button class="btn btn-secondary btn-block dropdown-toggle"
                        type="button"
                        id="dropdownMenu"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                    {{ $drop_name }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                        @if (is_array($drop_menu))
                            @foreach ($drop_menu as $drop_route => $drop_label)
                                <a class="dropdown-item" href="{{ route($drop_route) }}">{{ $drop_label }}</a>
                            @endforeach
                        @endif
                    </div>
                </div>
              @endforeach
            @endif
        </p>
        @endforeach
    </div>
</div>
