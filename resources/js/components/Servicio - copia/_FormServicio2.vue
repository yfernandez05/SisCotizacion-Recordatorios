<template>
    <div>     
        <step :steps="steps" columnClass="col-12 col-md-10 col-xl-11"></step>
        
        <placeholder-card-form :loadingholder="loadingholder" >
        </placeholder-card-form> 
        <main-content-servicio columnClass="col-12 col-md-10 col-xl-11" colorTitle="text-white" v-if="!loadingholder">
            <template v-slot:card-header-title>
                <span>Datos Generales</span>
            </template>
            <template v-slot:card-header-subtitle>
                <span>Aqui se muestran los datos princiaples</span>
            </template>

            <template v-slot:card-body-main>
                <!-- CLIENTES -->
                <div class="row row-cards">
                    <div class="col-12 col-md-3 col-lg-4 col-xl-5 d-none d-md-block">
                        <h3 class="card-title mb-1">Cliente <small class="text-danger">(*)</small></h3>
                    </div>
                    <div class="col-12 col-md-9 col-lg-8 col-xl-7">                        
                        <v-select ref="cliente" v-model="cliente" 
                            @input="onInputCliente" label="nombrecompleto" :options="clientes" @search="onSearchCliente"
                            :filterable="false" placeholder="Buscar Clientes" :class="{'has-danger':errorExists('codcliente')}">
                            <template slot="no-options">
                                No se han encontrado resultados
                                <div v-if="showCreateButton" class="d-flex  align-items-center flex-column my-1">
                                    <span>Puedes crear un nuevo registro</span>
                                    <button type="buttom" @click.prevent="createCliente()" class="btn bg-lime-lt btn-pill col-4">
                                        Crear cliente
                                    </button>
                                </div>                                
                            </template>
                            <template slot="option" slot-scope="option">
                                <div class="my-1">
                                    <h4 class="font-weight-bold mb-1 d-block" v-text="option.nombrecliente +' '+ option.appaternocl +' '+ option.apmaternocl"></h4>
                                    <!-- <div class="d-flex no-block text-truncate">
                                        <span>Cod. Cliente: </span><span class="font-weight-bolder pl-1 pr-3" v-text="option.codcliente"></span>
                                    </div> -->
                                    <div class="d-flex no-block">                                    
                                        <div class=" no-block me-2">
                                            <span v-text="option.tipodocumento.nombre"></span><span>: </span>
                                            <span class="font-weight-bolder ps-1 pe-3" v-text="option.coducmento"></span>
                                        </div>
                                        <div class=" no-block">
                                            <span>Teléfono: </span><span class="font-weight-bolder ps-1 pe-3"
                                                v-text="option.telefono"></span>
                                        </div>
                                    </div>
                                    <div class="d-flex no-block text-truncate">
                                        <span>Correo: </span> <span class="font-weight-bolder ps-1 pe-3" v-text="option.email"></span>
                                    </div>
                                    <div class="d-flex no-block text-truncate">
                                        <span>Dirección: </span><span class="font-weight-bolder ps-1 pe-3"
                                            v-text="option.direccion"></span>
                                    </div>
                                </div>
                                <hr class="mt-1" style="margin-bottom: -4px;">
                            </template>
                            
                        </v-select>                        
                        <small class="form-control-feedback" v-if="errorExists('codcliente')" v-text="showError('codcliente').errorDetail"></small>
                    </div>                
                </div>
                <hr class="my-3">
                <div class="row row-cards">
                    <div class="form-group col-12 col-sm-6 col-md-4 col-lg-3 mb-3" >
                            <label class="form-label mb-1">Email</label>
                            <input type="text" class="form-control form-control-sm"  v-model="clienteSeleccionado.email" readonly/>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-4 col-lg-3 mb-3" >
                            <label class="form-label mb-1">Telefono</label>
                            <input type="text" class="form-control form-control-sm" v-model="clienteSeleccionado.telefono" readonly/>
                    </div>
                    <!-- <div class="form-group col-12 col-sm-6 col-md-4 col-lg-3 mb-3" >
                            <label class="form-label mb-1">Dirección</label>
                            <input type="text" class="form-control form-control-sm" v-model="clienteSeleccionado.direccion" readonly/>
                    </div> -->
                    <!-- <div class="form-group col-12 col-sm-6 col-md-4 col-lg-3 mb-3" :class="{'has-danger':errorExists('codcomprobante')}">
                        <label class="form-label mb-1">Comprobante <small class="text-danger">(*)</small></label>
                        <select2 class="form-control-sm" :options="tipocomprobantes" v-model="tipocomprobante.codcomprobante" :selectValue="tipocomprobante.codcomprobante"
                            placeholder="Seleccione un comprobante" keyProperty="codcomprobante" textProperty="nombrecomprobante">
                        </select2>
                        <small class="form-control-feedback" v-if="errorExists('codcomprobante')"
                            v-text="showError('codcomprobante').errorDetail"></small>
                    </div> -->
                    <div class="form-group mb-1 col-sm-4 col-md-2 mb-2">
                        <label class="mb-0">Fecha</label>
                        <v-date-picker class="mx-datepicker-sm" v-model="fecha_general"
                            format="DD-MM-YYYY" value-type="format" placeholder="Seleccione una fecha"></v-date-picker>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-4 col-lg-3 mb-3" :class="{'has-danger':errorExists('codestadoservicio')}">
                        <label class="form-label mb-1">Estado General <small class="text-danger">(*)</small></label>
                        <select2 class="form-control-sm" :options="estadoservicios" v-model="estadoservicio.codestadoservicio" :selectValue="estadoservicio.codestadoservicio"
                            placeholder="Seleccione un estado del servicio" keyProperty="codestadoservicio" textProperty="nombreestadoservicio">
                        </select2>
                        <small class="form-control-feedback" v-if="errorExists('codestadoservicio')"
                            v-text="showError('codestadoservicio').errorDetail"></small>
                    </div> 
                </div>
                <!--  SERVICIOS-->

                <!-- TABLA DETALLE SERVICIO -->

                <!-- <hr class="mt-2"> -->
            </template>
            


            <!-- detalle -->
            <template v-slot:card-header-titleD>
                <span v-text="cardTitle"></span>
            </template>
            <template v-slot:card-header-subtitleD>
                <span v-text="cardSubTitle"></span>
            </template>
            <template v-slot:card-body-mainD>
                <!--  SERVICIOS-->
                <div class="row row-cards">
                    <div class="col-12 col-md-3 col-lg-4 col-xl-5 d-none d-md-block">
                        <h3 class="card-title mb-1">Servicio <small class="text-danger">(*)</small></h3>
                    </div>
                    <div class="col-12 col-md-9 col-lg-8 col-xl-7">                        
                        <v-select  ref="tiposervicio" v-model="tiposervicio" @blur="listarTipoServicios()"
                            @input="onInputTipoServicio" label="nombre" :options="tiposervicios" @search="onSearchTipoServicio" 
                            placeholder="Buscar servicio" :class="{'has-danger':errorExists('codtiposervicio')}" :filterable="false">
                            <template slot="no-options">
                                No se han encontrado resultados
                            </template>
                            <template slot="option" slot-scope="option">
                                <div class="my-1">
                                    <h4 class="font-weight-bold mb-1 d-block" v-text="option.nombre"></h4>
                                    <div class="d-flex no-block text-truncate">
                                        <span>Descripción: </span> <span class="font-weight-bolder ps-1 pe-3" v-text="option.descripcion"></span>
                                    </div>
                                    <div class="d-flex no-block text-truncate">
                                        <span>Precio: </span><span class="font-weight-bolder ps-1 pe-3"
                                            v-text="option.precio"></span>
                                    </div>
                                </div>
                                <hr class="mt-1" style="margin-bottom: -4px;">
                            </template>
                        </v-select>
                        <small class="form-control-feedback" v-if="errorExists('codtiposervicio')" v-text="showError('codtiposervicio').errorDetail"></small>
                    </div>
                </div>
                <hr class="my-3">
                <div class="row row-cards mb-4">
                    <div class="form-group col-12 col-sm-6 col-md-4 mb-3" >
                            <label class="form-label mb-1">Descripción</label>
                            <input type="text" class="form-control form-control-sm"  v-model="tiposervicioSeleccionado.descripcion" readonly/>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-2 mb-3" >
                            <label class="form-label mb-1">Precio</label>
                            <input type="text" class="form-control form-control-sm" v-model="tiposervicioSeleccionado.precio" readonly/>
                    </div>
                    <!-- <div class="form-group mb-1 col-sm-4 col-md-2 mb-2">
                        <label class="mb-0">Fecha inicio</label>
                        <v-date-picker class="mx-datepicker-sm" v-model="fecha_contratacion"
                            format="DD-MM-YYYY" value-type="format" placeholder="Seleccione una fecha"></v-date-picker>
                    </div> -->
                    <!-- <div class="form-group mb-1 col-sm-4 col-md-2 mb-2">
                        <label class="mb-0">Fecha Notif. anticipo</label>
                        <v-date-picker class="mx-datepicker-sm" v-model="fecha_anticipado"
                            format="DD-MM-YYYY" value-type="format" placeholder="Seleccione una fecha"></v-date-picker>
                    </div> -->
                    <!-- <div class="form-group mb-1 col-sm-4 col-md-2 mb-2">
                        <label class="mb-0">Fecha Notif. expiración</label>
                        <v-date-picker class="mx-datepicker-sm" v-model="fecha_expiracion"
                            format="DD-MM-YYYY" value-type="format" placeholder="Seleccione una fecha"></v-date-picker>
                    </div> -->
                    <div class="form-group col-12 col-sm-6 col-md-4 mb-3" >
                            <label class="form-label mb-1">Frecuencia del servicio <small class="text-danger">(*)</small></label>
                            <div class="form-selectgroup">
                                <label class="form-selectgroup-item" :class="{'has-danger':errorExists('fecha_expiracion')}">
                                    <input type="radio" name="icons" value="Mensual" class="form-selectgroup-input" @click="calcularFechaFinalMes()" v-model="frecuencia_recordatorio_fecha">
                                    <span class="form-selectgroup-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path>
                                            <path d="M16 3v4"></path>
                                            <path d="M8 3v4"></path>
                                            <path d="M4 11h16"></path>
                                            <path d="M11 15h1"></path>
                                            <path d="M12 15v3"></path>
                                        </svg>
                                        Mensual
                                    </span>
                                </label>
                                <label class="form-selectgroup-item" :class="{'has-danger':errorExists('fecha_expiracion')}">
                                    <input type="radio" name="icons" value="Anual" class="form-selectgroup-input" @click="calcularFechaFinalAnio()" v-model="frecuencia_recordatorio_fecha">
                                    <span class="form-selectgroup-label">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path>
                                            <path d="M16 3v4"></path>
                                            <path d="M8 3v4"></path>
                                            <path d="M4 11h16"></path>
                                            <path d="M11 15h1"></path>
                                            <path d="M12 15v3"></path>
                                        </svg>
                                        Anual
                                    </span>
                                </label>
                                <small class="form-control-feedback" v-if="errorExists('fecha_expiracion')" v-text="showError('fecha_expiracion').errorDetail"></small>
                            </div>
                    </div>
                    <div class="form-group col-12 col-sm-6 col-md-2 mb-3" >
                        <label class="form-label mb-1">Descuento</label>
                        <vue-numeric class="form-control form-control-sm"  v-bind:precision="2" thousand-separator="" v-model="descuentoDServicio"
                            currency="-S/.">
                        </vue-numeric>                       
                    </div>
                    <div class="form-group col-12 col-sm-6 mb-3" >
                            <label class="form-label mb-1">Nota Adicional</label>
                            <textarea type="text" class="form-control form-control-sm" v-model="notadetalle" rows="3"></textarea>
                    </div>

                    <div class="form-group mb-1 col-auto align-self-center mt-3">                        
                        <button type="submit" class="btn btn bg-blue-lt ms-auto border border-primary shadow-sm ms-auto" @click.prevent="addProductInDetail">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hand-click icon-tada" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M8 13v-8.5a1.5 1.5 0 0 1 3 0v7.5"></path>
                                <path d="M11 11.5v-2a1.5 1.5 0 0 1 3 0v2.5"></path>
                                <path d="M14 10.5a1.5 1.5 0 0 1 3 0v1.5"></path>
                                <path d="M17 11.5a1.5 1.5 0 0 1 3 0v4.5a6 6 0 0 1 -6 6h-2h.208a6 6 0 0 1 -5.012 -2.7l-.196 -.3c-.312 -.479 -1.407 -2.388 -3.286 -5.728a1.5 1.5 0 0 1 .536 -2.022a1.867 1.867 0 0 1 2.28 .28l1.47 1.47"></path>
                                <path d="M5 3l-1 -1"></path>
                                <path d="M4 7h-1"></path>
                                <path d="M14 3l1 -1"></path>
                                <path d="M15 6h1"></path>
                            </svg>
                            Añadir el servicio
                        </button>
                    </div>               
                </div>

                <!-- TABLA DETALLE SERVICIO -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table id="servicios" class="table table-sm table-hover table-striped table-bordered mb-2">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="table-action-xs table-dark bg-dark text-white"></th>
                                        <th class="table-dark bg-dark text-white" style="min-width: 250px;">Servicio</th>
                                        <th class="table-dark bg-dark text-white">F. Fin servicio</th>
                                        <th class="table-dark bg-dark text-white">Precio</th>
                                        <th class="table-dark bg-dark text-white">Descuento</th>                                        
                                        <!-- <th>Precio</th> -->
                                        <th class="table-dark bg-dark text-white">Importe</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(detalle, index) in serviciodetalles" :key="index" :item="detalle"
                                        :index="index">
                                        <td class="action-row d-flex">
                                            <button type="button" title="Ver Detalle" @click="showDetalle(detalle,index)"
                                                class="btn btn-sm btn-outline-info waves-effect waves-light border-0 mr-1">
                                                <i class="fas fa-eye fa-lg"></i>
                                            </button>
                                            <button type="button" title="Eliminar" @click="removeDetalle(detalle, index)"
                                                class="btn btn-sm btn-outline-danger waves-effect waves-light border-0 mr-1">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                        <td v-text="detalle.nombre"></td>
                                        <td v-text="detalle.fecha_expiracion"></td>                                        
                                        <!-- <td v-text="tipopreciodescripcion(detalle.tipoprecio)"></td> -->
                                        <td v-text="formatNumber(detalle.precio)" class="text-right"></td>
                                        <td v-text="formatNumber(detalle.descuento)"></td>
                                        <td v-text="formatNumber(detalle.importe)" class="text-right"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <hr class="mt-1 mb-2" />
                    <div class="d-flex no-block flex-column align-items-end">
                        <div class="d-flex no-block form-group mb-1 align-items-center">
                            <label class="mb-0 me-2">Subtotal</label>
                            <span class="d-block form-control form-control-sm ml-2 text-right font-weight-bold text-nowrap"
                                    style="width: 170px;" v-text="formatNumber(subtotal)">
                            </span>
                        </div>
                        <!-- <div v-show="descuentoDServicio.length" class="d-flex no-block form-group mb-1 align-items-center">
                            <label class="mb-0 me-2">Descuento <strong>-S/. {{descuentoDServicio}}</strong></label>
                            <span class="d-block form-control form-control-sm ml-2 text-right font-weight-bold text-nowrap"
                                    style="width: 170px;" v-text="formatNumber(totaldescuentoDServicio)">
                            </span>
                        </div> -->
                        <div class="d-flex no-block form-group mb-1 align-items-center">
                            <label class="mb-0 me-2">Total</label>
                            <span class="d-block form-control form-control-sm ml-2 text-right font-weight-bold text-nowrap"
                                    style="width: 170px;" v-text="formatNumber(total)">
                            </span>
                        </div>
                    </div>
                </div>

                <!-- <hr class="mt-2"> -->
            </template>
            <template v-slot:card-body-actionsD>
                <router-link :to="{name: 'spa.servicio'}" class="btn btn-outline btn-pill mr-2">
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
                        Guardar Servicio
                    </button>
                    <!-- <button type="reset" class="btn btn-outline-secondary btn-pill ml-2">
                        <i class="fa fa-window-close"></i> <span class="button-text">Cancelar</span>
                    </button> -->
                </div>
            </template>
        </main-content-servicio>
        <modal-detail-servicio ref="modalDetailServicio"></modal-detail-servicio>
        <modal-crear-cliente ref="modalCrearCliente"></modal-crear-cliente>
    </div>
