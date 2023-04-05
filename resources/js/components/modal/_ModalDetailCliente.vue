<template>
    <modal :showModal="showModal" @closeModal="closeModal" modalSize="modal-lg">
        <template v-slot:modal-header-title>
            Detalles del regsitro #{{cliente.codcliente}}
        </template>
        <template v-slot:modal-body-main>
            <div class="row">
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">Nombres</label>
                    <span class="form-control text-truncate text-muted"
                        v-text="cliente.nombrecliente"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">Ape. Paterno</label>
                    <span class="form-control  text-truncate text-muted"
                        v-text="cliente.appaternocl"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">Ape. Materno</label>
                    <span class="form-control  text-truncate text-muted"
                        v-text="cliente.apmaternocl"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">T. Doc. Identidad</label>
                    <span class="form-control text-truncate text-muted" v-text="cliente.tipodocumento.nombre"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">Nº Doc. Identidad</label>
                    <span class="form-control text-truncate text-muted" v-text="cliente.coducmento"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">País</label>
                    <span class="form-control text-truncate text-muted" v-text="cliente.pais"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">Dirección</label>
                    <span class="form-control text-truncate text-muted" v-text="cliente.direccion"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">Telefono</label>
                    <span class="form-control text-truncate text-muted" v-text="cliente.telefono"></span>
                </div>
                <div class="form-group form-group-sm col-12 col-sm-6 col-md-4 mb-3">
                    <label class="form-label">Email</label>
                    <span class="form-control text-truncate text-muted" v-text="cliente.email"></span>
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
            cliente:{
            },
            atenciones:[],
        }
    },
    methods: {
        closeModal(event){
            console.log('close modal', event)
            this.showModal = false;
            this.cliente = {
            };
            this.atenciones = [];
        },
        showDetail(data){
            this.cliente = data;
            this.showModal = true;
            /* this.obtenerAtenciones(this.cliente.codtipodoc); */
        },
        /* obtenerAtenciones(id){
            showPreloader();

            let vm = this;
            axios.get(`${appApiUrl}/atencion/detail/${id}`)
                .then(function (response) {
                    hidePreloader();
                    if (response.data == null || response.data == '') {
                        warningMessage(`No se encontró ningúna atencion con el código ${vm.cliente.idcliente}`, appName);
                    }
                    vm.atenciones = response.data;
                    vm.showModal = true;
                })
                .catch(function (error) {
                    hidePreloader();
                    errorMessage(appErrorMessage, appName);
                    console.log(error);
                })
        } */
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
