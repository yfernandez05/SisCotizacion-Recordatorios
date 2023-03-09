<template>
    <div>
        <step :steps="steps"></step>
        <main-content headerBgClass="bg-ligth" columnClass="col-12 col-xl-12" >
            <template v-slot:card-header-title>
                Cliente
            </template>
            <template v-slot:card-header-subtitle>
                Lista de registro de clientes
            </template>
            <template v-slot:card-header-actions>
                <a class="btn btn-outline-info btn-pill" @click="buscarCliente()" data-bs-toggle="tooltip" data-bs-placement="left" title="Buscar registros">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                        <path d="M12 21h-5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v4.5"></path>
                        <path d="M16.5 17.5m-2.5 0a2.5 2.5 0 1 0 5 0a2.5 2.5 0 1 0 -5 0"></path>
                        <path d="M18.5 19.5l2.5 2.5"></path>
                    </svg>
                    Buscar
                </a>
                <a class="btn btn-outline-danger btn-pill" @click="limpiarFiltros()" data-bs-toggle="tooltip" data-bs-placement="top" title="Limpiar resultados de busqueda">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M18 6l-12 12"></path>
                        <path d="M6 6l12 12"></path>
                    </svg>
                    Limpiar
                </a>
                <router-link :to="{name: 'spa.cliente.registrar'}" class="btn btn-outline-success btn-pill" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Crear nuevo registro">
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
                        <label class="form-label">Cliente</label>
                        <input type="text" class="form-control" placeholder="Ingrese un cliente" v-model="cliente.nombrecliente" @keyup.enter="buscarCliente()"/>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-4 ">
                        <label>&nbsp;</label>
                        <div class="row g-2 mt-1">
                            <div class="col-auto d-flex align-items-center">
                                <label class="form-colorinput form-colorinput-light">
                                    <input name="color-rounded" type="checkbox" value="white" class="form-colorinput-input" id="estado" v-model="cliente.estado" @change="buscarCliente()"/>
                                    <span class="form-colorinput-color bg-white rounded-circle"></span>
                                </label>
                                <label class="custom-control-label ps-1 cursor-pointer" for="estado">Incluir Eliminados</label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-sm table-striped table-hover table-bordered table">
                        <thead>
                            <tr>
                                <th class="p-2">Acciones</th>
                                <th class="p-2">Código</th>
                                <th class="p-2">Nombre</th>
                                <th class="p-2">Apellidos</th>
                                <th class="p-2">Documento de Identidad</th>
                                <th class="p-2">Nº Doc. Identidad</th>
                                <th class="p-2">País</th>
                                <th class="p-2">Dirección</th>
                                <th class="p-2">Telefono</th>
                                <th class="p-2">Email</th>
                                <th class="p-2">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="cli in clientes" :key="cli.codcliente">
                                <td>
                                    <row-actions :rowData="cli" @rowItemActions="rowItemActions" :activeDelete="false" :activeShow="true">
                                        <button type="button" :title="cli.isactive ? 'Desactivar':'Activar'" @click="cambiarEstado(cli)"
                                            class="btn btn-sm  waves-effect waves-light border-0 mr-1"
                                            :class="cli.isactive ? 'btn-outline-danger':'btn-outline-success'">
                                            <i class="fas fa-lg" :class="cli.isactive ? 'fa-trash':'fa-check-circle'"></i>
                                        </button>
                                    </row-actions>
                                </td>
                                <td v-text="cli.codcliente"></td>
                                <td class="text-nowrap" v-text="cli.nombrecliente"></td>
                                <td class="text-nowrap" v-text="cli.appaternocl+' '+cli.apmaternocl"></td>
                                <td v-text="cli.codtipodoc"></td>
                                <td v-text="cli.coducmento"></td>
                                <td v-text="cli.pais"></td>
                                <td class="ui-max-w-200 text-truncate" v-text="cli.direccion"></td>
                                <td v-text="cli.telefono"></td>
                                <td v-text="cli.email"></td>
                                <td>
                                    <span class="badge badge-pill py-1 px-3" :class="cli.isactive ? 'badge bg-green-lt':'badge bg-red-lt'" v-text="cli.statename" ></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <pagination-links :pagination="pagination" @changePerPage="changePerPage">
                </pagination-links>
            </template>
        </main-content>
        <modal-detail-cliente ref="modalDetailCliente"></modal-detail-cliente>
    </div>
</template>

<script>
    import MainContent from './../utils/MainContent.vue';
    import Step from './../utils/Steps.vue';
    import RowActions from './../utils/RowActions.vue';
    import PaginationLinks from './../utils/PaginationLinks';
    import ModalDetailCliente from '../modal/_ModalDetailCliente.vue';

    export default {
        data() {
            return {
                steps:[
                    {name:'Inicio', spa:'spa'},{name:'Clientes', spa:``, active:'active'},
                ],
                clientes: [],
                cliente: {
                    nombrecliente: '',
                    estado: false
                },
                pagination: {},
                filters: {},
            }

        },
        methods: {
            listarCliente() {
                showPreloader();
                let vm = this;
                axios.get(`${appApiUrl}/cliente`, {
                        params: this.filters
                })
                .then(function (response) {
                    hidePreloader();
                    vm.clientes = response.data.data;
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
                this.listarCliente();
            },
            rowItemActions(event) {
                switch (event.action) {
                    case 'show':
                        this.$nextTick(() => {
                            //console.log(event.data);
                             this.$refs.modalDetailCliente.showDetail(event.data); 
                             
                        });
                    break;
                    case 'edit':
                       this.$router.push({ name: 'spa.cliente.editar', params: { id: event.data.codcliente } }) 
                    break;
                    case 'delete':
                       this.eliminarCliente(event.data);
                       break;
                }
            },
            buscarCliente() {
                this.filters = {};
                this.filters.page = 1;

                if (this.cliente.nombrecliente.length)
                    this.filters.nombrecliente = this.cliente.nombrecliente;

                if (this.cliente.estado)
                    this.filters.estado = this.cliente.estado;    

                this.listarCliente();  
            },
            cambiarEstado(param){
                let vm = this;
                
                let optionMessage ='Eliminar';

                if(!param.isactive) optionMessage = 'Restaurar';

                swalAlertConfirm(`¿Seguro que quiere ${optionMessage} el Cliente <b>${param.nombrecliente}</b>?`, appName)
                    .then(function(optionSelected){
                        if(optionSelected.value){
                            
                        showPreloader();
                        axios.delete(`${appApiUrl}/cliente/${param.codcliente}`)
                            .then(function (response) {         
                                hidePreloader();
                                let result = response.data;

                                if (result.status) {
                                    successMessage(result.message, appName);
                                    vm.listarCliente();
                                }  else if (result.warning){
                                    warningMessage(result.message, appName);
                                    vm.listarCliente();
                                } else{
                                    errorMessage(result.message, appName);
                                }
                            })
                            .catch(function (error) {
                                hidePreloader();
                                errorMessage(appErrorMessage, appName);
                                console.log(error);
                            });
                        }
                    });
            },
             
            limpiarFiltros(){
                this.cliente.nombrecliente = '';
                this.cliente.estado = false;
                this.buscarCliente();
            }
            
        },
        mounted() {
            this.listarCliente();
        },
        components: {
            MainContent,
            Step,
            RowActions,
            PaginationLinks,
            ModalDetailCliente
        },
    }

</script>
