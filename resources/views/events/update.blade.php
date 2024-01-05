@extends('layouts.base')

@section('page.title', 'Event Details')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ $event['id'] }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $event['title'] }}</h5>
            <p class="card-text">{{ $event['body'] }}</p>
            <p class="card-text"><small class="text-muted">Date: {{ now()->toDayDateTimeString() }}</small></p>
            <a href="{{ route('events.edit', $event['id']) }}" class="btn btn-primary">Edit Event</a>
        </div>
    </div>
@endsection
