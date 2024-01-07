@extends('layouts.base')
@section('page.title', 'Home')
@section('content')
    
<x-title>{{ __('Home') }}</x-title>


<div class=" h-100 product-description">
    <h2>{{ __('Our Product') }}</h2>
    <p>{{ __('Our product is a cutting-edge solution designed to meet your needs. With state-of-the-art technology, an intuitive interface, and unparalleled performance, it stands out as a leader in its category.') }}</p>
    <p>{{ __('Experience the difference with features such as:') }}</p>
    <ul>
        <li>{{ __('Innovative design') }}</li>
        <li>{{ __('User-friendly functionality') }}</li>
        <li>{{ __('Reliable performance') }}</li>
        <li>{{ __('Exceptional customer support') }}</li>
    </ul>
    <p>{{ __('Ready to take the next step? Contact us for more information or to schedule a demo.') }}</p>
    {{-- <a href="{{ route('contact') }}" class="btn btn-primary">{{ __('Contact Us') }}</a> --}}
</div>
@endsection