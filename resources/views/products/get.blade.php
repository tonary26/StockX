@extends('layouts.main')

@section('styles')
    @vite(['resources/css/index.css', 'resources/css/base.css', 'resources/css/cart.css'])
@endsection


@section('title')
    <title>{{ $product->title }}</title>
@endsection


@section('content')
    <div class="cart-info">
        <div class="image-container">
            <img class="image" src="https://myreact.ru/storage/catalog/products/311/thumbnail/mGQHPY.jpg" alt="jordan4">
        </div>
        <div class="cart-text-info">
            <div class="title-container">
                <span class="title">{{ $product->title }}</span>
            </div>
            <div class="sizes-container">
                <ul class="sizes">
                    @if($product->sizes->count() > 0)
                        @foreach($product->sizes as $size)
                            <li class="size">{{ $size->title }}</li>
                        @endforeach
                    @else
                        <span>Размеры закончились.</span>
                    @endif
                </ul>
            </div>
            <div class="price-container">
                <span class="price">${{ $product->price }}</span>
            </div>
            <button type="submit" class="button">Buy Now</button>
        </div>
    </div>
@endsection