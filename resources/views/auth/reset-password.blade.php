@extends('layouts.input')

@section('styles')
    @vite(['resources/css/register.css', 'resources/css/index.css'])
@endsection


@section('title')
    <title>Обновить пароль</title>
@endsection


@section('form')
    <form class="form" action="{{ route('password.update') }}" method="post">
        @csrf
        <input type="hidden" name="token" value="{{ request()->route('token') }}">

        <span class="log-in">Update password</span>
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
        <button class="button" type="submit">Update password</button>
    </form>
@endsection