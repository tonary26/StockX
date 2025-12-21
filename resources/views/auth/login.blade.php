@extends('layouts.input')

@section('styles')
    @vite(['resources/css/login.css', 'resources/css/index.css'])
@endsection


@section('title')
    <title>Авторизация</title>
@endsection

@section('form')
        <form class="form" action="{{ route('auth.login.store') }}" method="post">
            @csrf
            <span class="log-in">Log In</span>
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
                <div class="input-container">
                    <input class="input"
                           type="password"
                           name="password"
                           placeholder="Password">
                    @error('password')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="check-box-container">
                    <label class="checkbox-label">
                        <input type="checkbox" name="remember" class="checkbox">
                        Remember me
                    </label>
                    <a href="{{ route('auth.password.request') }}" class="forgot-pass">Forgot password?</a>
                </div>
            </div>
            <button class="button" type="submit">Log In</button>
            <div class="rule-container">
                <span class="rule">By logging in, you agree to the Terms of Service and Privacy Policy</span>
            </div>
            <div class="register-reference-container">
                <span class="register-reference">Need an account? <a href="{{ route('auth.register.show') }}">Sign Up</a></span>
            </div>
        </form>
@endsection