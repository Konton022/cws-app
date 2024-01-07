@extends('layouts.base')
@section('page.title', 'Events')
@section('content')
        <x-title>{{ __('Events') }}</x-title>
        <div class="row">
            @if($events->isEmpty())
                <div class="alert alert-info" role="alert">
                    {{ __('Nothing to render') }}
                </div>
            @else
                @foreach($events as $event)
                    <x-event.card :event="$event" />
                @endforeach
            @endif
            <a href="{{ route('events.create') }}" class="btn btn-primary">{{ __('Create Event') }}</a>
        </div>


@endsection