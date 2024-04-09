@extends('layouts.app')

@section('content')
    <div style="height: 50px;"></div>

    <h1 class="text-center">Detalles del Pedido</h1>

    <hr>

    <div>
        <p><strong>Cliente:</strong> {{ $pedido->cliente }}</p>
        <p><strong>Descripción del pedido:</strong> {{ $pedido->descripcion }}</p>
        <p><strong>Cantidad:</strong> {{ $pedido->cantidad }}</p>
        <p><strong>Precio Unitario:</strong> {{ $pedido->precio_unitario }}</p>
        <p><strong>Fecha del Pedido:</strong> {{ $pedido->fecha_pedido }}</p>
        <p><strong>Entregado:</strong> {{ $pedido->entregado ? 'Sí' : 'No' }}</p>
        <p><strong>Estado:</strong> {{ $pedido->estado }}</p>
        <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-primary">Editar Pedido</a>
        <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar Pedido</button>
        </form>
    </div>
@endsection
