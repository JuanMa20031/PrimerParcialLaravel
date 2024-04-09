<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedidos';

    protected $fillable = [
        'cliente',
        'descripcion',
        'cantidad',
        'precio_unitario',
        'fecha_pedido',
        'entregado',
        'estado',
    ];
}
