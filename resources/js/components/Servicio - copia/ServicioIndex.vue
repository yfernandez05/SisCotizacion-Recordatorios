<template>
    <div>
        <step :steps="steps"></step>
        <main-content headerBgClass="bg-ligth" columnClass="col-12 col-xl-12" >
            <template v-slot:card-header-title>
                Servicios
            </template>
            <template v-slot:card-header-subtitle>
                Lista con servicios realizados
            </template>
            <template v-slot:card-header-actions>
                <a class="btn btn-outline-info btn-pill" @click="buscarServicio()" data-bs-toggle="tooltip" data-bs-placement="left" title="Buscar registros">
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
                <router-link :to="{name: 'spa.servicio.registrar'}" class="btn btn-outline-success btn-pill" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Crear nuevo registro">
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
                        <label class="form-label">Numero</label>
                        <input type="text" class="form-control" placeholder="Ingrese un numero de servicio" v-model="servicio.nombre" @keyup.enter="buscarServicio()"/>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-4 ">
                        <label>&nbsp;</label>
                        <div class="row g-2 mt-1">
                            <div class="col-auto d-flex align-items-center">
                                <label class="form-colorinput form-colorinput-light">
                                    <input name="color-rounded" type="checkbox" value="white" class="form-colorinput-input" id="estado" v-model="servicio.estado" @change="buscarServicio()"/>
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
                                <th class="p-2">Cliente</th>
                                <th class="p-2">Agente de servicio</th>
                                <th class="p-2">Comprobante</th>
                                <th class="p-2">Estado de servicio</th>
                                <th class="p-2">Serie</th>
                                <th class="p-2">Numero</th>
                                <th class="p-2">F. Servicio</th>
                                <th class="p-2">F. Fin Servicio</th>
                                <th class="p-2">Total</th>
                                <th class="p-2">Estado de registro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="servi in servicios" :key="servi.codservicio">
                                <td>
                                    <row-actions :rowData="servi" @rowItemActions="rowItemActions" :activeDelete="false" :activeShow="true">
                                        <button type="button" :title="servi.isactive ? 'Desactivar':'Activar'" @click="cambiarEstado(servi)"
                                            class="btn btn-sm  waves-effect waves-light border-0 mr-1"
                                            :class="servi.isactive ? 'btn-outline-danger':'btn-outline-success'">
                                            <i class="fas fa-lg" :class="servi.isactive ? 'fa-trash':'fa-check-circle'"></i>
                                        </button>
                                    </row-actions>
                                </td>
                                <td v-text="servi.codservicio"></td>
                                <td v-text="servi.cliente.nombrecompleto"></td>
                                <td v-text="servi.user.name"></td>
                                <td v-text="servi.tipocomprobante.nombrecomprobante"></td>
                                <td><span class="badge badge-pill py-1 px-3" v-bind:style="{background: servi.estadoservicio.backgroundColor, color:servi.estadoservicio.textColor}" v-text="servi.estadoservicio.nombreestadoservicio"></span></td>
                                <td v-text="servi.serie"></td>
                                <td v-text="servi.numero"></td>
                                <td v-text="servi.fecha"></td>
                                <td v-text="servi.fechafin"></td>
                                <td v-text="servi.total"></td>
                                <td>
                                    <span class="badge badge-pill py-1 px-3" :class="servi.isactive ? 'badge bg-green-lt':'badge bg-red-lt'" v-text="servi.statename" ></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <pagination-links :pagination="pagination" @changePerPage="changePerPage">
                </pagination-links>
            </template>
        </main-content>
        <modal-servicio ref="modalServicio"></modal-servicio>
    </div>
</template>

<script>
    import MainContent from './../utils/MainContent.vue';
    import Step from './../utils/Steps.vue';
    import RowActions from './../utils/RowActions.vue';
    import PaginationLinks from './../utils/PaginationLinks';
    import ModalServicio from '../modal/_ModalServicio.vue';

    export default {
        data() {
            return {
                steps:[
                    {name:'Inicio', spa:'spa'},{name:'Servicios Realizados', spa:``, active:'active'},
                ],
                servicios: [],
                pagination: {},
                filters: {},
                servicio: {
                    nombre: '',
                    estado: false
                }
            }

        },
        methods: {
            listarServicios() {
                showPreloader();
                let vm = this;
                axios.get(`${appApiUrl}/servicio`, {
                        params: this.filters
                })
                .then(function (response) {
                    hidePreloader();
                    vm.servicios = response.data.data;
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
                this.listarServicios();
            },
            rowItemActions(event) {
                switch (event.action) {
                    case 'show':
                        this.$nextTick(() => {
                            this.$refs.modalServicio.showDetail(event.data);
                        });
                    break;
                    case 'edit':
                       this.$router.push({ name: 'spa.servicio.editar', params: { id: event.data.codservicio } }) 
                    break;
                    case 'delete':
                       this.eliminarServicio(event.data);
                    break;
                }
            },
            buscarServicio() {
                this.filters = {};
                this.filters.page = 1;

                if (this.servicio.nombre.length)
                    this.filters.nombre = this.servicio.nombre;

                if (this.servicio.estado)
                    this.filters.estado = this.servicio.estado;    

                this.listarServicios();  
            },
            cambiarEstado(param){
                let vm = this;
                
                let optionMessage ='Eliminar';

                if(!param.isactive) optionMessage = 'Restaurar';

                swalAlertConfirm(`¿Seguro que quiere ${optionMessage} el Tipo de Servicio <b>${param.nombre}</b>?`, appName)
                    .then(function(optionSelected){
                        if(optionSelected.value){
                            
                        showPreloader();
                        axios.delete(`${appApiUrl}/servicio/${param.codservicio}`)
                            .then(function (response) {         
                                hidePreloader();
                                let result = response.data;

                                if (result.status) {
                                    successMessage(result.message, appName);
                                    vm.listarServicios();
                                }  else if (result.warning){
                                    warningMessage(result.message, appName);
                                    vm.listarServicios();
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
                this.servicio.name = '';
                this.servicio.estado = false;
                this.buscarServicio();
            }
            
        },
        mounted() {
            this.listarServicios();
        },
        components: {
            MainContent,
            Step,
            RowActions,
            PaginationLinks,
            ModalServicio,
        },
    }

</script>

<style scoped>
.modal-footer{
    display: none !important;
}
</style>
