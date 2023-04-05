<template>
    <div>     
        <step :steps="steps" columnClass="col-md-10 col-lg-8 col-xl-9"></step>
        
        <placeholder-card-form :loadingholder="loadingholder" >
        </placeholder-card-form>  

        <main-content columnClass="col-12 col-md-10 col-lg-8 col-xl-9" colorTitle="text-white" v-if="!loadingholder">
            <template v-slot:card-header-title>
                <span v-text="cardTitle"></span>
            </template>
            <template v-slot:card-header-subtitle>
                <span v-text="cardSubTitle"></span>
            </template>

            <template v-slot:card-body-main>
                <div class="row row-cards">
                    <div class="form-group col-12 col-sm-6 col-md-4 mb-3" :class="{'has-danger':errorExists('nombrecliente')}">
                        <label class="form-label">Nombre <small class="text-danger">(*)</small></label>
                        <input type="text" class="form-control" v-model="cliente.nombrecliente"/>
                        <small class="form-control-feedback" v-if="errorExists('nombrecliente')" v-text="showError('nombrecliente').errorDetail"></small>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-4 mb-3" :class="{'has-danger':errorExists('appaternocl')}">
                        <label class="form-label">Apellido Paterno </label>
                        <input type="text" class="form-control" v-model="cliente.appaternocl">
                        <small class="form-control-feedback" v-if="errorExists('appaternocl')" v-text="showError('appaternocl').errorDetail"></small>
                    </div>                  
                    <div class="form-group col-12 col-sm-6 col-md-4 mb-3" :class="{'has-danger':errorExists('apmaternocl')}">
                        <label class="form-label">Apellido Materno </label>
                        <input type="text" class="form-control" v-model="cliente.apmaternocl">
                        <small class="form-control-feedback" v-if="errorExists('apmaternocl')" v-text="showError('apmaternocl').errorDetail"></small>
                    </div>                  
                    <div class="form-group col-12 col-sm-6 col-md-4 mb-3" :class="{'has-danger':errorExists('coducmento')}">
                        <label class="form-label">N° Doc. Identidad </label>
                        <input type="text" class="form-control" v-model="cliente.coducmento">
                        <small class="form-control-feedback" v-if="errorExists('coducmento')" v-text="showError('coducmento').errorDetail"></small>
                    </div>                  
                    <div class="form-group col-12 col-sm-6 col-md-4 mb-3" :class="{'has-danger':errorExists('pais')}">
                        <label class="form-label">País</label>
                        <input type="text" class="form-control" v-model="cliente.pais">
                        <small class="form-control-feedback" v-if="errorExists('pais')" v-text="showError('pais').errorDetail"></small>
                    </div>                  
                    <div class="form-group col-12 col-sm-6 col-md-4 mb-3" :class="{'has-danger':errorExists('direccion')}">
                        <label class="form-label">Dirección</label>
                        <input type="text" class="form-control" v-model="cliente.direccion">
                        <small class="form-control-feedback" v-if="errorExists('direccion')" v-text="showError('direccion').errorDetail"></small>
                    </div>                  
                    <div class="form-group col-12 col-sm-6 col-md-4 mb-3" :class="{'has-danger':errorExists('telefono')}">
                        <label class="form-label">Telefono</label>
                        <input type="text" class="form-control" v-model="cliente.telefono">
                        <small class="form-control-feedback" v-if="errorExists('telefono')" v-text="showError('telefono').errorDetail"></small>
                    </div>                  
                    <div class="form-group col-12 col-sm-6 col-md-4 mb-3" :class="{'has-danger':errorExists('email')}">
                        <label class="form-label">Email <small class="text-danger">(*)</small></label>
                        <input type="text" class="form-control" v-model="cliente.email">
                        <small class="form-control-feedback" v-if="errorExists('email')" v-text="showError('email').errorDetail"></small>
                    </div>                  
                </div>

                <!-- <hr class="mt-2"> -->
            </template>

            <template v-slot:card-body-actions>
                <router-link :to="{name: 'spa.cliente'}" class="btn btn-outline btn-pill mr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-x icon icon-pulse" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                        <path d="M10 10l4 4m0 -4l-4 4"></path>
                    </svg>
                    <span class="button-text">Cancelar</span>
                </router-link>

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
                    <!-- <button type="reset" class="btn btn-outline-secondary btn-pill ml-2">
                        <i class="fa fa-window-close"></i> <span class="button-text">Cancelar</span>
                    </button> -->
                </div>
            </template>

        </main-content>
    </div>
</template>

<script>
    import placeholderCardForm from './../utils/PlaceholderCardForm.vue';
    import Step from './../utils/Steps.vue';
    import MainContent from './../utils/MainContent';
    import VueNumeric from 'vue-numeric';

    export default {
        props: {
            steps: {
                default:Object,
            },
            cardTitle: {
                default: 'Cliente'
            },
            cardSubTitle: {
                default: 'Información para Crear'
            },
            cliente: {
                type: Object,
                default: function () {
                    return {
                        nombre: '',
                        nombrecliente: '',
                        apmaternocl: '',
                        tipodocumento: '',
                        coducmento: '',
                        pais: '',
                        direccion: '',
                        telefono: '',
                        email: '',
                    }
                }
            },
            loadingholder:Boolean,
        },
        data() {
            return {
                errors: [],
            }
        },
        methods: {
            doSaveData() {
                if (this.validateFields().length > 0) {
                    return;
                }
                let clienteData = {
                    nombrecliente: this.cliente.nombrecliente,
                    appaternocl: this.cliente.appaternocl,
                    apmaternocl: this.cliente.apmaternocl,
                    tipodocumento: this.cliente.tipodocumento,
                    coducmento: this.cliente.coducmento,
                    pais: this.cliente.pais,
                    direccion: this.cliente.direccion,
                    telefono: this.cliente.telefono,
                    email: this.cliente.email,
                }
                this.$emit('saveData', clienteData);
            },
            validateFields() {
                this.errors = [];

                if (!this.cliente.nombrecliente) {
                    this.setError('nombrecliente', 'El campo nombre de cliente es obligatorio');
                }
                if (!this.cliente.email) {
                    this.setError('email', 'El campo Email es obligatorio');
                }

                return this.errors;
            },
            setError(keyModel, errorDetail) {
                this.errors.push({
                    keyModel: keyModel,
                    errorDetail: errorDetail
                });
            },
            errorExists(keyModel){
                return this.errors.filter(err => err.keyModel === keyModel).length;
            },
            showError(keyModel){
                return this.errors.find(err => err.keyModel === keyModel);
            },
        },
        components: {
            Step,
            placeholderCardForm,
            MainContent,
            VueNumeric,
        }
    }

</script>
