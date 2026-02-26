@extends('layouts.app')

@section('content')
    <h1>Detalle del producto</h1>

    <a class="btn btn-secondary" href="{{ route('productos.index') }}">Volver</a>

    <table>
        <tr>
            <th>Nombre</th>
            <td>{{ $producto->nombre }}</td>
        </tr>
        <tr>
            <th>Descripción</th>
            <td>{{ $producto->descripcion }}</td>
        </tr>
        <tr>
            <th>Precio</th>
            <td>${{ number_format($producto->precio, 2) }}</td>
        </tr>
        <tr>
            <th>Stock</th>
            <td>{{ $producto->stock }}</td>
        </tr>
        <tr>
            <th>Estado</th>
            <td>{{ ucfirst($producto->estado) }}</td>
        </tr>
        <tr>
            <th>Creado</th>
            <td>{{ $producto->created_at }}</td>
        </tr>
    </table>
@endsection
