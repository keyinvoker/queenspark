<nav class="navbar navbar-expand-md navbar-light shadow-sm bg-primary justify-content-center">
    <img class="logo" src="{{ asset('storage/images/logo.png') }}" alt="">
    <a class="navbar-brand" href="{{ url('/') }}">
        <h2 class="title">Queen's Park Reptiles</h2>
    </a>
</nav>

<nav class="navbar navbar-expand-md navbar-light shadow-sm bg-secondary">
    <div class=" container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else

                <li class="nav-item-dropdown">
                    <a class="nav-link" href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item-dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        About
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        @foreach($animals as $x)
                        <li class="dropdown-item">
                            <a class="navbar-link" href="#">{{ $x->category }}</a>
                        </li>
                        @endforeach
                    </ul>

                </li>

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <li class="dropdown-item">
                            <a class="navbar-link" href="{{ route('user.profileForm') }}">
                                <i class="bi bi-file-person-fill"></i> {{ __('Profile') }}
                            </a>
                        </li>

                        <li class="dropdown-item">
                            <a class="navbar-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="bi bi-box-arrow-right"></i> {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </li>



                @endguest
            </ul>
        </div>
    </div>
</nav>