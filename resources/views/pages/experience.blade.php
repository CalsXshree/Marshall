@include('components.navbar')
@yield('content')
<center> <img src="{{ asset('images/LOGO-MP-removebg.png') }}" class="h-[20rem] " alt=""></center>
@include('experiences.banner')
@include('experiences.weddings')
@include('components.endlogo')
@include('components.allpage')
@include('components.footer')
