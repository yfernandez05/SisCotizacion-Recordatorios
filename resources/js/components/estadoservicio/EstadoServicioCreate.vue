<template>
    <form-estado-servicio cardTitle="Registrar Estado Servicio" :loadingholder="loadingholder" cardSubTitle="Aqui podras registrar a un nuevo estado de servicio rellenando el formulario" :steps="steps" @saveData="saveData">
    </form-estado-servicio>
</template>

<script>
import FormEstadoServicio from './_FormEstadoServicio.vue';

export default {
    data() {
        return {
            steps:[
                {name:'Inicio', spa:'spa'},
                {name:'Estado de Servicio', spa:'spa.estadoservicio'},
                {name:'Registrar Estado de Servicio',active:'active', spa:``}
            ],
            loadingholder: true,
        }
    },
    methods: {
            saveData(event) {
                showPreloader();
                //console.log('save data', event);
                let vm = this;
                axios.post(`${appApiUrl}/estadoservicio`, event)
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
        mounted(){this.loadingholder = false},
        components: {
            FormEstadoServicio
        }
}
</script>