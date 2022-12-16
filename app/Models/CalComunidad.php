<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalComunidad extends Model
{
    use HasFactory;

    protected $fillable = [
        'Comunidad',
        'Codigo',
    ];

    //Relacion uno a muchos
    public function localidades(){
         return $this->hasMany(CalLocalidad::class);
    }

     //Relacion uno a muchos
     public function eventos(){
        return $this->hasMany(Evento::class);
   }
}
