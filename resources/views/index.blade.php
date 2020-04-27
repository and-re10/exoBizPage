@extends('layouts.app')
@section('content')
    @include('templates.header')
    @include('templates.carousel')
    {{-- @include('templates.services1') --}}
    @include('templates.about')
    @include('templates.services2')
    {{-- @include('templates.callToAction')
    @include('templates.skills')
    @include('templates.facts') --}}
    @include('templates.portfolios')
    {{-- @include('templates.clients')
    @include('templates.testimonials') --}}
    @include('templates.team')
    @include('templates.contact')
    @include('templates.footer')
@endsection