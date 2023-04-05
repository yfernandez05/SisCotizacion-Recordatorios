<template>
    <form-tipo-documento :steps="steps" :loadingholder="loadingholder" cardTitle="Editar Documento de Identidad" cardSubTitle="Aqui podras editar la información del registro con el documento identidad seleccionado." :tipodocumento="tipodocumento" @saveData="saveData">
    </form-tipo-documento>
</template>

<script>
    import FormTipoDocumento from './_FormTipoDocumento.vue';

    export default {
        data() {
            return {
                tipodocumento: {},
                steps:[
                    {name:'Inicio', spa:'spa'},
                    {name:'Documento de Identidad', spa:'spa.tipodocumento'},
                    {name:'Editar Documento de Identidad', active:'active', spa:``}
                ],
                loadingholder: true,
            }
        },
        created() {
            this.tipodocumento.iddocumento = this.$route.params.id;

            if (isNaN(this.tipodocumento.iddocumento)) {
                this.$router.push({
                    name: 'spa.tipodocumento'
                });
            }

            this.obtenerTipoDocuemento(this.tipodocumento.iddocumento);
        },
        methods: {
            obtenerTipoDocuemento(id) {
                showPreloader();

                let vm = this;
                axios.get(`${appApiUrl}/tipodocumento/${id}`)
                    .then(function (response) {
                        hidePreloader();
                        if (response.data == null || response.data == '') {
                            warningMessage(`No se encontró ningún Documento de Identidad con el código ${id}`, appName);

                            vm.$router.push({
                                name: 'spa.tipodocumento'
                            });
                        }
                        vm.tipodocumento = response.data;
                        vm.loadingholder = false;
                    })
                    .catch(function (error) {
                        hidePreloader();
                        errorMessage(appErrorMessage, appName);

                        vm.$router.push({
                            name: 'spa.tipodocumento'
                        });
                        console.log(error);
                    })
            },
            saveData(event) {
                showPreloader();
               
                let vm = this;
                axios.put(`${appApiUrl}/tipodocumento/${this.tipodocumento.iddocumento}`, event)
                    .then(function (response) {
                        hidePreloader();
         
                        let result = response.data;

                        if (result.status) {
                            successMessage(result.message, appName);

                            vm.$router.push({
                                name: 'spa.tipodocumento'
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
            FormTipoDocumento
        }
    }

</script>


