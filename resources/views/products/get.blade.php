@extends('layouts.main')

@section('styles')
    @vite(['resources/css/index.css', 'resources/css/base.css', 'resources/css/cart.css', 'resources/js/script.js'])
@endsection

@section('title')
    <title>{{ $product->title }}</title>
@endsection

@section('content')
    <div class="cart-info">
        <div class="image-container">
            <img class="image" src="{{ asset('storage/' . $product->image) }}" alt="shouse">
        </div>

        <div class="cart-text-info">
            <div class="title-container">
                <span class="title">{{ $product->title }}</span>
            </div>

            <div class="sizes-container">
                @if($product->sizes->count() > 0)
                    <ul class="sizes">
                        @foreach($product->sizes as $size)
                            <li class="size" data-size="{{ $size->id }}">{{ $size->title }} US</li>
                        @endforeach
                    </ul>
                @else
                    <span>Sizes ran out.</span>
                @endif
            </div>

            <div class="price-container">
                <span class="price">${{ $product->price }}</span>
            </div>

            <form action="{{ route('baskets.store', $product->id) }}" method="post">
                @csrf
                <input type="hidden" name="size" id="selected-size">

                <button type="submit" class="button" disabled id="buy-btn">
                    Buy Now
                </button>
            </form>
        </div>
    </div>
@endsection
