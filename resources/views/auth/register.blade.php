@extends('layouts.input')

@section('styles')
    @vite(['resources/css/register.css', 'resources/css/index.css'])
@endsection


@section('title')
    <title>Регистрация</title>
@endsection


@section('form')
        <form class="form" action="{{ route('auth.register.store') }}" method="post">
            @csrf
            <span class="log-in">Sign Up</span>
            <div class="input-section">
                <div class="input-container">
                    <input class="input"
                           type="text"
                           name="name"
                           placeholder="Username"
                           value="{{ old('name') }}">
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
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
                <div class="input-container">
                    <input class="input"
                           type="password"
                           name="password_confirmation"
                           placeholder="Confirm password">
                    @error('password_confirmation')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button class="button" type="submit">Sign Up</button>

            <div class="log-in-variants">
                <span>Sign up with</span>
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
            <div class="login-reference-container">
                <span class="login-reference">Already have an account? <a href="{{ route('auth.login.show') }}">Log In</a> </span>
            </div>
        </form>
@endsection