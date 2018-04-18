<nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">

    <div class="col-lg-6" id="SessionMessage">
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
        @endif

        @if(Session::has('danger'))
            <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('danger') }}</p>
        @endif

    </div>

    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>

        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navigation">



            <ul class="navbar-nav">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="now-ui-icons location_world"></i>
                        <p>
                            <span class="d-lg-none d-md-block">Some Actions</span>
                        </p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        {{--<a class="dropdown-item" href="login.php">Logout</a>--}}
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>

                </li>
                <li class="nav-item dropdown">

                    <a class="dropdown-item" href="{{route('password')}}">change pass</a>

                </li>

            </ul>
        </div>

    </div>
</nav>