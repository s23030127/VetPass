<?php

namespace Database\Factories;

use App\Models\Paciente;
use App\Models\Propietario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Paciente>
 */
class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $especie = fake()->randomElement(['Perro', 'Gato', 'Bovino', 'Equino', 'Porcino', 'Ovino']);

        return [
            'propietario_id' => Propietario::factory(),
            'codigo' => 'VP-' . fake()->unique()->numberBetween(10000, 99999),
            'nombre' => fake()->firstName(),
            'especie' => $especie,
            'raza' => fake()->word(),
            'sexo' => fake()->randomElement(['macho', 'hembra']),
            'fecha_nacimiento' => fake()->dateTimeBetween('-10 years', 'now')->format('Y-m-d'),
            'peso' => fake()->randomFloat(2, 1, 500),
            'observaciones' => fake()->sentence(),
            'activo' => true,
        ];
    }
}
