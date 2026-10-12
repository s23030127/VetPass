<?php

namespace Database\Factories;

use App\Models\Propietario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Propietario>
 */
class PropietarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'telefono' => fake()->phoneNumber(),
            'email' => fake()->safeEmail(),
            'direccion' => fake()->address(),
        ];
    }
}
