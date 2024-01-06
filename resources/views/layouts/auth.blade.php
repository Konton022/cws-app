@extends('layouts.base')

@section('content')
<x-container>
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            @yield('auth.content')
        </div>
    </div>
</x-container>
@endsection

