<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'Empresa',
        'Domicilio',
        'Actividad',
        'Convenio',
        'Centro',
        'localidad_id'
    ];

    public function localidad(){
        return $this->belongsTo(CalLocalidad::class);
    }
}
