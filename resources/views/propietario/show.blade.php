@extends('layouts.app')
@section('title', 'Propietario')
@section('content')
<div class="text-center">
<h5 style="margin: 20px;">{{$propietario->first_name}} {{$propietario->first_last_name}} </h5>


<p>Sus vehículos registrados son: </p>
<modal-button></modal-button>
<create-form-vehiculo></create-form-vehiculo>
<lista-de-vehiculos></lista-de-vehiculos>
</div>
@endsection
    
