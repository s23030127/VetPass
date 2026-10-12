<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    /** @use HasFactory<\Database\Factories\MedicamentoFactory> */
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
    ];

    public function tratamientos()
    {
        return $this->hasMany(Tratamiento::class);
    }
}
