<?php

namespace ACME;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    public function propietario(){
        return $this->belongsTo('ACME\Propietario');
    }
}
