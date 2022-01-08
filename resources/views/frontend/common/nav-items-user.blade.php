@if (Route::has('login'))
<li class="nav-item">
    @auth
        <a href="{{ url('/backend') }}" class="nav-link">Управление</a>
    @else
        <a href="{{ route('login') }}" class="nav-link">Войти</a>
    @endauth
</li>
    @auth
    <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}" id="log_out_form">
            @csrf
            <span class="nav-link" onclick="logOut()">
                Выход
            </span>
        </form>
    </li>
    @endauth
@endif
