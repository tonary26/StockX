@extends('layouts.main')

@section('title')
    <title>Home</title>
@endsection

@section('styles')
    @vite(['resources/css/base.css'])
@endsection

@section('content')
    <div class="cards-container">
        <div class="cards">
            @foreach($products as $product)
                <div class="card-container">
                    <a href="{{ route('product.get', $product->id) }}">
                        <div class="card">
                            <img class="img"
                                 src="{{ asset('storage/' . $product->image) }}"
                                 alt="shouse">
                            <span class="title">{{ $product->title }}</span>
                            <span class="price">${{ $product->price }}</span>

                            @can('delete', $product)
                                <form action="{{ route('product.delete', $product->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="del-btn" type="submit" >
                                        <img src="https://cdn-icons-png.flaticon.com/128/542/542673.png"
                                            alt="delete">
                                    </button>
                                </form>
                            @endcan
                        </div>
                    </a>
                    @can('update', $product)
                        <div class="upd-btn">
                            <a href="{{ route('product.edit', $product->id) }}">Update</a>
                        </div>
                    @endcan
                </div>
            @endforeach
        </div>
    </div>

    <div class="pagination">
        {{ $products->links() }}
    </div>
@endsection