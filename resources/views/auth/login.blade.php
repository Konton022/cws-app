@extends('layouts.auth')

@section('page.title', 'Login')

@section('auth.content')
    <x-card>
        <x-card-header>
            {{ __('Login') }}
            <x-slot name="right">
                <a class="btn btn-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </x-slot>
        </x-card-header>
    <x-card-body>
        <x-form method="POST" action="{{ route('login') }}">
            <x-form-item>
                <x-label for="email" class="form-label" required>{{ __('E-Mail Address') }}</x-label>
                <x-input type="email" name="email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
            </x-form-item>
            <x-form-item>
                <x-label for="password" class="form-label" required>{{ __('Password') }}</x-label>
                <x-input type="password" name="password" id="password" required autocomplete="current-password" />
            </x-form-item>
            <x-form-item> 
                <x-checkbox name="remember" >{{ __('Remember Me') }}</x-checkbox>
            </x-form-item>
            <x-form-item>
                <x-button type="submit" color="primary">
                    {{ __('Login') }}
                </x-button>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </x-form-item>
        </x-form>
    </x-card-body>
    </x-card>
@endsection
