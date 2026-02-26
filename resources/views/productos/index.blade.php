@extends('layouts.app')

@section('content')
    <h1>Catalogo de Productos</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div style="margin-bottom: 12px; display: flex; gap: 8px; align-items: center; flex-wrap: wrap;">
        <a class="btn" href="{{ route('productos.create') }}">Nuevo producto</a>

        <form action="{{ route('productos.index') }}" method="GET" style="display: inline-flex; gap: 8px; align-items: center;">
            <label for="estado" style="font-weight: bold;">Estado</label>
            <select id="estado" name="estado" onchange="this.form.submit()">
                <option value="activo" {{ ($estado ?? 'activo') === 'activo' ? 'selected' : '' }}>Activo</option>
                <option value="inactivo" {{ ($estado ?? 'activo') === 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                <option value="todos" {{ ($estado ?? 'activo') === 'todos' ? 'selected' : '' }}>Todos</option>
            </select>

            <input type="text" name="buscar" placeholder="Buscar por nombre o descripción" value="{{ $buscar ?? '' }}">
            <button class="btn" type="submit">Filtrar</button>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Estado</th>
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
                    <td>{{ ucfirst($producto->estado) }}</td>
                    <td class="actions">
                        <a class="btn btn-secondary" href="{{ route('productos.show', $producto) }}">Ver</a>
                        <a class="btn" href="{{ route('productos.edit', $producto) }}">Editar</a>
                        @if ($producto->estado === 'activo')
                            <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" onclick="return confirm('¿Eliminar producto?')">Eliminar</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No hay productos registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-top: 12px;">
        {{ $productos->links() }}
    </div>
@endsection
