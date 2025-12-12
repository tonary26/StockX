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
                    <form action="{{ route('basket.decrease', $basket->id) }}" method="post">
                        @csrf
                        <button type="submit" class="minus">−</button>
                    </form>
                    <span class="amount">{{ $basket->quantity }}</span>
                    <form action="{{ route('basket.increase', $basket->id) }}" method="post">
                        @csrf
                        <button type="submit"
                                class="plus"
                                @disabled($basket->quantity >= $basket->product->amount)>
                            +
                        </button>
                    </form>
                </div>
                <form action="{{ route('basket.delete', $basket->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="delete" value="×">
                </form>
            </div>
        </div>
        @if($errors->has('amount'))
            <span class="error">
                {{ $errors->first('amount') }}
            </span>
        @endif
    @endforeach
@endsection