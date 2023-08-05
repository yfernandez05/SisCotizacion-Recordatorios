<template>
    <div class="card border-0">
        <div class="card-body">
            <div class="row">
                <h1>CONSULTAS</h1>

                <!-- <div class="form-group col-12 col-sm-6 col-md-2 col-xl-2">
                    <label>Serie</label>
                    <div class="input-group">
                        <input type="text" aria-label="Serie" class="form-control campotext" placeholder="Serie" v-model="venta.serie"
                            @keyup.enter="buscarServicio() " />
                    </div>
                </div>
                <div class="form-group col-12 col-sm-6 col-md-2 col-xl-2">
                    <label>Número de servicio</label>
                    <div class="input-group">
                        <input type="text" aria-label="Número" class="form-control campotext" placeholder="Número de servicio" v-model="venta.numero"
                            @keyup.enter="buscarServicio()" />
                    </div>
                </div> -->
                <div class="form-group col-12 col-sm-6 col-md-4 col-xl-4" :class="{'has-danger':errorExists('email')}">
                    <label class="mb-2">Correo <small class="text-danger">(*)</small></label>
                    <input type="email" required class="form-control" placeholder="CORREO" v-model="servicio.email" @keyup.enter="buscarServicio()" />
                    <small class="form-control-feedback" v-if="errorExists('email')" v-text="showError('email').errorDetail"></small>
                </div>
                <div class="form-group col-12 col-sm-6 col-md-4 col-xl-3">
                    <label class="d-block mb-2">&nbsp;</label>
                    <button class="btn btn-m bg-pink-lt" @click="buscarServicio()">
                        <i class="fas fa-search">&nbsp;</i>
                        <span class="d-none d-sm-inline-block">Buscar</span>
                    </button>
                </div>
            </div>

            <!-- data grid -->
            <div v-if="servicios.length>0">
                <div class="col-auto ms-auto d-print-none mt-3 mb-2 text-end">
                    <!-- <button type="button" class="btn btn-primary" onclick="javascript:window.print();">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2"></path><path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4"></path><path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z"></path></svg>
                    Imprimir información
                    </button> -->
                </div>
                <div class="container px-0 shadow-sm">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informacion del cliente</h3>
                        </div>
                        <div  class="card-body">
                            <div class="datagrid">
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Cliente</div>
                                    <div class="datagrid-content"><span v-text="cliente.nombrecompleto"></span></div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Correo</div>
                                    <div class="datagrid-content"><span v-text="cliente.email"></span></div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">País</div>
                                    <div class="datagrid-content"><span v-text="cliente.pais"></span></div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">telefono</div>
                                    <div class="datagrid-content"><span v-text="cliente.telefono"></span></div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Dirección</div>
                                    <div class="datagrid-content"><span v-text="cliente.direccion"></span></div>
                                </div>
                                <div class="datagrid-item">
                                    <div class="datagrid-title">Estado</div>
                                    <div class="datagrid-content">
                                    <span class="status status-green" v-text="cliente.statename"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="" v-for="serv in servicios" :key="serv.codservicio">
                                <div class="mb-3 pb-3">
                                    <div class="">
                                        <div class="card-title">Informacion del servicio #{{serv.numero}} </div>
                                    </div>
                                    <div  class="mb-3">
                                        <div class="datagrid">
                                            <div class="datagrid-item">
                                                <div class="datagrid-title">Agente de atención</div>
                                                <div class="datagrid-content"><span v-text="serv.user.name"></span></div>
                                            </div>
                                            <div class="datagrid-item">
                                                <div class="datagrid-title">Adjunto Factural</div>
                                                <div class="datagrid-content"><span><a :href="serv.url_documento" target="_blank" v-text="serv.url_documento"></a></span></div>
                                            </div>
                                            <div class="datagrid-item">
                                                <div class="datagrid-title">Serie</div>
                                                <div class="datagrid-content"><span v-text="serv.serie"></span></div>
                                            </div>
                                            <div class="datagrid-item">
                                                <div class="datagrid-title">Numero</div>
                                                <div class="datagrid-content"><span v-text="serv.numero"></span></div>
                                            </div>
                                            <div class="datagrid-item">
                                                <div class="datagrid-title">F. Inicio Servicio</div>
                                                <div class="datagrid-content"><span v-text="serv.fecha"></span></div>
                                            </div>
                                            <div class="datagrid-item">
                                                <div class="datagrid-title">F. Fin Servicio</div>
                                                <div class="datagrid-content"><span v-text="serv.fechafin"></span></div>
                                            </div>
                                            <div class="datagrid-item">
                                                <div class="datagrid-title">Total</div>
                                                <div class="datagrid-content"><span v-text="serv.total"></span></div>
                                            </div>
                                            <div class="datagrid-item">
                                                <div class="datagrid-title">Estado</div>
                                                <div class="datagrid-content"><span class="status" v-bind:style="{background: serv.estadoservicio.backgroundColor, color:serv.estadoservicio.textColor}" v-text="serv.estadoservicio.nombreestadoservicio"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row border-bottom mb-4">
                                    <div class="card-title">Detalles de la adquisición:</div>
                                    <div class="col-12 col-lg-6 mb-4 py-2"  v-for="detailservices in serv.serviciodetalles" :key="detailservices.id">                                       
                                        <div class="mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler me-2 text-muted icon-tabler-shopping-cart" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                                <path d="M17 17h-11v-14h-2"></path>
                                                <path d="M6 5l14 1l-1 7h-13"></path>
                                            </svg>
                                            Servicio adquirido: <strong><span v-text="detailservices.tiposervicio.nombre"></span></strong>
                                        </div>                                    
                                        <div class="mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler me-2 text-muted icon-tabler-file-description" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                                <path d="M9 17h6"></path>
                                                <path d="M9 13h6"></path>
                                            </svg>
                                            Descripción del servicio: <strong><span v-text="detailservices.tiposervicio.descripcion"></span></strong>
                                        </div>
                                        <div class="mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler me-2 text-muted icon-tabler-unlink" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M17 22v-2"></path>
                                                <path d="M9 15l6 -6"></path>
                                                <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"></path>
                                                <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463"></path>
                                                <path d="M20 17h2"></path>
                                                <path d="M2 7h2"></path>
                                                <path d="M7 2v2"></path>
                                            </svg>
                                            Link referencia: <strong><a :href="detailservices.refe_url_servicio" target="_blank" v-text="detailservices.refe_url_servicio"></a></strong>
                                        </div>
                                        <div class="mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler me-2 text-muted icon-tabler-note" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M13 20l7 -7"></path>
                                                <path d="M13 20v-6a1 1 0 0 1 1 -1h6v-7a2 2 0 0 0 -2 -2h-12a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7"></path>
                                            </svg>
                                            Nota adicional: <strong><span v-text="detailservices.notadetalle"></span></strong>
                                        </div>
                                        <div class="mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler me-2 text-muted icon-tabler-bell-exclamation" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M15 17h-11a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6a2 2 0 1 1 4 0a7 7 0 0 1 4 6v1.5"></path>
                                                <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                                                <path d="M19 16v3"></path>
                                                <path d="M19 22v.01"></path>
                                            </svg>
                                            Frecuencia renovacion: <strong><span v-text="detailservices.frecuencia_recordatorio_fecha"></span></strong>
                                        </div>
                                        <div class="mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path><path d="M16 3l0 4"></path><path d="M8 3l0 4"></path><path d="M4 11l16 0"></path><path d="M11 15l1 0"></path><path d="M12 15l0 3"></path></svg>
                                            Fecha adquisición: <strong><span v-text="detailservices.fechainicio"></span></strong>
                                        </div>
                                        <div class="mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler me-2 text-muted icon-tabler-calendar-event" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
                                                <path d="M16 3l0 4"></path>
                                                <path d="M8 3l0 4"></path>
                                                <path d="M4 11l16 0"></path>
                                                <path d="M8 15h2v2h-2z"></path>
                                            </svg>
                                            Fecha anticipacion: <strong><span v-text="detailservices.fechaanticipo"></span></strong>
                                        </div>
                                        <div class="mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2 text-muted" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path><path d="M16 3l0 4"></path><path d="M8 3l0 4"></path><path d="M4 11l16 0"></path><path d="M11 15l1 0"></path><path d="M12 15l0 3"></path></svg>
                                            Fecha vencimiento: <strong><span v-text="detailservices.fechafin"></span></strong>
                                        </div>
                                        <div class="mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler me-2 text-muted icon-tabler-receipt-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2"></path>
                                                <path d="M14 8h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5m2 0v1.5m0 -9v1.5"></path>
                                            </svg>
                                            Precio: <strong><span class="flag flag-country-si"></span> <span v-text="detailservices.precio"></span></strong>
                                        </div>
                                        <div class="mb-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler me-2 text-muted icon-tabler-discount" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M9 15l6 -6"></path>
                                                <circle cx="9.5" cy="9.5" r=".5" fill="currentColor"></circle>
                                                <circle cx="14.5" cy="14.5" r=".5" fill="currentColor"></circle>
                                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                                            </svg>
                                            Descuento: <strong><span v-text="detailservices.descuento"></span></strong>
                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler me-2 text-muted icon-tabler-receipt-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2"></path>
                                                <path d="M14 8h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5m2 0v1.5m0 -9v1.5"></path>
                                            </svg>
                                            Total: <strong><span v-text="detailservices.importe"></span></strong>
                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler me-2 text-muted icon-tabler-circle-dashed" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M8.56 3.69a9 9 0 0 0 -2.92 1.95"></path>
                                                <path d="M3.69 8.56a9 9 0 0 0 -.69 3.44"></path>
                                                <path d="M3.69 15.44a9 9 0 0 0 1.95 2.92"></path>
                                                <path d="M8.56 20.31a9 9 0 0 0 3.44 .69"></path>
                                                <path d="M15.44 20.31a9 9 0 0 0 2.92 -1.95"></path>
                                                <path d="M20.31 15.44a9 9 0 0 0 .69 -3.44"></path>
                                                <path d="M20.31 8.56a9 9 0 0 0 -1.95 -2.92"></path>
                                                <path d="M15.44 3.69a9 9 0 0 0 -3.44 -.69"></path>
                                            </svg>
                                            Estado: <strong><span class="status" v-bind:style="{background: detailservices.estadoservicio.backgroundColor, color:detailservices.estadoservicio.textColor}" v-text="detailservices.estadoservicio.nombreestadoservicio"></span></strong>
                                        </div>
                                    </div>                           
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>

            <div>
                <p class="pt-5 mt-3 negrita"><b>IMPORTANTE:</b></p>
                <p>Si no muestra la informacion correcta por favor ponerse en contacto mediante nuestra línea de soporte <a class="negrita" href="mailto:soporte@padin.com.pe">soporte@padin.com.pe</a><br>
                </p>
               <p>Puede ver mas informacion sobre nosotros en : <a href="https://padin.com.pe">Padin.com.pe</a></p>
               <br>
               <p class="h4"><strong class="font-weight-bold text-danger">IMPORTANTE:</strong> Si tienes inconvenientes para visualizar la información de su servicio, puedes seguir estos pasos:
                    <ol class="h5 mt-3">
                        <li class="mb-2">Limpiar tu memoria temporal, si estas en un ordenador presionando CTRL+F5 o directamente desde la configuración del mismo navegador.</li> 
                        <li>Si estas en un dispositivo móvil puedes limpiar tu memoria temporal desde la configuración de tu aplicación móvil del navegador o abriendo la página en una ventana incógnita.</li>
                    </ol>
                </p>
               <br>
            </div>
        </div>
    </div>
