@extends('layouts.app')

@section('hero')
    @include('partials.afficheHero')
@endsection

@section('content')
    @include('partials.afficheAbout')
    @include('partials.afficheSkill')
    @include('partials.affichePortfolio')
    @include('partials.afficheService')
    @include('partials.afficheTestimonials')
    @include('partials.afficheContact')
@endsection
