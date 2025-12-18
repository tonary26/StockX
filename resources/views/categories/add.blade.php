@extends('layouts.input')

@section('styles')
    @vite(['resources/css/login.css', 'resources/css/index.css'])
@endsection


@section('title')
    <title>Add Category</title>
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
                    <select class="sizes" name="category_id" multiple>
                        @foreach($categories as $category)
                            @foreach($category->children as $subCategory)
                                <option value="{{ $subCategory->id }}">{{ $subCategory->title }}</option>
                            @endforeach
                        @endforeach
                    </select>
                    @error('subCategory_id')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button class="button" type="submit">Add</button>
        </form>
@endsection