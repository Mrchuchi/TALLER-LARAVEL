<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->GetLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Taller Laravel')</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{  route('producto.index') }}">
                Productos
            </a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>