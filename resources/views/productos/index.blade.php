@extends('layouts.app')

@section('content')
    <h1>Productos en catalogo</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a class="btn" href="{{ route('productos.create') }}">Nuevo producto</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>${{ number_format($producto->precio, 2) }}</td>
                    <td>{{ $producto->stock }}</td>
                    <td class="actions">
                        <a class="btn btn-secondary" href="{{ route('productos.show', $producto) }}">Ver</a>
                        <a class="btn" href="{{ route('productos.edit', $producto) }}">Editar</a>
                        <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Eliminar producto?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No hay productos registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-top: 12px;">
        {{ $productos->links() }}
    </div>
@endsection
