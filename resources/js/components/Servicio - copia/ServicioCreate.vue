<template>
    <form-servicio cardTitle="Registrar Servicio" :loadingholder="loadingholder" cardSubTitle="Aqui podras registrar un nuevo servicio rellenando el formulario" :steps="steps" @saveData="saveData">
    </form-servicio>
</template>

<script>
import FormServicio from './_FormServicio.vue';

export default {
    data() {
        return {
            steps:[
                {name:'Inicio', spa:'spa'},
                {name:'Servicio', spa:'spa.servicio'},
                {name:'REgistrar Servicio',active:'active', spa:``}
            ],
            loadingholder: true,
        }
    },
    methods: {
            saveData(event) {
                showPreloader();
                //console.log('save data', event);
                let vm = this;
                axios.post(`${appApiUrl}/servicio`, event)
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
        mounted(){this.loadingholder = false},
        components: {
            FormServicio
        }
}
</script>