@extends('layouts.frontend')
@section('content')
    <center> <img src="{{ asset('images/LOGO-MP-removebg.png') }}" class="h-[20rem] " alt=""></center>
    @include('abouts.banner')
    @include('abouts.aboutmarshall')
    @include('abouts.creator')
    @include('abouts.moments')
    @include('abouts.commitment')
    @include('abouts.moments2')
    @include('abouts.seenin')
    @include('abouts.allnepal')
    @include('abouts.experience')
    @include('abouts.bgview')
    @include('abouts.nepal')
    @include('abouts.travel')
    @include('abouts.explore')
    @include('abouts.yourstory')
    @include('components.endlogo')
    @include('components.allpage')
@endsection
