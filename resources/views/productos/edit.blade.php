@extends('layouts.app')

@section('content')
    <h1>Editar producto</h1>

    <a class="btn btn-secondary" href="{{ route('productos.index') }}">Volver</a>

    <form action="{{ route('productos.update', $producto) }}" method="POST" style="margin-top: 12px;">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre', $producto->nombre) }}" required>
            @error('nombre')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" rows="4">{{ old('descripcion', $producto->descripcion) }}</textarea>
            @error('descripcion')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" step="0.01" min="0" value="{{ old('precio', $producto->precio) }}" required>
            @error('precio')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" id="stock" name="stock" min="0" value="{{ old('stock', $producto->stock) }}" required>
            @error('stock')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="estado">Estado</label>
            <select id="estado" name="estado" required>
                <option value="activo" {{ old('estado', $producto->estado) === 'activo' ? 'selected' : '' }}>Activo</option>
                <option value="inactivo" {{ old('estado', $producto->estado) === 'inactivo' ? 'selected' : '' }}>Inactivo</option>
            </select>
            @error('estado')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <button class="btn" type="submit">Actualizar Producto</button>
    </form>
@endsection
