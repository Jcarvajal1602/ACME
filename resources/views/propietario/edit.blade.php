@extends('layouts.app')
@section('title', 'Editar Propietario')
@section('content')

<br>
{!! Form::model($propietario, ['route' => ['propietario.update', $propietario], 'method' => 'PUT']) !!}
@include('propietario.form')
{!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
<!--<button type="submit" class="btn btn-primary">Registrar</button>-->
{!! Form::close() !!}
@endsection
    




