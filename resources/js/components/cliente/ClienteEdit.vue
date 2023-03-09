<template>
    <form-cliente :cliente="cliente" cardTitle="Editar Cliente" :loadingholder="loadingholder" cardSubTitle="Aqui podras editar la informacion de un cliente modificando los campos del formulario" :steps="steps" @saveData="saveData">
    </form-cliente>
</template>

<script>
import FormCliente from './_FormCliente.vue';

export default {
        data() {
            return {
                cliente: {},
                steps:[
                    {name:'Inicio', spa:'spa'},
                    {name:'Cliente', spa:'spa.cliente'},
                    {name:'Editar Cliente',active:'active', spa:``}
                ],
                loadingholder: true,
            }
        },
        created() {
            this.cliente.codcliente = this.$route.params.id;

            if (isNaN(this.cliente.codcliente)) {
                this.$router.push({
                    name: 'spa.rol'
                });
            }

            this.obtenerCliente(this.cliente.codcliente);
        },
        methods: {
            obtenerCliente(id) {
                showPreloader();

                let vm = this;
                axios.get(`${appApiUrl}/cliente/${id}`)
                    .then(function (response) {
                        hidePreloader();
                        if (response.data == null || response.data == '') {
                            warningMessage(`No se encontró ningúna Cliente con el código ${id}`, appName);

                            vm.$router.push({
                                name: 'spa.cliente'
                            });
                        }
                        vm.cliente = response.data;
                        vm.loadingholder = false;
                    })
                    .catch(function (error) {
                        hidePreloader();
                        errorMessage(appErrorMessage, appName);

                        vm.$router.push({
                            name: 'spa.cliente'
                        });
                        console.log(error);
                    })
            },
            saveData(event) {
                showPreloader();
               
                let vm = this;
                axios.put(`${appApiUrl}/cliente/${this.cliente.codcliente}`, event)
                    .then(function (response) {
                        hidePreloader();
         
                        let result = response.data;

                        if (result.status) {
                            successMessage(result.message, appName);

                            vm.$router.push({
                                name: 'spa.cliente'
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
            FormCliente
        }
    }

</script>