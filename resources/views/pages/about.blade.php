@extends('layouts.frontend')
@section('content')
    <center> <img src="{{ asset('images/LOGO-MP-removebg.png') }}" class="h-[20rem] " alt=""></center>
    @include('abouts.banner')
    @include('abouts.aboutmarshall')
    @include('abouts.creator')
@endsection
