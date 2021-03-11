<template>
<div class="modal fade" id="addVehiculo" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Vehículo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form @submit.prevent="saveVehiculo">
	        <div class="form-group">
			    <label>Placa</label>
			    <input type="text" class="form-control" v-model="placa" placeholder="Ingresa la placa del vehículo">
		  	</div>
		  	<div class="form-group">
			    <label>Marca</label>
			    <input type="text" class="form-control" v-model="marca" placeholder="Ingresa la marca del vehículo" >
		  	</div>
              	        <div class="form-group">
			    <label>Color</label>
			    <input type="text" class="form-control" v-model="color" placeholder="Ingresa el color del vehículo">
		  	</div>
		  	<div class="form-group">
			    <label>Tipo de vehiculo</label>
			    <select v-model="tipo_vehiculo" class="form-control">
                    <option value="Publico"> Publico </option>
                    <option value="Privado"> Privado </option>
                </select>
		  	</div>
		  	<button type="submit" class="btn btn-primary">Guardar</button>
	  	</form>
      </div>
    </div>
  </div>
</div>
</template>

<script>
import EventBus from '../../event-bus';
    export default {
        data(){
            return{
                placa: null,
                marca: null,
                color: null,
                tipo_vehiculo: null
            }
        },
        methods:{
            saveVehiculo: function(){
              let currentRoute = window.location.pathname
                axios.post(`http://127.0.0.1:8000${currentRoute}/vehiculos`, {
                    placa: this.placa,
                    marca: this.marca,
                    color: this.color,
                    tipo_vehiculo: this.tipo_vehiculo
                })
                .then(function(res){
                    console.log(res)
                    $('#addVehiculo').modal('hide')
                    EventBus.$emit('vehiculo-added', res.data.vehiculo)
                })
                .catch(function(err){
                    console.log(err)
                });
            }
        }
    }
</script>
