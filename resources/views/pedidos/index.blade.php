@extends('layouts.app')

@section('content')
    <div style="height: 50px;"></div>

    <h1 class="text-center">Listado de Pedidos</h1>

    <div class="text-end mb-2">
        <a href="{{ route('pedidos.create') }}" class="btn btn-sm btn-success">Crear Nuevo Pedido</a>
    </div>

    <hr>

    <form action="{{ route('pedidos.index') }}" method="GET" class="mb-3">
        <div class="input-group">
            <select name="filtro" class="form-select">
                <option value="">Filtrar por</option>
                <option value="cliente">Cliente</option>
                <option value="descripcion">Descripción</option>
            </select>
            <input type="text" class="form-control" name="valor" placeholder="Buscar...">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>

    <div class="row">
        @foreach($pedidos as $pedido)
            <div class="col-md-4">
                <div class="card my-4">
                    <div class="card-body">
                        <h5 class="card-title">Producto: {{ $pedido->descripcion }}</h5>
                        <p class="card-text">Cliente: {{ $pedido->cliente }}</p>
                        <p class="card-text">Cantidad: {{ $pedido->cantidad }}</p>
                        <p class="card-text">Precio Unitario: {{ $pedido->precio_unitario }}</p>
                        <p class="card-text">Fecha del Pedido: {{ $pedido->fecha_pedido }}</p>
                        <p class="card-text">Entregado: {{ $pedido->entregado ? 'Sí' : 'No' }}</p>
                        <p class="card-text">Estado: {{ $pedido->estado }}</p>
                        <a href="{{ route('pedidos.show', $pedido->id) }}" class="btn btn-primary">Ver Detalles</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
