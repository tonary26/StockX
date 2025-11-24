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
                    <a href="#" class="forgot-pass">Forgot password?</a>
                </div>
            </div>
            <button class="button" type="submit">Log In</button>
            <div class="rule-container">
                <span class="rule">By logging in, you agree to the Terms of Service and Privacy Policy</span>
            </div>
            <div class="log-in-variants">
                <span>Log In with</span>
            </div>
            <div class="social-networks">
                <a class="login-with-google" href="#">
                    <img class="google-icon"
                         src="https://cdn4.iconfinder.com/data/icons/new-google-logo-2015/400/new-google-favicon-512.png"
                         alt="google-text-logo">
                </a>
                <a class="login-with-facebook"  href="#">
                    <img class="facebook-icon"
                         src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Facebook_Logo_2023.png/1200px-Facebook_Logo_2023.png"
                         alt="Facebook-PNG-Isolated-HD">
                </a>
            </div>
            <div class="register-reference-container">
                <span class="register-reference">Need an account? <a href="{{ route('auth.register.show') }}">Sign Up</a></span>
            </div>
        </form>
@endsection