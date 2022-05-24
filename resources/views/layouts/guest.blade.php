<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->

        <!-- Styles -->
        <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
        <title>Glass</title>

        <!-- General Styling -->
        <link href="/css/index.css" rel="stylesheet">
        <!-- Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Header Styling -->
        <link href="/css/header.css" rel="stylesheet">
        <!-- Footer Styling -->
        <link href="/css/footer.css" rel="stylesheet">
        <!-- Home Page Styling -->
        <link href="/css/home.css" rel="stylesheet">
        <!-- Products page Styling -->
        <link href="/css/products.css" rel="stylesheet">
        <!-- Product page Styling -->
        <link href="/css/product.css" rel="stylesheet">
        <!-- Cart page Styling -->
        <link href="/css/cart.css" rel="stylesheet">
        <!-- About page Styling -->
        <link href="/css/about.css" rel="stylesheet">
        <!-- Blogs page Styling -->
        <link href="/css/blog.css" rel="stylesheet">
        <!-- Form Styling -->
        <link href="/css/form.css" rel="stylesheet">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div>
            {{ $slot }}
        </div>
        <script type="text/javascript" src="/js/slider.js"></script>
        <script type="text/javascript" src="/js/header.js"></script>
    </body>
</html>
