@extends('layouts.input')

@section('styles')
    @vite(['resources/css/add.css', 'resources/css/index.css'])
@endsection


@section('title')
    <title>Add category</title>
@endsection


@section('form')
    <form class="form" action="{{ route('category.store') }}" method="post">
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
            <div class="input-container">
                <select class="sizes" name="parent_id">
                    <option value="">
                        Главная категория
                    </option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->title }}
                        </option>
                    @endforeach
                </select>
                @error('parent_id')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <button class="button" type="submit">Add</button>
    </form>
@endsection
