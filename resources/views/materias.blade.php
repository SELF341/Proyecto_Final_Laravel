@extends('layouts.app')

@section('titulo', 'Materias')

@section('contenido')

<section>
    <h2>Mis materias</h2>

    <p><strong>Promedio:</strong> {{ $promedio }}</p>
    <p><strong>Materias aprobadas:</strong> {{ $aprobadas }}</p>

    <table>
        <tr>
            <th>Código</th>
            <th>Materia</th>
            <th>Créditos</th>
            <th>Nota</th>
            <th>Estado</th>
        </tr>

        @foreach ($materias as $m)
            <tr style="background: {{ $m->getColorEstado() }}">
                <td>{{ $m->getCodigo() }}</td>
                <td>{{ $m->getNombre() }}</td>
                <td style="text-align:center;">{{ $m->getCreditos() }}</td>
                <td style="text-align:center; font-weight:bold;">{{ $m->getNota() }}</td>
                <td style="text-align:center; font-weight:bold;">{{ $m->getEstado() }}</td>
            </tr>
        @endforeach
    </table>
</section>

@endsection