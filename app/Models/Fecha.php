<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fecha extends Model
{
    use HasFactory;

    protected $primaryKey = 'Fechanum';

    //Relacion uno a muchos
    public function eventos(){
        return $this->hasMany(Evento::class);
   }
}
