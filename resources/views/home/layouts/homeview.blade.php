<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @include('home.partials.effect')
</head>
<body>
<header id="header">
    @include('home.partials.header')
    @include('home.partials.nav')

</header>
<div id="home">
    <div class="container">
        @yield('content')
    </div>
</div>
<footer id="footer">
    @include('home.partials.footer')
</footer>
    @include('home.partials.script')
</body>
</html>
