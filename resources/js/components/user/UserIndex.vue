<template>
    <div>
        <step :steps="steps"></step>
        <main-content headerBgClass="bg-ligth" columnClass="col-12 col-xl-12" >
            <template v-slot:card-header-title>
                Usuario
            </template>
            <template v-slot:card-header-subtitle>
                Lista de usuarios registrados
            </template>
            <template v-slot:card-header-actions>
                <a class="btn btn-outline-info btn-pill" @click="buscarUser()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                        <path d="M12 21h-5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v4.5"></path>
                        <path d="M16.5 17.5m-2.5 0a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0"></path>
                        <path d="M18.5 19.5l2.5 2.5"></path>
                    </svg>
                    Buscar
                </a>
                <a class="btn btn-outline-danger btn-pill" @click="limpiarFiltros()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M18 6l-12 12"></path>
                        <path d="M6 6l12 12"></path>
                    </svg>
                    Limpiar
                </a>
                <router-link :to="{name: 'spa.user.registrar'}" class="btn btn-outline-success btn-pill">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M12 5l0 14"></path>
                        <path d="M5 12l14 0"></path>
                    </svg>
                    Nuevo
                </router-link>           
            </template>

            <template v-slot:card-body-main>
                <div class="row mb-2">
                    <div class="form-group col-12 col-sm-6 col-md-4 col-xl-3 mb-3">
                        <label class="form-label">Nombres</label>
                        <input type="text" class="form-control" placeholder="Ingrese un nombre" v-model="user.name" @keyup.enter="buscarUser" />
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-4 col-xl-3 mb-3">
                        <label class="form-label">Rol</label>
                        <select2 :options="rol" @input="buscarUser" v-model="user.idrol"
                            :selectValue="user.idrol" placeholder="Seleccione un Rol" keyProperty="idrol"
                            textProperty="rol">
                        </select2>
                    </div>

                </div>

                <div class="table-responsive">
                    <table class="table table-sm table-striped table-hover table-bordered table">
                        <thead>
                            <tr>
                                <th class="p-2">Acciones</th>
                                <th class="p-2">Codigo</th>
                                <th class="p-2">Nombre</th>
                                <th class="p-2">Email</th>
                                <th class="p-2">Api_Token</th>
                                <th class="p-2">Rol</th>
                                <th class="p-2">Estado</th>
                        

                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="use in users" :key="use.id">
                                <td>
                                    <row-actions :rowData="use" @rowItemActions="rowItemActions" :activeDelete="false" :activeShow="false">
                                        <toggle-button :labels="true" :width="85" :value="!use.isactive" @change="cambiarEstado(use)" class="mb-0"
                                            :color="{checked: '#e46a76', unchecked: '#00c292'}">
                                            <template slot="checked">
                                                <span>Eliminado</span>
                                            </template>
                                            <template slot="unchecked">
                                                <span>Activado</span>
                                            </template>
                                        </toggle-button>                     
                                    </row-actions> 
                                </td> 
                                <td v-text="use.id"></td>
                                <td v-text="use.name" class="ui-max-w-300 text-truncate"></td>
                                <td v-text="use.email"></td>
                                <td v-text="use.api_token"></td>
                                <td v-text="use.rol.rol"></td>
                                <td>
                                    <span class="badge badge-pill py-1 px-3" :class="use.isactive ? 'bg-lime':'bg-red'"
                                        v-text="use.statename" ></span>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <pagination-links :pagination="pagination" @changePerPage="changePerPage">
                </pagination-links>
            </template>
        </main-content>
    </div>

</template>

<script>
    import MainContent from './../utils/MainContent.vue';
    import Step from './../utils/Steps.vue';
    import RowActions from './../utils/RowActions.vue';
    import Select2 from './../utils/Select2.vue';
    import PaginationLinks from './../utils/PaginationLinks';
    import { ToggleButton } from 'vue-js-toggle-button';

    export default {
        data() {
            return {
                steps:[
                    {name:'Inicio', spa:'spa'},{name:'Usuario', spa:``, active:'active'},
                ],
                user: {
                    name:'',
                    idrol:0,
                },
                users: [],
                filters: {},
                pagination: {},
                rol: []
            }

        },
        methods: {
            listarUser() {
                showPreloader();

                let vm = this;
                axios.get(`${appApiUrl}/user`, {
                        params: this.filters
                    })
                    .then(function (response) {

                        hidePreloader();
                        vm.users = response.data.data;
                        vm.pagination = response.data;
                        delete vm.pagination.data;
                    })
                    .catch(function (error) {
                        hidePreloader();
                        console.log(error);
                    });
            },
            changePerPage(event) {
                this.filters.page = event.page;
                this.filters.perpage = event.perpage;

                this.listarUser();
            },
            buscarUser() {
                this.filters = {};
                this.filters.page = 1;

                if (this.user.name.length)
                    this.filters.name = this.user.name;

                if (this.user.idrol.length)
                    this.filters.idrol = this.user.idrol;
                
                this.listarUser();
            },
            listarRoles() {
                let vm = this;
                axios.get(`${appApiUrl}/rol/select`)
                    .then(function (response) {
                        vm.rol = response.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    })
            },
            rowItemActions(event) {
                switch (event.action) {
                    case 'edit':
                       this.$router.push({
                           name: 'spa.user.editar',
                          params: {
                            id: event.data.id
                           }
                        })
                        break;
                }
            },
            limpiarFiltros() {
                this.user= {
                    name:'',
                    idrol:0
                };

                this.buscarUser();
            },
            cambiarEstado(param){
                let vm = this;

                showPreloader();
                axios.delete(`${appApiUrl}/user/${param.id}`)
                    .then(function (response) {         
                        hidePreloader();
                        let result = response.data;

                        if (result.status) {
                            successMessage(result.message, appName);
                            vm.listarUser();
                        } else
                            errorMessage(result.message, appName);
                    })
                    .catch(function (error) {
                        hidePreloader();
                        errorMessage(appErrorMessage, appName);
                        vm.listarUser();
                        console.log(error);
                    });

            }
        },
        mounted() {
            this.listarUser();
            this.listarRoles();
            //console.log(process.env.MIX_APP_DEBUG);
        },
        components: {
            MainContent,
            Step,
            RowActions,
            Select2,
            PaginationLinks,
            ToggleButton,
        },
    }

</script>
