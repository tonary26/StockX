@extends('layouts.input')

@section('styles')
    @vite(['resources/css/login.css', 'resources/css/index.css'])
@endsection


@section('title')
    <title>Add subcategory</title>
@endsection


@section('form')
    <form class="form" action="{{ route('subcategory.store') }}" method="post">
        @csrf
        <div class="input-section">
            <div class="input-container">
                <input class="input"
                       type="text"
                       name="title"
                       placeholder="Title">
                @error('title')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <button class="button" type="submit">Add</button>
    </form>
@endsection