<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('styles')
    @vite(['resources/css/index.css'])
    @yield('title')
</head>
<body>
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="{{ route('product.index') }}">StockX</a>
        </div>
        <div class="nav-menu">
            @guest
                <div class="login">
                    <a href="{{ route('auth.login.show') }}">Login</a>
                </div>
                <div class="sign-up">
                    <a href="{{ route('auth.register.show') }}">Sign Up</a>
                </div>
            @endguest

            @auth
                <div class="add-shouse">
                    <a href="{{ route('product.add') }}">Add</a>
                </div>
                <div class="add-category">
                    <a href="{{ route('category.add') }}">Add Category</a>
                </div>
                <div class="add-subcategory">
                    <a href="{{ route('subcategory.add') }}">Add Subcategory</a>
                </div>
                <div class="basket-container">
                    <a href="{{ route('baskets.index') }}">
                        <img class="basket" src="https://images.icon-icons.com/2785/PNG/512/shopping_cart_icon_177373.png" alt="Корзина">
                    </a>
                </div>
                <div class="log-out">
                    <form action="{{ route('auth.logout') }}" method="post">
                        @csrf
                        <input class="log-out" type="submit" value="Log Out">
                    </form>
                </div>
            @endauth
        </div>
    </div>
</div>
<div class="main">
    <div class="main-container">
        <div class="nav-categories">
            <a href="{{ route('product.index') }}">All</a>
            @foreach($categories as $category)
                <div class="category-item">
                    <a href="#" class="category-link">{{ $category->title }}</a>
                    @if($category->children->count() > 0)
                        <div class="dropdown-menu">
                            @foreach($category->children as $subCategory)
                                <a href="{{ route('product.index', ['category_id' => $subCategory->id]) }}"
                                   class="subcategory-link">
                                    {{ $subCategory->title }}
                                </a>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
    @yield('content')
</div>
</body>
</html>