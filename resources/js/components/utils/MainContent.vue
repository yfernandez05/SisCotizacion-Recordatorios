<template>
    <div class="container-xl">
        <div class="row row-cards justify-content-center">
            <div :class="columnClass">
                <div class="card">
                    <div class="card-header" :class="headerBgClass">
                        <div>
                            <h3 class="card-title" :class="colorTitle">
                                <slot name="card-header-title"></slot>
                            </h3>
                            <p class="card-subtitle">
                                <slot name="card-header-subtitle"></slot>
                            </p>
                        </div>
                        <div class="card-actions">
                            <slot name="card-header-actions"></slot>
                        </div>
                    </div>
                    <div class="card-body">
                        <slot name="card-body-main"></slot>
                    </div>
                    <div class="card-footer text-end">
                        <div class="d-flex justify-content-between no-block">
                            <slot name="card-body-actions"></slot>
                        </div>                            
                    </div>
                </div>
            </div>
        </div>   
    </div>

</template>


<script>

    export default {
        props: {
            columnClass: {
                default: 'col-12'
            },
            headerBgClass:{
                default: 'bg-dark'
            },
            colorTitle:{
                default: ''
            }
        }
    }
</script>
