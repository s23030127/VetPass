<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    /** @use HasFactory<\Database\Factories\PacienteFactory> */
    use HasFactory;
    protected $fillable = [
        'propietario_id',
        'codigo',
        'nombre',
        'especie',
        'raza',
        'sexo',
        'fecha_nacimiento',
        'peso',
        'observaciones',
        'activo',
    ];

    public function propietario()
    {
        return $this->belongsTo(Propietario::class);
    }

    public function consultas()
    {
        return $this->hasMany(Consulta::class);
    }

    public function vacunas()
    {
        return $this->hasMany(Vacuna::class);
    }

    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}