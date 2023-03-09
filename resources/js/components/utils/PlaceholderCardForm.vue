<template>
    <div v-if="loadingholder">
        <div class="container-xl">
            <div class="row row-cards justify-content-center">
                <div class="col-12 col-md-10 col-lg-8 col-xl-9">
                    <div class="card placeholder-glow">
                        <div class="ratio ratio-3x12 card-img-top placeholder"></div>
                        <div class="card-body">
                            <div class="placeholder col-9 mb-3"></div>
                            <div class="placeholder placeholder-xs col-10"></div>
                            <div class="placeholder placeholder-xs col-11"></div>
                            <div class="placeholder placeholder-xs col-11"></div>
                            <div class="placeholder placeholder-xs col-10"></div>
                            <div class="mt-5 d-flex justify-content-between no-block">
                                <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-3 py-3" aria-hidden="true"></a>
                                <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-4 py-3" aria-hidden="true"></a>
                            </div>
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
        loadingholder: {
            default: true
        },
    }
}
</script>

