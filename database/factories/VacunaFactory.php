<?php

namespace Database\Factories;

use App\Models\Paciente;
use App\Models\User;
use App\Models\Vacuna;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Vacuna>
 */
class VacunaFactory extends Factory
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
            'nombre' => fake()->randomElement(['Rabia', 'Parvovirus', 'Quíntuple', 'Triple Felina', 'Aftosa']),
            'fecha_aplicacion' => fake()->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'proxima_dosis' => fake()->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'observaciones' => fake()->sentence(),
        ];
    }
}
