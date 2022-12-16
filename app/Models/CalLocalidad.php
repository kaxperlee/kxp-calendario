<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalLocalidad extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_comunidad',
        'localidad',
    ];

    public function comunidad(){
        return $this->belongsTo(CalComunidad::class);
    }

    //Relacion uno a muchos
    public function empresas(){
        return $this->hasMany(Empresa::class);
   }

   //Relacion uno a muchos
   public function eventos(){
    return $this->hasMany(Evento::class);
}
}
