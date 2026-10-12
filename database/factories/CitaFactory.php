<?php

namespace Database\Factories;

use App\Models\Cita;
use App\Models\Paciente;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cita>
 */
class CitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'paciente_id' => Paciente::factory(),
            'user_id' => User::factory(),
            'fecha_hora' => fake()->dateTimeBetween('-1 month', '+1 month'),
            'motivo' => fake()->sentence(3),
            'estado' => fake()->randomElement(['pendiente', 'completada', 'cancelada']),
            'observaciones' => fake()->sentence(),
        ];
    }
}
