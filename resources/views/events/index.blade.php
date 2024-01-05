@extends('layouts.base')
@section('page.title', 'Events')
@section('content')
    <x-container>
        <h2 class="text-center">Events</h2>
        {{-- @dd($events) --}}
        @foreach($events as $event)
            <div class="mb-3">
                <x-card>
                    <x-card-header>
                        <div class="card-title">{{ $event['title'] }}</div>
                    </x-card-header>
                    <x-card-body>
                        <p class="card-text">{{ $event['body'] }}</p>
                        <a href="{{ route('events.show', $event['id']) }}" class="btn btn-primary">View</a>
                    </x-card-body>
                </x-card>
            </div>
        @endforeach
        {{-- {{ $events->links() }} --}}

        <a href="{{ route('events.create') }}" class="btn btn-primary">Create Event</a>
    </x-container>

@endsection