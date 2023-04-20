<template>
    <modal :showModal="showModal" @closeModal="closeModal" modalSize="modal-lg">
        <template v-slot:modal-header-title>
            Editar detalle
        </template>
        <template v-slot:modal-body-main>
            <div class="row">
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">Servicio</label>
                    <span class="form-control text-truncate text-muted bg-blue-lt" disabled 
                        v-text="serviciodetalle.tiposervicio.nombre"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">Precio</label>
                    <span class="form-control  text-truncate text-muted bg-blue-lt"
                        v-text="serviciodetalle.precio"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">Descuento</label>
                    <input class="form-control  text-truncate text-muted"
                        v-model="serviciodetalle.descuento">
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">Importe</label>
                    <input class="form-control  text-truncate text-muted bg-blue-lt"
                        v-model="serviciodetalle.importe">
                </div>
                <!-- <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">Frecuenca Recordatorio</label>
                    <span class="form-control text-truncate text-muted" v-text="serviciodetalle.frecuencia_recordatorio_fecha"></span>
                </div> -->
                <div class="form-group col-12 col-sm-6 col-md-8 mb-3" >
                        <label class="form-label mb-1">Frecuencia del servicio <small class="text-danger">(*)</small></label>
                        <div class="form-selectgroup">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="icons" value="Mensual" class="form-selectgroup-input" v-model="serviciodetalle.frecuencia_recordatorio_fecha">
                                <span class="form-selectgroup-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path>
                                        <path d="M16 3v4"></path>
                                        <path d="M8 3v4"></path>
                                        <path d="M4 11h16"></path>
                                        <path d="M11 15h1"></path>
                                        <path d="M12 15v3"></path>
                                    </svg>
                                    Mensual
                                </span>
                            </label>
                            <label class="form-selectgroup-item" >
                                <input type="radio" name="icons" value="Anual" class="form-selectgroup-input" v-model="serviciodetalle.frecuencia_recordatorio_fecha">
                                <span class="form-selectgroup-label">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path>
                                        <path d="M16 3v4"></path>
                                        <path d="M8 3v4"></path>
                                        <path d="M4 11h16"></path>
                                        <path d="M11 15h1"></path>
                                        <path d="M12 15v3"></path>
                                    </svg>
                                    Anual
                                </span>
                            </label>
                            <!-- <small class="form-control-feedback" v-if="errorExists('fecha_expiracion')" v-text="showError('fecha_expiracion').errorDetail"></small> -->
                        </div>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">F. expiracion <small class="text-danger">(*)</small></label>
                    <v-date-picker class="mx-datepicker-sm" v-model="serviciodetalle.fechafin" type="datetime"
                        format="DD-MM-YYYY" value-type="format" :disabled-date="disabledBeforeToday" placeholder="Seleccione una fecha"></v-date-picker>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-8 mb-3">
                    <label class="form-label">URL Referencial</label>
                    <input class="form-control text-truncate text-muted" v-model="serviciodetalle.refe_url_servicio">
                </div>
                <div class="form-group form-group-sm col-12 mb-3">
                    <label class="form-label">Nota Adicional</label>
                    <textarea class="form-control text-truncate text-muted" v-model="serviciodetalle.notadetalle" rows="2"></textarea>
                </div>
  
            </div>
        </template>
        <template v-slot:modal-body-actions>
            <div>
                <button type="button" class="btn btn-outline-success btn-pill" @click="doSaveData">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy icon-tada" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                        <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                        <path d="M14 4l0 4l-6 0l0 -4"></path>
                    </svg>
                    Guardar
                </button>
            </div>
        </template>        
    </modal>    
</template>

<script>
import Modal from './../utils/ModalEditServices';
import VDatePicker from 'vue2-datepicker';
import moment, {now} from 'moment';

export default {
    data(){
        return {
            showModal:false,
            serviciodetalle:{
            },
            atenciones:[],
            position: null,
        }
    },
    methods: {
        closeModal(event){
           // console.log('close modal', event)
            this.showModal = false;
            this.serviciodetalle = {};
            this.position = null;
        },
        showDetail(data,rowIndex){
            this.serviciodetalle = data;
            this.position = rowIndex;
            this.showModal = true;
            //console.log('Abierto');
        },

        doSaveData() {
            /* if (this.validateFields().length > 0) {
                return;
            } */

            // Emitir el evento con los datos modificados
            this.serviciodetalle.importe = this.importeDetalleServicio(this.serviciodetalle.precio, this.serviciodetalle.descuento)
            this.serviciodetalle.fechaanticipo = moment(this.serviciodetalle.fechafin, 'DD-MM-YYYY').subtract(2, 'days').format('DD-MM-YYYY');

            //console.log(this.serviciodetalle, this.position);
            this.$emit('updateDataServices', this.serviciodetalle, this.position);
            this.closeModal(false);

            //hiden modal
            var modal = document.getElementById("modal-detail-3");
            modal.style.display = "none";
            var modalfade = document.querySelector(".modal-backdrop.fade.show");
            modalfade.remove();

        },
        importeDetalleServicio(base, descuento){
            let importe = (base - descuento);
            //console.log(importe);
            return importe;
        },
        disabledBeforeToday(date) {
            const today = new Date();
            const yesterday = new Date(today.getFullYear(), today.getMonth(), today.getDate() - 0);
            return date < yesterday;
        }
    },
    components:{
        Modal,
        VDatePicker
    },
    /* computed: {
     
        disabledBeforeTodayAndAfterAWeek(date) {
            const today = new Date()
            const nextWeek = new Date(today.getTime() + (7 * 24 * 60 * 60 * 1000))
            return date < today || date > nextWeek
        }

    }, */
}
</script>

<style scoped>
.text-muted{
    min-height: 35px;
}
</style>
