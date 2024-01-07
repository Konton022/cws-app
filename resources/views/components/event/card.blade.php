<div class="col-12 col-md-4 mb-3">
    <x-card>
        <x-card-header>
            <h2 class="h5 card-title">{{ $event['title'] }}</h2>
        </x-card-header>
        <x-card-body>
            <p class="card-text">{{ $event['body'] }}</p>
            <a href="{{ route('events.show', $event['id']) }}" class="btn btn-outline-primary btn-sm">{{ __('View') }}</a>
        </x-card-body>
    </x-card>
</div>