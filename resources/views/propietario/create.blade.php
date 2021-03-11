@extends('layouts.app')
@section('title', 'Crear Propietario')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@include('common.errors')
{!! Form::open(['route'=>'propietario.store','method'=>'POST']) !!}
@include('propietario.form')
{!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
<!--<button type="submit" class="btn btn-primary">Registrar</button>-->
{!! Form::close() !!}

@endsection
    




