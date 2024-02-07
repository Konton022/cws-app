@extends('layouts.base')
@section('page.title', 'Events')
@section('content')
        <x-title>{{ __('Events') }}</x-title>
        <div class="row mb-4">
            <div class="col">
                <form action="{{ route('events.index') }}" method="GET" class="form-inline">
                    <div class="form-group mb-2">
                        {{-- <label for="title" class="sr-only">Title</label> --}}
                        <input type="text" class="form-control" id="title" name="title" placeholder="Search by title" value="{{ request('title') }}">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Filter</button>
                </form>
            </div>
        </div>
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
