<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'Evento',
        'Tipo',
        'descripcion',
        'ano',
        'mes',
        'dia',
        'fecha',
        'columna',
        'comunidad_id',
        'localidad_id'


    ];

    public function localidad(){
        return $this->belongsTo(CalLocalidad::class);
    }

    public function comunidad(){
        return $this->belongsTo(CalComunidad::class);
    }

    public function fecha(){
        return $this->belongsTo(Fecha::class);
    }
}
