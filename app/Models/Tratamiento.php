<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    /** @use HasFactory<\Database\Factories\TratamientoFactory> */
    use HasFactory;
    protected $fillable = [
        'consulta_id',
        'medicamento_id',
        'dosis',
        'frecuencia',
        'fecha_inicio',
        'fecha_fin',
        'indicaciones',
    ];

    public function consulta()
    {
        return $this->belongsTo(Consulta::class);
    }

    public function medicamento()
    {
        return $this->belongsTo(Medicamento::class);
    }
}
