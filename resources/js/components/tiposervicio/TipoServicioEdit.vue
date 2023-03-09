<template>
    <form-tipo-servicio :steps="steps" :loadingholder="loadingholder" cardTitle="Editar Tipo Servicio" cardSubTitle="Aqui podras editar la información del del registro con el tipo de servicio seleccionado." :servicio="servicio" @saveData="saveData">
    </form-tipo-servicio>
</template>

<script>
    import FormTipoServicio from './_FormTipoServicio.vue';

    export default {
        data() {
            return {
                servicio: {},
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
                axios.get(`${appApiUrl}/tiposervicio/${id}`)
                    .then(function (response) {
                        hidePreloader();
                        if (response.data == null || response.data == '') {
                            warningMessage(`No se encontró ningún Servicio con el código ${id}`, appName);

                            vm.$router.push({
                                name: 'spa.tiposervicio'
                            });
                        }
                        vm.servicio = response.data;
                        vm.loadingholder = false;
                    })
                    .catch(function (error) {
                        hidePreloader();
                        errorMessage(appErrorMessage, appName);

                        vm.$router.push({
                            name: 'spa.tiposervicio'
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
            }
        },
        components: {
            FormTipoServicio
        }
    }

</script>


