<template>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards justify-content-center">
                <div :class="columnClass">
                <div class="card">
                    <div class="card-body">
                        <ol class="breadcrumb breadcrumb-arrows">
                            <li v-for="step in steps" class="breadcrumb-item" :class="step.active">
                                <router-link :to="{name:`${step.spa}`}" v-text="step.name"> </router-link>
                            </li>
        <!--                     <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                            <li class="breadcrumb-item "><router-link :to="{name: 'spa.user'}">User</router-link></li>
                            <li class="breadcrumb-item active"><a>Editar usuario</a></li>
                            <li class="breadcrumb-item disabled"><a href="#">Step three</a></li>
                            <li class="breadcrumb-item disabled"><a href="#">Step four</a></li> -->
                        </ol>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default{
        props:{
            steps:{
                default:Object,
            },
            columnClass: {
                default: 'col-12'
            },
        },        
    }
</script>