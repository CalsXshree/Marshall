@include('components.navbar')
@yield('content')
<center> <img src="{{ asset('images/LOGO-MP-removebg.png') }}" class="h-[20rem] " alt=""></center>



@include('portfolios.twopage')
@include('components.socialmedia')
@include('abouts.yourstory')
@include('components.endlogo')
@include('components.allpage')
@include('components.footer')
