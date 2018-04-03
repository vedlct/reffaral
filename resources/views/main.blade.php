
@include('header')
<div class="main-panel">
    <!-- Navbar -->
@include('navigation')
    
    <div id="SessionMessage">
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
        @endif

        @if(Session::has('danger'))
            <p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('danger') }}</p>
        @endif

    </div>


@yield('content')

</div>

@include('footer')
