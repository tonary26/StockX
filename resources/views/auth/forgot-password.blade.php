@extends('layouts.input')

@section('styles')
    @vite(['resources/css/login.css', 'resources/css/index.css'])
@endsection


@section('title')
    <title>Авторизация</title>
@endsection

@section('form')
    <form class="form" action="{{ route('auth.password.email') }}" method="post">
        @csrf
        <span class="log-in">Forgot password?</span>
        <div class="input-section">
            <div class="input-container">
                <input class="input"
                       type="email"
                       name="email"
                       placeholder="Email Address"
                       value="{{ old('email') }}">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <button class="button" type="submit">Send a link to reset your password</button>
    </form>
@endsection