</template>
<script>

export default {
    data() {
        return {
            servicios: [],
            servicio: {
                /* numero: '',
                serie: 'V001', */
                email: ''
            },
            cliente:[],
            filters:{},
            errors: [],
        }
    },
    methods: {
        listarServicio() {
            if (this.validateFields().length > 0) {
                return;
            }

            showPreloader();
            let vm = this;
            axios.get(`${appApiUrl}/buscarservicio/search`, {
                params: this.filters
            })
            .then(function (response) {
                hidePreloader();

                vm.servicios = response.data;
                vm.cliente = vm.servicios[0].cliente;
                console.log(vm.servicios)

            })
            .catch(function (error) {
                hidePreloader();
                console.log(error);
            });

        },
        buscarServicio() {
            
            this.filters = {};
            /* if (this.venta.numero.length)
                this.filters.numero = this.venta.numero;

            if (this.venta.serie.length)
                this.filters.serie = this.venta.serie; */

            if (this.servicio.email.length)
                this.filters.email = this.servicio.email;

            
            this.listarServicio();
        },

        validateFields() {
            this.errors = [];
            const emailRegex = /^\S+@\S+\.\S+$/;

            !this.servicio.email ? this.setError('email', 'El campo Correo es obligatorio') :
             emailRegex.test(this.servicio.email) ? null : 
             this.setError('email', 'El campo Correo no es válido');


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
    mounted() {

    }
}
</script>