@include('components.navbar')
@yield('content')
<center> <img src="{{ asset('images/LOGO-MP-removebg.png') }}" class="h-[20rem] " alt=""></center>
@include('contacts.banner')
@include('contacts.wedcontact')
@include('contacts.blog')

@include('components.endlogo')
@include('components.allpage')
@include('components.footer')
