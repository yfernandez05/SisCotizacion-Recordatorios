<template>
    <div>
        <step :steps="steps"></step>
        <main-content headerBgClass="bg-ligth" columnClass="col-12 col-xl-12" >
            <template v-slot:card-header-title>
                Documento de identidad
            </template>
            <template v-slot:card-header-subtitle>
                Lista de diferentes tipo de documentos de identidad
            </template>
            <template v-slot:card-header-actions>
                <a class="btn btn-outline-info btn-pill" @click="buscarDocumentoIdentidad()" data-bs-toggle="tooltip" data-bs-placement="left" title="Buscar registros">
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
                <router-link :to="{name: 'spa.tipodocumento.registrar'}" class="btn btn-outline-success btn-pill" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Crear nuevo registro">
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
                        <label class="form-label">Nombre Documento</label>
                        <input type="text" class="form-control" placeholder="Ingrese un nombre de documento" v-model="tipodocumento.nombre" @keyup.enter="buscarDocumentoIdentidad()"/>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-4 ">
                        <label>&nbsp;</label>
                        <div class="row g-2 mt-1">
                            <div class="col-auto d-flex align-items-center">
                                <label class="form-colorinput form-colorinput-light">
                                    <input name="color-rounded" type="checkbox" value="white" class="form-colorinput-input" id="estado" v-model="tipodocumento.estado" @change="buscarDocumentoIdentidad()"/>
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
                                <th class="p-2">Codigo</th>
                                <th class="p-2">Nombre</th>
                                <th class="p-2">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="tipdoc in tipodocumentos" :key="tipdoc.iddocumento">
                                <td>
                                    <row-actions :rowData="tipdoc" @rowItemActions="rowItemActions" :activeDelete="false" :activeShow="false">
                                        <button type="button" :title="tipdoc.isactive ? 'Desactivar':'Activar'" @click="cambiarEstado(tipdoc)"
                                            class="btn btn-sm  waves-effect waves-light border-0 mr-1"
                                            :class="tipdoc.isactive ? 'btn-outline-danger':'btn-outline-success'">
                                            <i class="fas fa-lg" :class="tipdoc.isactive ? 'fa-trash':'fa-check-circle'"></i>
                                        </button>
                                    </row-actions>
                                </td>
                                <td v-text="tipdoc.iddocumento"></td>
                                <td v-text="tipdoc.nombre"></td>
                                <td>
                                    <span class="badge badge-pill py-1 px-3" :class="tipdoc.isactive ? 'badge bg-green-lt':'badge bg-red-lt'" v-text="tipdoc.statename" ></span>
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
    import PaginationLinks from './../utils/PaginationLinks';

    export default {
        data() {
            return {
                steps:[
                    {name:'Inicio', spa:'spa'},{name:'Documento de Identidad', spa:``, active:'active'},
                ],
                tipodocumentos: [],
                pagination: {},
                filters: {},
                tipodocumento: {
                    nombre: '',
                    estado: false
                }
            }

        },
        methods: {
            listarTipoDocumento() {
                showPreloader();
                let vm = this;
                axios.get(`${appApiUrl}/tipodocumento`, {
                        params: this.filters
                })
                .then(function (response) {
                    hidePreloader();
                    vm.tipodocumentos = response.data.data;
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
                this.listarTipoDocumento();
            },
            rowItemActions(event) {
                switch (event.action) {
                    case 'edit':
                       this.$router.push({ name: 'spa.tipodocumento.editar', params: { id: event.data.iddocumento } }) 
                    break;
                    case 'delete':
                       this.eliminarTipoDocumento(event.data);
                       break;
                }
            },
            buscarDocumentoIdentidad() {
                this.filters = {};
                this.filters.page = 1;

                if (this.tipodocumento.nombre.length)
                    this.filters.nombre = this.tipodocumento.nombre;

                if (this.tipodocumento.estado)
                    this.filters.estado = this.tipodocumento.estado;    

                this.listarTipoDocumento();  
            },
            cambiarEstado(param){
                let vm = this;
                
                let optionMessage ='Eliminar';

                if(!param.isactive) optionMessage = 'Restaurar';

                swalAlertConfirm(`¿Seguro que quiere ${optionMessage} el Rol <b>${param.nombre}</b>?`, appName)
                    .then(function(optionSelected){
                        if(optionSelected.value){
                            
                        showPreloader();
                        axios.delete(`${appApiUrl}/tipodocumento/${param.iddocumento}`)
                            .then(function (response) {         
                                hidePreloader();
                                let result = response.data;

                                if (result.status) {
                                    successMessage(result.message, appName);
                                    vm.listarTipoDocumento();
                                }  else if (result.warning){
                                    warningMessage(result.message, appName);
                                    vm.listarTipoDocumento();
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
                this.rol.rol = '';
            }


            
        },
        mounted() {
            this.listarTipoDocumento();
        },
        components: {
            MainContent,
            Step,
            RowActions,
            PaginationLinks,
        },
    }

</script>
