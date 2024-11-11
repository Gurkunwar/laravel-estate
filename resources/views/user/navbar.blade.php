<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.html">
            <h2>Space <em>Hunt</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ Request::is('ourproperties') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('ourproperties') }}">Our Properties</a>
                </li>
                <li class="nav-item {{ Request::is('aboutus') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('aboutus') }}">About Us</a>
                </li>
                <li class="nav-item {{ Request::is('contactus') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('contactus') }}">Contact Us</a>
                </li>


                <!-- Authentication Links -->
                @if (Route::has('login'))
                @auth

                <li class="nav-item"><a class="nav-link" href="{{url('showfavourite')}}">Favourites[{{$count}}]</a></li>

                <!-- If logged in, show logout link -->
                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </li>
                @else
                <!-- If not logged in, show login and register links -->
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Log in</a></li>
                @if (Route::has('register'))
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                @endif
                @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>