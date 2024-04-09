<?php

namespace Database\Factories;

use App\Models\Pedido;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pedido::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cliente' => $this->faker->name,
            'descripcion' => $this->faker->sentence,
            'cantidad' => $this->faker->randomNumber(2),
            'precio_unitario' => $this->faker->randomFloat(2, 10, 100),
            'fecha_pedido' => $this->faker->date,
            'entregado' => $this->faker->boolean,
            'estado' => $this->faker->randomElement(['pendiente', 'en_proceso', 'completado']),
        ];
    }
}
