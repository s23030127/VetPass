<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacuna extends Model
{
    /** @use HasFactory<\Database\Factories\VacunaFactory> */
    use HasFactory;
    protected $fillable = [
        'paciente_id',
        'user_id',
        'nombre',
        'fecha_aplicacion',
        'proxima_dosis',
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
}