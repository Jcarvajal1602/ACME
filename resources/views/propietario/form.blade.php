<div class="form-group">
    <div class="row">
        <div class="col">
            {!! Form::text('first_name', null, ['class'=>'form-control','placeholder'=>'Primer Nombre']) !!}
            <!--<input type="text" name="first_name" class="form-control" placeholder="Primer Nombre">-->
         </div>
        <div class="col">
            {!! Form::text('second_name', null, ['class'=>'form-control','placeholder'=>'Segundo Nombre']) !!}
           <!-- <input type="text" name="second_name" class="form-control" placeholder="Segundo Nombre">-->
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col">
            {!! Form::text('first_last_name', null, ['class'=>'form-control','placeholder'=>'Primer Apellido']) !!}
           <!-- <input type="text" name="first_last_name" class="form-control" placeholder="Primer Apellido">-->
         </div>
        <div class="col">
            {!! Form::text('second_last_name', null, ['class'=>'form-control','placeholder'=>'Segundo Apellido']) !!}
           <!-- <input type="text" name="second_last_name" class="form-control" placeholder="Segundo Apellido">-->
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col">
            {!! Form::text('city', null, ['class'=>'form-control','placeholder'=>'Ciudad']) !!}
          <!--  <input type="text" name="city" class="form-control" placeholder="Ciudad">-->
         </div>
        <div class="col">
            {!! Form::number('identification', null, ['class'=>'form-control','placeholder'=>'N° de Identificacion']) !!}
           <!-- <input type="text" name="identification" class="form-control" placeholder="N° de Identificacion">-->
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col">
            {!! Form::text('address', null, ['class'=>'form-control','placeholder'=>'Dirección']) !!}
          <!--  <input type="text" name="address" class="form-control" placeholder="Dirección">-->
         </div>
        <div class="col">
            {!! Form::number('telephone', null, ['class'=>'form-control','placeholder'=>'Teléfono']) !!}
         <!--   <input type="text" name="telephone" class="form-control" placeholder="Teléfono">-->
        </div>
    </div>
</div>