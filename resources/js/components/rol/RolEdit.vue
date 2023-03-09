<template>
    <form-rol :steps="steps" :loadingholder="loadingholder" cardTitle="Editar Rol" cardSubTitle="Aqui podras editar la información del del registro con el rol seleccionado." :rol="rol" @saveData="saveData">
    </form-rol>
</template>

<script>
    import FormRol from './_FormRol.vue';

    export default {
        data() {
            return {
                rol: {},
                steps:[
                    {name:'Inicio', spa:'spa'},
                    {name:'Rol', spa:'spa.rol'},
                    {name:'Editar Rol',active:'active', spa:``}
                ],
                loadingholder: true,
            }
        },
        created() {
            this.rol.idrol = this.$route.params.id;

            if (isNaN(this.rol.idrol)) {
                this.$router.push({
                    name: 'spa.rol'
                });
            }

            this.obtenerRol(this.rol.idrol);
        },
        methods: {
            obtenerRol(id) {
                showPreloader();

                let vm = this;
                axios.get(`${appApiUrl}/rol/${id}/edit`)
                    .then(function (response) {
                        hidePreloader();
                        if (response.data == null || response.data == '') {
                            warningMessage(`No se encontró ningúna Rol con el código ${id}`, appName);

                            vm.$router.push({
                                name: 'spa.rol'
                            });
                        }
                        vm.rol = response.data;
                        vm.loadingholder = false;
                    })
                    .catch(function (error) {
                        hidePreloader();
                        errorMessage(appErrorMessage, appName);

                        vm.$router.push({
                            name: 'spa.rol'
                        });
                        console.log(error);
                    })
            },
            saveData(event) {
                showPreloader();
               
                let vm = this;
                axios.put(`${appApiUrl}/rol/${this.rol.idrol}`, event)
                    .then(function (response) {
                        hidePreloader();
         
                        let result = response.data;

                        if (result.status) {
                            successMessage(result.message, appName);

                            vm.$router.push({
                                name: 'spa.rol'
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
            FormRol
        }
    }

</script>


