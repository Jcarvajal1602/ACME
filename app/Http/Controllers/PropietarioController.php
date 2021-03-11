<?php

namespace ACME\Http\Controllers;

use ACME\Propietario;
use Illuminate\Http\Request;
use ACME\Http\Requests\StorePropietarioRequest;

class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        $propietarios = Propietario::all();
        return view('propietario.index', compact('propietarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('propietario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropietarioRequest $request)
    {
        $propietario = new Propietario();
        $propietario->slug = $request->input('first_name');
        $propietario->first_name = $request->input('first_name');
        $propietario->second_name = $request->input('second_name');
        $propietario->first_last_name = $request->input('first_last_name');
        $propietario->second_last_name = $request->input('second_last_name');
        $propietario->city = $request->input('city');
        $propietario->identification = $request->input('identification');
        $propietario->address = $request->input('address');
        $propietario->telephone = $request->input('telephone');
        $propietario->save();
        return Redirect()->route('propietario.index')->with('status','Propietario Registrado Correctamente');
        //return 'Propietario Registrado Correctamente';
        //return $request->input('name'); //trae un campo en especifico
        //return $request->all(); //trae todos los elementos enviasdos por el form
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Propietario $propietario)
    {
        return view('propietario.show', compact('propietario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Propietario $propietario)
    {
        return view('propietario.edit', compact('propietario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propietario $propietario)
    {
        $propietario->fill($request->all());
        $propietario->slug = $request->input('first_name');
        $propietario->save();
        return Redirect()->route('propietario.index',[$propietario])->with('status','Propietario Actualizado Correctamente');
        //return "Propietario Actualizado Correctamente";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propietario $propietario)
    {
        $propietario->delete();
        return Redirect()->route('propietario.index')->with('status','Propietario Eliminado Correctamente');
        //return "Propietario Eliminado Correctamente";
    }
}
