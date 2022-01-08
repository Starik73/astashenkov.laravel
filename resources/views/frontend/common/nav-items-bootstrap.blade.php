@if (!empty($nav_menu) && is_array($nav_menu))
    @foreach ($nav_menu as $route => $route_data)
        @if (is_string($route_data))
        <li class="nav-item">
            <a class="nav-link @if (request()->routeIs($route)) active @endif" href="{{ route($route) }}">
                @if ($route == 'index')
                    <i class="fa fa-home"></i>
                @else
                    {{ $route_data }}
                @endif
            </a>
        </li>
        @elseif (is_array($route_data))
            @foreach ($route_data as $drop_name => $drop_data)
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle @if (request()->routeIs($route)) active @endif"
                    href="{{ route($route) }}"
                    id="navbarDropdown"
                    role="button"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                >
                    {{ $drop_name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route($route) }}">{{ $drop_name }}</a>
                    <hr class="dropdown-divider">
                    @foreach ($drop_data as $route_name => $route_description)

                        <a class="dropdown-item " href="{{ route($route_name) }}">{{ $route_description }}</a>
                    @endforeach
                </div>
            </li>
            @endforeach
        @endif
    @endforeach
@endif
