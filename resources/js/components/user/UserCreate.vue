<template>
    <form-user :loadingholder="loadingholder" cardTitle="Registrar Usuario" cardSubTitle="Aqui podras registrar a un nuevo usuario rellenando el fomrulario" :steps="steps" @saveData="saveData">

    </form-user>
</template>

<script>
import FormUser from './_FormUser.vue';

export default {
    data() {
        return {
            steps:[
                {name:'Inicio', spa:'spa'},
                {name:'Usuario', spa:'spa.user'},
                {name:'Registrar Usuario',active:'active', spa:``}
            ],
            loadingholder: true,
        }
    },
    methods: {
            saveData(event) {
                showPreloader();
                //console.log('save data', event);
                let vm = this;
                axios.post(`${appApiUrl}/user`, event)
                    .then(function (response) {
                        hidePreloader();
                        let result = response.data;

                        if (result.status) {
                            successMessage(result.message, appName);

                            vm.$router.push({
                                name: 'spa.user'
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
        mounted(){
            this.loadingholder = false
        },
        components: {
            FormUser
        }
}
</script>