<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name') }}
        </a>
        <a class="logo-letters  {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">
            <div class="d-flex align-items-center">
                <div>
                    <span class="d-block logo-letters__part --combo">
                        Combo
                    </span>
                    <span class="d-block logo-letters__part --note">
                        Note
                    </span>
                </div>
                <span class=" logo-letters__part --Z">
                    Z
                </span>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <!--<li class="nav-item">
                    <a class="nav-link" href="/">
                        Credits
                    </a>
                </li>-->
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('note') ? 'active' : '' }}" href="/note">
                        Combo Notes
                        <svg class="icon icon-search">
                            <use xlink:href="#icon-search"></use>
                        </svg>
                    </a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
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
                    <li class="nav-item">
                        <a class="btn btn-primary nav-link " href="/note/login">
                            Create Combo
                            <svg class="icon icon-add">
                                <use xlink:href="#icon-add"></use>
                            </svg>
                        </a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary nav-link " href="/note/create">
                            Create Combo
                            <svg class="icon icon-add">
                                <use xlink:href="#icon-add"></use>
                            </svg>
                        </a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>