@extends('layouts.main')

@section('styles')
    @vite(['resources/css/basket.css', 'resources/css/index.css', 'resources/css/base.css'])
@endsection


@section('title')
    <title>Basket</title>
@endsection


@section('content')
    @foreach($baskets as $basket)
        <div class="basket-card">
            <div class="basket-left">
                <a href="{{ route('product.get', $basket->product->id) }}">
                    <img src="{{ asset('storage/' . $basket->product->image) }}" alt="shouse">
                    <div class="basket-size-text">Size: {{ $basket->size }} US</div>
                </a>
                <div class="basket-title">{{ $basket->product->title }}</div>
            </div>
            <div class="basket-center">
                <div class="basket-price">${{ $basket->price * $basket->quantity }}</div>
            </div>
            <div class="basket-right">
                <div class="amount-box">
                    <form action="{{ route('baskets.decrease', $basket->id) }}" method="post">
                        @csrf
                        <button type="submit" class="minus">−</button>
                    </form>
                    <span class="amount">{{ $basket->quantity }}</span>
                    <form action="{{ route('baskets.increase', $basket->id) }}" method="post">
                        @csrf
                        <button type="submit"
                                class="plus"
                                @disabled($basket->quantity >= $basket->product->amount)>
                            +
                        </button>
                    </form>
                </div>
                <form action="{{ route('baskets.delete', $basket->id) }}" method="post">
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