<nav class="navbar-header ">
    {{-- navbar-expand-md navbar-light bg-white shadow-sm navb position-fixed fixed-top --}}
    <div class="container-head">

        <div class="head">
            <div class="name">
                <i class="fa-solid fa-circle icon-c"></i> <strong class="textSize"> Ibrahim Char</strong>
            </div>


            <a class="navbar-brand"
                href="{{ url('/') }}">

                <span class=head-text>Projects</span>

            </a>
        </div>
        <div class="log">
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link"
                        href="{{ route('login') }}">{{ __('Administrator Login') }} </a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link"
                        href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown"
                        class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        v-pre>
                        {{ Auth::user()->name }}

                    </a>

                    <div class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"
                            href="{{ route('project.dashboard') }}">
                            {{ __('Dashboard') }}
                        </a>
                        <a class="dropdown-item"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>


                        <form id="logout-form"
                            action="{{ route('logout') }}"
                            method="POST"
                            class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
        {{-- <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button> --}}


    </div>
</nav>