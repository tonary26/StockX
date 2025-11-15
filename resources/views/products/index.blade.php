@extends('layouts.main')

@section('title')
    <title>Главная страница</title>
@endsection

@section('styles')
    @vite(['resources/css/base.css'])
@endsection

@section('content')
    <div class="cards-container">
        <div class="cards">
            <a href="cart.html">
                <div class="card">
                    @foreach($products as $product)
                        <img class="img" src="https://myreact.ru/storage/catalog/products/311/thumbnail/mGQHPY.jpg" alt="кроссовки">
                        <span class="title">{{ $product->title }}</span>
                        <span class="price">${{ $product->price }}</span>
                    @endforeach
                </div>
            </a>
        </div>
    </div>
@endsection