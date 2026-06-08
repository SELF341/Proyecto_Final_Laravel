@extends('layouts.app')

@section('titulo', 'Contacto')

@section('contenido')

<section>
    <h2>Contacto</h2>

    @if (session('exito'))
    <p style="color:green;">{{ session('exito') }}</p>
    @endif

    <form action="{{ route('contacto.procesar') }}" method="POST">
        @csrf

        <label>Nombre</label>
        <input type="text" name="nombre" placeholder="Ingrese su nombre">
        @error('nombre')
        <p style="color:red;">{{ $message }}</p>
        @enderror

        <label>Email</label>
        <input type="email" name="email" placeholder="Ingrese su correo">
        @error('email')
        <p style="color:red;">{{ $message }}</p>
        @enderror

        <label>Mensaje</label>
        <textarea name="mensaje" rows="5" placeholder="Escriba su mensaje"></textarea>
        @error('mensaje')
        <p style="color:red;">{{ $message }}</p>
        @enderror

        <button type="submit">Enviar</button>
    </form>
</section>

@endsection