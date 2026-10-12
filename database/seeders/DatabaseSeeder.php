<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Propietario;
use App\Models\Paciente;
use App\Models\Consulta;
use App\Models\Vacuna;
use App\Models\Medicamento;
use App\Models\Tratamiento;
use App\Models\Cita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Crear tu usuario principal
        User::factory()->create([
            'name' => 'Dania Bolaños Mora',
            'email' => 'S23030127@itsch.edu.mx',
            'rol' => 'admin',
        ]);

        // 2. Crear más usuarios (veterinarios y personal)
        $usuarios = User::factory(5)->create();

        // 3. Crear Medicamentos de base
        $medicamentos = Medicamento::factory(15)->create();

        // 4. Crear Propietarios con Pacientes, Consultas, Vacunas y Citas
        Propietario::factory(10)->create()->each(function ($propietario) use ($usuarios, $medicamentos) {
            // Cada propietario tiene entre 1 y 3 pacientes
            $pacientes = Paciente::factory(rand(1, 3))->create([
                'propietario_id' => $propietario->id,
            ]);

            foreach ($pacientes as $paciente) {
                // Asignar 1-3 vacunas por paciente
                Vacuna::factory(rand(1, 3))->create([
                    'paciente_id' => $paciente->id,
                    'user_id' => $usuarios->random()->id,
                ]);

                // Asignar 1-2 citas por paciente
                Cita::factory(rand(1, 2))->create([
                    'paciente_id' => $paciente->id,
                    'user_id' => $usuarios->random()->id,
                ]);

                // Asignar 1-3 consultas por paciente
                $consultas = Consulta::factory(rand(1, 3))->create([
                    'paciente_id' => $paciente->id,
                    'user_id' => $usuarios->random()->id,
                ]);

                // Cada consulta tiene tratamientos con medicamentos existentes
                foreach ($consultas as $consulta) {
                    Tratamiento::factory(rand(1, 2))->create([
                        'consulta_id' => $consulta->id,
                        'medicamento_id' => $medicamentos->random()->id,
                    ]);
                }
            }
        });
    }
}