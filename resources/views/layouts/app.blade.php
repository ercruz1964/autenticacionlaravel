<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta-descripcion','valor por defecto')">
    <title>Proyecto Adsi 2022 - @yield('title')</title>
    
    @vite(['resources/css/app.scss','resources/js/app.js'])
</head>
<body>
    @include('partials.navigation')
    <h3>proyecto de prueba</h3>
    
    @yield('content')
</body>
</html>

