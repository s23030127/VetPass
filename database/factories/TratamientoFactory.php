<?php

namespace Database\Factories;

use App\Models\Tratamiento;
use App\Models\Consulta;
use App\Models\Medicamento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Tratamiento>
 */
class TratamientoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'consulta_id' => Consulta::factory(),
            'medicamento_id' => Medicamento::factory(),
            'dosis' => fake()->randomElement(['10ml', '1 pastilla', '5mg/kg', '2ml']),
            'frecuencia' => fake()->randomElement(['Cada 8 horas', 'Cada 12 horas', 'Una vez al día']),
            'fecha_inicio' => fake()->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
            'fecha_fin' => fake()->dateTimeBetween('now', '+1 month')->format('Y-m-d'),
            'indicaciones' => fake()->sentence(),
        ];
    }
}
