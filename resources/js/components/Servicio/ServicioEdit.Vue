<template>
    <form-servicio :is-editing="true" :serviciodetalles="serviciodetalle" :steps="steps" :loadingholder="loadingholder" cardTitle="Editar Servicio" cardSubTitle="Aqui podras editar la información del del registro con el servicio seleccionado." :servicio="servicio" :cliente="cliente" :clienteSeleccionado="cliente" @saveData="saveData">
    </form-servicio>
</template>
<script>
    import FormServicio from './_FormServicio.vue';
    import moment,{ now } from 'moment';

    export default {
        data() {
            return {
                servicio: {},
                cliente: {},
                serviciodetalle: [],
                steps:[
                    {name:'Inicio', spa:'spa'},
                    {name:'Servicio', spa:'spa.servicio'},
                    {name:'Editar Servicio', active:'active', spa:``}
                ],
                loadingholder: true,
            }
        },
        created() {
            this.servicio.codservicio = this.$route.params.id;

            if (isNaN(this.servicio.codservicio)) {
                this.$router.push({
                    name: 'spa.servicio'
                });
            }

            this.obtenerServicio(this.servicio.codservicio);
        },
        methods: {
            obtenerServicio(id) {
                showPreloader();

                let vm = this;
                axios.get(`${appApiUrl}/servicio/${id}`)
                    .then(function (response) {
                        hidePreloader();
                        if (response.data == null || response.data == '') {
                            warningMessage(`No se encontró ningúna servicio con el código ${id}`, appName);

                            vm.$router.push({
                                name: 'spa.servicio'
                            });
                        }
                        vm.servicio = response.data;
                        vm.servicio.fecha_servicio = vm.formatDate(vm.servicio.fecha_servicio, 'DD-MM-YYYY');
                        vm.servicio.fecha_anticipadogeneral = vm.formatDate(vm.servicio.fecha_anticipadogeneral, 'DD-MM-YYYY');
                        vm.servicio.fecha_fingeneral = vm.formatDate(vm.servicio.fecha_fingeneral, 'DD-MM-YYYY');
                        vm.servicio.fecha_finsercanogeneral = vm.formatDate(vm.servicio.fecha_finsercanogeneral, 'DD-MM-YYYY');
                        //console.log(vm.servicio);
                        vm.cliente = vm.servicio.cliente;
                        vm.serviciodetalle = vm.servicio.serviciodetalles;
                        console.log(vm.serviciodetalle);
                        vm.loadingholder = false;
                    })
                    .catch(function (error) {
                        hidePreloader();
                        errorMessage(appErrorMessage, appName);

                        vm.$router.push({
                            name: 'spa.servicio'
                        });
                        console.log(error);
                    })
            },

            saveData(event) {
                showPreloader();
                
                let vm = this;
                axios.put(`${appApiUrl}/servicio/${this.servicio.codservicio}`, event)
                    .then(function (response) {
                        hidePreloader();
            
                        let result = response.data;

                        if (result.status) {
                            successMessage(result.message, appName);

                            vm.$router.push({
                                name: 'spa.servicio'
                            });
                        } else
                            errorMessage(result.message, appName);
                    })
                    .catch(function (error) {
                        hidePreloader();
                        errorMessage(appErrorMessage, appName);
                        console.log(error);
                    })
            },

            formatDate (value, fmt = 'D MMM YYYY') {
                return (value == null)
                    ? ''
                    : moment(value, 'YYYY-MM-DD').format(fmt)
            },
        },
        components: {
            FormServicio
        }
    }
</script>