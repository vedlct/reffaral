
@include('header')
<div class="main-panel">
    <!-- Navbar -->
@include('navigation')

@yield('content')

</div>
@yield('foot-js')
@include('footer')
