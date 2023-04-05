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
                    <div class="form-group col-12 col-sm-6 mb-3" :class="{'has-danger':errorExists('nombre')}">
                        <label class="form-label">Documento Identidad <small class="text-danger">(*)</small></label>
                        <input type="text" class="form-control" v-model="tipodocumento.nombre"/>
                        <small class="form-control-feedback" v-if="errorExists('nombre')" v-text="showError('nombre').errorDetail"></small>
                    </div>                    
                </div>

                <!-- <hr class="mt-2"> -->
            </template>

            <template v-slot:card-body-actions>
                <router-link :to="{name: 'spa.tipodocumento'}" class="btn btn-outline btn-pill mr-2">
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


    export default {
        props: {
            steps: {
                default:Object,
            },
            cardTitle: {
                default: 'Documento de Identidad'
            },
            cardSubTitle: {
                default: 'Información para Editar'
            },
            tipodocumento: {
                type: Object,
                default: function () {
                    return {
                        nombre: ''
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
                let tipoDocuemntoData = {
                    nombre: this.tipodocumento.nombre,
                }
                this.$emit('saveData', tipoDocuemntoData);
            },
            validateFields() {
                this.errors = [];

                if (!this.tipodocumento.nombre) {
                    this.setError('nombre', 'El campo nombre documento es obligatorio');
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
        }
    }

</script>
