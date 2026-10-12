<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    /** @use HasFactory<\Database\Factories\PropietarioFactory> */
    use HasFactory;
    protected $fillable = [
        'nombre',
        'telefono',
        'email',
        'direccion',
    ];

    public function pacientes()
    {
        return $this->hasMany(Paciente::class);
    }
}