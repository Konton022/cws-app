@extends('layouts.auth')

@section('page.title', 'Register')

@section('auth.content')
    <x-card>
        <x-card-header>{{ __('Register') }}
            <x-slot name="right">
                <a href="{{ route('login') }}" class="btn btn-link">{{ __('Login') }}</a>
            </x-slot>
        </x-card-header>
        <x-card-body>
            <x-form method="POST" action="{{ route('register') }}">
                <x-form-item>
                    <x-label for="name" class="form-label" required>{{ __('Name') }}</x-label>
                    <x-input type="text" class="form-control" name="name" id="name" required autofocus />
                </x-form-item>

                <x-form-item>
                    <x-label for="email" class="form-label" required>{{ __('Email Address') }}</x-label>
                    <x-input type="email" class="form-control" name="email" id="email" required />
                </x-form-item>

                <x-form-item>
                    <x-label for="password" class="form-label" required>{{ __('Password') }}</x-label>
                    <x-input type="password" class="form-control" id="password" required />
                </x-form-item>

                <x-form-item>
                    <x-label for="password-confirm" class="form-label" required>{{ __('Confirm Password') }}</x-label>
                    <x-input type="password" class="form-control" id="password-confirm" required />
                </x-form-item>

                <x-form-item>
                    <x-label for="agree" class="form-label" required>{{ __('Agree') }}</x-label>
                    <x-checkbox id="agree" name="agree" :checked="!!old('agree')" />
                </x-form-item>

                <x-form-item>
                    <x-button type="submit">
                        {{ __('Register') }}
                    </x-button>
                </x-form-item>
            </x-form>
        </x-card-body>
    </x-card>
@endsection
