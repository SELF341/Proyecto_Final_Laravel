@extends('layouts.app')

@section('titulo', 'Materias')

@section('contenido')

<section>
    <h2>Mis materias</h2>

    <div class="resumen-materias">
        <p><strong>Promedio:</strong> {{ $promedio }}</p>
        <p><strong>Materias aprobadas:</strong> {{ $aprobadas }}</p>
    </div>

    <table class="tabla-materias">
        <tr>
            <th>Código</th>
            <th>Materia</th>
            <th>Créditos</th>
            <th>Nota</th>
            <th>Estado</th>
        </tr>

        @foreach ($materias as $m)
            <tr>
                <td>{{ $m->getCodigo() }}</td>
                <td>{{ $m->getNombre() }}</td>
                <td class="centrado">{{ $m->getCreditos() }}</td>
                <td class="centrado nota">{{ $m->getNota() }}</td>
                <td class="centrado">
                    <span class="estado {{ strtolower($m->getEstado()) }}">
                        {{ $m->getEstado() }}
                    </span>
                </td>
            </tr>
        @endforeach
    </table>
</section>

@endsection