<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <title>@yield('titulo', 'Mi Aplicación')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<header>

    <h1>MidnightClub🌙</h1>

    <nav>

        <a href="{{ route('inicio') }}">Inicio</a>

        <a href="{{ route('sobre-mi') }}">Sobre mí</a>

        <a href="{{ route('materias') }}">Materias</a>

        <a href="{{ route('contacto') }}">Contacto</a>

        <a href="{{ route('productos.index') }}">Productos</a>




    </nav>

</header>

<main>

    @yield('contenido')

</main>

<footer>

    <p> CursoWeb — SELF</p>

</footer>

</body>
</html>