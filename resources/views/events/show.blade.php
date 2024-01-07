@extends('layouts.base')

@section('page.title', 'Event Details')

@section('content')
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
    <x-title>{{ $event['title'] }}</x-title>
    <x-body>  {{ $event['body'] }} </x-body>
    <div class="d-flex justify-content-end">
        <a type="link" class="me-3" href="{{ route('events.edit', $event['id']) }}"> {{ __('Edit') }}</a>
        <a type="link" class="me-3" href="{{ route('events.index') }}"> {{ __('Back') }}</a>
    </div>
@endsection
