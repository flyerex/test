<html>
    <head>
        <title>test</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <a href="{{route('home.index')}}">Home</a>
         | <a href="{{route('catalog.index')}}">Catalog</a>
         | <a href="{{route('cart.index')}}">Cart</a>
        <div class="container">
            <div class="row">
            @yield("content")
            <div>
        <div>
    </body>
</html>