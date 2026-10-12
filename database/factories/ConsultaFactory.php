<?php

namespace Database\Factories;

use App\Models\Consulta;
use App\Models\Paciente;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Consulta>
 */
class ConsultaFactory extends Factory
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
            'fecha' => fake()->dateTimeBetween('-6 months', 'now'),
            'motivo' => fake()->sentence(3),
            'sintomas' => fake()->paragraph(),
            'diagnostico' => fake()->paragraph(),
            'observaciones' => fake()->sentence(),
        ];
    }
}