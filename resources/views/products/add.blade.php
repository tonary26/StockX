@extends('layouts.auth')

@section('styles')
    @vite(['resources/css/add.css'])
@endsection


@section('title')
    <title>Добавить кроссовки</title>
@endsection


@section('form')
    <form class="form" action="{{ route('product.store') }}" method="post">
        @csrf
        <div class="input-section">
            <div class="input-container">
                <input class="input"
                       type="text"
                       name="title"
                       placeholder="Title">
            </div>
            <div class="input-container">
                <input class="input"
                       type="text"
                       name="price"
                       placeholder="Price">
            </div>
            <div class="input-container">
                <input class="input"
                       type="text"
                       name="amount"
                       placeholder="Amount">
            </div>
            <div class="input-container">
                <select class="sizes" name="size_id" multiple>
                    @foreach($sizes as $size)
                        <option value="{{ $size->id }}">{{ $size->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="input-container">
                <select class="categories" name="category_id" multiple>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button class="button" type="submit">Add</button>
    </form>
@endsection