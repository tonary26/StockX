<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('styles')
    @yield('title')
</head>
<body>
<div class="main-login">
    <div class="main-login-container">
        <div class="logo-container">
            <a href="index.html">
                <h2>StockX</h2>
            </a>
        </div>
        @yield('form')
    </div>
</div>
</body>
</html>