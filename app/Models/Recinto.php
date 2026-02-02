<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recinto extends Model
{
    /** @use HasFactory<\Database\Factories\RecintoFactory> */
    use HasFactory;

    protected $table = 'recintos';

    protected $fillable = [
        'departamento',
        'provincia',
        'municipio',
        'circunscripcion',
        'asiento',
        'zona',    
        'nombre',
        'direccion',
        'nummesas',
        'numhabilitados',
    ];

    public function mesas()
    {
        return $this->hasMany(Mesa::class, 'recinto_id');
    }

}
