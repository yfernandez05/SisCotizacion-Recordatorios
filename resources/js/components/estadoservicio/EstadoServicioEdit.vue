<template>
    <form-estado-servicio :steps="steps" :loadingholder="loadingholder" cardTitle="Editar Estado Servicio" cardSubTitle="Aqui podras editar la información del del registro con estado de servicio seleccionado." :estadoservicio="estadoservicio" @saveData="saveData">
    </form-estado-servicio>
</template>

<script>
    import FormEstadoServicio from './_FormEstadoServicio.vue';

    export default {
        data() {
            return {
                estadoservicio: {},
                steps:[
                    {name:'Inicio', spa:'spa'},
                    {name:'Estado de Servicio', spa:'spa.estadoservicio'},
                    {name:'Editar Estado de Servicio', active:'active', spa:``}
                ],
                loadingholder: true,
            }
        },
        created() {
            this.estadoservicio.codestadoservicio = this.$route.params.id;

            if (isNaN(this.estadoservicio.codestadoservicio)) {
                this.$router.push({
                    name: 'spa.tiposervicio'
                });
            }

            this.obtenerEsatadoServicio(this.estadoservicio.codestadoservicio);
        },
        methods: {
            obtenerEsatadoServicio(id) {
                showPreloader();

                let vm = this;
                axios.get(`${appApiUrl}/estadoservicio/${id}`)
                    .then(function (response) {
                        hidePreloader();
                        if (response.data == null || response.data == '') {
                            warningMessage(`No se encontró ningún Estado de Servicio con el código ${id}`, appName);

                            vm.$router.push({
                                name: 'spa.estadoservicio'
                            });
                        }
                        vm.estadoservicio = response.data;
                        vm.loadingholder = false;
                    })
                    .catch(function (error) {
                        hidePreloader();
                        errorMessage(appErrorMessage, appName);

                        vm.$router.push({
                            name: 'spa.estadoservicio'
                        });
                        console.log(error);
                    })
            },
            saveData(event) {
                showPreloader();
               
                let vm = this;
                axios.put(`${appApiUrl}/estadoservicio/${this.estadoservicio.codestadoservicio}`, event)
                    .then(function (response) {
                        hidePreloader();
         
                        let result = response.data;

                        if (result.status) {
                            successMessage(result.message, appName);

                            vm.$router.push({
                                name: 'spa.estadoservicio'
                            });
                        } else
                            errorMessage(result.message, appName);
                    })
                    .catch(function (error) {
                        hidePreloader();
                        errorMessage(appErrorMessage, appName);
                        console.log(error);
                    })
            }
        },
        components: {
            FormEstadoServicio
        }
    }

</script>


