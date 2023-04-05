<template>
    <form-rol cardTitle="Registrar Rol" :loadingholder="loadingholder" cardSubTitle="Aqui podras registrar a un nuevo usuario rellenando el fomrulario" :steps="steps" @saveData="saveData">

    </form-rol>
</template>

<script>
import FormRol from './_FormRol.vue';

export default {
    data() {
        return {
            steps:[
                {name:'Inicio', spa:'spa'},
                {name:'Rol', spa:'spa.rol'},
                {name:'Registrar Rol',active:'active', spa:``}
            ],
            loadingholder: true,
        }
    },
    methods: {
            saveData(event) {
                showPreloader();
                //console.log('save data', event);
                let vm = this;
                axios.post(`${appApiUrl}/rol`, event)
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
        mounted(){this.loadingholder = false},
        components: {
            FormRol
        }
}
</script>