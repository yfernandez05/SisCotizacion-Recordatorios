<template>
    <div>
        <main-content headerBgClass="bg-ligth" columnClass="col-12 col-xl-12" >
            <template v-slot:card-header-title>
                Registro de Errores
            </template>
            <template v-slot:card-header-subtitle>
                Lista de bugs capturados por el sistema
            </template>
            <template v-slot:card-header-actions>                          
            </template>

            <template v-slot:card-body-main>
                <div class="form-row">
               <!--  <div class="form-group col-12 col-sm-6 col-md-4 col-xl-3 ">
                        <label>Fecha</label>
                        <v-date-picker v-model="logerrores.dateoccurred" range lang="es" format="DD-MM-YYYY" confirm
                            :editable="false" placeholder="Seleccione un rango de fecha" @input="buscarlogerror()">
                            <template v-slot:footer="{ emit }">
                                <button class="mx-btn" @click="selectToday(emit)">
                                    Today
                                </button>
                            </template>
                        </v-date-picker>
                    </div> -->

            </div>

            <a class="card mb-3" v-for="itemlog in logerror" :key="itemlog.id">
                <div class="card-body">
                    <h4 class="text-primary">Registro Código #{{itemlog.id}}</h4>
                </div>
                <div class="card-body">
                    <h4>Fecha de captura</h4>
                    <div>
                        <pre><code>{{itemlog.dateoccurred}}</code></pre>
                    </div>                    
                    <h4>Petición y controlador</h4>
                    <div>
                        <pre>{{itemlog.methodname}} - {{itemlog.classname}}</pre>
                    </div>
                    <h4>Mensaje Error</h4>
                    <div>
                        <pre style="white-space: pre-line;">
                            {{itemlog.errormessage}}
                        </pre>
                    </div>
                </div>
            </a>
                <pagination-links :pagination="pagination" @changePerPage="changePerPage">
                </pagination-links>
            </template>
        </main-content>
    </div>
</template>

<script>
    import MainContent from './../utils/MainContent';
    import PaginationLinks from './../utils/PaginationLinks';

    export default {
        data() {
            return {
                logerror: [],
                pagination: {},
                filters: {},
                logerrores: {
                    dateoccurred:'',
                }
            }
        },
        methods: {
            listarlogerror() {
                showPreloader();

                let vm = this;
                axios.get(`${appApiUrl}/logerror`, {
                        params: this.filters
                    })
                    .then(function (response) {

                        hidePreloader();
                        vm.logerror = response.data.data;
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
                this.listarlogerror();
            },
            rowItemActions(event) {
                // switch (event.action) {
                //     case 'edit':
                //        this.$router.push({ name: 'spa.rol.editar', params: { id: event.data.idrol } }) 
                //     break;
                //     case 'delete':
                //        this.eliminarRol(event.data);
                //        break;
                // }
            },
             buscarlogerror() {
                this.addFilterslogerror();
                this.listarlogerror();
            },
             
            limpiarFiltros(){
                this.rol.rol = '';
            }


            
        },
        mounted() {
            this.listarlogerror();
        },
        components: {
            MainContent,
            PaginationLinks,
        },
    }

</script>
