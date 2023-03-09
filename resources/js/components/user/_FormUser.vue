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
                    <div class="form-group col-12 col-sm-6 mb-3" :class="{'has-danger':errorExists('idrol')}">
                        <label class="form-label">Rol <small class="text-danger">(*)</small></label>
                        <select2 :options="roles" v-model="user.idrol" :selectValue="user.idrol"
                            placeholder="Seleccione Un rol" keyProperty="idrol" textProperty="rol">
                        </select2>
                        <small class="form-control-feedback" v-if="errorExists('idrol')"
                            v-text="showError('idrol').errorDetail"></small>
                    </div> 
                    <div class="form-group col-12 col-sm-6 mb-3" :class="{'has-danger':errorExists('name')}">
                        <label class="form-label">Nombres <small class="text-danger">(*)</small></label>
                        <input type="text" class="form-control" v-model="user.name" placeholder="Nombres"/>
                        <small class="form-control-feedback" v-if="errorExists('name')"
                            v-text="showError('name').errorDetail"></small>
                    </div>
                    <div class="form-group col-12 col-sm-6 mb-3" :class="{'has-danger':errorExists('email')}">
                        <label class="form-label">Email <small class="text-danger">(*)</small></label>
                        <input type="text" class="form-control" v-model="user.email" placeholder="Email"/>
                        <small class="form-control-feedback" v-if="errorExists('email')"
                            v-text="showError('email').errorDetail"></small>
                    </div>

                    <div class="form-group col-12 col-sm-6 mb-3" :class="{'has-danger':errorExists('password')}"
                        v-if="showPasswordField">
                        <label class="form-label">Password <small class="text-danger">(*)</small></label>
                        <input type="text" class="form-control" v-model="user.password" />
                        <small class="form-control-feedback" v-if="errorExists('password')"
                            v-text="showError('password').errorDetail"></small>
                    </div>
                    <div class="form-group col-12 col-sm-6 mb-3" :class="{'has-danger':errorExists('password_confirmation')}"
                        v-if="showPasswordField">
                        <label class="form-label">Confirmar Password <small class="text-danger">(*)</small></label>
                        <input type="text" class="form-control" v-model="user.password_confirmation" />
                        <small class="form-control-feedback" v-if="errorExists('password_confirmation')"
                            v-text="showError('password_confirmation').errorDetail"></small>
                    </div>
                </div>

                <!-- <hr class="mt-2"> -->
            </template>

            <template v-slot:card-body-actions>
                <router-link :to="{name: 'spa.user'}" class="btn btn-outline btn-pill mr-2">
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
    import Select2 from './../utils/Select2';


    export default {
        props: {
            steps: {
                default:Object,
            },
            cardTitle: {
                default: 'user'
            },
            cardSubTitle: {
                default: 'Información para Editar'
            },
            user: {
                type: Object,
                // a factory function
                default: function () {
                    return {
                        name: '',
                        email: '',
                        password: '',
                        password_confirmation: ''
                    }
                }
            },
            showPasswordField: {
                type: Boolean,
                default: true
            },
            loadingholder:Boolean,

        },
        data() {
            return {
                roles: [],
                /* cuentas: [], */
                errors: [],                
            }
        },
        methods: {
            listarRoles() {
                let vm = this;
                axios.get(`${appApiUrl}/rol/select`)
                    .then(function (response) {
                        vm.roles = response.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    })
            },
            /* listarCuentas() {
                let vm = this;
                axios.get(`${appApiUrl}/cuenta/select`)
                    .then(function (response) {
                        vm.cuentas = response.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    })
            }, */
            doSaveData() {

                if (this.validateFields().length > 0) {
                    return;
                }

                let userData = {
                    name: this.user.name,
                    email: this.user.email,
                    //password:this.user.password,
                    idrol: this.user.idrol,
                    api_token: this.user.api_token,
                    /* idcuenta: this.user.idcuenta */
                };

                if (this.showPasswordField)
                    userData.password = this.user.password;

                this.$emit('saveData', userData);
            },
            validateFields() {
                this.errors = [];

                if (!this.user.idrol) {
                    this.setError('idrol', 'El campo Rol es obligatorio');
                }

                /* if (!this.user.idcuenta) {
                    this.setError('idcuenta', 'El campo Empresa es obligatorio');
                } */

                if (!this.user.name) {
                    this.setError('name', 'El campo Nombre es obligatorio');
                }
                if (!this.user.email) {
                    this.setError('email', 'El campo Email es obligatorio');
                }


                if (this.showPasswordField) {

                    if (!this.user.password) {
                        this.setError('password', 'El campo password es obligatorio');
                    }

                    if (!this.user.password_confirmation) {
                        this.setError('password_confirmation', 'El campo confirmar password es obligatorio');
                    }

                    if (this.user.password != this.user.password_confirmation) {
                        this.setError('password_confirmation', 'Los passwords no coinciden');
                    }
                }


                return this.errors;
            },
            setError(keyModel, errorDetail) {
                this.errors.push({
                    keyModel: keyModel,
                    errorDetail: errorDetail
                });
            },
            errorExists(keyModel) {
                return this.errors.filter(err => err.keyModel === keyModel).length;
            },
            showError(keyModel) {
                return this.errors.find(err => err.keyModel === keyModel);
            },
        },
        mounted() {
            this.listarRoles();
            /* this.listarCuentas(); */
        },
        components: {
            Step,
            placeholderCardForm,
            MainContent,
            Select2
        }
    }

</script>
