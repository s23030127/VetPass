<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    /** @use HasFactory<\Database\Factories\ConsultaFactory> */
    use HasFactory;
    protected $fillable = [
        'paciente_id',
        'user_id',
        'fecha',
        'motivo',
        'sintomas',
        'diagnostico',
        'observaciones',
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tratamientos()
    {
        return $this->hasMany(Tratamiento::class);
    }
}
