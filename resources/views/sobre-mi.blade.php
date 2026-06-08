@extends('layouts.app')

@section('titulo', 'Sobre mí')

@section('contenido')

<section>
    <h2>Sobre mí</h2>

    <div class="sobre-mi-card">
        <img src="{{ asset('img/fotoperfil.png') }}" alt="Foto de perfil" class="foto-perfil">

        <div>
            <p><strong>Nombre:</strong> Lui Fernando Espinoza Silva</p>
            <p><strong>Carrera:</strong> Ingeniería de Sistemas</p>
            <p><strong>Semestre:</strong> Quinto semestre</p>
            <p><strong>Frase personal:</strong> Compilo errores… y también experiencia.</p>

            <h3>Objetivos Profesionales</h3>
            <p>
                Mi objetivo es especializarme en desarrollo de software y tecnologías web,
                fortaleciendo mis conocimientos en programación, bases de datos y arquitectura de aplicaciones.
            </p>
        </div>
    </div>
</section>

@endsection