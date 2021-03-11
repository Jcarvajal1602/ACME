<?php

namespace ACME\Http\Controllers;

use Illuminate\Http\Request;
use ACME\Vehiculo;
use ACME\Propietario;
class VehiculoController extends Controller
{
    public function index(Propietario $propietario, Request $request){
        if($request->ajax()){
            return response()->json($propietario->vehiculos, 200);
        }
        return view('vehiculos.index');
    }

    public function store(Propietario $propietario, Request $request){
        if($request->ajax()){
            $vehiculo = new Vehiculo();
            $vehiculo->placa = $request->input('placa');
            $vehiculo->marca = $request->input('marca');
            $vehiculo->color = $request->input('color');
            $vehiculo->tipo_vehiculo = $request->input('tipo_vehiculo');
            $vehiculo->propietario()->associate($propietario)->save();

            return response()->json([
                "message" => "Vehiculo Asignado Correctamente.",
                "vehiculo" => $vehiculo
            ], 200);
        }
    }
}
