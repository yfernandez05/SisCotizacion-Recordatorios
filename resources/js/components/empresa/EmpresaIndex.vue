<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">BIENVENIDO AL SISTEMA</div>                        
                    <div class="card-body">
                        <h5 class="counter text-primary mb-1" v-text="authenticatedUser.name"></h5>
                        <p class="counter" v-text="authenticatedUser.email"></p>
                        <!-- <button type="button" class="btn" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
                        Tooltip on right
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                        Tooltip on top
                        </button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
