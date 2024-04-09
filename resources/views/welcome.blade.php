@extends('layouts.app')

@section('content')
    <div class="container">

        <div style="height: 50px;"></div>

        <h1>Bienvenido al Primer Parcial de Laravel</h1>

        <p>Haz clic en el botón de abajo para ver o empezar a crear los pedidos:</p>

        <a href="{{ route('pedidos.index') }}" class="btn btn-primary">Ver Pedidos</a>
    </div>
@endsection
