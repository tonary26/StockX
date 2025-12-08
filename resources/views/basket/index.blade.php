@extends('layouts.main')

@section('styles')
    @vite(['resources/css/basket.css', 'resources/css/index.css', 'resources/css/base.css'])
@endsection


@section('title')
    <title>Корзина</title>
@endsection


@section('content')
    @foreach($baskets as $basket)
        <div class="basket-card">
            <div class="basket-left">
                <a href="{{ route('product.get', $basket->product->id) }}">
                    <img src="https://myreact.ru/storage/catalog/products/311/thumbnail/mGQHPY.jpg" alt="product">
                    <div class="basket-size-text">Размер: {{ $basket->size }} US</div>
                </a>
                <div class="basket-title">{{ $basket->product->title }}</div>
            </div>
            <div class="basket-center">
                <div class="basket-price">${{ $basket->price * $basket->quantity }}</div>
            </div>
            <div class="basket-right">
                <div class="amount-box">
                    <button class="minus">−</button>
                    <span class="amount">{{ $basket->quantity }}</span>
                    <button class="plus">+</button>
                </div>
                <form action="{{ route('basket.delete', $basket->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="delete" value="×">
                </form>
            </div>
        </div>
    @endforeach
@endsection