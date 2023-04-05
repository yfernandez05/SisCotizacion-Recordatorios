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
                    <div class="form-group col-12 col-sm-6 mb-3" :class="{'has-danger':errorExists('nombreestadoservicio')}">
                        <label class="form-label">Estado de Servicio <small class="text-danger">(*)</small></label>
                        <input type="text" class="form-control" v-model="estadoservicio.nombreestadoservicio"/>
                        <small class="form-control-feedback" v-if="errorExists('nombreestadoservicio')" v-text="showError('nombreestadoservicio').errorDetail"></small>
                    </div>
                    <div class="form-group col-12 col-sm-6 mb-3" :class="{'has-danger':errorExists('codtipoestadoservicio')}">
                        <label class="form-label mb-1">Tipo de Estado <small class="text-danger">(*)</small></label>
                        <select2 class="form-control-sm" :options="tipoestadoservicios" v-model="estadoservicio.codtipoestadoservicio" :selectValue="estadoservicio.codtipoestadoservicio"
                            placeholder="Seleccione un tipo de estado" keyProperty="codtipoestadoservicio" textProperty="nombre">
                        </select2>
                        <small class="form-control-feedback" v-if="errorExists('codtipoestadoservicio')"
                            v-text="showError('codtipoestadoservicio').errorDetail"></small>
                    </div> 
                    <div class="form-group col-12 mb-3" :class="{'has-danger':errorExists('descripcion')}">
                        <label class="form-label">Descripción </label>
                        <textarea type="text" class="form-control" v-model="estadoservicio.descripcion" rows="2"></textarea>
                        <small class="form-control-feedback" v-if="errorExists('descripcion')" v-text="showError('descripcion').errorDetail"></small>
                    </div>                  
                </div>
                <hr class="mt-2">
                <div class="form-group col-12 col-sm-12" >
                    <label><small>Opciones adicionales:</small></label><br>

                    <label>Seleccione color de fondo: &nbsp;</label>
                    <v-input-colorpicker v-model="estadoservicio.backgroundColor"/> &nbsp; &nbsp;
                    <!-- <input type="text" class="form-control" v-model="estadopago.backgroundColor"/> -->

                    <label>Seleccione color de texto: &nbsp;</label>
                    <v-input-colorpicker v-model="estadoservicio.textColor"/>
                    <!-- <input type="text" class="form-control" v-model="estadopago.textColor"/> -->
                </div>
                <div class="form-group col-12 col-sm-12" >
                    <label><small>Vista previa:</small></label><br>
                    <h4><span v-bind:style="{background: estadoservicio.backgroundColor, color:estadoservicio.textColor}" class="badge badge-pill badge-lg mb-3" v-text="estadoservicio.nombreestadoservicio"></span></h4>
                </div>

                <!-- <hr class="mt-2"> -->
            </template>

            <template v-slot:card-body-actions>
                <router-link :to="{name: 'spa.estadoservicio'}" class="btn btn-outline btn-pill mr-2">
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
    import VInputColorpicker from 'vue-native-color-picker';
    import Select2 from './../utils/Select2';

    export default {
        props: {
            steps: {
                default:Object,
            },
            cardTitle: {
                default: 'Estado de Servicio'
            },
            cardSubTitle: {
                default: 'Información para Editar'
            },
            estadoservicio: {
                type: Object,
                default: function () {
                    return {
                        nombreestadoservicio: '',
                        descripcion: '',
                        backgroundColor: '#d3d3d3',
                        textColor: '#000',
                        codtipoestadoservicio: '',
                    }
                }
            },
            loadingholder:Boolean,
        },
        data() {
            return {
                errors: [],
                tipoestadoservicios:[],
            }
        },
        methods: {
            doSaveData() {
                if (this.validateFields().length > 0) {
                    return;
                }
                let estadoservicioData = {
                    nombreestadoservicio: this.estadoservicio.nombreestadoservicio,
                    descripcion: this.estadoservicio.descripcion,
                    backgroundColor: this.estadoservicio.backgroundColor,
                    textColor: this.estadoservicio.textColor,
                    codtipoestadoservicio: this.estadoservicio.codtipoestadoservicio
                }
                this.$emit('saveData', estadoservicioData);
            },
            validateFields() {
                this.errors = [];

                if (!this.estadoservicio.nombreestadoservicio) {
                    this.setError('nombreestadoservicio', 'El campo Estado de servicio es obligatorio');
                }
                /* if (!this.servicio.precio) {
                    this.setError('precio', 'El campo descripcion es obligatorio');
                } */

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

            listarTipoEstadoServicio() {
                let vm = this;
                axios.get(`${appApiUrl}/tipoestadoservicio`)
                .then(function (response) {
                    vm.tipoestadoservicios = response.data.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
        },
        created(){
            this.listarTipoEstadoServicio();
        },
        components: {
            Step,
            placeholderCardForm,
            MainContent,
            VInputColorpicker,
            Select2
        }
    }

</script>

<style scoped>
input.icp__input {
    border: 2px solid #333a40 !important;
}
</style>