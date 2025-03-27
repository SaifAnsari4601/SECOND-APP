<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="css/all.css" rel="stylesheet"/>
        <title>Laravel Crud</title>
    </head>
    <body>

    <ul class="nav bg-dark">
  <li class="nav-item">
    <a class="nav-link text-light" aria-current="page" href="{{ route('products.index') }}">Products</a>
  </li>
</ul>
        <div class="container">
       @hasSection('content')
        @yield('content')
       @else
        <h1>No content found.</h1>
       @endIf
        </div>
    </body>
</html>
