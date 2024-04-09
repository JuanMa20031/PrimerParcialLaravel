@extends('layouts.app')

@section('content')

    <div style="height: 50px;"></div>

    <h1 class="text-center">Editar Pedido</h1>

    <hr>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="cliente" class="form-label">Cliente</label>
            <input type="text" class="form-control" id="cliente" name="cliente" value="{{ old('cliente', $pedido->cliente) }}">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción del pedido</label>
            <textarea class="form-control" id="descripcion" name="descripcion">{{ old('descripcion', $pedido->descripcion) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{ old('cantidad', $pedido->cantidad) }}">
        </div>
        <div class="mb-3">
            <label for="precio_unitario" class="form-label">Precio Unitario</label>
            <input type="number" step="0.01" class="form-control" id="precio_unitario" name="precio_unitario" value="{{ old('precio_unitario', $pedido->precio_unitario) }}">
        </div>
        <div class="mb-3">
            <label for="fecha_pedido" class="form-label">Fecha del Pedido</label>
            <input type="date" class="form-control" id="fecha_pedido" name="fecha_pedido" value="{{ old('fecha_pedido', $pedido->fecha_pedido) }}">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="entregado" name="entregado" value="1" {{ old('entregado', $pedido->entregado) ? 'checked' : '' }}>
            <label class="form-check-label" for="entregado">Entregado</label>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-select" id="estado" name="estado">
                <option value="pendiente" {{ old('estado', $pedido->estado) == 'pendiente' ? 'selected' : '' }}>Pendiente</option>
                <option value="en_proceso" {{ old('estado', $pedido->estado) == 'en_proceso' ? 'selected' : '' }}>En Proceso</option>
                <option value="completado" {{ old('estado', $pedido->estado) == 'completado' ? 'selected' : '' }}>Completado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Pedido</button>
    </form>
@endsection
