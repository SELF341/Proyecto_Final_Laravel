@extends('layouts.app')

@section('titulo', 'Sobre mí')

@section('contenido')

<section class="contenedor-sobre-mi">

    <h2>Sobre mí</h2>

    <div class="tarjeta-sobre-mi">

        <img src="{{ asset('img/fotoperfil.png') }}"
             alt="Fernando Silva"
             class="foto-perfil">

        <div class="datos-personales">

            <p><strong>Nombre:</strong> Lui Fernando Espinoza Silva</p>

            <p><strong>Carrera:</strong> Ingeniería de Sistemas</p>

            <p><strong>Semestre:</strong> Quinto semestre</p>

            <p>
                <strong>Frase personal:</strong>
                Compilo errores... y también experiencia.
            </p>

        </div>

    </div>

</section>

@endsection