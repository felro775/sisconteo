<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    /** @use HasFactory<\Database\Factories\MesaFactory> */
    use HasFactory;

    protected $table = 'mesas';

    protected $fillable = [
        'recinto_id',
        'numero',
        'totalvotantes',
        'estado',
        'candidato_1',
        'candidato_2',
        'candidato_3',
        'candidato_4',
        'candidato_5',
        'usuario_id',        
    ];

    public function recinto()
    {
        return $this->belongsTo(Recinto::class);        
    }
}
