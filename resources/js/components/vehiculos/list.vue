<template>
<div class="row">
    <spinner v-show="loading"></spinner>
    <div class="col-sm" v-for="vehiculo in vehiculos" :key="vehiculo.id">
        <div class="card text-center" style="width: 18rem; margin-top:30px; margin-bottom:70px;">
            <div class="card-body">
                <h5 class="card-title">Vehículo</h5>

                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            Placa<br>
                            {{vehiculo.placa}}
                         </div>
                        <div class="col">
                            Color<br>
                            {{vehiculo.color}}
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            Tipo de vehículo<br>
                            {{vehiculo.tipo_vehiculo}}
                         </div>
                        <div class="col">
                            Marca<br>
                            {{vehiculo.marca}}
                        </div>
                    </div>
                </div>

            <a href="/propietario/" class="btn btn-primary">Ver más...</a>
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
                vehiculos:[],
                loading: true
            }
        },
        created(){
            EventBus.$on('vehiculo-added', data =>{
                this.vehiculos.push(data)
            })
        },
        mounted() {
            let currentRoute = window.location.pathname
            axios
            .get(`http://127.0.0.1:8000${currentRoute}/vehiculos`)
            .then((res) =>{
                this.vehiculos = res.data
                this.loading = false
            })
        }
    }
</script>
