<template>
    <modal :showModal="showModal" @closeModal="closeModal" modalSize="modal-lg">
        <template v-slot:modal-header-title>
            Detalles del regsitro #
        </template>
        <template v-slot:modal-body-main>
            <div class="row">
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">Servicio</label>
                    <span class="form-control text-truncate text-muted"
                        v-text="serviciodetalle.tiposervicio.nombre"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">Precio</label>
                    <span class="form-control  text-truncate text-muted"
                        v-text="serviciodetalle.precio"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">Descuento</label>
                    <span class="form-control  text-truncate text-muted"
                        v-text="serviciodetalle.descuento"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">Importe</label>
                    <span class="form-control  text-truncate text-muted"
                        v-text="serviciodetalle.importe"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">Frecuenca Recordatorio</label>
                    <span class="form-control text-truncate text-muted" v-text="serviciodetalle.frecuencia_recordatorio_fecha"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">F. Contratación</label>
                    <span class="form-control text-truncate text-muted" v-text="serviciodetalle.fechainicio"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">F. Anticipo</label>
                    <span class="form-control text-truncate text-muted" v-text="serviciodetalle.fechaanticipo"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">F. Cierre</label>
                    <span class="form-control text-truncate text-muted" v-text="serviciodetalle.fechafin"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-8 mb-3">
                    <label class="form-label">URL Referencial</label>
                    <span class="form-control text-truncate text-muted" v-text="serviciodetalle.refe_url_servicio"></span>
                </div>
                <div class="form-group form-group-sm col-12 mb-3">
                    <label class="form-label">Nota Adicional</label>
                    <textarea class="form-control text-truncate text-muted" v-text="serviciodetalle.notadetalle" rows="2" readonly></textarea>
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
            serviciodetalle:{
            },
            atenciones:[],
        }
    },
    methods: {
        closeModal(event){
            console.log('close modal', event)
            this.showModal = false;
            this.serviciodetalle = {
            };
        },
        showDetail(data){
            this.serviciodetalle = data;
            this.showModal = true;
        },
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
