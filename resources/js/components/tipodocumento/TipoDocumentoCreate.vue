<template>
    <form-tipo-documento cardTitle="Registrar Documento de Identidad" :loadingholder="loadingholder" cardSubTitle="Aqui podras registrar a un nuevo documento de identidad rellenando el formulario" :steps="steps" @saveData="saveData">

    </form-tipo-documento>
</template>

<script>
import FormTipoDocumento from './_FormTipoDocumento.vue';

export default {
    data() {
        return {
            steps:[
                {name:'Inicio', spa:'spa'},
                {name:'Documento de Identidad', spa:'spa.tipodocumento'},
                {name:'Registrar Documento de Identidad',active:'active', spa:``}
            ],
            loadingholder: true,
        }
    },
    methods: {
            saveData(event) {
                showPreloader();
                //console.log('save data', event);
                let vm = this;
                axios.post(`${appApiUrl}/tipodocumento`, event)
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
        mounted(){this.loadingholder = false},
        components: {
            FormTipoDocumento
        }
}
</script>