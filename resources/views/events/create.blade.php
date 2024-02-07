{{-- resources/views/events/create.blade.php --}}
@extends('layouts.base')

@section('page.title', 'Create Event')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Create Event
                </div>
                <div class="card-body">
                    <x-form action="{{ route('events.store') }}" method="POST">
                        <x-form-item>
                            <x-label for="title" class="form-label" required>Title</x-label>
                            <x-input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" required />
                        </x-form-item>

                        <x-form-item>
                            <x-label for="body" class="form-label" required>Description</x-label>
                            <textarea class="form-control" id="body" name="body" rows="3" required>{{ old('body') }}</textarea>
                        </x-form-item>

                        <x-form-item>
                            <x-button type="submit">
                                Create Event
                            </x-button>
                        </x-form-item>
                    </x-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
