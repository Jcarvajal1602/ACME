<?php

namespace ACME;

use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    protected $fillable =['slug','first_name','second_name','first_last_name','second_last_name','city','identification','address','telephone'];
    public function getRouteKeyName(){
        return 'slug';
    }

    public function vehiculos(){
        return $this->hasMany('ACME\Vehiculo');
    }
}
