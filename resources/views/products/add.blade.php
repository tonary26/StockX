@extends('layouts.input')

@section('styles')
    @vite(['resources/css/add.css'])
@endsection


@section('title')
    <title>Add shouse</title>
@endsection


@section('form')
    <form class="form" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input-section">
            <div class="input-file-container">
                <input class="input-file"
                       type="file"
                       name="image">
                @error('image')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-container">
                <input class="input"
                       type="text"
                       name="title"
                       placeholder="Title"
                       value="{{ old('title') }}">
                @error('title')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-container">
                <input class="input"
                       type="text"
                       name="price"
                       placeholder="Price"
                       value="{{ old('price') }}">
                @error('price')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-container">
                <input class="input"
                       type="text"
                       name="amount"
                       placeholder="Amount"
                       value="{{ old('amount') }}">
                @error('amount')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <div class="input-container">
                <select class="sizes" name="size_id[]" multiple>
                    @foreach($sizes as $size)
                        <option value="{{ $size->id }}">{{ $size->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-container">
                <select class="categories" name="category_id">
                    @foreach($categories as $category)
                        @foreach($category->children as $subCategory)
                            <option value="{{ $subCategory->id }}">
                                {{ $subCategory->title }}
                            </option>
                        @endforeach
                    @endforeach
                </select>

            </div>
        </div>
        <button class="button" type="submit">Add</button>
    </form>
@endsection