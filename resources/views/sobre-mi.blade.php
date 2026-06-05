@extends('layouts.app')

@section('titulo', 'Sobre mí')

@section('contenido')

<section id="sobre-mi">

    <h2>Sobre mí</h2>

    <img src="{{ asset('img/fotoperfil.png') }}"
         alt="Mi foto"
         width="150">

    <p>
        <strong>Nombre:</strong>
        Luis Fernando Espinoza Silva
    </p>

    <p>
        <strong>Carrera:</strong>
        Ingeniería de Sistemas
    </p>

    <p>
        <strong>Semestre:</strong>
        Quinto semestre
    </p>

    <p>
        <strong>Frase personal:</strong>
        "Compilo errores... como también experiencia"
    </p>

</section>

<section>
    <h2>Habilidades</h2>

    <ul>
        <li>Trabajo en equipo</li>
        <li>Manejo de Word y Excel</li>
        <li>Responsabilidad</li>
        <li>Programación básica</li>
        <li>Aprendizaje rápido</li>
    </ul>
</section>

@endsection