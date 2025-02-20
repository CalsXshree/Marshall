@include('components.navbar')
@yield('content')
<center> <img src="{{ asset('images/LOGO-MP-removebg.png') }}" class="h-[20rem] " alt=""></center>
@include('experiences.banner')
@include('experiences.weddings')

@include('experiences.gallries')
@include('experiences.box')
@include('experiences.everythingabout')
@include('components.client')



@include('abouts.yourstory')
@include('components.endlogo')
@include('components.allpage')
@include('components.footer')
