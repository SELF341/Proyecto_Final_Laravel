@extends('layouts.app')

@section('titulo', 'Productos')

@section('contenido')

<section>

    <h2>
        Lista de Productos
    </h2>

    <p>

        Productos disponibles registrados en el sistema.

    </p>

    <p>
    Total de productos registrados: {{ count($productos) }}
    </p>

    <table>

        <thead>

            <tr>

                <th>
                    N°
                </th>

                <th>
                    Producto
                </th>

                <th>
                    Precio
                </th>

                <th>
                    Categoría
                </th>

            </tr>

        </thead>

        <tbody>

            @foreach($productos as $index => $producto)

            <tr>

                <td>
                    {{ $index + 1 }}
                </td>

                <td>
                    {{ $producto['nombre'] }}
                </td>

                <td>

                    Bs.
                    {{ number_format($producto['precio'], 2) }}

                </td>

                <td>
                    {{ $producto['categoria'] }}
                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

    <div class="precio-promedio">
    Precio promedio: Bs. {{ number_format($precioPromedio, 2) }}
    </div>

</section>

@endsection