<template>
    <form-tipo-servicio cardTitle="Registrar Tipo Servicio" :loadingholder="loadingholder" cardSubTitle="Aqui podras registrar a un nuevo servicio rellenando el formulario" :steps="steps" @saveData="saveData">
    </form-tipo-servicio>
</template>

<script>
import FormTipoServicio from './_FormTipoServicio.vue';

export default {
    data() {
        return {
            steps:[
                {name:'Inicio', spa:'spa'},
                {name:'Servicio', spa:'spa.servicio'},
                {name:'Registrar Tipo de Servicio',active:'active', spa:``}
            ],
            loadingholder: true,
        }
    },
    methods: {
            saveData(event) {
                showPreloader();
                //console.log('save data', event);
                let vm = this;
                axios.post(`${appApiUrl}/tiposervicio`, event)
                    .then(function (response) {
                        hidePreloader();
                        let result = response.data;

                        if (result.status) {
                            successMessage(result.message, appName);

                            vm.$router.push({
                                name: 'spa.tiposervicio'
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
            FormTipoServicio
        }
}
</script>