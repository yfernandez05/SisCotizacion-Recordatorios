<template>
    <div class="container-fluid px-3">
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
                </div>
            </div>
            <div :class="columnClass">
                <div class="card">
                    <div class="card-header" :class="headerBgClass">
                        <div>
                            <h3 class="card-title" :class="colorTitle">
                                <slot name="card-header-titleD"></slot>
                            </h3>
                            <p class="card-subtitle">
                                <slot name="card-header-subtitleD"></slot>
                            </p>
                        </div>
                        <div class="card-actions">
                            <slot name="card-header-actionsD"></slot>
                        </div>
                    </div>
                    <div class="card-body">
                        <slot name="card-body-mainD"></slot>
                    </div>
                    <div class="card-footer text-end">
                        <div class="d-flex justify-content-between no-block">
                            <slot name="card-body-actionsD"></slot>
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
