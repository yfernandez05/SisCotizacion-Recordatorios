<template>
    <form-cliente cardTitle="Registrar Cliente" :loadingholder="loadingholder" cardSubTitle="Aqui podras registrar a un nuevo cliente rellenando el formulario" :steps="steps" @saveData="saveData">
    </form-cliente>
</template>

<script>
import FormCliente from './_FormCliente.vue';

export default {
    data() {
        return {
            steps:[
                {name:'Inicio', spa:'spa'},
                {name:'Cliente', spa:'spa.cliente'},
                {name:'Registrar Cliente',active:'active', spa:``}
            ],
            loadingholder: true,
        }
    },
    methods: {
            saveData(event) {
                showPreloader();
                //console.log('save data', event);
                let vm = this;
                axios.post(`${appApiUrl}/cliente`, event)
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
        mounted(){this.loadingholder = false},
        components: {
            FormCliente
        }
}
</script>