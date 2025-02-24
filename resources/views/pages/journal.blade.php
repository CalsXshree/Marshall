@extends('layouts.frontend')
@section('content')
    <center> <img src="{{ asset('images/LOGO-MP-removebg.png') }}" class="h-[20rem] " alt=""></center>
    @include('journals.banner')
    @include('journals.grid')


    @include('abouts.yourstory')
    @include('components.endlogo')
    @include('components.allpage')
    @include('components.footer')
@endsection
