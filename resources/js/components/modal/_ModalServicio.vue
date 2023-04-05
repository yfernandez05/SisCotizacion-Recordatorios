<template>
    <modal :showModal="showModal" @closeModal="closeModal" modalSize="modal-xl">
        <template v-slot:modal-header-title>
            Detalles del servicio #{{servicio.codservicio}}
        </template>
        <template v-slot:modal-body-main>
            <div class="row">
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-2 mb-3">
                    <label class="form-label">Cod. Servicio</label>
                    <span class="form-control text-truncate text-muted"
                        v-text="servicio.codservicio"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-2 mb-3">
                    <label class="form-label">Cod. Cliente</label>
                    <span class="form-control text-truncate text-muted"
                        v-text="servicio.codcliente"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">Cliente</label>
                    <span class="form-control text-truncate text-muted"
                        v-text="servicio.cliente.nombrecompleto"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">Agente</label>
                    <span class="form-control text-truncate text-muted"
                        v-text="servicio.user.name"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">T. Comprobante</label>
                    <span class="form-control text-truncate text-muted"
                        v-text="servicio.tipocomprobante.nombrecomprobante"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-2 mb-3">
                    <label class="form-label">Serie</label>
                    <span class="form-control text-truncate text-muted"
                        v-text="servicio.serie"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-2 mb-3">
                    <label class="form-label">Numero</label>
                    <span class="form-control text-truncate text-muted"
                        v-text="servicio.numero"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">F. Reg. Servicio</label>
                    <span class="form-control text-truncate text-muted"
                        v-text="servicio.fecha"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">F. Fin Servicio</label>
                    <span class="form-control text-truncate text-muted"
                        v-text="servicio.fechafin"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">Estado General</label>
                    <span class="badge badge-pill pt-2 px-3" 
                    v-bind:style="{background: servicio.estadoservicio.backgroundColor, color:servicio.estadoservicio.textColor}" 
                    v-text="servicio.estadoservicio.nombreestadoservicio"></span>
                </div>

                <div class="table-responsive ui-max-h-300">
                    <table id="productos" class="table table-sm table-hover table-striped table-bordered mb-2">
                        <thead class="thead-dark">
                            <tr>
                                <th class="table-dark bg-dark text-white" style="min-width: 200px;">Servicio</th>
                                <th class="table-dark bg-dark text-white" style="min-width: 30px;">URL</th>
                                <th class="table-dark bg-dark text-white" style="min-width: 150px;">Nota</th>
                                <th class="table-dark bg-dark text-white" style="min-width: 30px;">Tipo</th>
                                <th class="table-dark bg-dark text-white" style="min-width: 100px;">F. Servicio</th>
                                <th class="table-dark bg-dark text-white" style="min-width: 100px;">F. Proximo vencer</th>
                                <th class="table-dark bg-dark text-white" style="min-width: 100px;">F. Renovación.</th>
                                <!-- <th class="text-nowrap">T. Precio</th> -->
                                <th class="table-dark bg-dark text-white">Precio</th>
                                <th class="table-dark bg-dark text-white">Descuento</th>
                                <th class="table-dark bg-dark text-white">Importe</th>
                                <th class="table-dark bg-dark text-white">Estado Servicio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(detalle, index) in detalleservicios" :key="index" :item="detalle" :index="index">
                                <td v-text="detalle.tiposervicio.nombre"></td>
                                <td>
                                    <a :href="detalle.refe_url_servicio" target="_blank" v-text="detalle.refe_url_servicio"></a>
                                </td>
                                <!-- <td v-text="tipopreciodescripcion(detalle.tipoprecio)"></td> -->
                                <td v-text="detalle.notadetalle"></td>
                                <td v-text="detalle.frecuencia_recordatorio_fecha"></td>
                                <td v-text="detalle.fechainicio" class="bg-green-lt"></td>
                                <td v-text="detalle.fechaanticipo" class="bg-yellow-lt"></td>
                                <td v-text="detalle.fechafin" class="bg-red-lt"></td>
                                <td v-text="detalle.precio"></td>
                                <td v-text="detalle.descuento"></td>
                                <td v-text="detalle.importe"></td>
                                <td>
                                    <span class="badge badge-pill py-1 px-3" 
                                    v-bind:style="{background: detalle.estadoservicio.backgroundColor, color:detalle.estadoservicio.textColor}" 
                                    v-text="detalle.estadoservicio.nombreestadoservicio"></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr class="mt-1 mb-2"/>
                <div class="d-flex no-block flex-column align-items-end">
                    <div class="d-flex no-block form-group mb-1 align-items-center">
                        <label class="mb-0 me-2">Total</label>
                        <span class="d-block form-control form-control-sm ml-2 text-right font-weight-bold text-nowrap" 
                            style="width: 170px;" v-text="servicio.total"></span>
                    </div>
                </div>
                
            </div>
        </template>
    </modal>    
</template>

<script>
import Modal from './../utils/Modal';

export default {
    data(){
        return {
            showModal:false,
            servicio:{
            },
            detalleservicios:[],
        }
    },
    methods: {
        closeModal(event){
            console.log('close modal', event)
            this.showModal = false;
            this.servicio = {
            };
            this.detalleservicios = [];
        },
        showDetail(data){
            this.servicio = data;
            this.showModal = true;
             this.obtenerDetalles(this.servicio.codservicio); 
        },
        obtenerDetalles(id){
            showPreloader();

            let vm = this;
            axios.get(`${appApiUrl}/detalleservicio/${id}`)
                .then(function (response) {
                    hidePreloader();
                    if (response.data == null || response.data == '') {
                        warningMessage(`No se encontró ningún servicio con el código ${vm.servicio.idcliente}`, appName);
                    }
                    vm.detalleservicios = response.data;
                    vm.showModal = true;
                })
                .catch(function (error) {
                    hidePreloader();
                    errorMessage(appErrorMessage, appName);
                    console.log(error);
                })
        }
    },
    components:{
        Modal
    }
}
</script>

<style scoped>
.text-muted{
    min-height: 35px;
}
</style>
