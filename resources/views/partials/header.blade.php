<div id="header">
    <div id="nav-container">
        <a href="{{route('home-page')}}">
            <img src={{asset("img/dc-logo.png")}} alt="dc-logo" />
        </a>
        <nav>
            <ul id="padre">
                <li class="lista">
                    <a href="#">CHARACTERS</a>
                </li>
                <li class="lista {{ Route::currentRouteName() == 'comics-page' ? 'active': '' }}">
                    <a class="{{ Route::currentRouteName() == 'comics-page' ? 'active': '' }}" href="{{ route('comics-page') }}">COMICS</a>
                </li>
                <li class="lista">
                    <a href="#">MOVIES</a>
                </li>
                <li class="lista">
                    <a href="#">TV</a>
                </li>
                <li class="lista">
                    <a href="#">GAMES</a>
                </li>
                <li class="lista">
                    <a href="#">COLLECTIBLES</a>
                </li>
                <li class="lista">
                    <a href="#">VIDEO</a>
                </li>
                <li class="lista">
                    <a href="#">FANS</a>
                </li>
                <li class="lista">
                    <a href="#">NEWS</a>
                </li>
                <li class="lista">
                    <a href="#">SHOP</a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<div class="jumbotron">
</div>