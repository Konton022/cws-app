{{-- resources/views/events/edit.blade.php --}}
@extends('layouts.base')

@section('page.title', 'Edit Event')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Event
                </div>
                <div class="card-body">
                    <form action="{{ route('events.update', $event['id']) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $event['title']) }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Description</label>
                            <textarea class="form-control" id="body" name="body" rows="3" required>{{ old('body', $event['body']) }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Event</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
