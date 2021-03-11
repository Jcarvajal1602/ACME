@extends('layouts.app')
@section('title', 'Propietarios')
@section('content')
@include('common.success')
<a href="/propietario/create" class="btn btn-primary">Registrar Propietario</a>
<a href="/propietario/create" class="btn btn-primary">Registrar Conductor</a>

<div class="row">
@foreach ($propietarios as $propietario)
    <div class="col-sm">
        <div class="card text-center" style="width: 18rem; margin-top:30px; margin-bottom:70px;">
            <div class="card-body">
                <h5 class="card-title">{{$propietario->first_name}} {{$propietario->second_name}} {{$propietario->first_last_name}} {{$propietario->second_last_name}}</h5>

                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            Ciudad<br>
                            {{$propietario->city}}
                         </div>
                        <div class="col">
                            Identificacion 
                            {{$propietario->identification}}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            Dirección
                            {{$propietario->address}}
                         </div>
                        <div class="col">
                            Teléfono
                            {{$propietario->telephone}}
                        </div>
                    </div>
                </div>
                
                {!! Form::open(['route' =>['propietario.destroy', $propietario->slug],'method' =>'DELETE']) !!}
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                <a href="/propietario/{{$propietario->slug}}/edit" class="btn btn-primary">Editar</a>
                {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
                </div>
                </div>
                </div>
                {!! Form::close() !!}

                
            <a href="/propietario/{{$propietario->slug}}" class="btn btn-primary">Ver más...</a>
            </div>
        </div>
    </div>
@endforeach
</div>

@endsection
    




