@extends('front.master')

@section('title', 'Service')
@section('service-active','active')
@section('title2', 'Services')
@section('title3', 'Service')


@section('hero')
<x-hero-section title="Services" subtitle="Services"></x-hero-section>
@endsection


@section('content')


<x-front-services-component></x-front-services-component>


<x-front-testmonials-component></x-front-testmonials-component>



@endsection