</template>

<script>
    import placeholderCardForm from './../utils/PlaceholderCardForm.vue';
    import Step from './../utils/Steps.vue';
    import MainContentServicio from './../utils/MainContentServicio.vue';
    import _ from 'lodash';
    import accounting from 'accounting';
    import moment, {
        now
    } from 'moment';
    import VueNumeric from 'vue-numeric';
    import vSelect from 'vue-select';
    import Select2 from './../utils/Select2';
    import VDatePicker from 'vue2-datepicker';
    import ModalDetailServicio from '../modal/_ModalDetailServicio.vue';
    import ModalCrearCliente from '../modal/_ModalCrearCliente.vue';

    export default {
        props: {
            steps: {
                default:Object,
            },
            cardTitle: {
                default: 'Servicio'
            },
            cardSubTitle: {
                default: 'Información para Editar'
            },
            servicio: {
                type: Object,
                default: function () {
                    return {
                        nombre: '',
                    }
                }
            },
            loadingholder:Boolean,
        },
        data() {
            return {
                errors: [],
                /* clientes  */
                clientes: [],
                cliente: null,
                clienteSeleccionado: {}, 

                /* tipos de Servicios que - prductos */
                tiposervicios: [],
                tiposervicio: null,
                tiposervicioSeleccionado: {},

                /* Servicio Detalle */
                serviciodetalles: [],

                notadetalle: '',
                frecuencia_recordatorio_fecha: null,
                fecha_contratacion: this.formatDate(new Date(), 'DD-MM-YYYY'),
                fecha_anticipado: '',
                fecha_expiracion: '',
                

                /* Servicio General */
                fecha_general: this.formatDate(new Date(), 'DD-MM-YYYY'),
                fecha_anticipadogeneral: null,
                fecha_fingeneral: null,

                descuentoDServicio: 0,
                totaldescuentoDServicio: 0,
                
                subtotal: 0,
                total: 0,

                 
                /* no result select clietne */
                showCreateButton: false,

                /* tipocomprobante */
                tipocomprobantes: [],
                tipocomprobante:{
                    codcomprobante: '1'
                },
                
                /* Estados de servicios */
                estadoservicios:[],
                estadoservicio:{
                    codestadoservicio: '1',
                },

            }
        },
        methods: {
            doSaveData() {    
                if (this.validateFieldsGeneral().length > 0) {
                    return;
                }

                if (this.validateFielddetailsservices().length > 0) {
                   
                    return;
                }

                

                let servicioData = {                    
                    codcliente: this.cliente.codcliente,
                    codcomprobante: this.tipocomprobante.codcomprobante,
                    codestadoservicio: this.estadoservicio.codestadoservicio,
                    serviciodetalles: this.serviciodetalles,
                    serie: 'F001',
                    fecha_servicio: this.fecha_general,
                    fecha_anticipadogeneral: this.fecha_anticipadogeneral,
                    fecha_fingeneral: this.fecha_fingeneral,
                    subtotal: this.subtotal,
                    total: this.total,
                }
                console.log(servicioData);
                this.$emit('saveData', servicioData);
            },            

            searchCliente: _.debounce((loading, search, vm) => {
                axios.get(`${appApiUrl}/cliente/select?filter=${escape(search)}`)
                    .then(function (response) {
                        //console.log(response);
                        loading(false);
                        response.data.length ? vm.showCreateButton = false : vm.showCreateButton = true ; 
                        vm.clientes = response.data;
                    
                    })
                    .catch(function (error) {
                        loading(false);                        
                        console.log(error);
                    });
            }, 350),

            onInputCliente() {
                if (this.cliente) {
                    this.clienteSeleccionado = this.cliente;
                    this.tipodocumento = this.clienteSeleccionado.tipodocumento;
                } else {
                    this.clienteSeleccionado = {};
                    /* this.tipodocumento = {
                        nombre: 'Ruc'
                    }; */
                    this.$nextTick(() => this.$refs.cliente.$refs.search.focus());
                }
            },

            onSearchCliente(search, loading) {
                //console.log(search);
                if (search.length > 2) {
                    loading(true);
                    this.searchCliente(loading, search, this);
                } else {
                    this.clientes = [];
                }
            },

            listarTipoServicios() {
                let vm = this;
                axios.get(`${appApiUrl}/tiposervicio`)
                .then(function (response) {
                    vm.tiposervicios = response.data.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
            },

            searchTipoServicio: _.debounce((loading, search, vm) => {
                axios.get(`${appApiUrl}/tiposervicio/select?filter=${escape(search)}`)
                    .then(function (response) {
                        //console.log(response);
                        loading(false);
                        vm.tiposervicios = response.data;
                    })
                    .catch(function (error) {
                        loading(false);
                        console.log(error);
                    });
            }, 350),

            onInputTipoServicio() {               
                if (this.tiposervicio) {
                    this.tiposervicioSeleccionado = this.tiposervicio;
                } else {
                    this.tiposervicioSeleccionado= {};
                    /* this.tipodocumento = {
                        nombre: 'Ruc'
                    }; */
                    this.$nextTick(() => this.$refs.tiposervicio.$refs.search.focus());
                }
            },

            onSearchTipoServicio(search, loading) {
                //console.log(search);
                if (search.length > 2) {
                    loading(true);
                    this.searchTipoServicio(loading, search, this);
                } else {
                    this.tiposervicios = [];                    
                }
            },
            
            validateFieldsGeneral() {
                this.errors = [];

                if (!this.clienteSeleccionado.codcliente) {
                    this.setError('codcliente', 'El campo Clientes es obligatorio');
                    warningMessage('Debe seleccionar un cliente.', appName);
                    this.$nextTick(() => this.$refs.cliente.$refs.search.focus());
                }

                return this.errors;
            },

            validateFielddetailsservices(){
                this.errors = [];

                if(!this.serviciodetalles[0]){
                    this.setError('codtiposervicio', 'Debe agregar almenos un servicio');
                    warningMessage('El servicio venta no tiene detalle de servicios.', appName);
                    this.$nextTick(() => this.$refs.tiposervicio.$refs.search.focus());
                }
                return this.errors;
            },

            validateFieldsDetails(){
                this.errors = [];

                if (!this.tiposervicioSeleccionado.codtiposervicio) {
                    this.setError('codtiposervicio', 'El campo Servicios es obligatorio');
                    warningMessage('El servicio venta no tiene detalle de servicios.', appName);
                    this.$nextTick(() => this.$refs.tiposervicio.$refs.search.focus());
                }

                if (!this.fecha_expiracion) {
                    this.setError('fecha_expiracion', 'Debe escoger una frecuencia del servicio');
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
            formatDate(value, fmt = 'D MMM YYYY') {
                return (value == null) ?
                    '' :
                    moment(value, 'YYYY-MM-DD HH:mm:ss').format(fmt)
            },
            formatNumber(value) {
                return accounting.format(value, 2);
            },
            unformatNumber(value) {
                return accounting.unformat(value);
            },

            listarTipoComprobante() {
                let vm = this;
                axios.get(`${appApiUrl}/tipocomprobante`)
                .then(function (response) {
                    vm.tipocomprobantes = response.data.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
            },

            listarEstadoServicio() {
                let vm = this;
                axios.get(`${appApiUrl}/selectgeneral`)
                .then(function (response) {
                    vm.estadoservicios = response.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
            },

            //añdir detalles servicios
            addProductInDetail(){
                if (this.validateFieldsDetails().length > 0) {
                    return;
                }

                let detalle = {
                    codtiposervicio : this.tiposervicio.codtiposervicio,
                    nombre : this.tiposervicioSeleccionado.nombre,
                    refe_url_servicio : 'url servicio ',
                    descripcion_servicio : 'Descripcion adicional del servicio',
                    notadetalle : this.notadetalle,
                    precio : this.tiposervicioSeleccionado.precio,
                    descuento : this.descuentoDServicio,
                    importe : this.importeDetalleServicio(this.tiposervicioSeleccionado.precio, this.descuentoDServicio),
                    fecha_contratacion : this.fecha_contratacion,
                    fecha_anticipado : this.fecha_anticipado,
                    fecha_expiracion : this.fecha_expiracion,
                    frecuencia_recordatorio_fecha : this.frecuencia_recordatorio_fecha,
                }                

                this.serviciodetalles.push(detalle);
                
                //console.log(this.serviciodetalles);

                this.fecha_fingeneral = this.encontrarServicioMasCercanoFinGeneral();
                this.fecha_anticipadogeneral = moment(this.fecha_fingeneral,"DD-MM-YYYY").clone().subtract(2, 'days').format('DD-MM-YYYY');

                this.clearData();
                this.calculateTotals();
            },

            encontrarServicioMasCercanoFinGeneral() {
                const fechaActual = moment();
                let diferenciaMinima = Infinity;
                let servicioMasCercano = null;

                for (const servicio of this.serviciodetalles) {
                    const fechaExpiracion = moment(servicio.fecha_expiracion, 'DD-MM-YYYY');
                    const diferencia = fechaExpiracion.diff(fechaActual);

                    if (diferencia < diferenciaMinima) {
                    diferenciaMinima = diferencia;
                    servicioMasCercano = servicio;
                    }
                }

                return servicioMasCercano.fecha_expiracion;
            },

            //caulcular F. Fin Detalleservicio radiobottom
            calcularFechaFinalAnio() {
                const fechaActual = moment();
                const fechaEnUnAnio = fechaActual.clone().add(1, 'year');
                this.fecha_expiracion = fechaEnUnAnio.format('DD-MM-YYYY');
                this.calcularFechaAnticipado(this.fecha_expiracion);
            },
            //caulcular F. Fin Detalleservicio radiobottom
            calcularFechaFinalMes() {
                /* console.log(moment('31/01/2023','DD/MM/YYYY')); */
                const fechaActual = moment();
                const fechaEnUnMes = fechaActual.clone().add(1, 'month');
                this.fecha_expiracion = fechaEnUnMes.format('DD-MM-YYYY');
                this.calcularFechaAnticipado(this.fecha_expiracion);               
            },
            //caulcular F. Anticiapdo Detalleservicio radiobottom
            calcularFechaAnticipado(dateexpiracion){
                let fecha = moment(dateexpiracion, "DD-MM-YYYY");
                const fechaDosDiasAntes = fecha.clone().subtract(2, 'days');
                //console.log(fechaDosDiasAntes.format('DD-MM-YYYY'));
                this.fecha_anticipado = fechaDosDiasAntes.format('DD-MM-YYYY');
            },

            clearData(){
                this.tiposervicio = null,
                this.tiposervicioSeleccionado = {},
                this.notadetalle = '',
                this.fecha_contratacion = this.formatDate(new Date(), 'DD-MM-YYYY'),
                this.fecha_anticipado = '',
                this.fecha_expiracion = '';
                this.descuentoDServicio = 0;
                this.frecuencia_recordatorio_fecha = null;
            },

            calculateTotals(){
                let vm = this;
                this.subtotal = this.serviciodetalles.reduce((sum, item) => sum + item.importe, 0);
                this.total = this.subtotal;
                /* console.log('subtotal: ', this.subtotal);
                console.log('total: ',this.total); */
            },

            importeDetalleServicio(base, descuento){
                let importe = (base - descuento);
                //console.log(importe);
                return importe;
            },

            showDetalle(detalle, rowIndex){
                this.$nextTick(() => {
                    console.log(detalle,rowIndex);
                        this.$refs.modalDetailServicio.showDetail(detalle); 
                        
                });
            },
            removeDetalle(detalle, rowIndex){
                /* console.log(detalle,rowIndex); */
                swalAlertConfirm(`¿Seguro que quiere eliminar el servicio <b>${detalle.nombre}</b>?`, appName)
                    .then((result) => {
                        if (result.value) {
                            this.serviciodetalles.splice(rowIndex, 1);
                            this.calculateTotals();
                        }
                    });
            },

            createCliente(){
                this.$nextTick(() => {
                    //console.log(detalle,rowIndex);
                        this.$refs.modalCrearCliente.showDetail();                         
                });
            },
        
        },

        mounted(){
            this.listarTipoServicios();
            this.listarTipoComprobante();
            this.listarEstadoServicio();
        },
        
        components: {
            Step,
            placeholderCardForm,
            MainContentServicio,
            vSelect,
            Select2,
            VDatePicker,
            VueNumeric,
            ModalDetailServicio,
            ModalCrearCliente,
        }
    }

</script>

<style>

.cliente-form-create .row div.col-12.col-md-10.col-lg-8.col-xl-9:nth-child(1) {
    width: 100% !important;
}
.cliente-form-create div.container-fluid.px-3 {
    padding: 0 !important;
}
.cliente-form-create .card-footer a{
    display:none;
}
</style>