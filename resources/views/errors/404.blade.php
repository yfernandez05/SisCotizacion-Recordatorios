@extends('layouts.auth')
@section('title', '- Pagina no encontrada')

@section('style')
<style>
  .theme-dark .row.g-0.flex-fill.bg-white{
    /* --tblr-white-rgb : */
    background-color: #1a2234 !important;
  }
  .row.g-0.flex-fill.bg-white{
    height: 100vh;
  }

@media (max-width: 767px){
    .text-404{
        top: 10% !important;
        font-size: 1.5em !important;
    }
    .title-404{
        /* bottom: 4em !important; */
        left: 1em !important;
    }
    /* .title-404 h2{

    } */
}
.theme-dark .text-404{
    color: white;
    filter: drop-shadow(2px 4px 6px #142e35);
}
.theme-dark .title-404{
    color: #172233;
    filter: drop-shadow(2px 4px 6px #9e9e9e);
}
  .text-404{
   /*  width: 20em; */
    position: absolute;
    /* display: flex; */
    left: 0;
    right: 0;
    bottom: auto;
    margin: auto;
    text-align: center;
    top: 50px;
    color: #056f94;
    font-size: 2.5em;
    font-weight: bold;
  }
  .title-404{
    position: absolute;
    text-align: center;
    /* width: 100%; */
    /* background-color: red; */
    left: 5em;
    right: 0;
    bottom: auto;
    margin: auto;
    text-align: center;
  }
  .title-404 h2{
    font-size: 3em;
    line-height: 1em;
  }
  .bg-404{
    /* background-color: darkgray; */
    height: 100%;
    display: flex;
    justify-content: center;
    align-content: center;
    align-items: center;
  }
  .bg-404 .svg-bg-404{
    width: 100%;
    /* height: auto; */
    align-self: center;
    height: 100vh;
    min-height: 100vh;
  }
</style>
@endsection


@section('content')
    <div class="row g-0 flex-fill bg-white">
      <div class="col-12">
        <div class="text-404">
            <p>Ups...</p>
            <p>Lo siento, la pagina no fue encuentrada</p>
        </div>
        <div class="bg-404">            
                <div class="title-404">
                    <h2>Error</h2>
                    <h2 class="fw-bolder">404</h2>
                    <div class="empty-action">
                        <a href="{{url('/')}}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
                            Regresar
                        </a>
                    </div>
                </div>
            <svg viewBox="0 0 1000 666.66669" height="666.66669" width="1000" id="svg2" class="svg-bg-404" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <defs id="defs6">
                    <clipPath id="clipPath18" clipPathUnits="userSpaceOnUse">
                    <path id="path16" d="M 0,500 H 750 V 0 H 0 Z"/>
                    </clipPath>
                    <clipPath id="clipPath2858" clipPathUnits="userSpaceOnUse">
                    <path id="path2856" d="M 0,500 H 750 V 0 H 0 Z"/>
                    </clipPath>
                    <clipPath id="clipPath2874" clipPathUnits="userSpaceOnUse">
                    <path id="path2872" d="M 0,500 H 750 V 0 H 0 Z"/>
                    </clipPath>
                    <clipPath id="clipPath3010" clipPathUnits="userSpaceOnUse">
                    <path id="path3008" d="M 0,500 H 750 V 0 H 0 Z"/>
                    </clipPath>
                    <clipPath id="clipPath3022" clipPathUnits="userSpaceOnUse">
                    <path id="path3020" d="m 584.288,445.923 h 81.788 v -56.637 h -81.788 z"/>
                    </clipPath>
                    <clipPath id="clipPath3038" clipPathUnits="userSpaceOnUse">
                    <path id="path3036" d="m 596.542,412.796 h 69.657 v -37.919 h -69.657 z"/>
                    </clipPath>
                    <clipPath id="clipPath3054" clipPathUnits="userSpaceOnUse">
                    <path id="path3052" d="m 586.941,456.471 h 56.776 v -26.3 h -56.776 z"/>
                    </clipPath>
                    <clipPath id="clipPath3070" clipPathUnits="userSpaceOnUse">
                    <path id="path3068" d="m 615.113,456.219 h 51.153 v -81.402 h -51.153 z"/>
                    </clipPath>
                    <clipPath id="clipPath3094" clipPathUnits="userSpaceOnUse">
                    <path id="path3092" d="m 179.204,445.654 h 23.658 v -32.037 h -23.658 z"/>
                    </clipPath>
                    <clipPath id="clipPath3110" clipPathUnits="userSpaceOnUse">
                    <path id="path3108" d="m 156.448,438.864 h 18.296 v -27.195 h -18.296 z"/>
                    </clipPath>
                    <clipPath id="clipPath3126" clipPathUnits="userSpaceOnUse">
                    <path id="path3124" d="m 183.302,458.212 h 29.206 v -25.341 h -29.206 z"/>
                    </clipPath>
                    <clipPath id="clipPath3142" clipPathUnits="userSpaceOnUse">
                    <path id="path3140" d="m 198.198,423.92 h 4.757 v -5.704 h -4.757 z"/>
                    </clipPath>
                    <clipPath id="clipPath3158" clipPathUnits="userSpaceOnUse">
                    <path id="path3156" d="m 174.671,463.598 h 10.446 v -8.89 h -10.446 z"/>
                    </clipPath>
                    <clipPath id="clipPath3174" clipPathUnits="userSpaceOnUse">
                    <path id="path3172" d="m 156.875,456.428 h 15.453 v -16.661 h -15.453 z"/>
                    </clipPath>
                    <clipPath id="clipPath3190" clipPathUnits="userSpaceOnUse">
                    <path id="path3188" d="m 169.199,459.439 h 43.309 v -52.15 h -43.309 z"/>
                    </clipPath>
                    <clipPath id="clipPath3210" clipPathUnits="userSpaceOnUse">
                    <path id="path3208" d="M 631.395,107.83 H 645.39 V 99.4648 H 631.395 Z"/>
                    </clipPath>
                    <clipPath id="clipPath3226" clipPathUnits="userSpaceOnUse">
                    <path id="path3224" d="m 635.436,100.95 h 4.119 v -4.1688 h -4.119 z"/>
                    </clipPath>
                    <clipPath id="clipPath3242" clipPathUnits="userSpaceOnUse">
                    <path id="path3240" d="m 629.588,98.046 h 4.476 v -4.3124 h -4.476 z"/>
                    </clipPath>
                    <clipPath id="clipPath3258" clipPathUnits="userSpaceOnUse">
                    <path id="path3256" d="m 628.82,90.2558 h 2.599 v -3.1636 h -2.599 z"/>
                    </clipPath>
                    <clipPath id="clipPath3274" clipPathUnits="userSpaceOnUse">
                    <path id="path3272" d="m 633.014,90.9953 h 4.622 V 86.572 h -4.622 z"/>
                    </clipPath>
                    <clipPath id="clipPath3290" clipPathUnits="userSpaceOnUse">
                    <path id="path3288" d="m 632.379,87.9445 h 1.316 v -1.6228 h -1.316 z"/>
                    </clipPath>
                    <clipPath id="clipPath3306" clipPathUnits="userSpaceOnUse">
                    <path id="path3304" d="m 633.19,88.0286 h 0.309 v -0.1324 h -0.309 z"/>
                    </clipPath>
                    <clipPath id="clipPath3322" clipPathUnits="userSpaceOnUse">
                    <path id="path3320" d="m 625.112,94.1358 h 2.574 v -8.1825 h -2.574 z"/>
                    </clipPath>
                    <clipPath id="clipPath3338" clipPathUnits="userSpaceOnUse">
                    <path id="path3336" d="m 625.223,85.4091 h 5.853 v -7.4765 h -5.853 z"/>
                    </clipPath>
                    <clipPath id="clipPath3354" clipPathUnits="userSpaceOnUse">
                    <path id="path3352" d="m 632.873,83.2908 h 2.453 v -4.0235 h -2.453 z"/>
                    </clipPath>
                    <clipPath id="clipPath3370" clipPathUnits="userSpaceOnUse">
                    <path id="path3368" d="m 653.338,103.319 h 4.724 v -3.3734 h -4.724 z"/>
                    </clipPath>
                    <clipPath id="clipPath3386" clipPathUnits="userSpaceOnUse">
                    <path id="path3384" d="m 652.339,94.8389 h 12.252 V 79.4084 h -12.252 z"/>
                    </clipPath>
                    <clipPath id="clipPath3402" clipPathUnits="userSpaceOnUse">
                    <path id="path3400" d="m 662.269,94.8627 h 2.394 v -2.4476 h -2.394 z"/>
                    </clipPath>
                    <clipPath id="clipPath3418" clipPathUnits="userSpaceOnUse">
                    <path id="path3416" d="m 664.722,90.5467 h 1.681 v -2.5545 h -1.681 z"/>
                    </clipPath>
                    <clipPath id="clipPath3434" clipPathUnits="userSpaceOnUse">
                    <path id="path3432" d="m 636.262,94.0574 h 1.176 v -1.199 h -1.176 z"/>
                    </clipPath>
                    <clipPath id="clipPath3450" clipPathUnits="userSpaceOnUse">
                    <path id="path3448" d="m 637.39,96.5495 h 1.512 v -1.5416 h -1.512 z"/>
                    </clipPath>
                    <clipPath id="clipPath3466" clipPathUnits="userSpaceOnUse">
                    <path id="path3464" d="m 638.468,94.9929 h 3.731 v -7.6861 h -3.731 z"/>
                    </clipPath>
                    <clipPath id="clipPath3482" clipPathUnits="userSpaceOnUse">
                    <path id="path3480" d="m 633.482,85.64 h 3.317 v -2.8914 h -3.317 z"/>
                    </clipPath>
                    <clipPath id="clipPath3498" clipPathUnits="userSpaceOnUse">
                    <path id="path3496" d="m 637.266,85.8804 h 1.097 v -1.1616 h -1.097 z"/>
                    </clipPath>
                    <clipPath id="clipPath3514" clipPathUnits="userSpaceOnUse">
                    <path id="path3512" d="m 648.785,92.3228 h 3.553 v -5.4292 h -3.553 z"/>
                    </clipPath>
                    <clipPath id="clipPath3530" clipPathUnits="userSpaceOnUse">
                    <path id="path3528" d="m 649.772,85.823 h 1.541 v -1.849 h -1.541 z"/>
                    </clipPath>
                    <clipPath id="clipPath3546" clipPathUnits="userSpaceOnUse">
                    <path id="path3544" d="m 645.701,89.4698 h 3.128 v -5.1344 h -3.128 z"/>
                    </clipPath>
                    <clipPath id="clipPath3562" clipPathUnits="userSpaceOnUse">
                    <path id="path3560" d="m 665.752,96.5147 h 3.017 V 89.153 h -3.017 z"/>
                    </clipPath>
                    <clipPath id="clipPath3578" clipPathUnits="userSpaceOnUse">
                    <path id="path3576" d="m 656.844,80.0394 h 5.263 v -5.2348 h -5.263 z"/>
                    </clipPath>
                    <clipPath id="clipPath3594" clipPathUnits="userSpaceOnUse">
                    <path id="path3592" d="m 651.41,97.0636 h 2.8 V 94.089 h -2.8 z"/>
                    </clipPath>
                    <clipPath id="clipPath3610" clipPathUnits="userSpaceOnUse">
                    <path id="path3608" d="m 655.301,74.3434 h 5.643 v -5.222 h -5.643 z"/>
                    </clipPath>
                    <clipPath id="clipPath3626" clipPathUnits="userSpaceOnUse">
                    <path id="path3624" d="m 661.108,76.6603 h 2.524 v -2.7692 h -2.524 z"/>
                    </clipPath>
                    <clipPath id="clipPath3642" clipPathUnits="userSpaceOnUse">
                    <path id="path3640" d="m 662.731,79.0615 h 0.904 v -0.984 h -0.904 z"/>
                    </clipPath>
                    <clipPath id="clipPath3658" clipPathUnits="userSpaceOnUse">
                    <path id="path3656" d="m 664.781,82.9385 h 4.014 v -9.8209 h -4.014 z"/>
                    </clipPath>
                    <clipPath id="clipPath3674" clipPathUnits="userSpaceOnUse">
                    <path id="path3672" d="m 665.582,86.2621 h 3.419 v -2.6235 h -3.419 z"/>
                    </clipPath>
                    <clipPath id="clipPath3690" clipPathUnits="userSpaceOnUse">
                    <path id="path3688" d="m 666.901,88.5685 h 1.318 v -1.6827 h -1.318 z"/>
                    </clipPath>
                    <clipPath id="clipPath3706" clipPathUnits="userSpaceOnUse">
                    <path id="path3704" d="m 662.277,82.4295 h 2.663 v -2.1279 h -2.663 z"/>
                    </clipPath>
                    <clipPath id="clipPath3722" clipPathUnits="userSpaceOnUse">
                    <path id="path3720" d="m 630.354,93.5985 h 3.626 v -2.0088 h -3.626 z"/>
                    </clipPath>
                    <clipPath id="clipPath3738" clipPathUnits="userSpaceOnUse">
                    <path id="path3736" d="m 628.034,100.307 h 2.495 v -3.4105 h -2.495 z"/>
                    </clipPath>
                    <clipPath id="clipPath3754" clipPathUnits="userSpaceOnUse">
                    <path id="path3752" d="m 635.453,77.1662 h 7.732 V 72.403 h -7.732 z"/>
                    </clipPath>
                    <clipPath id="clipPath3770" clipPathUnits="userSpaceOnUse">
                    <path id="path3768" d="m 638.207,78.1536 h 1.93 v -1.6973 h -1.93 z"/>
                    </clipPath>
                    <clipPath id="clipPath3786" clipPathUnits="userSpaceOnUse">
                    <path id="path3784" d="m 642.926,74.6444 h 1.575 v -1.8072 h -1.575 z"/>
                    </clipPath>
                    <clipPath id="clipPath3802" clipPathUnits="userSpaceOnUse">
                    <path id="path3800" d="m 625.116,106.881 h 34.019 V 63.9354 h -34.019 z"/>
                    </clipPath>
                    <clipPath id="clipPath3834" clipPathUnits="userSpaceOnUse">
                    <path id="path3832" d="m 455.223,80.0044 h 16.772 v -16.772 h -16.772 z"/>
                    </clipPath>
                    <clipPath id="clipPath3854" clipPathUnits="userSpaceOnUse">
                    <path id="path3852" d="M 425.036,122.854 H 479.87 V 46.5836 h -54.834 z"/>
                    </clipPath>
                    <clipPath id="clipPath3870" clipPathUnits="userSpaceOnUse">
                    <path id="path3868" d="m 435.657,92.7372 h 1.856 v -1.8559 h -1.856 z"/>
                    </clipPath>
                    <clipPath id="clipPath3890" clipPathUnits="userSpaceOnUse">
                    <path id="path3888" d="m 477.8,74.2362 h 11.302 V 61.2547 H 477.8 Z"/>
                    </clipPath>
                    <clipPath id="clipPath3914" clipPathUnits="userSpaceOnUse">
                    <path id="path3912" d="M 459.934,60.6303 H 470.76 V 53.8838 H 459.934 Z"/>
                    </clipPath>
                    <clipPath id="clipPath3938" clipPathUnits="userSpaceOnUse">
                    <path id="path3936" d="m 444.489,112.343 h 13.224 v -11.214 h -13.224 z"/>
                    </clipPath>
                    <clipPath id="clipPath3962" clipPathUnits="userSpaceOnUse">
                    <path id="path3960" d="m 482.357,82.0707 h 4.313 v -4.7176 h -4.313 z"/>
                    </clipPath>
                    <clipPath id="clipPath3982" clipPathUnits="userSpaceOnUse">
                    <path id="path3980" d="m 482.1,81.9333 h 3.967 V 77.5955 H 482.1 Z"/>
                    </clipPath>
                    <clipPath id="clipPath4002" clipPathUnits="userSpaceOnUse">
                    <path id="path4000" d="m 485.951,104.934 h 3.467 v -3.792 h -3.467 z"/>
                    </clipPath>
                    <clipPath id="clipPath4022" clipPathUnits="userSpaceOnUse">
                    <path id="path4020" d="m 485.745,104.824 h 3.188 v -3.487 h -3.188 z"/>
                    </clipPath>
                    <clipPath id="clipPath4042" clipPathUnits="userSpaceOnUse">
                    <path id="path4040" d="m 465.388,116.875 h 4.545 v -4.969 h -4.545 z"/>
                    </clipPath>
                    <clipPath id="clipPath4062" clipPathUnits="userSpaceOnUse">
                    <path id="path4060" d="m 465.118,116.731 h 4.179 v -4.57 h -4.179 z"/>
                    </clipPath>
                    <clipPath id="clipPath4082" clipPathUnits="userSpaceOnUse">
                    <path id="path4080" d="m 473.071,114.836 h 2.272 v -2.485 h -2.272 z"/>
                    </clipPath>
                    <clipPath id="clipPath4102" clipPathUnits="userSpaceOnUse">
                    <path id="path4100" d="m 472.936,114.764 h 2.089 v -2.285 h -2.089 z"/>
                    </clipPath>
                    <clipPath id="clipPath4118" clipPathUnits="userSpaceOnUse">
                    <path id="path4116" d="m 454.303,80.011 h 16.209 V 63.324 h -16.209 z"/>
                    </clipPath>
                    <clipPath id="clipPath4134" clipPathUnits="userSpaceOnUse">
                    <path id="path4132" d="m 477.082,74.4997 h 11.251 V 61.4995 h -11.251 z"/>
                    </clipPath>
                    <clipPath id="clipPath4150" clipPathUnits="userSpaceOnUse">
                    <path id="path4148" d="m 458.907,60.4548 h 10.722 v -6.7465 h -10.722 z"/>
                    </clipPath>
                    <clipPath id="clipPath4166" clipPathUnits="userSpaceOnUse">
                    <path id="path4164" d="m 443.468,111.788 h 12.806 v -11.05 h -12.806 z"/>
                    </clipPath>
                    <clipPath id="clipPath4186" clipPathUnits="userSpaceOnUse">
                    <path id="path4184" d="m 52.029,137.065 h 59.617 V 80.5786 H 52.029 Z"/>
                    </clipPath>
                    <clipPath id="clipPath4270" clipPathUnits="userSpaceOnUse">
                    <path id="path4268" d="M 33.5929,130.191 H 124.904 V 85.5077 H 33.5929 Z"/>
                    </clipPath>
                    <clipPath id="clipPath4290" clipPathUnits="userSpaceOnUse">
                    <path id="path4288" d="M 24.7885,134.541 H 133.617 V 79.6891 H 24.7885 Z"/>
                    </clipPath>
                    <clipPath id="clipPath4306" clipPathUnits="userSpaceOnUse">
                    <path id="path4304" d="M 0,500 H 750 V 0 H 0 Z"/>
                    </clipPath>
                    <clipPath id="clipPath4426" clipPathUnits="userSpaceOnUse">
                    <path id="path4424" d="M 0,500 H 750 V 0 H 0 Z"/>
                    </clipPath>
                    <clipPath id="clipPath4542" clipPathUnits="userSpaceOnUse">
                    <path id="path4540" d="M 0,500 H 750 V 0 H 0 Z"/>
                    </clipPath>
                    <clipPath id="clipPath4554" clipPathUnits="userSpaceOnUse">
                    <path id="path4552" d="M 334.369,131.274 H 370.97 V 92.2863 h -36.601 z"/>
                    </clipPath>
                    <clipPath id="clipPath4578" clipPathUnits="userSpaceOnUse">
                    <path id="path4576" d="m 360.43,122.889 h 3.761 v -15.1 h -3.761 z"/>
                    </clipPath>
                    <clipPath id="clipPath4598" clipPathUnits="userSpaceOnUse">
                    <path id="path4596" d="m 588.721,348.082 h 21.021 V 325.69 h -21.021 z"/>
                    </clipPath>
                    <clipPath id="clipPath4622" clipPathUnits="userSpaceOnUse">
                    <path id="path4620" d="m 603.688,343.266 h 2.161 v -8.673 h -2.161 z"/>
                    </clipPath>
                    <clipPath id="clipPath4646" clipPathUnits="userSpaceOnUse">
                    <path id="path4644" d="m 250.582,343.139 h 5.319 v -21.026 h -5.319 z"/>
                    </clipPath>
                    <clipPath id="clipPath4674" clipPathUnits="userSpaceOnUse">
                    <path id="path4672" d="m 567.087,66.8554 h 12.944 V 45.111 h -12.944 z"/>
                    </clipPath>
                    <clipPath id="clipPath4702" clipPathUnits="userSpaceOnUse">
                    <path id="path4700" d="m 147.766,44.6865 h 9.876 v -8.9598 h -9.876 z"/>
                    </clipPath>
                    <clipPath id="clipPath4726" clipPathUnits="userSpaceOnUse">
                    <path id="path4724" d="m 564.842,376.665 h 7.532 v -6.827 h -7.532 z"/>
                    </clipPath>
                    <clipPath id="clipPath4750" clipPathUnits="userSpaceOnUse">
                    <path id="path4748" d="m 247.151,373.528 h 8.638 v -6.794 h -8.638 z"/>
                    </clipPath>
                    <clipPath id="clipPath4774" clipPathUnits="userSpaceOnUse">
                    <path id="path4772" d="m 194.27,73.4579 h 5.518 v -8.0241 h -5.518 z"/>
                    </clipPath>
                    <clipPath id="clipPath4798" clipPathUnits="userSpaceOnUse">
                    <path id="path4796" d="m 694.584,400.694 h 5.518 v -8.024 h -5.518 z"/>
                    </clipPath>
                    <clipPath id="clipPath4822" clipPathUnits="userSpaceOnUse">
                    <path id="path4820" d="m 107.74,448.246 h 5.517 v -8.024 h -5.517 z"/>
                    </clipPath>
                    <clipPath id="clipPath4850" clipPathUnits="userSpaceOnUse">
                    <path id="path4848" d="m 342.047,169.078 h 8.256 v -7.11 h -8.256 z"/>
                    </clipPath>
                    <clipPath id="clipPath4866" clipPathUnits="userSpaceOnUse">
                    <path id="path4864" d="M 0,500 H 750 V 0 H 0 Z"/>
                    </clipPath>
                    <clipPath id="clipPath4898" clipPathUnits="userSpaceOnUse">
                    <path id="path4896" d="m 631.121,191.276 h 17.172 V 177.21 h -17.172 z"/>
                    </clipPath>
                    <clipPath id="clipPath4922" clipPathUnits="userSpaceOnUse">
                    <path id="path4920" d="m 564.615,195.024 h 13.802 v -18.503 h -13.802 z"/>
                    </clipPath>
                    <clipPath id="clipPath5070" clipPathUnits="userSpaceOnUse">
                    <path id="path5068" d="M 0,500 H 750 V 0 H 0 Z"/>
                    </clipPath>
                    <clipPath id="clipPath5150" clipPathUnits="userSpaceOnUse">
                    <path id="path5148" d="M 70.4776,357.125 H 180.713 V 244.52 H 70.4776 Z"/>
                    </clipPath>
                    <clipPath id="clipPath5246" clipPathUnits="userSpaceOnUse">
                    <path id="path5244" d="m 116.534,317.758 h 58.111 v -53.534 h -58.111 z"/>
                    </clipPath>
                    <clipPath id="clipPath5322" clipPathUnits="userSpaceOnUse">
                    <path id="path5320" d="m 127.707,281.454 h 29.69 v -12.171 h -29.69 z"/>
                    </clipPath>
                    <clipPath id="clipPath5390" clipPathUnits="userSpaceOnUse">
                    <path id="path5388" d="M 90.5657,406.64 H 151.029 V 347.998 H 90.5657 Z"/>
                    </clipPath>
                    <clipPath id="clipPath5454" clipPathUnits="userSpaceOnUse">
                    <path id="path5452" d="m 107.994,350.348 h 42.095 v -19.517 h -42.095 z"/>
                    </clipPath>
                    <clipPath id="clipPath5534" clipPathUnits="userSpaceOnUse">
                    <path id="path5532" d="m 173.521,354.441 h 15.53 v -19.177 h -15.53 z"/>
                    </clipPath>
                    <clipPath id="clipPath5678" clipPathUnits="userSpaceOnUse">
                    <path id="path5676" d="m 142.61,197.549 h 35.064 V 184.212 H 142.61 Z"/>
                    </clipPath>
                    <clipPath id="clipPath5694" clipPathUnits="userSpaceOnUse">
                    <path id="path5692" d="m 207.486,237.765 h 21.98 v -30.186 h -21.98 z"/>
                    </clipPath>
                </defs>
                <g transform="matrix(1.3333333,0,0,-1.3333333,0,666.66667)" id="g10">
                    <g id="g12">
                    <g clip-path="url(#clipPath18)" id="g14">
                        <g transform="translate(163.911,417.071)" id="g20">
                        <path id="path22" style="fill:#f5f5f5;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,-32.304 -28.342,-58.492 -63.303,-58.492 -34.962,0 -63.304,26.188 -63.304,58.492 0,32.304 28.342,58.492 63.304,58.492 C -28.342,58.492 0,32.304 0,0"/>
                        </g>
                        <g transform="translate(698.178,75.6701)" id="g24">
                        <path id="path26" style="fill:#f5f5f5;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,-33.844 -27.965,-61.279 -62.461,-61.279 -34.496,0 -62.461,27.435 -62.461,61.279 0,33.844 27.965,61.279 62.461,61.279 C -27.965,61.279 0,33.844 0,0"/>
                        </g>
                        <g transform="translate(688.9478,433.6687)" id="g28">
                        <path id="path30" style="fill:#f5f5f5;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -24.381,33.05 -53.148,36.581 -91.784,33.05 -27.627,-2.525 -53.306,-17.941 -78.178,-30.228 -28.608,-14.132 -53.449,-3.644 -80.862,0.612 -29.46,4.574 -46.356,14.777 -76.161,15.496 -50.758,1.225 -91.644,-22.362 -113.203,-51.742 -23.966,-32.661 -30.581,-80.447 -66.225,-99.7 -21.371,-11.544 -47.585,-9.081 -70.533,-17.044 -34.764,-12.062 -57.992,-48.479 -59.365,-85.251 -1.373,-36.771 16.824,-72.626 43.855,-97.593 27.032,-24.967 62.118,-39.892 98.025,-47.937 l -8.459,1.05 c 72.814,-16.084 152.587,3.069 210.163,50.457 20.595,16.952 39.628,37.913 65.375,44.884 30.598,8.285 62.534,-5.306 94.215,-6.403 26.715,-0.926 53.662,7.432 75.164,23.313 14.764,10.904 27.603,26.887 27.778,45.239 0.226,23.637 -20.329,44.284 -18.144,67.822 2.795,30.112 39.325,44.756 52.525,71.964 C 16.295,-57.051 20.135,-27.295 0,0"/>
                        </g>
                        <g transform="translate(384.8866,270.5034)" id="g32">
                        <path id="path34" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-1.072 0.798,-1.942 1.781,-1.942 0.984,0 1.782,0.87 1.782,1.942 0,1.072 -0.798,1.942 -1.782,1.942 C 0.798,1.942 0,1.072 0,0"/>
                        </g>
                        <g transform="translate(481.0929,364.8003)" id="g36">
                        <path id="path38" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-1.072 0.797,-1.942 1.781,-1.942 0.984,0 1.781,0.87 1.781,1.942 0,1.072 -0.797,1.942 -1.781,1.942 C 0.797,1.942 0,1.072 0,0"/>
                        </g>
                        <g transform="translate(457.2436,281.8979)" id="g40">
                        <path id="path42" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-1.073 0.798,-1.942 1.781,-1.942 0.984,0 1.782,0.869 1.782,1.942 0,1.072 -0.798,1.941 -1.782,1.941 C 0.798,1.941 0,1.072 0,0"/>
                        </g>
                        <g transform="translate(405.1742,270.5034)" id="g44">
                        <path id="path46" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.758 0.564,-1.373 1.259,-1.373 0.696,0 1.26,0.615 1.26,1.373 0,0.758 -0.564,1.373 -1.26,1.373 C 0.564,1.373 0,0.758 0,0"/>
                        </g>
                        <g transform="translate(436.9955,247.9879)" id="g48">
                        <path id="path50" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.557 0.415,-1.009 0.926,-1.009 0.511,0 0.925,0.452 0.925,1.009 0,0.557 -0.414,1.009 -0.925,1.009 C 0.415,1.009 0,0.557 0,0"/>
                        </g>
                        <g transform="translate(436.9955,271.0931)" id="g52">
                        <path id="path54" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.557 0.415,-1.009 0.926,-1.009 0.511,0 0.925,0.452 0.925,1.009 0,0.557 -0.414,1.009 -0.925,1.009 C 0.415,1.009 0,0.557 0,0"/>
                        </g>
                        <g transform="translate(419.7641,330.2946)" id="g56">
                        <path id="path58" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.557 0.414,-1.009 0.926,-1.009 0.511,0 0.925,0.452 0.925,1.009 0,0.557 -0.414,1.009 -0.925,1.009 C 0.414,1.009 0,0.557 0,0"/>
                        </g>
                        <g transform="translate(368.9391,289.5937)" id="g60">
                        <path id="path62" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.557 0.414,-1.009 0.926,-1.009 0.51,0 0.925,0.452 0.925,1.009 0,0.557 -0.415,1.009 -0.925,1.009 C 0.414,1.009 0,0.557 0,0"/>
                        </g>
                        <g transform="translate(467.9911,210.985)" id="g64">
                        <path id="path66" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.357 0.266,-0.647 0.594,-0.647 0.328,0 0.593,0.29 0.593,0.647 0,0.357 -0.265,0.647 -0.593,0.647 C 0.266,0.647 0,0.357 0,0"/>
                        </g>
                        <g transform="translate(414.8745,250.2875)" id="g68">
                        <path id="path70" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.179 0.133,-0.324 0.297,-0.324 0.164,0 0.297,0.145 0.297,0.324 0,0.179 -0.133,0.323 -0.297,0.323 C 0.133,0.323 0,0.179 0,0"/>
                        </g>
                        <g transform="translate(456.9468,245.9489)" id="g72">
                        <path id="path74" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.179 0.133,-0.324 0.297,-0.324 0.164,0 0.297,0.145 0.297,0.324 0,0.179 -0.133,0.324 -0.297,0.324 C 0.133,0.324 0,0.179 0,0"/>
                        </g>
                        <g transform="translate(467.6943,247.017)" id="g76">
                        <path id="path78" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.179 0.133,-0.324 0.297,-0.324 0.164,0 0.297,0.145 0.297,0.324 0,0.179 -0.133,0.324 -0.297,0.324 C 0.133,0.324 0,0.179 0,0"/>
                        </g>
                        <g transform="translate(415.1712,239.5015)" id="g80">
                        <path id="path82" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.179 0.133,-0.324 0.297,-0.324 0.164,0 0.297,0.145 0.297,0.324 0,0.179 -0.133,0.324 -0.297,0.324 C 0.133,0.324 0,0.179 0,0"/>
                        </g>
                        <g transform="translate(418.5767,279.3087)" id="g84">
                        <path id="path86" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.357 0.266,-0.647 0.594,-0.647 0.328,0 0.593,0.29 0.593,0.647 0,0.358 -0.265,0.648 -0.593,0.648 C 0.266,0.648 0,0.358 0,0"/>
                        </g>
                        <g transform="translate(421.6152,279.9562)" id="g88">
                        <path id="path90" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.358 0.266,-0.648 0.594,-0.648 0.328,0 0.593,0.29 0.593,0.648 0,0.357 -0.265,0.647 -0.593,0.647 C 0.266,0.647 0,0.357 0,0"/>
                        </g>
                        <g transform="translate(431.4474,317.5553)" id="g92">
                        <path id="path94" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.358 0.266,-0.647 0.594,-0.647 0.328,0 0.593,0.289 0.593,0.647 0,0.358 -0.265,0.647 -0.593,0.647 C 0.266,0.647 0,0.358 0,0"/>
                        </g>
                        <g transform="translate(454.1274,316.908)" id="g96">
                        <path id="path98" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.357 0.266,-0.647 0.594,-0.647 0.328,0 0.593,0.29 0.593,0.647 0,0.357 -0.265,0.647 -0.593,0.647 C 0.266,0.647 0,0.357 0,0"/>
                        </g>
                        <g transform="translate(380.3473,353.4076)" id="g100">
                        <path id="path102" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.358 0.266,-0.647 0.594,-0.647 0.328,0 0.594,0.289 0.594,0.647 0,0.357 -0.266,0.647 -0.594,0.647 C 0.266,0.647 0,0.357 0,0"/>
                        </g>
                        <g transform="translate(438.8466,274.4665)" id="g104">
                        <path id="path106" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.358 0.266,-0.647 0.594,-0.647 0.328,0 0.593,0.289 0.593,0.647 0,0.357 -0.265,0.647 -0.593,0.647 C 0.266,0.647 0,0.357 0,0"/>
                        </g>
                        <g transform="translate(454.7211,318.8497)" id="g108">
                        <path id="path110" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.358 0.266,-0.647 0.594,-0.647 0.328,0 0.594,0.289 0.594,0.647 0,0.358 -0.266,0.647 -0.594,0.647 C 0.266,0.647 0,0.358 0,0"/>
                        </g>
                        <g transform="translate(422.2089,318.8497)" id="g112">
                        <path id="path114" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.358 0.266,-0.647 0.594,-0.647 0.328,0 0.593,0.289 0.593,0.647 0,0.358 -0.265,0.647 -0.593,0.647 C 0.266,0.647 0,0.358 0,0"/>
                        </g>
                        <g transform="translate(369.6028,344.8751)" id="g116">
                        <path id="path118" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.357 0.266,-0.647 0.594,-0.647 0.328,0 0.593,0.29 0.593,0.647 0,0.357 -0.265,0.647 -0.593,0.647 C 0.266,0.647 0,0.357 0,0"/>
                        </g>
                        <g transform="translate(412.3376,327.3138)" id="g120">
                        <path id="path122" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.357 0.266,-0.647 0.594,-0.647 0.328,0 0.594,0.29 0.594,0.647 0,0.357 -0.266,0.647 -0.594,0.647 C 0.266,0.647 0,0.357 0,0"/>
                        </g>
                        <g transform="translate(469.1786,339.4494)" id="g124">
                        <path id="path126" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.358 0.266,-0.647 0.594,-0.647 0.328,0 0.594,0.289 0.594,0.647 0,0.357 -0.266,0.647 -0.594,0.647 C 0.266,0.647 0,0.357 0,0"/>
                        </g>
                        <g transform="translate(413.6869,360.715)" id="g128">
                        <path id="path130" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.357 0.266,-0.647 0.594,-0.647 0.328,0 0.594,0.29 0.594,0.647 0,0.358 -0.266,0.647 -0.594,0.647 C 0.266,0.647 0,0.358 0,0"/>
                        </g>
                        <g transform="translate(436.9955,341.2841)" id="g132">
                        <path id="path134" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.557 0.414,-1.009 0.926,-1.009 0.511,0 0.925,0.452 0.925,1.009 0,0.557 -0.414,1.009 -0.925,1.009 C 0.414,1.009 0,0.557 0,0"/>
                        </g>
                        <g transform="translate(448.6789,361.3619)" id="g136">
                        <path id="path138" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.358 0.266,-0.647 0.594,-0.647 0.328,0 0.593,0.289 0.593,0.647 0,0.357 -0.265,0.647 -0.593,0.647 C 0.266,0.647 0,0.357 0,0"/>
                        </g>
                        <g transform="translate(397.5788,397.2141)" id="g140">
                        <path id="path142" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.357 0.266,-0.647 0.594,-0.647 0.328,0 0.593,0.29 0.593,0.647 0,0.357 -0.265,0.647 -0.593,0.647 C 0.266,0.647 0,0.357 0,0"/>
                        </g>
                        <g transform="translate(439.4404,362.6564)" id="g144">
                        <path id="path146" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.358 0.266,-0.647 0.594,-0.647 0.328,0 0.593,0.289 0.593,0.647 0,0.357 -0.265,0.647 -0.593,0.647 C 0.266,0.647 0,0.357 0,0"/>
                        </g>
                        <g transform="translate(429.569,371.1205)" id="g148">
                        <path id="path150" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.358 0.266,-0.647 0.594,-0.647 0.328,0 0.594,0.289 0.594,0.647 0,0.357 -0.266,0.647 -0.594,0.647 C 0.266,0.647 0,0.357 0,0"/>
                        </g>
                        <g transform="translate(430.9183,404.5216)" id="g152">
                        <path id="path154" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.358 0.266,-0.647 0.594,-0.647 0.328,0 0.593,0.289 0.593,0.647 0,0.358 -0.265,0.647 -0.593,0.647 C 0.266,0.647 0,0.358 0,0"/>
                        </g>
                        <g transform="translate(407.3243,257.1494)" id="g156">
                        <path id="path158" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.492,0.536 -1.289,0.536 -1.781,0 -0.492,-0.536 -0.492,-1.406 0,-1.942 0.492,-0.536 1.289,-0.536 1.781,0 0.492,0.536 0.492,1.406 0,1.942"/>
                        </g>
                        <g transform="translate(411.2203,200.7059)" id="g160">
                        <path id="path162" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-1.116 0.83,-2.021 1.853,-2.021 1.024,0 1.854,0.905 1.854,2.021 0,1.116 -0.83,2.021 -1.854,2.021 C 0.83,2.021 0,1.116 0,0"/>
                        </g>
                        <g transform="translate(674.4649,257.7029)" id="g164">
                        <path id="path166" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-1.116 0.83,-2.021 1.854,-2.021 1.023,0 1.853,0.905 1.853,2.021 0,1.116 -0.83,2.021 -1.853,2.021 C 0.83,2.021 0,1.116 0,0"/>
                        </g>
                        <g transform="translate(555.3526,255.4868)" id="g168">
                        <path id="path170" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-1.116 0.83,-2.021 1.854,-2.021 1.023,0 1.853,0.905 1.853,2.021 0,1.116 -0.83,2.021 -1.853,2.021 C 0.83,2.021 0,1.116 0,0"/>
                        </g>
                        <g transform="translate(413.0738,236.3506)" id="g172">
                        <path id="path174" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-1.116 0.83,-2.021 1.854,-2.021 1.023,0 1.853,0.905 1.853,2.021 0,1.116 -0.83,2.02 -1.853,2.02 C 0.83,2.02 0,1.116 0,0"/>
                        </g>
                        <g transform="translate(432.3317,200.7059)" id="g176">
                        <path id="path178" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.789 0.587,-1.429 1.311,-1.429 0.723,0 1.31,0.64 1.31,1.429 0,0.789 -0.587,1.429 -1.31,1.429 C 0.587,1.429 0,0.789 0,0"/>
                        </g>
                        <g transform="translate(379.4838,207.8251)" id="g180">
                        <path id="path182" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.58 0.431,-1.05 0.963,-1.05 0.532,0 0.963,0.47 0.963,1.05 0,0.58 -0.431,1.05 -0.963,1.05 C 0.431,1.05 0,0.58 0,0"/>
                        </g>
                        <g transform="translate(465.4453,177.2762)" id="g184">
                        <path id="path186" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.58 0.431,-1.05 0.963,-1.05 0.532,0 0.963,0.47 0.963,1.05 0,0.58 -0.431,1.05 -0.963,1.05 C 0.431,1.05 0,0.58 0,0"/>
                        </g>
                        <g transform="translate(465.4453,201.3198)" id="g188">
                        <path id="path190" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.58 0.431,-1.05 0.963,-1.05 0.532,0 0.963,0.47 0.963,1.05 0,0.58 -0.431,1.05 -0.963,1.05 C 0.431,1.05 0,0.58 0,0"/>
                        </g>
                        <g transform="translate(447.514,262.9252)" id="g192">
                        <path id="path194" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.58 0.431,-1.05 0.963,-1.05 0.532,0 0.963,0.47 0.963,1.05 0,0.58 -0.431,1.05 -0.963,1.05 C 0.431,1.05 0,0.58 0,0"/>
                        </g>
                        <g transform="translate(497.6994,138.7707)" id="g196">
                        <path id="path198" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.372 0.277,-0.674 0.618,-0.674 0.341,0 0.618,0.302 0.618,0.674 0,0.372 -0.277,0.674 -0.618,0.674 C 0.277,0.674 0,0.372 0,0"/>
                        </g>
                        <g transform="translate(434.6439,128.3943)" id="g200">
                        <path id="path202" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0,-0.186 0.138,-0.337 0.309,-0.337 0.48,-0.337 0.618,-0.186 0.618,0 0.618,0.186 0.48,0.337 0.309,0.337 0.138,0.337 0,0.186 0,0"/>
                        </g>
                        <g transform="translate(372.3456,174.9189)" id="g204">
                        <path id="path206" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0,-0.186 0.138,-0.337 0.309,-0.337 0.48,-0.337 0.618,-0.186 0.618,0 0.618,0.186 0.48,0.337 0.309,0.337 0.138,0.337 0,0.186 0,0"/>
                        </g>
                        <g transform="translate(442.4257,179.6691)" id="g208">
                        <path id="path210" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0,-0.186 0.138,-0.337 0.309,-0.337 0.48,-0.337 0.618,-0.186 0.618,0 0.618,0.186 0.48,0.337 0.309,0.337 0.138,0.337 0,0.186 0,0"/>
                        </g>
                        <g transform="translate(380.1379,176.9395)" id="g212">
                        <path id="path214" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0,-0.186 0.138,-0.337 0.309,-0.337 0.48,-0.337 0.618,-0.186 0.618,0 0.618,0.186 0.48,0.337 0.309,0.337 0.138,0.337 0,0.186 0,0"/>
                        </g>
                        <g transform="translate(486.2066,175.1545)" id="g216">
                        <path id="path218" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0,-0.186 0.138,-0.337 0.309,-0.337 0.48,-0.337 0.618,-0.186 0.618,0 0.618,0.186 0.48,0.337 0.309,0.337 0.138,0.337 0,0.186 0,0"/>
                        </g>
                        <g transform="translate(497.3905,176.2659)" id="g220">
                        <path id="path222" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.186 0.138,-0.337 0.309,-0.337 0.17,0 0.309,0.151 0.309,0.337 0,0.186 -0.139,0.337 -0.309,0.337 C 0.138,0.337 0,0.186 0,0"/>
                        </g>
                        <g transform="translate(442.7346,168.4451)" id="g224">
                        <path id="path226" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0,-0.186 0.138,-0.337 0.309,-0.337 0.48,-0.337 0.618,-0.186 0.618,0 0.618,0.186 0.48,0.337 0.309,0.337 0.138,0.337 0,0.186 0,0"/>
                        </g>
                        <g transform="translate(446.2783,209.8689)" id="g228">
                        <path id="path230" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.372 0.277,-0.673 0.618,-0.673 0.341,0 0.618,0.301 0.618,0.673 0,0.372 -0.277,0.674 -0.618,0.674 C 0.277,0.674 0,0.372 0,0"/>
                        </g>
                        <g transform="translate(449.4402,210.5425)" id="g232">
                        <path id="path234" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.372 0.277,-0.674 0.618,-0.674 0.341,0 0.618,0.302 0.618,0.674 0,0.372 -0.277,0.674 -0.618,0.674 C 0.277,0.674 0,0.372 0,0"/>
                        </g>
                        <g transform="translate(459.6717,249.6683)" id="g236">
                        <path id="path238" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.372 0.277,-0.674 0.618,-0.674 0.341,0 0.618,0.302 0.618,0.674 0,0.372 -0.277,0.674 -0.618,0.674 C 0.277,0.674 0,0.372 0,0"/>
                        </g>
                        <g transform="translate(483.2727,248.9948)" id="g240">
                        <path id="path242" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.372 0.277,-0.673 0.618,-0.673 0.341,0 0.618,0.301 0.618,0.673 0,0.372 -0.277,0.674 -0.618,0.674 C 0.277,0.674 0,0.372 0,0"/>
                        </g>
                        <g transform="translate(406.4967,286.9766)" id="g244">
                        <path id="path246" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.372 0.277,-0.674 0.618,-0.674 0.341,0 0.618,0.302 0.618,0.674 0,0.372 -0.277,0.673 -0.618,0.673 C 0.277,0.673 0,0.372 0,0"/>
                        </g>
                        <g transform="translate(467.3714,204.8298)" id="g248">
                        <path id="path250" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.372 0.276,-0.674 0.618,-0.674 0.341,0 0.618,0.302 0.618,0.674 0,0.372 -0.277,0.673 -0.618,0.673 C 0.276,0.673 0,0.372 0,0"/>
                        </g>
                        <g transform="translate(483.8905,251.0154)" id="g252">
                        <path id="path254" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.372 0.277,-0.673 0.618,-0.673 0.341,0 0.618,0.301 0.618,0.673 0,0.372 -0.277,0.674 -0.618,0.674 C 0.277,0.674 0,0.372 0,0"/>
                        </g>
                        <g transform="translate(450.0581,251.0154)" id="g256">
                        <path id="path258" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.372 0.276,-0.673 0.618,-0.673 0.341,0 0.618,0.301 0.618,0.673 0,0.372 -0.277,0.674 -0.618,0.674 C 0.276,0.674 0,0.372 0,0"/>
                        </g>
                        <g transform="translate(395.3156,278.0976)" id="g260">
                        <path id="path262" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.372 0.277,-0.673 0.618,-0.673 0.341,0 0.618,0.301 0.618,0.673 0,0.372 -0.277,0.674 -0.618,0.674 C 0.277,0.674 0,0.372 0,0"/>
                        </g>
                        <g transform="translate(439.786,259.8233)" id="g264">
                        <path id="path266" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.372 0.277,-0.674 0.618,-0.674 0.341,0 0.618,0.302 0.618,0.674 0,0.372 -0.277,0.673 -0.618,0.673 C 0.277,0.673 0,0.372 0,0"/>
                        </g>
                        <g transform="translate(498.9352,272.4516)" id="g268">
                        <path id="path270" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.372 0.277,-0.673 0.618,-0.673 0.341,0 0.618,0.301 0.618,0.673 0,0.372 -0.277,0.674 -0.618,0.674 C 0.277,0.674 0,0.372 0,0"/>
                        </g>
                        <g transform="translate(441.19,294.5809)" id="g272">
                        <path id="path274" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.372 0.277,-0.673 0.618,-0.673 0.341,0 0.618,0.301 0.618,0.673 0,0.372 -0.277,0.673 -0.618,0.673 C 0.277,0.673 0,0.372 0,0"/>
                        </g>
                        <g transform="translate(434.5691,186.8095)" id="g276">
                        <path id="path278" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.512,0.558 -1.342,0.558 -1.854,0 -0.512,-0.558 -0.512,-1.463 0,-2.02 0.512,-0.558 1.342,-0.558 1.854,0 0.512,0.557 0.512,1.462 0,2.02"/>
                        </g>
                        <g transform="translate(478.3298,190.5355)" id="g280">
                        <path id="path282" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.633,-0.821 1.757,-0.927 2.51,-0.237 3.263,0.453 3.36,1.677 2.727,2.498 2.094,3.319 0.971,3.426 0.218,2.736 -0.536,2.046 -0.633,0.821 0,0"/>
                        </g>
                        <g transform="translate(441.5885,315.6846)" id="g284">
                        <path id="path286" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.633,-0.821 1.757,-0.927 2.51,-0.237 3.263,0.453 3.36,1.678 2.727,2.499 2.094,3.32 0.971,3.426 0.218,2.736 -0.535,2.046 -0.633,0.821 0,0"/>
                        </g>
                        <g transform="translate(463.5069,312.4596)" id="g288">
                        <path id="path290" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.633,-0.821 1.757,-0.927 2.51,-0.237 3.263,0.453 3.36,1.677 2.727,2.499 2.094,3.319 0.971,3.426 0.218,2.736 -0.535,2.046 -0.633,0.821 0,0"/>
                        </g>
                        <g transform="translate(556.1959,309.8502)" id="g292">
                        <path id="path294" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.633,-0.821 1.756,-0.927 2.51,-0.237 3.263,0.453 3.36,1.678 2.727,2.499 2.094,3.319 0.971,3.426 0.217,2.736 -0.536,2.046 -0.633,0.821 0,0"/>
                        </g>
                        <g transform="translate(576.651,238.4546)" id="g296">
                        <path id="path298" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.633,-0.821 1.756,-0.927 2.51,-0.237 3.263,0.453 3.36,1.678 2.727,2.498 2.094,3.319 0.971,3.426 0.218,2.736 -0.535,2.046 -0.633,0.821 0,0"/>
                        </g>
                        <g transform="translate(574.034,420.8034)" id="g300">
                        <path id="path302" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.633,-0.821 1.757,-0.927 2.51,-0.237 3.263,0.453 3.36,1.678 2.727,2.499 2.094,3.319 0.971,3.426 0.218,2.736 -0.536,2.046 -0.633,0.821 0,0"/>
                        </g>
                        <g transform="translate(604.8641,369.3204)" id="g304">
                        <path id="path306" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.633,-0.821 1.756,-0.927 2.51,-0.237 3.263,0.453 3.36,1.678 2.727,2.499 2.094,3.319 0.971,3.426 0.218,2.736 -0.535,2.046 -0.633,0.821 0,0"/>
                        </g>
                        <g transform="translate(458.0152,219.9043)" id="g308">
                        <path id="path310" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.633,-0.821 1.756,-0.927 2.509,-0.237 3.263,0.453 3.36,1.678 2.727,2.498 2.094,3.319 0.971,3.426 0.217,2.736 -0.536,2.046 -0.633,0.821 0,0"/>
                        </g>
                        <g transform="translate(537.3432,337.3224)" id="g312">
                        <path id="path314" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.633,-0.821 1.756,-0.927 2.51,-0.237 3.263,0.453 3.36,1.678 2.727,2.499 2.094,3.32 0.971,3.426 0.218,2.736 -0.536,2.046 -0.633,0.821 0,0"/>
                        </g>
                        <g transform="translate(277.6508,403.9197)" id="g316">
                        <path id="path318" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.633,-0.821 1.757,-0.927 2.51,-0.237 3.263,0.453 3.36,1.677 2.727,2.498 2.094,3.319 0.971,3.426 0.218,2.736 -0.535,2.046 -0.633,0.821 0,0"/>
                        </g>
                        <g transform="translate(571.7269,324.0786)" id="g320">
                        <path id="path322" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.448,-0.581 1.242,-0.656 1.775,-0.168 2.307,0.32 2.376,1.186 1.928,1.767 1.481,2.347 0.687,2.422 0.154,1.934 -0.378,1.447 -0.448,0.581 0,0"/>
                        </g>
                        <g transform="translate(600.2395,285.4195)" id="g324">
                        <path id="path326" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.448,-0.581 1.242,-0.656 1.775,-0.168 2.307,0.32 2.376,1.186 1.929,1.767 1.481,2.347 0.687,2.423 0.154,1.935 -0.378,1.447 -0.448,0.581 0,0"/>
                        </g>
                        <g transform="translate(532.8851,290.5595)" id="g328">
                        <path id="path330" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.329,-0.427 0.913,-0.482 1.304,-0.123 1.695,0.235 1.746,0.871 1.417,1.298 1.088,1.725 0.504,1.78 0.113,1.421 -0.278,1.063 -0.329,0.426 0,0"/>
                        </g>
                        <g transform="translate(523.2257,273.1699)" id="g332">
                        <path id="path334" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.329,-0.426 0.913,-0.482 1.304,-0.123 1.695,0.235 1.746,0.872 1.417,1.299 1.088,1.725 0.504,1.78 0.113,1.422 -0.278,1.063 -0.329,0.427 0,0"/>
                        </g>
                        <g transform="translate(665.1831,412.0576)" id="g336">
                        <path id="path338" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.329,-0.426 0.913,-0.482 1.304,-0.123 1.695,0.235 1.746,0.872 1.417,1.298 1.088,1.725 0.504,1.78 0.113,1.421 -0.278,1.063 -0.329,0.427 0,0"/>
                        </g>
                        <g transform="translate(595.7397,346.848)" id="g340">
                        <path id="path342" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.329,-0.427 0.913,-0.482 1.304,-0.123 1.695,0.235 1.746,0.872 1.417,1.298 1.088,1.725 0.505,1.78 0.113,1.421 -0.278,1.063 -0.329,0.427 0,0"/>
                        </g>
                        <g transform="translate(560.7678,394.8897)" id="g344">
                        <path id="path346" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.329,-0.427 0.913,-0.482 1.304,-0.123 1.695,0.235 1.746,0.872 1.417,1.298 1.088,1.725 0.504,1.78 0.113,1.421 -0.278,1.063 -0.329,0.427 0,0"/>
                        </g>
                        <g transform="translate(472.1775,194.8809)" id="g348">
                        <path id="path350" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.586,-0.309 0.837,-0.079 1.088,0.151 1.12,0.559 0.909,0.833 0.698,1.107 0.324,1.142 0.073,0.912 -0.178,0.682 -0.211,0.274 0,0"/>
                        </g>
                        <g transform="translate(573.7106,282.9731)" id="g352">
                        <path id="path354" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.586,-0.309 0.836,-0.079 1.088,0.151 1.12,0.559 0.909,0.833 0.698,1.107 0.323,1.142 0.072,0.912 -0.179,0.682 -0.211,0.274 0,0"/>
                        </g>
                        <g transform="translate(582.2191,270.9307)" id="g356">
                        <path id="path358" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.585,-0.309 0.836,-0.079 1.087,0.151 1.12,0.559 0.909,0.833 0.698,1.107 0.323,1.142 0.072,0.912 -0.179,0.682 -0.211,0.274 0,0"/>
                        </g>
                        <g transform="translate(574.0992,268.5646)" id="g360">
                        <path id="path362" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.273 0.585,-0.309 0.836,-0.079 1.088,0.151 1.12,0.559 0.909,0.833 0.698,1.107 0.323,1.142 0.073,0.912 -0.179,0.682 -0.211,0.274 0,0"/>
                        </g>
                        <g transform="translate(509.1888,217.6286)" id="g364">
                        <path id="path366" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.586,-0.309 0.837,-0.079 1.088,0.151 1.12,0.559 0.909,0.833 0.698,1.106 0.324,1.142 0.073,0.912 -0.178,0.682 -0.211,0.273 0,0"/>
                        </g>
                        <g transform="translate(710.7506,405.4685)" id="g368">
                        <path id="path370" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.585,-0.309 0.836,-0.079 1.087,0.151 1.12,0.559 0.909,0.833 0.698,1.106 0.324,1.142 0.073,0.912 -0.178,0.682 -0.211,0.274 0,0"/>
                        </g>
                        <g transform="translate(443.4879,223.1702)" id="g372">
                        <path id="path374" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.585,-0.309 0.836,-0.079 1.087,0.151 1.12,0.559 0.909,0.833 0.698,1.106 0.324,1.142 0.073,0.912 -0.179,0.682 -0.211,0.274 0,0"/>
                        </g>
                        <g transform="translate(566.315,274.9297)" id="g376">
                        <path id="path378" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.105,-0.137 0.293,-0.154 0.418,-0.04 0.544,0.076 0.56,0.28 0.454,0.417 0.349,0.553 0.162,0.571 0.036,0.456 -0.089,0.341 -0.106,0.137 0,0"/>
                        </g>
                        <g transform="translate(589.4586,213.7385)" id="g380">
                        <path id="path382" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.133,-0.172 0.369,-0.195 0.527,-0.05 0.685,0.095 0.706,0.352 0.573,0.525 0.44,0.697 0.204,0.719 0.046,0.574 -0.112,0.43 -0.133,0.172 0,0"/>
                        </g>
                        <g transform="translate(542.2217,264.6784)" id="g384">
                        <path id="path386" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.106,-0.137 0.293,-0.155 0.418,-0.039 0.544,0.076 0.56,0.28 0.455,0.417 0.349,0.553 0.162,0.571 0.036,0.456 -0.089,0.341 -0.105,0.137 0,0"/>
                        </g>
                        <g transform="translate(646.8911,398.3032)" id="g388">
                        <path id="path390" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.105,-0.137 0.293,-0.154 0.418,-0.039 0.544,0.076 0.56,0.28 0.454,0.417 0.349,0.553 0.162,0.571 0.036,0.456 -0.089,0.341 -0.106,0.137 0,0"/>
                        </g>
                        <g transform="translate(513.1841,244.4617)" id="g392">
                        <path id="path394" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.106,-0.137 0.293,-0.154 0.418,-0.04 0.544,0.076 0.56,0.28 0.455,0.417 0.349,0.553 0.162,0.571 0.036,0.456 -0.089,0.341 -0.105,0.137 0,0"/>
                        </g>
                        <g transform="translate(546.8085,271.4168)" id="g396">
                        <path id="path398" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.105,-0.137 0.293,-0.155 0.418,-0.04 0.544,0.076 0.56,0.28 0.455,0.417 0.349,0.553 0.162,0.571 0.036,0.456 -0.089,0.341 -0.105,0.137 0,0"/>
                        </g>
                        <g transform="translate(625.8535,341.5915)" id="g400">
                        <path id="path402" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.105,-0.137 0.293,-0.154 0.418,-0.04 0.544,0.075 0.56,0.28 0.455,0.416 0.349,0.553 0.162,0.571 0.036,0.456 -0.089,0.341 -0.106,0.137 0,0"/>
                        </g>
                        <g transform="translate(633.4508,349.9468)" id="g404">
                        <path id="path406" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.105,-0.137 0.293,-0.155 0.418,-0.04 0.544,0.076 0.56,0.279 0.454,0.416 0.349,0.553 0.162,0.571 0.036,0.456 -0.089,0.341 -0.106,0.137 0,0"/>
                        </g>
                        <g transform="translate(572.8421,274.0131)" id="g408">
                        <path id="path410" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.105,-0.137 0.293,-0.154 0.418,-0.04 0.544,0.075 0.56,0.28 0.454,0.417 0.349,0.553 0.162,0.571 0.036,0.456 -0.089,0.341 -0.106,0.137 0,0"/>
                        </g>
                        <g transform="translate(537.354,253.3225)" id="g412">
                        <path id="path414" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.105,-0.137 0.293,-0.154 0.418,-0.039 0.544,0.076 0.56,0.28 0.454,0.417 0.349,0.554 0.162,0.571 0.036,0.456 -0.089,0.341 -0.106,0.137 0,0"/>
                        </g>
                        <g transform="translate(653.4841,390.2543)" id="g416">
                        <path id="path418" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.106,-0.137 0.293,-0.154 0.418,-0.04 0.544,0.076 0.56,0.28 0.455,0.417 0.349,0.553 0.162,0.571 0.036,0.456 -0.089,0.341 -0.106,0.137 0,0"/>
                        </g>
                        <g transform="translate(564.925,280.4647)" id="g420">
                        <path id="path422" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.586,-0.309 0.837,-0.079 1.088,0.151 1.12,0.559 0.909,0.833 0.698,1.106 0.324,1.142 0.073,0.912 -0.179,0.682 -0.211,0.273 0,0"/>
                        </g>
                        <g transform="translate(506.6743,240.1888)" id="g424">
                        <path id="path426" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.585,-0.309 0.836,-0.079 1.087,0.151 1.12,0.559 0.909,0.833 0.698,1.107 0.324,1.142 0.073,0.912 -0.179,0.682 -0.211,0.274 0,0"/>
                        </g>
                        <g transform="translate(576.7903,340.2197)" id="g428">
                        <path id="path430" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.586,-0.309 0.837,-0.079 1.088,0.151 1.12,0.559 0.909,0.833 0.698,1.106 0.323,1.142 0.073,0.912 -0.178,0.682 -0.211,0.273 0,0"/>
                        </g>
                        <g transform="translate(452.2855,291.4396)" id="g432">
                        <path id="path434" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.586,-0.309 0.837,-0.079 1.088,0.151 1.12,0.559 0.909,0.833 0.698,1.106 0.324,1.142 0.073,0.912 -0.178,0.682 -0.211,0.273 0,0"/>
                        </g>
                        <g transform="translate(534.5959,237.255)" id="g436">
                        <path id="path438" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.586,-0.309 0.836,-0.079 1.088,0.151 1.12,0.559 0.909,0.833 0.698,1.107 0.324,1.142 0.073,0.912 -0.178,0.682 -0.211,0.274 0,0"/>
                        </g>
                        <g transform="translate(578.7345,342.846)" id="g440">
                        <path id="path442" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.585,-0.309 0.836,-0.079 1.087,0.151 1.12,0.559 0.909,0.833 0.698,1.107 0.324,1.142 0.073,0.912 -0.178,0.682 -0.211,0.274 0,0"/>
                        </g>
                        <g transform="translate(564.071,378.526)" id="g444">
                        <path id="path446" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.585,-0.309 0.836,-0.079 1.088,0.151 1.12,0.559 0.909,0.833 0.698,1.106 0.323,1.142 0.072,0.912 -0.179,0.682 -0.211,0.274 0,0"/>
                        </g>
                        <g transform="translate(581.8156,393.9371)" id="g448">
                        <path id="path450" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.586,-0.309 0.837,-0.079 1.088,0.151 1.12,0.559 0.909,0.833 0.698,1.106 0.324,1.142 0.073,0.912 -0.178,0.682 -0.211,0.274 0,0"/>
                        </g>
                        <g transform="translate(503.7915,370.1341)" id="g452">
                        <path id="path454" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.585,-0.309 0.836,-0.079 1.087,0.151 1.12,0.559 0.909,0.833 0.698,1.107 0.323,1.142 0.073,0.912 -0.178,0.682 -0.211,0.274 0,0"/>
                        </g>
                        <g transform="translate(595.166,350.7286)" id="g456">
                        <path id="path458" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.586,-0.309 0.837,-0.079 1.088,0.151 1.12,0.559 0.909,0.833 0.698,1.106 0.323,1.142 0.072,0.912 -0.178,0.682 -0.211,0.273 0,0"/>
                        </g>
                        <g transform="translate(581.1244,395.8399)" id="g460">
                        <path id="path462" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.585,-0.309 0.836,-0.079 1.087,0.151 1.12,0.559 0.909,0.833 0.698,1.107 0.323,1.142 0.073,0.912 -0.179,0.682 -0.211,0.274 0,0"/>
                        </g>
                        <g transform="translate(556.2342,373.0375)" id="g464">
                        <path id="path466" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.586,-0.309 0.837,-0.079 1.088,0.151 1.12,0.559 0.909,0.833 0.698,1.107 0.324,1.142 0.073,0.912 -0.178,0.682 -0.211,0.274 0,0"/>
                        </g>
                        <g transform="translate(500.6015,356.0664)" id="g468">
                        <path id="path470" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.586,-0.309 0.836,-0.079 1.087,0.151 1.12,0.559 0.909,0.833 0.698,1.106 0.324,1.142 0.073,0.912 -0.178,0.682 -0.211,0.274 0,0"/>
                        </g>
                        <g transform="translate(494.5641,269.1171)" id="g472">
                        <path id="path474" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.586,-0.309 0.837,-0.079 1.088,0.151 1.12,0.559 0.909,0.833 0.698,1.107 0.324,1.142 0.073,0.912 -0.178,0.682 -0.211,0.274 0,0"/>
                        </g>
                        <g transform="translate(543.6821,372.5943)" id="g476">
                        <path id="path478" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.273 0.585,-0.309 0.836,-0.079 1.087,0.151 1.12,0.559 0.909,0.833 0.698,1.107 0.323,1.142 0.073,0.912 -0.179,0.682 -0.211,0.274 0,0"/>
                        </g>
                        <g transform="translate(580.0345,421.7498)" id="g480">
                        <path id="path482" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.585,-0.309 0.836,-0.079 1.088,0.151 1.12,0.559 0.909,0.833 0.698,1.106 0.324,1.142 0.072,0.912 -0.179,0.682 -0.211,0.274 0,0"/>
                        </g>
                        <g transform="translate(485.104,299.3268)" id="g484">
                        <path id="path486" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.585,-0.309 0.836,-0.079 1.087,0.151 1.12,0.559 0.909,0.833 0.698,1.107 0.324,1.142 0.072,0.912 -0.179,0.682 -0.211,0.274 0,0"/>
                        </g>
                        <g transform="translate(469.2767,250.8279)" id="g488">
                        <path id="path490" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.211,-0.274 0.585,-0.309 0.836,-0.079 1.087,0.151 1.12,0.559 0.909,0.833 0.698,1.106 0.323,1.142 0.072,0.912 -0.179,0.682 -0.211,0.274 0,0"/>
                        </g>
                        <g transform="translate(415.2618,261.5005)" id="g492">
                        <path id="path494" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.327,0.031 -0.615,-0.233 -0.643,-0.589 -0.028,-0.356 0.214,-0.67 0.54,-0.701 0.327,-0.03 0.615,0.233 0.643,0.589 C 0.568,-0.344 0.327,-0.031 0,0"/>
                        </g>
                        <g transform="translate(581.2545,315.3633)" id="g496">
                        <path id="path498" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.693,0.065 -1.304,-0.494 -1.364,-1.249 -0.06,-0.756 0.453,-1.421 1.146,-1.487 0.693,-0.065 1.304,0.494 1.364,1.25 C 1.206,-0.731 0.693,-0.066 0,0"/>
                        </g>
                        <g transform="translate(536.5215,150.7257)" id="g500">
                        <path id="path502" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.659,-0.854 1.828,-0.965 2.612,-0.247 3.395,0.471 3.497,1.746 2.838,2.6 2.179,3.454 1.01,3.565 0.227,2.847 -0.557,2.129 -0.659,0.854 0,0"/>
                        </g>
                        <g transform="translate(498.2883,280.9569)" id="g504">
                        <path id="path506" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.659,-0.854 1.828,-0.965 2.611,-0.247 3.395,0.471 3.497,1.746 2.838,2.6 2.179,3.454 1.01,3.565 0.226,2.847 -0.557,2.129 -0.659,0.854 0,0"/>
                        </g>
                        <g transform="translate(617.5493,274.8855)" id="g508">
                        <path id="path510" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.659,-0.854 1.828,-0.965 2.612,-0.247 3.395,0.471 3.497,1.746 2.838,2.6 2.179,3.454 1.01,3.565 0.227,2.847 -0.557,2.129 -0.659,0.854 0,0"/>
                        </g>
                        <g transform="translate(627.2164,400.0477)" id="g512">
                        <path id="path514" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.659,-0.854 1.828,-0.965 2.612,-0.247 3.395,0.471 3.497,1.746 2.838,2.6 2.18,3.454 1.01,3.565 0.227,2.847 -0.557,2.129 -0.659,0.854 0,0"/>
                        </g>
                        <g transform="translate(668.1939,336.7706)" id="g516">
                        <path id="path518" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.659,-0.854 1.828,-0.965 2.612,-0.247 3.395,0.471 3.497,1.746 2.838,2.6 2.179,3.454 1.01,3.565 0.227,2.847 -0.557,2.129 -0.659,0.854 0,0"/>
                        </g>
                        <g transform="translate(515.3819,181.287)" id="g520">
                        <path id="path522" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.659,-0.854 1.828,-0.965 2.611,-0.247 3.395,0.471 3.497,1.746 2.838,2.6 2.179,3.454 1.01,3.565 0.226,2.847 -0.557,2.129 -0.659,0.854 0,0"/>
                        </g>
                        <g transform="translate(653.738,386.3712)" id="g524">
                        <path id="path526" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.659,-0.854 1.828,-0.965 2.611,-0.247 3.395,0.471 3.497,1.746 2.838,2.6 2.179,3.454 1.01,3.565 0.226,2.847 -0.557,2.129 -0.659,0.854 0,0"/>
                        </g>
                        <g transform="translate(522.9307,127.4336)" id="g528">
                        <path id="path530" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.466,-0.604 1.293,-0.682 1.847,-0.175 2.401,0.333 2.473,1.234 2.007,1.838 1.541,2.443 0.715,2.521 0.16,2.013 -0.394,1.505 -0.466,0.604 0,0"/>
                        </g>
                        <g transform="translate(633.7113,289.6916)" id="g532">
                        <path id="path534" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.466,-0.604 1.292,-0.682 1.846,-0.174 2.401,0.333 2.472,1.234 2.007,1.839 1.541,2.443 0.714,2.521 0.16,2.013 -0.394,1.506 -0.466,0.604 0,0"/>
                        </g>
                        <g transform="translate(696.1712,257.9848)" id="g536">
                        <path id="path538" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.466,-0.604 1.292,-0.682 1.847,-0.174 2.401,0.333 2.472,1.234 2.007,1.839 1.541,2.443 0.714,2.521 0.16,2.013 -0.394,1.505 -0.466,0.604 0,0"/>
                        </g>
                        <g transform="translate(551.086,181.1923)" id="g540">
                        <path id="path542" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.466,-0.604 1.293,-0.682 1.847,-0.175 2.401,0.333 2.473,1.234 2.007,1.838 1.541,2.442 0.714,2.521 0.16,2.013 -0.394,1.505 -0.466,0.604 0,0"/>
                        </g>
                        <g transform="translate(453.6026,197.9106)" id="g544">
                        <path id="path546" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.466,-0.604 1.292,-0.682 1.847,-0.175 2.401,0.333 2.472,1.234 2.007,1.838 1.541,2.443 0.714,2.521 0.16,2.013 -0.394,1.505 -0.466,0.604 0,0"/>
                        </g>
                        <g transform="translate(548.7654,200.9652)" id="g548">
                        <path id="path550" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.342,-0.444 0.95,-0.501 1.357,-0.128 1.764,0.245 1.817,0.907 1.474,1.351 1.132,1.795 0.525,1.852 0.117,1.479 -0.29,1.106 -0.342,0.444 0,0"/>
                        </g>
                        <g transform="translate(589.0516,258.0773)" id="g552">
                        <path id="path554" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.342,-0.444 0.95,-0.501 1.357,-0.128 1.764,0.245 1.817,0.907 1.475,1.351 1.133,1.795 0.525,1.852 0.118,1.479 -0.289,1.106 -0.342,0.444 0,0"/>
                        </g>
                        <g transform="translate(703.3522,335.7479)" id="g556">
                        <path id="path558" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.342,-0.444 0.95,-0.501 1.357,-0.128 1.764,0.245 1.817,0.907 1.474,1.351 1.132,1.795 0.525,1.852 0.118,1.479 -0.29,1.106 -0.342,0.444 0,0"/>
                        </g>
                        <g transform="translate(714.5058,396.2836)" id="g560">
                        <path id="path562" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.342,-0.444 0.95,-0.501 1.357,-0.128 1.764,0.245 1.817,0.907 1.475,1.351 1.133,1.795 0.525,1.852 0.118,1.479 -0.289,1.106 -0.342,0.444 0,0"/>
                        </g>
                        <g transform="translate(608.6129,347.972)" id="g564">
                        <path id="path566" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.342,-0.444 0.95,-0.501 1.357,-0.128 1.764,0.245 1.817,0.907 1.475,1.351 1.132,1.795 0.525,1.852 0.118,1.479 -0.29,1.106 -0.342,0.444 0,0"/>
                        </g>
                        <g transform="translate(530.1195,155.2477)" id="g568">
                        <path id="path570" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.22,-0.285 0.609,-0.322 0.871,-0.082 1.132,0.157 1.165,0.582 0.946,0.867 0.727,1.151 0.337,1.188 0.076,0.949 -0.186,0.71 -0.219,0.285 0,0"/>
                        </g>
                        <g transform="translate(553.8446,184.5992)" id="g572">
                        <path id="path574" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.22,-0.285 0.609,-0.322 0.87,-0.082 1.132,0.157 1.165,0.582 0.946,0.867 0.726,1.151 0.337,1.188 0.076,0.949 -0.186,0.71 -0.22,0.285 0,0"/>
                        </g>
                        <g transform="translate(562.6985,172.0677)" id="g576">
                        <path id="path578" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.22,-0.285 0.609,-0.322 0.871,-0.082 1.132,0.157 1.165,0.582 0.946,0.867 0.726,1.151 0.337,1.188 0.076,0.949 -0.186,0.71 -0.22,0.285 0,0"/>
                        </g>
                        <g transform="translate(554.2487,169.6055)" id="g580">
                        <path id="path582" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.22,-0.285 0.609,-0.322 0.871,-0.082 1.132,0.157 1.166,0.582 0.946,0.867 0.727,1.152 0.337,1.188 0.076,0.949 -0.186,0.71 -0.219,0.285 0,0"/>
                        </g>
                        <g transform="translate(568.6337,178.9188)" id="g584">
                        <path id="path586" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.22,-0.285 0.609,-0.322 0.871,-0.082 1.132,0.157 1.166,0.582 0.946,0.867 0.727,1.151 0.337,1.188 0.076,0.949 -0.186,0.71 -0.22,0.285 0,0"/>
                        </g>
                        <g transform="translate(720.3073,288.1224)" id="g588">
                        <path id="path590" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.22,-0.285 0.609,-0.322 0.87,-0.082 1.132,0.157 1.166,0.582 0.946,0.866 0.727,1.151 0.337,1.188 0.076,0.949 -0.186,0.71 -0.22,0.285 0,0"/>
                        </g>
                        <g transform="translate(500.2648,184.6856)" id="g592">
                        <path id="path594" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.219,-0.285 0.609,-0.322 0.87,-0.082 1.132,0.157 1.165,0.582 0.946,0.867 0.726,1.151 0.337,1.188 0.075,0.949 -0.186,0.71 -0.22,0.285 0,0"/>
                        </g>
                        <g transform="translate(546.1486,176.2291)" id="g596">
                        <path id="path598" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.11,-0.142 0.305,-0.161 0.435,-0.041 0.566,0.079 0.583,0.291 0.473,0.433 0.363,0.576 0.169,0.594 0.038,0.474 -0.093,0.355 -0.11,0.142 0,0"/>
                        </g>
                        <g transform="translate(678.1591,235.9552)" id="g600">
                        <path id="path602" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.11,-0.143 0.305,-0.161 0.435,-0.041 0.566,0.079 0.583,0.291 0.473,0.433 0.363,0.576 0.168,0.594 0.038,0.474 -0.093,0.355 -0.11,0.142 0,0"/>
                        </g>
                        <g transform="translate(603.0078,227.8795)" id="g604">
                        <path id="path606" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.11,-0.142 0.305,-0.161 0.435,-0.041 0.566,0.078 0.583,0.291 0.473,0.433 0.363,0.576 0.169,0.594 0.038,0.474 -0.093,0.355 -0.11,0.143 0,0"/>
                        </g>
                        <g transform="translate(653.8545,280.6664)" id="g608">
                        <path id="path610" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.11,-0.143 0.305,-0.161 0.435,-0.041 0.566,0.078 0.583,0.291 0.473,0.433 0.363,0.576 0.169,0.594 0.038,0.474 -0.093,0.355 -0.11,0.142 0,0"/>
                        </g>
                        <g transform="translate(572.7911,206.8418)" id="g612">
                        <path id="path614" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.11,-0.143 0.305,-0.161 0.435,-0.041 0.566,0.079 0.583,0.291 0.473,0.433 0.363,0.576 0.168,0.594 0.038,0.474 -0.093,0.355 -0.11,0.142 0,0"/>
                        </g>
                        <g transform="translate(607.7809,234.8915)" id="g616">
                        <path id="path618" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.11,-0.142 0.305,-0.161 0.435,-0.041 0.566,0.079 0.583,0.291 0.473,0.433 0.363,0.576 0.168,0.594 0.038,0.474 -0.093,0.355 -0.11,0.142 0,0"/>
                        </g>
                        <g transform="translate(690.0358,307.9157)" id="g620">
                        <path id="path622" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.11,-0.143 0.305,-0.161 0.435,-0.041 0.566,0.078 0.583,0.291 0.473,0.433 0.363,0.576 0.168,0.594 0.038,0.474 -0.093,0.355 -0.11,0.142 0,0"/>
                        </g>
                        <g transform="translate(697.9414,316.6102)" id="g624">
                        <path id="path626" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.11,-0.142 0.305,-0.161 0.435,-0.041 0.566,0.079 0.583,0.291 0.473,0.434 0.363,0.576 0.168,0.594 0.038,0.474 -0.093,0.355 -0.11,0.142 0,0"/>
                        </g>
                        <g transform="translate(552.9409,175.2751)" id="g628">
                        <path id="path630" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.11,-0.142 0.305,-0.161 0.435,-0.041 0.566,0.079 0.583,0.291 0.473,0.433 0.363,0.576 0.168,0.594 0.038,0.475 -0.093,0.355 -0.11,0.143 0,0"/>
                        </g>
                        <g transform="translate(597.9425,216.0625)" id="g632">
                        <path id="path634" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.11,-0.143 0.305,-0.161 0.435,-0.041 0.566,0.078 0.583,0.291 0.473,0.433 0.363,0.576 0.168,0.594 0.038,0.474 -0.093,0.355 -0.11,0.142 0,0"/>
                        </g>
                        <g transform="translate(660.7153,272.2905)" id="g636">
                        <path id="path638" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.11,-0.142 0.305,-0.161 0.435,-0.041 0.566,0.079 0.583,0.291 0.473,0.433 0.363,0.576 0.168,0.594 0.038,0.474 -0.093,0.355 -0.11,0.142 0,0"/>
                        </g>
                        <g transform="translate(544.7023,181.9886)" id="g640">
                        <path id="path642" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.22,-0.285 0.609,-0.321 0.87,-0.082 1.132,0.157 1.166,0.582 0.946,0.867 0.727,1.152 0.337,1.188 0.076,0.949 -0.186,0.71 -0.219,0.285 0,0"/>
                        </g>
                        <g transform="translate(566.017,202.3953)" id="g644">
                        <path id="path646" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.219,-0.285 0.609,-0.322 0.87,-0.082 1.132,0.157 1.165,0.582 0.946,0.867 0.726,1.152 0.337,1.188 0.075,0.949 -0.186,0.71 -0.22,0.285 0,0"/>
                        </g>
                        <g transform="translate(694.7871,389.3858)" id="g648">
                        <path id="path650" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.219,-0.285 0.609,-0.322 0.87,-0.082 1.132,0.157 1.165,0.582 0.946,0.867 0.726,1.151 0.337,1.188 0.075,0.949 -0.186,0.71 -0.22,0.285 0,0"/>
                        </g>
                        <g transform="translate(509.4196,255.7271)" id="g652">
                        <path id="path654" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.22,-0.285 0.609,-0.322 0.871,-0.082 1.132,0.157 1.166,0.582 0.946,0.867 0.727,1.151 0.337,1.188 0.076,0.949 -0.186,0.71 -0.219,0.285 0,0"/>
                        </g>
                        <g transform="translate(501.2576,305.6908)" id="g656">
                        <path id="path658" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.219,-0.285 0.609,-0.322 0.87,-0.082 1.132,0.157 1.166,0.582 0.946,0.867 0.727,1.151 0.337,1.188 0.075,0.949 -0.186,0.71 -0.22,0.285 0,0"/>
                        </g>
                        <g transform="translate(595.0725,199.3424)" id="g660">
                        <path id="path662" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.219,-0.285 0.609,-0.322 0.87,-0.082 1.132,0.157 1.166,0.582 0.946,0.867 0.727,1.151 0.337,1.188 0.075,0.949 -0.186,0.71 -0.219,0.285 0,0"/>
                        </g>
                        <g transform="translate(696.8101,392.1189)" id="g664">
                        <path id="path666" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.22,-0.285 0.609,-0.321 0.871,-0.082 1.132,0.157 1.165,0.582 0.946,0.867 0.726,1.152 0.337,1.188 0.076,0.949 -0.186,0.71 -0.22,0.285 0,0"/>
                        </g>
                        <g transform="translate(625.7442,346.3499)" id="g668">
                        <path id="path670" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.22,-0.285 0.609,-0.322 0.871,-0.082 1.132,0.157 1.166,0.582 0.946,0.867 0.727,1.151 0.337,1.188 0.076,0.949 -0.186,0.71 -0.22,0.285 0,0"/>
                        </g>
                        <g transform="translate(644.2097,362.3867)" id="g672">
                        <path id="path674" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.22,-0.285 0.609,-0.322 0.871,-0.082 1.132,0.157 1.166,0.582 0.946,0.867 0.727,1.152 0.337,1.188 0.076,0.949 -0.186,0.71 -0.22,0.285 0,0"/>
                        </g>
                        <g transform="translate(563.017,337.6174)" id="g676">
                        <path id="path678" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.22,-0.285 0.609,-0.322 0.871,-0.082 1.132,0.157 1.166,0.582 0.946,0.866 0.727,1.151 0.337,1.188 0.076,0.949 -0.186,0.71 -0.22,0.285 0,0"/>
                        </g>
                        <g transform="translate(513.1093,314.7889)" id="g680">
                        <path id="path682" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.22,-0.285 0.609,-0.322 0.871,-0.082 1.132,0.157 1.166,0.582 0.946,0.867 0.727,1.151 0.337,1.188 0.076,0.949 -0.186,0.71 -0.219,0.285 0,0"/>
                        </g>
                        <g transform="translate(713.9088,400.3215)" id="g684">
                        <path id="path686" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.22,-0.285 0.609,-0.321 0.871,-0.082 1.132,0.157 1.166,0.582 0.946,0.867 0.726,1.152 0.337,1.188 0.076,0.949 -0.186,0.71 -0.219,0.285 0,0"/>
                        </g>
                        <g transform="translate(643.4902,364.367)" id="g688">
                        <path id="path690" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.219,-0.285 0.609,-0.322 0.871,-0.082 1.132,0.157 1.166,0.582 0.946,0.867 0.727,1.151 0.337,1.188 0.076,0.949 -0.186,0.71 -0.22,0.285 0,0"/>
                        </g>
                        <g transform="translate(617.5895,340.6387)" id="g692">
                        <path id="path694" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.22,-0.285 0.609,-0.322 0.87,-0.082 1.132,0.157 1.166,0.582 0.946,0.867 0.726,1.151 0.337,1.188 0.076,0.949 -0.186,0.71 -0.219,0.285 0,0"/>
                        </g>
                        <g transform="translate(559.6977,322.9782)" id="g696">
                        <path id="path698" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.219,-0.285 0.609,-0.322 0.87,-0.082 1.132,0.157 1.165,0.582 0.946,0.867 0.727,1.151 0.337,1.188 0.075,0.949 -0.186,0.71 -0.22,0.285 0,0"/>
                        </g>
                        <g transform="translate(553.4151,232.4983)" id="g700">
                        <path id="path702" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.22,-0.285 0.609,-0.322 0.87,-0.082 1.132,0.157 1.166,0.582 0.946,0.867 0.727,1.152 0.337,1.188 0.076,0.949 -0.186,0.71 -0.219,0.285 0,0"/>
                        </g>
                        <g transform="translate(604.5275,340.1775)" id="g704">
                        <path id="path706" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.219,-0.285 0.609,-0.322 0.87,-0.082 1.132,0.157 1.166,0.582 0.946,0.867 0.726,1.151 0.337,1.188 0.076,0.949 -0.186,0.71 -0.219,0.285 0,0"/>
                        </g>
                        <g transform="translate(680.2778,400.241)" id="g708">
                        <path id="path710" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.22,-0.285 0.609,-0.322 0.87,-0.082 1.132,0.157 1.166,0.582 0.946,0.867 0.727,1.151 0.337,1.188 0.076,0.949 -0.186,0.709 -0.219,0.285 0,0"/>
                        </g>
                        <g transform="translate(543.5707,263.9348)" id="g712">
                        <path id="path714" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.219,-0.285 0.609,-0.322 0.871,-0.082 1.132,0.157 1.166,0.582 0.946,0.867 0.727,1.151 0.337,1.188 0.076,0.949 -0.185,0.71 -0.219,0.285 0,0"/>
                        </g>
                        <g transform="translate(585.0888,367.7708)" id="g716">
                        <path id="path718" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.219,-0.285 0.609,-0.322 0.87,-0.082 1.132,0.157 1.165,0.582 0.946,0.867 0.727,1.151 0.337,1.188 0.075,0.949 -0.186,0.71 -0.22,0.285 0,0"/>
                        </g>
                        <g transform="translate(680.9944,371.8268)" id="g720">
                        <path id="path722" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.974,0.146 -1.873,-0.596 -2.008,-1.658 -2.143,-2.72 -1.462,-3.7 -0.487,-3.847 0.487,-3.994 1.386,-3.251 1.521,-2.189 1.656,-1.127 0.975,-0.147 0,0"/>
                        </g>
                        <g transform="translate(395.5592,421.5758)" id="g724">
                        <path id="path726" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.974,0.147 -1.873,-0.596 -2.008,-1.658 -2.143,-2.72 -1.462,-3.7 -0.487,-3.847 0.487,-3.993 1.386,-3.251 1.521,-2.189 1.655,-1.127 0.975,-0.147 0,0"/>
                        </g>
                        <g transform="translate(469.9075,416.5347)" id="g728">
                        <path id="path730" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.506,0.076 -0.974,-0.309 -1.044,-0.862 -1.113,-1.413 -0.76,-1.923 -0.253,-1.999 0.253,-2.075 0.72,-1.689 0.79,-1.137 0.86,-0.585 0.506,-0.076 0,0"/>
                        </g>
                        <g transform="translate(490.9036,413.3746)" id="g732">
                        <path id="path734" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.506,0.076 -0.974,-0.31 -1.043,-0.862 -0.07,-0.552 0.284,-1.061 0.79,-1.137 0.506,-0.076 0.973,0.31 1.043,0.861 C 0.86,-0.585 0.506,-0.076 0,0"/>
                        </g>
                        <g transform="translate(355.4451,302.3607)" id="g736">
                        <path id="path738" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.506,0.077 -0.974,-0.309 -1.043,-0.861 -0.07,-0.552 0.284,-1.061 0.79,-1.138 0.506,-0.076 0.973,0.31 1.043,0.862 C 0.86,-0.585 0.506,-0.076 0,0"/>
                        </g>
                        <g transform="translate(465.3257,395.2691)" id="g740">
                        <path id="path742" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.163,0.024 -0.312,-0.099 -0.335,-0.276 -0.022,-0.177 0.091,-0.341 0.254,-0.365 0.162,-0.025 0.312,0.099 0.335,0.276 C 0.276,-0.188 0.162,-0.025 0,0"/>
                        </g>
                        <g transform="translate(464.8263,383.5172)" id="g744">
                        <path id="path746" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.162,0.024 -0.312,-0.099 -0.335,-0.276 -0.022,-0.177 0.091,-0.341 0.254,-0.365 0.162,-0.025 0.312,0.099 0.335,0.276 C 0.276,-0.188 0.163,-0.024 0,0"/>
                        </g>
                        <g transform="translate(253.1349,398.7407)" id="g748">
                        <path id="path750" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.325,0.049 -0.625,-0.199 -0.669,-0.553 -0.045,-0.354 0.182,-0.681 0.506,-0.729 0.325,-0.049 0.625,0.198 0.67,0.552 C 0.552,-0.376 0.325,-0.049 0,0"/>
                        </g>
                        <g transform="translate(253.3074,395.371)" id="g752">
                        <path id="path754" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.325,0.049 -0.624,-0.199 -0.669,-0.553 -0.045,-0.354 0.182,-0.68 0.507,-0.729 0.325,-0.049 0.624,0.198 0.669,0.552 C 0.552,-0.376 0.325,-0.049 0,0"/>
                        </g>
                        <g transform="translate(342.2705,291.4869)" id="g756">
                        <path id="path758" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.325,0.049 -0.625,-0.198 -0.669,-0.553 -0.045,-0.354 0.182,-0.681 0.507,-0.729 0.324,-0.049 0.624,0.198 0.669,0.552 C 0.552,-0.376 0.325,-0.049 0,0"/>
                        </g>
                        <g transform="translate(515.3236,413.9393)" id="g760">
                        <path id="path762" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.325,0.049 -0.625,-0.199 -0.669,-0.553 -0.045,-0.354 0.182,-0.68 0.506,-0.729 0.325,-0.049 0.625,0.198 0.67,0.552 C 0.552,-0.376 0.325,-0.049 0,0"/>
                        </g>
                        <g transform="translate(493.7158,410.9145)" id="g764">
                        <path id="path766" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.325,0.049 -0.625,-0.199 -0.669,-0.553 -0.045,-0.354 0.182,-0.681 0.506,-0.729 0.325,-0.049 0.625,0.198 0.67,0.552 C 0.552,-0.376 0.325,-0.049 0,0"/>
                        </g>
                        <g transform="translate(517.0067,413.0325)" id="g768">
                        <path id="path770" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.325,0.049 -0.625,-0.198 -0.669,-0.552 -0.045,-0.355 0.182,-0.681 0.507,-0.73 0.324,-0.049 0.624,0.198 0.669,0.552 C 0.552,-0.375 0.325,-0.049 0,0"/>
                        </g>
                        <g transform="translate(344.7104,301.2862)" id="g772">
                        <path id="path774" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.325,0.049 -0.624,-0.198 -0.669,-0.553 -0.045,-0.354 0.182,-0.68 0.507,-0.729 0.324,-0.049 0.624,0.198 0.669,0.552 C 0.552,-0.376 0.325,-0.049 0,0"/>
                        </g>
                        <g transform="translate(353.7521,310.7879)" id="g776">
                        <path id="path778" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.325,0.049 -0.625,-0.199 -0.669,-0.552 -0.045,-0.355 0.182,-0.681 0.506,-0.73 0.326,-0.049 0.625,0.198 0.67,0.552 C 0.552,-0.375 0.325,-0.049 0,0"/>
                        </g>
                        <g transform="translate(388.1911,366.7656)" id="g780">
                        <path id="path782" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.557 0.414,-1.009 0.926,-1.009 0.511,0 0.925,0.452 0.925,1.009 0,0.557 -0.414,1.009 -0.925,1.009 C 0.414,1.009 0,0.557 0,0"/>
                        </g>
                        <g transform="translate(350.134,393.7063)" id="g784">
                        <path id="path786" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,-0.358 0.266,-0.647 0.594,-0.647 0.328,0 0.593,0.289 0.593,0.647 0,0.357 -0.265,0.647 -0.593,0.647 C 0.266,0.647 0,0.357 0,0"/>
                        </g>
                        <g transform="translate(396.8089,342.2288)" id="g788">
                        <path id="path790" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.633,-0.821 1.757,-0.927 2.51,-0.237 3.263,0.453 3.36,1.678 2.727,2.499 2.094,3.32 0.971,3.426 0.218,2.736 -0.535,2.046 -0.633,0.821 0,0"/>
                        </g>
                        <g transform="translate(374.6972,379.5326)" id="g792">
                        <path id="path794" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.506,0.077 -0.974,-0.309 -1.044,-0.861 -1.113,-1.413 -0.76,-1.922 -0.253,-1.999 0.253,-2.075 0.72,-1.689 0.79,-1.137 0.86,-0.585 0.506,-0.076 0,0"/>
                        </g>
                        <g transform="translate(361.5225,368.659)" id="g796">
                        <path id="path798" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.325,0.049 -0.624,-0.199 -0.669,-0.553 -0.045,-0.354 0.182,-0.681 0.507,-0.729 0.325,-0.049 0.624,0.198 0.669,0.552 C 0.552,-0.376 0.325,-0.049 0,0"/>
                        </g>
                        <g transform="translate(363.9625,378.4582)" id="g800">
                        <path id="path802" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.325,0.049 -0.624,-0.198 -0.669,-0.553 -0.045,-0.354 0.182,-0.68 0.506,-0.73 0.325,-0.048 0.625,0.199 0.67,0.553 C 0.552,-0.376 0.325,-0.049 0,0"/>
                        </g>
                        <g transform="translate(373.0042,387.9599)" id="g804">
                        <path id="path806" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.325,0.049 -0.624,-0.198 -0.669,-0.553 -0.045,-0.354 0.182,-0.68 0.507,-0.729 0.324,-0.049 0.624,0.198 0.669,0.553 C 0.552,-0.375 0.325,-0.049 0,0"/>
                        </g>
                        <g transform="translate(546.9083,409.4079)" id="g808">
                        <path id="path810" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.325,0.049 -0.624,-0.198 -0.669,-0.553 -0.045,-0.354 0.182,-0.68 0.507,-0.729 0.325,-0.049 0.624,0.198 0.669,0.552 C 0.552,-0.375 0.325,-0.049 0,0"/>
                        </g>
                        <g transform="translate(425.5036,382.4178)" id="g812">
                        <path id="path814" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -1.014,0.153 -1.95,-0.62 -2.09,-1.725 -0.14,-1.106 0.569,-2.126 1.583,-2.278 1.014,-0.153 1.95,0.62 2.09,1.725 C 1.723,-1.173 1.014,-0.153 0,0"/>
                        </g>
                        <g transform="translate(386.9214,324.1488)" id="g816">
                        <path id="path818" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -1.014,0.153 -1.95,-0.62 -2.09,-1.725 -0.14,-1.106 0.569,-2.126 1.583,-2.278 1.014,-0.153 1.95,0.62 2.09,1.725 C 1.723,-1.173 1.014,-0.153 0,0"/>
                        </g>
                        <g transform="translate(482.0425,403.1333)" id="g820">
                        <path id="path822" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.527,0.079 -1.013,-0.322 -1.086,-0.897 -1.158,-1.471 -0.79,-2.001 -0.263,-2.08 0.264,-2.16 0.75,-1.758 0.822,-1.184 0.895,-0.609 0.527,-0.079 0,0"/>
                        </g>
                        <g transform="translate(468.333,391.8178)" id="g824">
                        <path id="path826" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.338,0.051 -0.65,-0.207 -0.697,-0.575 -0.046,-0.369 0.19,-0.709 0.528,-0.759 0.338,-0.051 0.65,0.206 0.696,0.575 C 0.574,-0.391 0.338,-0.051 0,0"/>
                        </g>
                        <g transform="translate(449.6232,391.7552)" id="g828">
                        <path id="path830" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.338,0.051 -0.65,-0.207 -0.697,-0.575 -0.046,-0.369 0.19,-0.708 0.528,-0.759 0.338,-0.051 0.65,0.206 0.697,0.575 C 0.574,-0.391 0.338,-0.051 0,0"/>
                        </g>
                        <g transform="translate(261.755,410.7365)" id="g832">
                        <path id="path834" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.338,0.051 -0.65,-0.207 -0.697,-0.575 -0.046,-0.369 0.19,-0.709 0.528,-0.759 0.338,-0.051 0.65,0.206 0.696,0.575 C 0.574,-0.391 0.338,-0.051 0,0"/>
                        </g>
                        <g transform="translate(451.3749,390.8116)" id="g836">
                        <path id="path838" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.338,0.051 -0.65,-0.207 -0.697,-0.575 -0.046,-0.369 0.19,-0.709 0.528,-0.76 0.338,-0.05 0.65,0.207 0.697,0.576 C 0.574,-0.391 0.338,-0.051 0,0"/>
                        </g>
                        <g transform="translate(470.872,402.0151)" id="g840">
                        <path id="path842" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.338,0.051 -0.65,-0.207 -0.697,-0.575 -0.046,-0.369 0.19,-0.709 0.528,-0.76 0.338,-0.05 0.65,0.207 0.696,0.576 C 0.574,-0.391 0.338,-0.051 0,0"/>
                        </g>
                        <g transform="translate(480.2808,411.9026)" id="g844">
                        <path id="path846" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.338,0.051 -0.65,-0.207 -0.697,-0.575 -0.046,-0.369 0.19,-0.708 0.528,-0.759 0.338,-0.051 0.65,0.206 0.696,0.575 C 0.574,-0.391 0.338,-0.051 0,0"/>
                        </g>
                        <g transform="translate(490.3071,387.6971)" id="g848">
                        <path id="path850" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.338,0.051 -0.65,-0.207 -0.697,-0.575 -0.046,-0.369 0.19,-0.709 0.528,-0.759 0.338,-0.051 0.65,0.206 0.696,0.575 C 0.574,-0.391 0.338,-0.051 0,0"/>
                        </g>
                        <g transform="translate(496.8039,430.9637)" id="g852">
                        <path id="path854" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.338,0.051 -0.65,-0.207 -0.697,-0.575 -0.046,-0.369 0.19,-0.709 0.528,-0.759 0.338,-0.051 0.65,0.206 0.696,0.575 C 0.574,-0.391 0.338,-0.051 0,0"/>
                        </g>
                        <g transform="translate(527.1007,213.4663)" id="g856">
                        <path id="path858" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.219,-0.285 0.609,-0.322 0.871,-0.082 1.132,0.157 1.165,0.582 0.946,0.867 0.726,1.151 0.337,1.188 0.076,0.949 -0.186,0.71 -0.22,0.285 0,0"/>
                        </g>
                        <g transform="translate(443.2225,246.4137)" id="g860">
                        <path id="path862" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.34,0.032 -0.639,-0.242 -0.669,-0.613 -0.029,-0.37 0.222,-0.697 0.562,-0.729 0.34,-0.032 0.64,0.242 0.669,0.613 C 0.592,-0.359 0.34,-0.032 0,0"/>
                        </g>
                        <g transform="translate(470.8925,224.5724)" id="g864">
                        <path id="path866" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.34,0.032 -0.64,-0.242 -0.669,-0.613 -0.03,-0.37 0.222,-0.697 0.562,-0.729 0.34,-0.032 0.64,0.242 0.669,0.613 C 0.592,-0.359 0.34,-0.032 0,0"/>
                        </g>
                        <g transform="translate(504.1735,146.63)" id="g868">
                        <path id="path870" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.17,0.016 -0.32,-0.121 -0.334,-0.307 -0.015,-0.185 0.111,-0.348 0.281,-0.364 0.17,-0.016 0.32,0.121 0.334,0.306 C 0.296,-0.179 0.17,-0.016 0,0"/>
                        </g>
                        <g transform="translate(470.4052,200.7477)" id="g872">
                        <path id="path874" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.34,0.032 -0.639,-0.242 -0.669,-0.613 -0.029,-0.37 0.222,-0.697 0.562,-0.729 0.34,-0.032 0.64,0.242 0.669,0.613 C 0.592,-0.359 0.34,-0.032 0,0"/>
                        </g>
                        <g transform="translate(449.2922,210.6737)" id="g876">
                        <path id="path878" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.721,0.068 -1.357,-0.514 -1.419,-1.3 -0.063,-0.786 0.471,-1.479 1.192,-1.547 0.722,-0.068 1.357,0.514 1.419,1.3 C 1.255,-0.761 0.721,-0.068 0,0"/>
                        </g>
                        <g transform="translate(449.5641,217.989)" id="g880">
                        <path id="path882" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.17,0.016 -0.32,-0.121 -0.334,-0.306 -0.015,-0.186 0.111,-0.349 0.281,-0.365 0.17,-0.016 0.319,0.121 0.334,0.306 C 0.296,-0.179 0.17,-0.016 0,0"/>
                        </g>
                        <g transform="translate(444.1427,213.4279)" id="g884">
                        <path id="path886" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.17,0.016 -0.32,-0.121 -0.335,-0.306 -0.014,-0.186 0.111,-0.349 0.282,-0.365 0.169,-0.016 0.319,0.121 0.334,0.306 C 0.296,-0.179 0.17,-0.016 0,0"/>
                        </g>
                        <g transform="translate(454.3228,215.0313)" id="g888">
                        <path id="path890" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.34,0.032 -0.639,-0.242 -0.669,-0.613 -0.029,-0.37 0.222,-0.697 0.562,-0.729 0.34,-0.032 0.64,0.242 0.669,0.613 C 0.592,-0.359 0.34,-0.032 0,0"/>
                        </g>
                        <g transform="translate(643.6255,280.6225)" id="g892">
                        <path id="path894" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.721,0.068 -1.356,-0.514 -1.419,-1.3 -0.063,-0.786 0.471,-1.479 1.193,-1.547 0.721,-0.068 1.356,0.514 1.419,1.3 C 1.255,-0.761 0.721,-0.068 0,0"/>
                        </g>
                        <g transform="translate(508.3985,160.8251)" id="g896">
                        <path id="path898" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.34,0.032 -0.639,-0.242 -0.669,-0.613 -0.029,-0.37 0.222,-0.697 0.562,-0.729 0.34,-0.032 0.64,0.242 0.669,0.613 C 0.592,-0.359 0.34,-0.032 0,0"/>
                        </g>
                        <g transform="translate(569.9122,178.7588)" id="g900">
                        <path id="path902" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.255,-0.483 0.821,-0.648 1.264,-0.37 1.707,-0.091 1.859,0.526 1.603,1.008 1.348,1.491 0.782,1.656 0.339,1.378 -0.104,1.1 -0.255,0.482 0,0"/>
                        </g>
                        <g transform="translate(613.7238,163.5958)" id="g904">
                        <path id="path906" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.164,-0.31 0.527,-0.416 0.811,-0.237 1.095,-0.058 1.192,0.337 1.028,0.647 0.864,0.957 0.501,1.063 0.217,0.884 -0.067,0.705 -0.164,0.31 0,0"/>
                        </g>
                        <g transform="translate(549.6977,168.6983)" id="g908">
                        <path id="path910" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0.082,-0.155 0.263,-0.208 0.406,-0.119 0.141,0.09 0.19,0.288 0.108,0.443 C 0.432,0.478 0.251,0.531 0.109,0.442 -0.033,0.353 -0.082,0.155 0,0"/>
                        </g>
                        <g transform="translate(588.1277,187.8625)" id="g912">
                        <path id="path914" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.082,-0.155 0.263,-0.208 0.406,-0.118 0.547,-0.029 0.596,0.169 0.514,0.324 0.432,0.478 0.251,0.531 0.109,0.442 -0.033,0.353 -0.082,0.155 0,0"/>
                        </g>
                        <g transform="translate(596.9468,194.6432)" id="g916">
                        <path id="path918" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0.082,-0.155 0.264,-0.208 0.406,-0.119 0.142,0.09 0.19,0.288 0.108,0.442 C 0.432,0.478 0.251,0.531 0.109,0.442 -0.033,0.353 -0.082,0.155 0,0"/>
                        </g>
                        <g transform="translate(554.8999,159.5179)" id="g920">
                        <path id="path922" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.082,-0.155 0.263,-0.208 0.405,-0.119 0.548,-0.029 0.596,0.169 0.514,0.324 0.432,0.478 0.251,0.531 0.109,0.442 -0.033,0.353 -0.082,0.155 0,0"/>
                        </g>
                        <g transform="translate(569.2645,123.7626)" id="g924">
                        <path id="path926" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.512,-0.967 1.645,-1.298 2.532,-0.74 3.418,-0.183 3.723,1.053 3.211,2.02 2.699,2.986 1.566,3.318 0.679,2.76 -0.207,2.202 -0.512,0.967 0,0"/>
                        </g>
                        <g transform="translate(629.0451,247.987)" id="g928">
                        <path id="path930" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.512,-0.967 1.645,-1.298 2.532,-0.74 3.419,-0.182 3.723,1.053 3.211,2.02 2.699,2.986 1.566,3.318 0.679,2.76 -0.208,2.202 -0.512,0.967 0,0"/>
                        </g>
                        <g transform="translate(554.5278,155.646)" id="g932">
                        <path id="path934" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.512,-0.967 1.645,-1.298 2.532,-0.74 3.419,-0.182 3.723,1.053 3.211,2.02 2.699,2.986 1.566,3.318 0.679,2.76 -0.208,2.202 -0.512,0.967 0,0"/>
                        </g>
                        <g transform="translate(587.5501,135.2645)" id="g936">
                        <path id="path938" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.362,-0.683 1.163,-0.918 1.79,-0.523 2.417,-0.129 2.632,0.745 2.27,1.428 1.909,2.112 1.107,2.346 0.48,1.952 -0.147,1.557 -0.362,0.684 0,0"/>
                        </g>
                        <g transform="translate(538.5119,112.6382)" id="g940">
                        <path id="path942" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0.266,-0.502 0.855,-0.674 1.316,-0.385 0.46,0.29 0.618,0.932 0.352,1.434 C 1.402,1.552 0.814,1.724 0.353,1.434 -0.108,1.144 -0.266,0.502 0,0"/>
                        </g>
                        <g transform="translate(626.9732,133.0118)" id="g944">
                        <path id="path946" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0.266,-0.502 0.855,-0.674 1.316,-0.385 0.46,0.29 0.618,0.932 0.352,1.434 C 1.402,1.552 0.813,1.724 0.353,1.434 -0.108,1.144 -0.266,0.502 0,0"/>
                        </g>
                        <g transform="translate(615.9499,153.837)" id="g948">
                        <path id="path950" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.266,-0.502 0.855,-0.674 1.315,-0.385 1.776,-0.095 1.934,0.547 1.668,1.049 1.402,1.552 0.814,1.724 0.353,1.434 -0.108,1.144 -0.266,0.502 0,0"/>
                        </g>
                        <g transform="translate(672.5639,117.2332)" id="g952">
                        <path id="path954" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.171,-0.322 0.548,-0.433 0.844,-0.247 1.14,-0.061 1.241,0.351 1.07,0.673 0.9,0.995 0.522,1.106 0.226,0.92 -0.069,0.734 -0.171,0.322 0,0"/>
                        </g>
                        <g transform="translate(481.2071,135.8103)" id="g956">
                        <path id="path958" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.085,-0.161 0.274,-0.216 0.422,-0.124 0.57,-0.03 0.62,0.175 0.535,0.337 0.45,0.497 0.261,0.553 0.113,0.46 -0.035,0.367 -0.085,0.161 0,0"/>
                        </g>
                        <g transform="translate(463.8217,151.2964)" id="g960">
                        <path id="path962" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.085,-0.161 0.274,-0.216 0.422,-0.123 0.57,-0.03 0.62,0.175 0.535,0.337 0.45,0.498 0.261,0.553 0.113,0.46 -0.035,0.367 -0.085,0.161 0,0"/>
                        </g>
                        <g transform="translate(605.9379,122.5429)" id="g964">
                        <path id="path966" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.085,-0.161 0.274,-0.216 0.422,-0.123 0.57,-0.031 0.621,0.175 0.535,0.337 0.45,0.498 0.261,0.553 0.113,0.46 -0.035,0.367 -0.085,0.161 0,0"/>
                        </g>
                        <g transform="translate(469.6446,157.292)" id="g968">
                        <path id="path970" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.085,-0.161 0.274,-0.216 0.422,-0.123 0.57,-0.03 0.62,0.176 0.535,0.337 0.45,0.498 0.261,0.553 0.113,0.46 -0.035,0.367 -0.085,0.161 0,0"/>
                        </g>
                        <g transform="translate(645.9286,142.4851)" id="g972">
                        <path id="path974" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.085,-0.161 0.274,-0.216 0.422,-0.123 0.57,-0.03 0.62,0.176 0.535,0.337 0.45,0.498 0.261,0.553 0.113,0.46 -0.035,0.367 -0.086,0.161 0,0"/>
                        </g>
                        <g transform="translate(655.1059,149.5412)" id="g976">
                        <path id="path978" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.085,-0.161 0.274,-0.216 0.422,-0.124 0.57,-0.03 0.62,0.176 0.535,0.337 0.45,0.498 0.261,0.553 0.113,0.46 -0.035,0.367 -0.085,0.161 0,0"/>
                        </g>
                        <g transform="translate(456.9409,140.6254)" id="g980">
                        <path id="path982" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.085,-0.161 0.274,-0.216 0.422,-0.123 0.57,-0.031 0.62,0.176 0.535,0.337 0.45,0.498 0.261,0.553 0.113,0.46 -0.035,0.367 -0.085,0.161 0,0"/>
                        </g>
                        <g transform="translate(611.3512,112.9897)" id="g984">
                        <path id="path986" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.085,-0.161 0.274,-0.216 0.422,-0.123 0.57,-0.03 0.621,0.175 0.535,0.337 0.45,0.498 0.261,0.553 0.113,0.46 -0.034,0.367 -0.085,0.161 0,0"/>
                        </g>
                        <g transform="translate(595.4289,150.7994)" id="g988">
                        <path id="path990" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.171,-0.322 0.549,-0.433 0.844,-0.247 1.14,-0.061 1.241,0.351 1.07,0.673 0.9,0.995 0.522,1.106 0.226,0.92 -0.069,0.734 -0.171,0.322 0,0"/>
                        </g>
                        <g transform="translate(597.8589,153.1056)" id="g992">
                        <path id="path994" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.17,-0.322 0.548,-0.433 0.844,-0.247 1.139,-0.061 1.241,0.351 1.07,0.673 0.9,0.995 0.522,1.106 0.226,0.92 -0.069,0.734 -0.171,0.322 0,0"/>
                        </g>
                        <g transform="translate(588.7826,192.5687)" id="g996">
                        <path id="path998" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.171,-0.322 0.548,-0.433 0.844,-0.247 1.139,-0.061 1.241,0.351 1.07,0.673 0.9,0.995 0.522,1.106 0.226,0.92 -0.069,0.734 -0.171,0.322 0,0"/>
                        </g>
                        <g transform="translate(609.5334,204.8437)" id="g1000">
                        <path id="path1002" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.17,-0.322 0.548,-0.433 0.844,-0.247 1.14,-0.061 1.241,0.351 1.07,0.673 0.9,0.995 0.522,1.106 0.226,0.92 -0.069,0.734 -0.17,0.322 0,0"/>
                        </g>
                        <g transform="translate(616.0089,157.9267)" id="g1004">
                        <path id="path1006" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.17,-0.322 0.548,-0.433 0.844,-0.247 1.14,-0.061 1.241,0.351 1.07,0.673 0.9,0.996 0.522,1.106 0.226,0.92 -0.069,0.734 -0.17,0.322 0,0"/>
                        </g>
                        <g transform="translate(609.1421,206.9305)" id="g1008">
                        <path id="path1010" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.171,-0.322 0.549,-0.433 0.844,-0.247 1.14,-0.061 1.241,0.351 1.07,0.673 0.9,0.995 0.522,1.106 0.226,0.92 -0.069,0.734 -0.171,0.322 0,0"/>
                        </g>
                        <g transform="translate(579.8381,188.4977)" id="g1012">
                        <path id="path1014" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.171,-0.322 0.549,-0.433 0.844,-0.247 1.14,-0.061 1.241,0.351 1.07,0.673 0.9,0.995 0.522,1.106 0.226,0.92 -0.069,0.734 -0.17,0.322 0,0"/>
                        </g>
                        <g transform="translate(595.8591,124.4471)" id="g1016">
                        <path id="path1018" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.699,0.205 -1.418,-0.247 -1.605,-1.01 -0.188,-0.762 0.227,-1.545 0.926,-1.75 0.699,-0.204 1.418,0.248 1.605,1.01 C 1.114,-0.988 0.699,-0.204 0,0"/>
                        </g>
                        <g transform="translate(632.0543,151.5161)" id="g1020">
                        <path id="path1022" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.925,-0.366 1.947,0.154 2.282,1.162 2.619,2.17 2.141,3.284 1.217,3.65 0.292,4.016 -0.73,3.496 -1.066,2.488 -1.402,1.48 -0.925,0.366 0,0"/>
                        </g>
                        <g transform="translate(600.9939,165.8859)" id="g1024">
                        <path id="path1026" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.925,-0.366 1.946,0.154 2.282,1.162 2.618,2.17 2.141,3.284 1.217,3.65 0.292,4.016 -0.73,3.496 -1.066,2.488 -1.402,1.48 -0.925,0.366 0,0"/>
                        </g>
                        <g transform="translate(630.7539,184.5004)" id="g1028">
                        <path id="path1030" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.654,-0.259 1.376,0.109 1.614,0.822 1.852,1.534 1.514,2.322 0.86,2.581 0.207,2.84 -0.516,2.472 -0.753,1.759 -0.991,1.047 -0.654,0.259 0,0"/>
                        </g>
                        <g transform="translate(620.1106,199.7434)" id="g1032">
                        <path id="path1034" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.48,-0.191 1.011,0.08 1.186,0.604 1.36,1.127 1.113,1.706 0.632,1.896 0.152,2.087 -0.379,1.816 -0.554,1.293 -0.728,0.769 -0.48,0.19 0,0"/>
                        </g>
                        <g transform="translate(624.7333,151.9281)" id="g1036">
                        <path id="path1038" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.308,-0.122 0.649,0.051 0.761,0.387 0.873,0.723 0.714,1.095 0.405,1.217 0.097,1.339 -0.243,1.165 -0.355,0.829 -0.467,0.493 -0.308,0.122 0,0"/>
                        </g>
                        <g transform="translate(631.549,188.7802)" id="g1040">
                        <path id="path1042" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.308,-0.122 0.649,0.051 0.761,0.387 0.873,0.723 0.714,1.095 0.406,1.217 0.097,1.339 -0.243,1.166 -0.355,0.83 -0.467,0.494 -0.308,0.122 0,0"/>
                        </g>
                        <g transform="translate(644.4397,182.9854)" id="g1044">
                        <path id="path1046" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.308,-0.122 0.649,0.051 0.761,0.387 0.873,0.723 0.714,1.094 0.406,1.217 0.097,1.339 -0.243,1.165 -0.355,0.829 -0.467,0.493 -0.308,0.122 0,0"/>
                        </g>
                        <g transform="translate(638.4915,176.5121)" id="g1048">
                        <path id="path1050" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.308,-0.122 0.649,0.051 0.761,0.387 0.873,0.723 0.714,1.094 0.405,1.217 0.097,1.339 -0.243,1.165 -0.355,0.829 -0.467,0.493 -0.308,0.122 0,0"/>
                        </g>
                        <g transform="translate(646.3612,191.7954)" id="g1052">
                        <path id="path1054" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.308,-0.122 0.649,0.051 0.761,0.387 0.873,0.723 0.714,1.094 0.406,1.217 0.097,1.339 -0.243,1.165 -0.355,0.829 -0.467,0.493 -0.308,0.122 0,0"/>
                        </g>
                        <g transform="translate(586.9137,160.8)" id="g1056">
                        <path id="path1058" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.308,-0.122 0.649,0.051 0.761,0.387 0.873,0.723 0.714,1.095 0.406,1.217 0.097,1.339 -0.243,1.165 -0.355,0.829 -0.467,0.493 -0.308,0.122 0,0"/>
                        </g>
                        <g transform="translate(628.8311,177.7843)" id="g1060">
                        <path id="path1062" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.154,-0.061 0.324,0.026 0.38,0.193 0.436,0.361 0.357,0.547 0.203,0.608 0.049,0.669 -0.122,0.583 -0.178,0.415 -0.234,0.247 -0.154,0.061 0,0"/>
                        </g>
                        <g transform="translate(637.5194,217.2136)" id="g1064">
                        <path id="path1066" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.154,-0.061 0.324,0.026 0.38,0.194 0.436,0.362 0.357,0.547 0.203,0.608 0.049,0.67 -0.122,0.583 -0.178,0.415 -0.234,0.247 -0.154,0.061 0,0"/>
                        </g>
                        <g transform="translate(634.9047,180.5465)" id="g1068">
                        <path id="path1070" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.154,-0.061 0.325,0.026 0.38,0.194 0.437,0.362 0.357,0.547 0.203,0.608 0.049,0.669 -0.122,0.583 -0.177,0.415 -0.234,0.247 -0.154,0.061 0,0"/>
                        </g>
                        <g transform="translate(654.3915,238.0568)" id="g1072">
                        <path id="path1074" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.154,-0.061 0.325,0.026 0.38,0.194 0.437,0.361 0.357,0.547 0.203,0.608 0.049,0.669 -0.121,0.583 -0.177,0.415 -0.233,0.247 -0.154,0.061 0,0"/>
                        </g>
                        <g transform="translate(625.0895,181.8208)" id="g1076">
                        <path id="path1078" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.308,-0.122 0.649,0.051 0.761,0.387 0.873,0.723 0.714,1.095 0.406,1.217 0.098,1.339 -0.243,1.165 -0.355,0.83 -0.467,0.493 -0.308,0.122 0,0"/>
                        </g>
                        <g transform="translate(633.8399,209.9658)" id="g1080">
                        <path id="path1082" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.308,-0.122 0.649,0.051 0.761,0.387 0.873,0.723 0.714,1.095 0.405,1.217 0.097,1.339 -0.243,1.165 -0.355,0.83 -0.467,0.493 -0.308,0.122 0,0"/>
                        </g>
                        <g transform="translate(659.3693,222.6373)" id="g1084">
                        <path id="path1086" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.308,-0.122 0.649,0.051 0.761,0.387 0.873,0.723 0.714,1.094 0.406,1.217 0.097,1.339 -0.243,1.165 -0.355,0.829 -0.467,0.493 -0.308,0.122 0,0"/>
                        </g>
                        <g transform="translate(596.5704,198.8058)" id="g1088">
                        <path id="path1090" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.308,-0.122 0.649,0.051 0.761,0.387 0.873,0.723 0.714,1.095 0.405,1.217 0.097,1.339 -0.243,1.165 -0.355,0.829 -0.467,0.493 -0.308,0.122 0,0"/>
                        </g>
                        <g transform="translate(700.7087,148.739)" id="g1092">
                        <path id="path1094" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.962,-0.381 2.026,0.16 2.375,1.209 2.725,2.258 2.228,3.417 1.266,3.798 0.304,4.179 -0.76,3.638 -1.109,2.589 -1.459,1.54 -0.962,0.381 0,0"/>
                        </g>
                        <g transform="translate(668.387,163.6923)" id="g1096">
                        <path id="path1098" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.962,-0.381 2.025,0.16 2.375,1.209 2.725,2.258 2.228,3.417 1.266,3.798 0.304,4.179 -0.759,3.638 -1.109,2.589 -1.459,1.54 -0.962,0.381 0,0"/>
                        </g>
                        <g transform="translate(699.6158,121.1601)" id="g1100">
                        <path id="path1102" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.68,-0.27 1.432,0.113 1.68,0.855 1.927,1.596 1.576,2.416 0.895,2.686 0.215,2.955 -0.537,2.572 -0.784,1.831 -1.031,1.089 -0.68,0.269 0,0"/>
                        </g>
                        <g transform="translate(699.3556,183.0628)" id="g1104">
                        <path id="path1106" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.68,-0.27 1.432,0.113 1.68,0.855 1.927,1.596 1.576,2.416 0.895,2.686 0.215,2.955 -0.537,2.572 -0.784,1.831 -1.031,1.089 -0.68,0.27 0,0"/>
                        </g>
                        <g transform="translate(607.2555,144.4322)" id="g1108">
                        <path id="path1110" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.68,-0.27 1.432,0.113 1.68,0.855 1.927,1.596 1.576,2.416 0.895,2.686 0.215,2.955 -0.537,2.572 -0.784,1.831 -1.031,1.089 -0.68,0.27 0,0"/>
                        </g>
                        <g transform="translate(688.2802,198.9245)" id="g1112">
                        <path id="path1114" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.5,-0.198 1.052,0.083 1.234,0.628 1.416,1.173 1.158,1.775 0.658,1.973 0.158,2.171 -0.395,1.89 -0.576,1.345 -0.758,0.8 -0.5,0.198 0,0"/>
                        </g>
                        <g transform="translate(693.0903,149.1678)" id="g1116">
                        <path id="path1118" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.321,-0.127 0.675,0.053 0.792,0.403 0.908,0.753 0.743,1.139 0.422,1.266 0.101,1.393 -0.253,1.212 -0.37,0.863 -0.486,0.513 -0.321,0.127 0,0"/>
                        </g>
                        <g transform="translate(700.1829,187.5165)" id="g1120">
                        <path id="path1122" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.321,-0.127 0.675,0.053 0.792,0.403 0.908,0.753 0.743,1.139 0.422,1.266 0.101,1.393 -0.253,1.213 -0.37,0.863 -0.486,0.513 -0.321,0.127 0,0"/>
                        </g>
                        <g transform="translate(713.5971,181.4862)" id="g1124">
                        <path id="path1126" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.321,-0.127 0.675,0.053 0.792,0.403 0.908,0.752 0.743,1.139 0.422,1.266 0.101,1.393 -0.253,1.213 -0.37,0.863 -0.486,0.513 -0.321,0.127 0,0"/>
                        </g>
                        <g transform="translate(707.4073,174.75)" id="g1128">
                        <path id="path1130" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.321,-0.127 0.675,0.053 0.792,0.403 0.908,0.753 0.743,1.139 0.422,1.266 0.101,1.393 -0.253,1.213 -0.37,0.863 -0.486,0.513 -0.321,0.127 0,0"/>
                        </g>
                        <g transform="translate(653.7351,158.3998)" id="g1132">
                        <path id="path1134" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.321,-0.127 0.675,0.053 0.792,0.403 0.908,0.753 0.743,1.139 0.422,1.266 0.101,1.393 -0.253,1.213 -0.37,0.863 -0.486,0.514 -0.321,0.127 0,0"/>
                        </g>
                        <g transform="translate(697.3546,176.0737)" id="g1136">
                        <path id="path1138" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.16,-0.063 0.338,0.027 0.396,0.202 0.454,0.376 0.371,0.57 0.211,0.633 0.051,0.697 -0.127,0.607 -0.185,0.432 -0.243,0.257 -0.16,0.064 0,0"/>
                        </g>
                        <g transform="translate(703.6749,178.9481)" id="g1140">
                        <path id="path1142" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.16,-0.064 0.338,0.027 0.396,0.202 0.454,0.376 0.371,0.569 0.211,0.633 0.051,0.697 -0.127,0.606 -0.185,0.432 -0.243,0.257 -0.16,0.063 0,0"/>
                        </g>
                        <g transform="translate(693.4613,180.2744)" id="g1144">
                        <path id="path1146" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.321,-0.127 0.675,0.053 0.792,0.403 0.908,0.753 0.743,1.139 0.422,1.266 0.101,1.393 -0.253,1.213 -0.37,0.863 -0.486,0.514 -0.321,0.127 0,0"/>
                        </g>
                        <g transform="translate(702.5669,209.5624)" id="g1148">
                        <path id="path1150" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.321,-0.127 0.675,0.053 0.792,0.403 0.908,0.753 0.743,1.139 0.422,1.266 0.101,1.393 -0.253,1.213 -0.37,0.863 -0.486,0.513 -0.321,0.127 0,0"/>
                        </g>
                        <g transform="translate(677.8503,228.7703)" id="g1152">
                        <path id="path1154" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.321,-0.127 0.675,0.054 0.792,0.403 0.908,0.753 0.743,1.139 0.422,1.266 0.102,1.393 -0.253,1.213 -0.37,0.863 -0.486,0.514 -0.321,0.127 0,0"/>
                        </g>
                        <g transform="translate(663.7839,197.9491)" id="g1156">
                        <path id="path1158" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.321,-0.127 0.675,0.053 0.792,0.403 0.908,0.753 0.743,1.139 0.422,1.266 0.101,1.393 -0.253,1.213 -0.37,0.863 -0.486,0.513 -0.321,0.127 0,0"/>
                        </g>
                        <g transform="translate(576.0274,180.7879)" id="g1160">
                        <path id="path1162" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.309,-0.158 -0.443,-0.558 -0.298,-0.895 0.144,-0.337 0.512,-0.483 0.821,-0.326 0.309,0.158 0.443,0.558 0.298,0.896 C 0.677,0.012 0.309,0.157 0,0"/>
                        </g>
                        <g transform="translate(610.0072,176.9451)" id="g1164">
                        <path id="path1166" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.309,-0.157 -0.443,-0.558 -0.298,-0.895 0.144,-0.337 0.512,-0.483 0.821,-0.326 0.309,0.158 0.442,0.559 0.298,0.896 C 0.677,0.012 0.309,0.157 0,0"/>
                        </g>
                        <g transform="translate(674.5683,127.5678)" id="g1168">
                        <path id="path1170" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.155,-0.079 -0.221,-0.279 -0.149,-0.448 0.072,-0.168 0.256,-0.241 0.41,-0.162 0.155,0.078 0.222,0.279 0.15,0.447 C 0.338,0.006 0.155,0.078 0,0"/>
                        </g>
                        <g transform="translate(620.5083,156.044)" id="g1172">
                        <path id="path1174" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.309,-0.157 -0.443,-0.558 -0.298,-0.895 0.144,-0.337 0.512,-0.483 0.821,-0.326 0.309,0.158 0.443,0.559 0.298,0.896 C 0.677,0.012 0.309,0.157 0,0"/>
                        </g>
                        <g transform="translate(597.6707,153.1386)" id="g1176">
                        <path id="path1178" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.656,-0.334 -0.94,-1.184 -0.633,-1.899 0.306,-0.715 1.086,-1.024 1.742,-0.69 0.656,0.334 0.939,1.184 0.633,1.899 C 1.436,0.025 0.656,0.334 0,0"/>
                        </g>
                        <g transform="translate(594.552,159.6228)" id="g1180">
                        <path id="path1182" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.155,-0.079 -0.221,-0.279 -0.149,-0.448 0.072,-0.168 0.256,-0.241 0.41,-0.162 0.155,0.078 0.222,0.279 0.15,0.447 C 0.339,0.006 0.155,0.079 0,0"/>
                        </g>
                        <g transform="translate(591.9475,152.7184)" id="g1184">
                        <path id="path1186" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.155,-0.079 -0.221,-0.279 -0.149,-0.448 0.072,-0.168 0.256,-0.241 0.41,-0.162 0.155,0.079 0.222,0.279 0.149,0.447 C 0.338,0.006 0.154,0.079 0,0"/>
                        </g>
                        <g transform="translate(600.0299,159.6537)" id="g1188">
                        <path id="path1190" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.309,-0.158 -0.443,-0.558 -0.298,-0.895 0.144,-0.337 0.512,-0.483 0.821,-0.326 0.309,0.158 0.443,0.558 0.298,0.896 C 0.677,0.012 0.309,0.157 0,0"/>
                        </g>
                        <g transform="translate(671.7196,142.1645)" id="g1192">
                        <path id="path1194" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.309,-0.157 -0.443,-0.558 -0.298,-0.895 0.144,-0.337 0.512,-0.483 0.821,-0.325 0.309,0.157 0.443,0.558 0.298,0.895 C 0.677,0.012 0.309,0.158 0,0"/>
                        </g>
                        <g transform="translate(372.1544,250.7711)" id="g1196">
                        <path id="path1198" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,1.066 -0.793,1.931 -1.771,1.931 -0.978,0 -1.772,-0.865 -1.772,-1.931 0,-1.066 0.794,-1.931 1.772,-1.931 C -0.793,-1.931 0,-1.066 0,0"/>
                        </g>
                        <g transform="translate(293.4562,178.7455)" id="g1200">
                        <path id="path1202" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0,1.066 -0.793,1.931 -1.771,1.931 -2.75,1.931 -3.543,1.066 -3.543,0 c 0,-1.066 0.793,-1.931 1.772,-1.931 C -0.793,-1.931 0,-1.066 0,0"/>
                        </g>
                        <g transform="translate(300.2012,239.4403)" id="g1204">
                        <path id="path1206" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0,1.066 -0.793,1.931 -1.771,1.931 -2.75,1.931 -3.543,1.066 -3.543,0 c 0,-1.067 0.793,-1.931 1.772,-1.931 C -0.793,-1.931 0,-1.067 0,0"/>
                        </g>
                        <g transform="translate(370.3832,216.7085)" id="g1208">
                        <path id="path1210" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,1.066 -0.793,1.931 -1.771,1.931 -0.978,0 -1.772,-0.865 -1.772,-1.931 0,-1.066 0.794,-1.931 1.772,-1.931 C -0.793,-1.931 0,-1.066 0,0"/>
                        </g>
                        <g transform="translate(351.9801,250.7711)" id="g1212">
                        <path id="path1214" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.754 -0.561,1.365 -1.253,1.365 -0.691,0 -1.252,-0.611 -1.252,-1.365 0,-0.754 0.561,-1.365 1.252,-1.365 C -0.561,-1.365 0,-0.754 0,0"/>
                        </g>
                        <g transform="translate(320.3363,273.161)" id="g1216">
                        <path id="path1218" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.554 -0.412,1.003 -0.92,1.003 -0.509,0 -0.921,-0.449 -0.921,-1.003 0,-0.554 0.412,-1.003 0.921,-1.003 C -0.412,-1.003 0,-0.554 0,0"/>
                        </g>
                        <g transform="translate(320.3363,250.1847)" id="g1220">
                        <path id="path1222" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.554 -0.412,1.003 -0.92,1.003 -0.509,0 -0.921,-0.449 -0.921,-1.003 0,-0.554 0.412,-1.003 0.921,-1.003 C -0.412,-1.003 0,-0.554 0,0"/>
                        </g>
                        <g transform="translate(337.4715,191.3135)" id="g1224">
                        <path id="path1226" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.554 -0.412,1.003 -0.92,1.003 -0.508,0 -0.921,-0.449 -0.921,-1.003 0,-0.554 0.413,-1.003 0.921,-1.003 C -0.412,-1.003 0,-0.554 0,0"/>
                        </g>
                        <g transform="translate(289.5137,309.9573)" id="g1228">
                        <path id="path1230" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.355 -0.264,0.644 -0.59,0.644 -0.327,0 -0.591,-0.289 -0.591,-0.644 0,-0.355 0.264,-0.643 0.591,-0.643 C -0.264,-0.643 0,-0.355 0,0"/>
                        </g>
                        <g transform="translate(342.334,270.8744)" id="g1232">
                        <path id="path1234" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.178 -0.132,0.322 -0.295,0.322 -0.163,0 -0.296,-0.144 -0.296,-0.322 0,-0.178 0.133,-0.322 0.296,-0.322 C -0.132,-0.322 0,-0.178 0,0"/>
                        </g>
                        <g transform="translate(300.4963,275.1886)" id="g1236">
                        <path id="path1238" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0,0.178 -0.132,0.322 -0.295,0.322 -0.458,0.322 -0.59,0.178 -0.59,0 c 0,-0.178 0.132,-0.322 0.295,-0.322 C -0.132,-0.322 0,-0.178 0,0"/>
                        </g>
                        <g transform="translate(289.8088,274.1264)" id="g1240">
                        <path id="path1242" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0,0.178 -0.132,0.322 -0.295,0.322 -0.458,0.322 -0.59,0.178 -0.59,0 c 0,-0.178 0.132,-0.322 0.295,-0.322 C -0.132,-0.322 0,-0.178 0,0"/>
                        </g>
                        <g transform="translate(342.0389,281.5999)" id="g1244">
                        <path id="path1246" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0,0.178 -0.132,0.322 -0.295,0.322 -0.458,0.322 -0.59,0.178 -0.59,0 c 0,-0.178 0.132,-0.322 0.295,-0.322 C -0.132,-0.322 0,-0.178 0,0"/>
                        </g>
                        <g transform="translate(338.6524,242.0148)" id="g1248">
                        <path id="path1250" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.355 -0.264,0.644 -0.59,0.644 -0.327,0 -0.591,-0.289 -0.591,-0.644 0,-0.355 0.264,-0.644 0.591,-0.644 C -0.264,-0.644 0,-0.355 0,0"/>
                        </g>
                        <g transform="translate(335.6308,241.371)" id="g1252">
                        <path id="path1254" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.355 -0.264,0.644 -0.591,0.644 -0.326,0 -0.59,-0.289 -0.59,-0.644 0,-0.355 0.264,-0.644 0.59,-0.644 C -0.264,-0.644 0,-0.355 0,0"/>
                        </g>
                        <g transform="translate(325.8535,203.9818)" id="g1256">
                        <path id="path1258" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.355 -0.264,0.644 -0.59,0.644 -0.326,0 -0.591,-0.289 -0.591,-0.644 0,-0.355 0.265,-0.644 0.591,-0.644 C -0.264,-0.644 0,-0.355 0,0"/>
                        </g>
                        <g transform="translate(303.3001,204.6254)" id="g1260">
                        <path id="path1262" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.355 -0.264,0.644 -0.59,0.644 -0.327,0 -0.591,-0.289 -0.591,-0.644 0,-0.355 0.264,-0.644 0.591,-0.644 C -0.264,-0.644 0,-0.355 0,0"/>
                        </g>
                        <g transform="translate(376.6684,168.3296)" id="g1264">
                        <path id="path1266" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.355 -0.264,0.644 -0.59,0.644 -0.327,0 -0.591,-0.289 -0.591,-0.644 0,-0.355 0.264,-0.644 0.591,-0.644 C -0.264,-0.644 0,-0.355 0,0"/>
                        </g>
                        <g transform="translate(318.4956,246.8303)" id="g1268">
                        <path id="path1270" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.355 -0.264,0.643 -0.591,0.643 -0.326,0 -0.59,-0.288 -0.59,-0.643 0,-0.356 0.264,-0.644 0.59,-0.644 C -0.264,-0.644 0,-0.356 0,0"/>
                        </g>
                        <g transform="translate(302.7096,202.6946)" id="g1272">
                        <path id="path1274" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.355 -0.264,0.644 -0.59,0.644 -0.327,0 -0.591,-0.289 -0.591,-0.644 0,-0.355 0.264,-0.644 0.591,-0.644 C -0.264,-0.644 0,-0.355 0,0"/>
                        </g>
                        <g transform="translate(335.0403,202.6946)" id="g1276">
                        <path id="path1278" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.355 -0.264,0.644 -0.59,0.644 -0.326,0 -0.591,-0.289 -0.591,-0.644 0,-0.355 0.265,-0.644 0.591,-0.644 C -0.264,-0.644 0,-0.355 0,0"/>
                        </g>
                        <g transform="translate(387.3531,176.8144)" id="g1280">
                        <path id="path1282" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.355 -0.264,0.644 -0.59,0.644 -0.327,0 -0.591,-0.289 -0.591,-0.644 0,-0.356 0.264,-0.644 0.591,-0.644 C -0.264,-0.644 0,-0.356 0,0"/>
                        </g>
                        <g transform="translate(344.8566,194.2776)" id="g1284">
                        <path id="path1286" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.355 -0.264,0.644 -0.59,0.644 -0.327,0 -0.591,-0.289 -0.591,-0.644 0,-0.355 0.264,-0.644 0.591,-0.644 C -0.264,-0.644 0,-0.355 0,0"/>
                        </g>
                        <g transform="translate(288.3329,182.2097)" id="g1288">
                        <path id="path1290" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.355 -0.264,0.644 -0.591,0.644 -0.326,0 -0.59,-0.289 -0.59,-0.644 0,-0.355 0.264,-0.644 0.59,-0.644 C -0.264,-0.644 0,-0.355 0,0"/>
                        </g>
                        <g transform="translate(343.5149,161.0628)" id="g1292">
                        <path id="path1294" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.355 -0.264,0.644 -0.59,0.644 -0.327,0 -0.591,-0.289 -0.591,-0.644 0,-0.355 0.264,-0.644 0.591,-0.644 C -0.264,-0.644 0,-0.355 0,0"/>
                        </g>
                        <g transform="translate(349.842,264.0506)" id="g1296">
                        <path id="path1298" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.489,-0.533 1.282,-0.533 1.771,0 2.26,0.533 2.26,1.398 1.771,1.931 1.282,2.464 0.489,2.464 0,1.931 -0.489,1.398 -0.489,0.533 0,0"/>
                        </g>
                        <g transform="translate(345.9678,320.1791)" id="g1300">
                        <path id="path1302" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0,1.11 -0.825,2.009 -1.843,2.009 -2.861,2.009 -3.687,1.11 -3.687,0 c 0,-1.11 0.826,-2.009 1.844,-2.009 C -0.825,-2.009 0,-1.11 0,0"/>
                        </g>
                        <g transform="translate(264.0739,245.2285)" id="g1304">
                        <path id="path1306" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0,1.11 -0.825,2.009 -1.843,2.009 -2.861,2.009 -3.686,1.11 -3.686,0 c 0,-1.11 0.825,-2.009 1.843,-2.009 C -0.825,-2.009 0,-1.11 0,0"/>
                        </g>
                        <g transform="translate(271.0927,308.3881)" id="g1308">
                        <path id="path1310" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0,1.11 -0.825,2.009 -1.843,2.009 -2.861,2.009 -3.686,1.11 -3.686,0 c 0,-1.11 0.825,-2.009 1.843,-2.009 C -0.825,-2.009 0,-1.11 0,0"/>
                        </g>
                        <g transform="translate(344.1245,284.7333)" id="g1312">
                        <path id="path1314" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0,1.11 -0.825,2.009 -1.843,2.009 -2.861,2.009 -3.686,1.11 -3.686,0 c 0,-1.11 0.825,-2.009 1.843,-2.009 C -0.825,-2.009 0,-1.11 0,0"/>
                        </g>
                        <g transform="translate(324.9741,320.1791)" id="g1316">
                        <path id="path1318" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.785 -0.583,1.421 -1.303,1.421 -0.72,0 -1.304,-0.636 -1.304,-1.421 0,-0.785 0.584,-1.421 1.304,-1.421 C -0.583,-1.421 0,-0.785 0,0"/>
                        </g>
                        <g transform="translate(377.5271,313.0997)" id="g1320">
                        <path id="path1322" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.576 -0.429,1.044 -0.958,1.044 -0.529,0 -0.957,-0.468 -0.957,-1.044 0,-0.577 0.428,-1.044 0.957,-1.044 C -0.429,-1.044 0,-0.577 0,0"/>
                        </g>
                        <g transform="translate(292.0454,343.478)" id="g1324">
                        <path id="path1326" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.577 -0.429,1.044 -0.958,1.044 -0.529,0 -0.957,-0.467 -0.957,-1.044 0,-0.577 0.428,-1.044 0.957,-1.044 C -0.429,-1.044 0,-0.577 0,0"/>
                        </g>
                        <g transform="translate(292.0454,319.5686)" id="g1328">
                        <path id="path1330" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.577 -0.429,1.044 -0.958,1.044 -0.529,0 -0.957,-0.467 -0.957,-1.044 0,-0.576 0.428,-1.044 0.957,-1.044 C -0.429,-1.044 0,-0.576 0,0"/>
                        </g>
                        <g transform="translate(309.8765,258.307)" id="g1332">
                        <path id="path1334" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.577 -0.429,1.044 -0.958,1.044 -0.529,0 -0.957,-0.467 -0.957,-1.044 0,-0.577 0.428,-1.044 0.957,-1.044 C -0.429,-1.044 0,-0.577 0,0"/>
                        </g>
                        <g transform="translate(259.9711,381.7687)" id="g1336">
                        <path id="path1338" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.37 -0.275,0.67 -0.614,0.67 -0.34,0 -0.615,-0.3 -0.615,-0.67 0,-0.37 0.275,-0.67 0.615,-0.67 C -0.275,-0.67 0,-0.37 0,0"/>
                        </g>
                        <g transform="translate(322.6747,392.0872)" id="g1340">
                        <path id="path1342" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.185 -0.137,0.335 -0.307,0.335 -0.17,0 -0.307,-0.15 -0.307,-0.335 0,-0.185 0.137,-0.335 0.307,-0.335 C -0.137,-0.335 0,-0.185 0,0"/>
                        </g>
                        <g transform="translate(384.6256,345.8223)" id="g1344">
                        <path id="path1346" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.185 -0.137,0.335 -0.307,0.335 -0.17,0 -0.308,-0.15 -0.308,-0.335 0,-0.185 0.138,-0.335 0.308,-0.335 C -0.137,-0.335 0,-0.185 0,0"/>
                        </g>
                        <g transform="translate(314.9364,341.0985)" id="g1348">
                        <path id="path1350" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.185 -0.138,0.335 -0.307,0.335 -0.17,0 -0.308,-0.15 -0.308,-0.335 0,-0.185 0.138,-0.335 0.308,-0.335 C -0.138,-0.335 0,-0.185 0,0"/>
                        </g>
                        <g transform="translate(376.8767,343.8129)" id="g1352">
                        <path id="path1354" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.185 -0.138,0.335 -0.307,0.335 -0.17,0 -0.307,-0.15 -0.307,-0.335 0,-0.185 0.137,-0.335 0.307,-0.335 C -0.138,-0.335 0,-0.185 0,0"/>
                        </g>
                        <g transform="translate(271.3998,345.588)" id="g1356">
                        <path id="path1358" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.185 -0.137,0.335 -0.307,0.335 -0.17,0 -0.307,-0.15 -0.307,-0.335 0,-0.185 0.137,-0.335 0.307,-0.335 C -0.137,-0.335 0,-0.185 0,0"/>
                        </g>
                        <g transform="translate(260.2784,344.4827)" id="g1360">
                        <path id="path1362" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.185 -0.138,0.335 -0.307,0.335 -0.17,0 -0.307,-0.15 -0.307,-0.335 0,-0.185 0.137,-0.335 0.307,-0.335 C -0.138,-0.335 0,-0.185 0,0"/>
                        </g>
                        <g transform="translate(314.6292,352.2599)" id="g1364">
                        <path id="path1366" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.185 -0.137,0.335 -0.307,0.335 -0.17,0 -0.307,-0.15 -0.307,-0.335 0,-0.185 0.137,-0.335 0.307,-0.335 C -0.137,-0.335 0,-0.185 0,0"/>
                        </g>
                        <g transform="translate(311.1054,311.0671)" id="g1368">
                        <path id="path1370" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.37 -0.275,0.67 -0.615,0.67 -0.339,0 -0.614,-0.3 -0.614,-0.67 0,-0.37 0.275,-0.67 0.614,-0.67 C -0.275,-0.67 0,-0.37 0,0"/>
                        </g>
                        <g transform="translate(307.961,310.3974)" id="g1372">
                        <path id="path1374" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.37 -0.275,0.67 -0.614,0.67 -0.34,0 -0.615,-0.3 -0.615,-0.67 0,-0.37 0.275,-0.67 0.615,-0.67 C -0.275,-0.67 0,-0.37 0,0"/>
                        </g>
                        <g transform="translate(297.7868,271.4899)" id="g1376">
                        <path id="path1378" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.37 -0.275,0.67 -0.615,0.67 -0.339,0 -0.614,-0.3 -0.614,-0.67 0,-0.37 0.275,-0.67 0.614,-0.67 C -0.275,-0.67 0,-0.37 0,0"/>
                        </g>
                        <g transform="translate(274.3173,272.1597)" id="g1380">
                        <path id="path1382" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.37 -0.275,0.67 -0.614,0.67 -0.34,0 -0.615,-0.3 -0.615,-0.67 0,-0.37 0.275,-0.67 0.615,-0.67 C -0.275,-0.67 0,-0.37 0,0"/>
                        </g>
                        <g transform="translate(350.6649,234.3899)" id="g1384">
                        <path id="path1386" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.37 -0.275,0.67 -0.614,0.67 -0.34,0 -0.615,-0.3 -0.615,-0.67 0,-0.37 0.275,-0.67 0.615,-0.67 C -0.275,-0.67 0,-0.37 0,0"/>
                        </g>
                        <g transform="translate(290.13,316.0783)" id="g1388">
                        <path id="path1390" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.37 -0.275,0.67 -0.614,0.67 -0.34,0 -0.615,-0.3 -0.615,-0.67 0,-0.37 0.275,-0.67 0.615,-0.67 C -0.275,-0.67 0,-0.37 0,0"/>
                        </g>
                        <g transform="translate(273.703,270.1502)" id="g1392">
                        <path id="path1394" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.37 -0.275,0.67 -0.614,0.67 -0.34,0 -0.615,-0.3 -0.615,-0.67 0,-0.37 0.275,-0.67 0.615,-0.67 C -0.275,-0.67 0,-0.37 0,0"/>
                        </g>
                        <g transform="translate(307.3466,270.1502)" id="g1396">
                        <path id="path1398" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.37 -0.275,0.67 -0.614,0.67 -0.34,0 -0.615,-0.3 -0.615,-0.67 0,-0.37 0.275,-0.67 0.615,-0.67 C -0.275,-0.67 0,-0.37 0,0"/>
                        </g>
                        <g transform="translate(361.7836,243.2192)" id="g1400">
                        <path id="path1402" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.37 -0.275,0.67 -0.614,0.67 -0.34,0 -0.615,-0.3 -0.615,-0.67 0,-0.37 0.275,-0.67 0.615,-0.67 C -0.275,-0.67 0,-0.37 0,0"/>
                        </g>
                        <g transform="translate(317.5614,261.3916)" id="g1404">
                        <path id="path1406" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.37 -0.275,0.67 -0.614,0.67 -0.34,0 -0.615,-0.3 -0.615,-0.67 0,-0.37 0.275,-0.67 0.615,-0.67 C -0.275,-0.67 0,-0.37 0,0"/>
                        </g>
                        <g transform="translate(258.7423,248.8336)" id="g1408">
                        <path id="path1410" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.37 -0.275,0.67 -0.614,0.67 -0.34,0 -0.615,-0.3 -0.615,-0.67 0,-0.37 0.275,-0.67 0.615,-0.67 C -0.275,-0.67 0,-0.37 0,0"/>
                        </g>
                        <g transform="translate(316.1653,226.8279)" id="g1412">
                        <path id="path1414" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0,0.37 -0.275,0.67 -0.615,0.67 -0.339,0 -0.614,-0.3 -0.614,-0.67 0,-0.37 0.275,-0.67 0.614,-0.67 C -0.275,-0.67 0,-0.37 0,0"/>
                        </g>
                        <g transform="translate(322.7492,333.9979)" id="g1416">
                        <path id="path1418" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c 0.509,-0.555 1.334,-0.555 1.843,0 0.509,0.555 0.509,1.454 0,2.009 C 1.334,2.564 0.509,2.564 0,2.009 -0.509,1.454 -0.509,0.555 0,0"/>
                        </g>
                        <g transform="translate(279.2327,330.2928)" id="g1420">
                        <path id="path1422" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.63,0.817 -1.747,0.922 -2.496,0.236 -3.245,-0.45 -3.341,-1.668 -2.712,-2.484 -2.083,-3.301 -0.965,-3.407 -0.216,-2.72 0.532,-2.034 0.629,-0.816 0,0"/>
                        </g>
                        <g transform="translate(315.7689,205.8419)" id="g1424">
                        <path id="path1426" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.629,0.816 -1.747,0.922 -2.495,0.236 -3.245,-0.45 -3.341,-1.668 -2.712,-2.485 -2.083,-3.301 -0.965,-3.407 -0.216,-2.72 0.533,-2.034 0.629,-0.816 0,0"/>
                        </g>
                        <g transform="translate(293.9728,209.049)" id="g1428">
                        <path id="path1430" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.629,0.816 -1.747,0.922 -2.496,0.236 -3.245,-0.45 -3.341,-1.668 -2.712,-2.484 -2.083,-3.301 -0.965,-3.406 -0.216,-2.72 0.532,-2.034 0.629,-0.816 0,0"/>
                        </g>
                        <g transform="translate(201.8012,211.6439)" id="g1432">
                        <path id="path1434" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.629,0.816 -1.747,0.922 -2.496,0.236 -3.244,-0.45 -3.341,-1.668 -2.712,-2.485 -2.083,-3.301 -0.965,-3.407 -0.216,-2.721 0.533,-2.035 0.629,-0.817 0,0"/>
                        </g>
                        <g transform="translate(125.3452,271.4232)" id="g1436">
                        <path id="path1438" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.629,0.816 -1.747,0.922 -2.496,0.236 -3.244,-0.45 -3.341,-1.668 -2.712,-2.485 -2.083,-3.301 -0.965,-3.407 -0.216,-2.72 0.533,-2.034 0.629,-0.816 0,0"/>
                        </g>
                        <g transform="translate(184.0626,101.3097)" id="g1440">
                        <path id="path1442" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.63,0.816 -1.747,0.922 -2.496,0.236 -3.245,-0.45 -3.342,-1.668 -2.712,-2.485 -2.083,-3.301 -0.965,-3.407 -0.217,-2.72 0.532,-2.034 0.629,-0.816 0,0"/>
                        </g>
                        <g transform="translate(153.4044,152.5054)" id="g1444">
                        <path id="path1446" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.629,0.816 -1.747,0.922 -2.496,0.236 -3.244,-0.45 -3.341,-1.668 -2.712,-2.485 -2.083,-3.301 -0.965,-3.407 -0.216,-2.72 0.533,-2.034 0.63,-0.816 0,0"/>
                        </g>
                        <g transform="translate(299.434,301.088)" id="g1448">
                        <path id="path1450" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.629,0.816 -1.747,0.922 -2.496,0.236 -3.244,-0.45 -3.341,-1.668 -2.712,-2.485 -2.083,-3.301 -0.965,-3.407 -0.216,-2.721 0.533,-2.034 0.629,-0.816 0,0"/>
                        </g>
                        <g transform="translate(220.5487,184.3249)" id="g1452">
                        <path id="path1454" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.63,0.816 -1.747,0.922 -2.496,0.236 -3.245,-0.45 -3.341,-1.668 -2.712,-2.485 -2.083,-3.301 -0.965,-3.407 -0.217,-2.72 0.532,-2.035 0.629,-0.816 0,0"/>
                        </g>
                        <g transform="translate(398.3861,235.0596)" id="g1456">
                        <path id="path1458" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.629,0.817 -1.747,0.922 -2.495,0.236 -0.75,-0.686 -0.846,-1.904 -0.217,-2.72 0.629,-0.817 1.747,-0.923 2.496,-0.236 C 0.533,-2.034 0.63,-0.816 0,0"/>
                        </g>
                        <g transform="translate(186.3567,197.4947)" id="g1460">
                        <path id="path1462" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.445,0.577 -1.235,0.652 -1.765,0.167 -2.294,-0.318 -2.363,-1.18 -1.918,-1.757 -1.473,-2.334 -0.683,-2.409 -0.153,-1.924 0.376,-1.439 0.445,-0.577 0,0"/>
                        </g>
                        <g transform="translate(265.3145,301.1786)" id="g1464">
                        <path id="path1466" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.445,0.577 -1.235,0.652 -1.765,0.167 -2.294,-0.318 -2.363,-1.18 -1.918,-1.757 -1.473,-2.334 -0.683,-2.409 -0.153,-1.924 0.377,-1.439 0.445,-0.577 0,0"/>
                        </g>
                        <g transform="translate(267.5323,282.2833)" id="g1468">
                        <path id="path1470" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.327,0.424 -0.908,0.479 -1.297,0.123 -0.389,-0.357 -0.439,-0.99 -0.112,-1.414 0.327,-0.424 0.908,-0.479 1.297,-0.123 C 0.277,-1.057 0.327,-0.424 0,0"/>
                        </g>
                        <g transform="translate(229.0341,227.706)" id="g1472">
                        <path id="path1474" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.327,0.424 -0.908,0.479 -1.297,0.123 -0.389,-0.357 -0.439,-0.99 -0.112,-1.414 0.327,-0.424 0.907,-0.479 1.296,-0.123 C 0.277,-1.057 0.327,-0.424 0,0"/>
                        </g>
                        <g transform="translate(148.9174,192.442)" id="g1476">
                        <path id="path1478" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.327,0.424 -0.908,0.479 -1.297,0.123 -0.389,-0.357 -0.439,-0.99 -0.112,-1.414 0.327,-0.424 0.907,-0.479 1.297,-0.122 C 0.277,-1.057 0.327,-0.424 0,0"/>
                        </g>
                        <g transform="translate(162.4779,174.8525)" id="g1480">
                        <path id="path1482" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.327,0.424 -0.908,0.479 -1.297,0.123 -0.389,-0.357 -0.439,-0.99 -0.112,-1.414 0.327,-0.424 0.907,-0.479 1.296,-0.122 C 0.277,-1.057 0.327,-0.424 0,0"/>
                        </g>
                        <g transform="translate(210.3409,141.8011)" id="g1484">
                        <path id="path1486" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.327,0.424 -0.908,0.479 -1.297,0.123 -0.389,-0.357 -0.439,-0.99 -0.112,-1.414 0.327,-0.424 0.908,-0.479 1.297,-0.122 C 0.277,-1.057 0.327,-0.424 0,0"/>
                        </g>
                        <g transform="translate(285.3506,325.9716)" id="g1488">
                        <path id="path1490" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.079 -1.082,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.135 -0.072,-0.907 0.178,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(262.6785,297.9229)" id="g1492">
                        <path id="path1494" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.079 -1.082,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.136 -0.072,-0.907 0.177,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(254.2176,309.8982)" id="g1496">
                        <path id="path1498" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.079 -1.081,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.135 -0.072,-0.907 0.178,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(262.2921,312.251)" id="g1500">
                        <path id="path1502" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.079 -1.081,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.135 -0.072,-0.907 0.178,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(248.5458,303.3509)" id="g1504">
                        <path id="path1506" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.079 -1.081,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.135 -0.072,-0.907 0.178,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(103.6041,198.9945)" id="g1508">
                        <path id="path1510" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.079 -1.081,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.136 -0.072,-0.907 0.177,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(313.8802,297.8401)" id="g1512">
                        <path id="path1514" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.079 -1.081,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.135 -0.072,-0.907 0.178,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(270.0327,305.9215)" id="g1516">
                        <path id="path1518" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.105,0.136 -0.291,0.154 -0.416,0.039 -0.125,-0.114 -0.141,-0.317 -0.036,-0.453 0.105,-0.136 0.291,-0.154 0.416,-0.04 C 0.089,-0.339 0.105,-0.136 0,0"/>
                        </g>
                        <g transform="translate(168.7241,307.2192)" id="g1520">
                        <path id="path1522" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.132,0.171 -0.367,0.193 -0.524,0.049 -0.681,-0.095 -0.702,-0.35 -0.57,-0.522 -0.437,-0.693 -0.203,-0.715 -0.046,-0.571 0.112,-0.427 0.132,-0.171 0,0"/>
                        </g>
                        <g transform="translate(215.6973,256.5635)" id="g1524">
                        <path id="path1526" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.105,0.136 -0.291,0.154 -0.416,0.039 -0.125,-0.114 -0.141,-0.317 -0.036,-0.453 0.105,-0.136 0.291,-0.154 0.416,-0.04 C 0.089,-0.339 0.105,-0.136 0,0"/>
                        </g>
                        <g transform="translate(167.1073,206.1196)" id="g1528">
                        <path id="path1530" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.105,0.136 -0.291,0.154 -0.416,0.039 -0.541,-0.075 -0.557,-0.278 -0.452,-0.414 -0.347,-0.55 -0.161,-0.568 -0.036,-0.453 0.089,-0.339 0.105,-0.136 0,0"/>
                        </g>
                        <g transform="translate(244.5729,276.6674)" id="g1532">
                        <path id="path1534" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.105,0.136 -0.291,0.154 -0.416,0.039 -0.541,-0.075 -0.557,-0.278 -0.452,-0.414 -0.347,-0.55 -0.161,-0.568 -0.036,-0.453 0.089,-0.339 0.105,-0.136 0,0"/>
                        </g>
                        <g transform="translate(211.136,249.8627)" id="g1536">
                        <path id="path1538" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.105,0.136 -0.291,0.154 -0.416,0.039 -0.125,-0.114 -0.141,-0.317 -0.036,-0.453 0.105,-0.136 0.291,-0.154 0.416,-0.04 C 0.089,-0.339 0.105,-0.136 0,0"/>
                        </g>
                        <g transform="translate(132.5322,180.0797)" id="g1540">
                        <path id="path1542" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.105,0.136 -0.291,0.154 -0.416,0.039 -0.541,-0.075 -0.557,-0.278 -0.452,-0.414 -0.347,-0.55 -0.161,-0.568 -0.036,-0.453 0.089,-0.339 0.105,-0.136 0,0"/>
                        </g>
                        <g transform="translate(124.9771,171.771)" id="g1544">
                        <path id="path1546" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.105,0.136 -0.291,0.154 -0.416,0.039 -0.541,-0.075 -0.557,-0.278 -0.452,-0.414 -0.347,-0.55 -0.161,-0.568 -0.036,-0.453 0.089,-0.339 0.105,-0.136 0,0"/>
                        </g>
                        <g transform="translate(263.5421,306.833)" id="g1548">
                        <path id="path1550" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.105,0.136 -0.291,0.154 -0.416,0.039 -0.125,-0.114 -0.141,-0.317 -0.036,-0.453 0.105,-0.136 0.291,-0.154 0.416,-0.04 C 0.089,-0.339 0.105,-0.136 0,0"/>
                        </g>
                        <g transform="translate(220.5379,267.856)" id="g1552">
                        <path id="path1554" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.105,0.136 -0.291,0.154 -0.416,0.039 -0.541,-0.075 -0.557,-0.278 -0.452,-0.414 -0.347,-0.55 -0.161,-0.568 -0.036,-0.453 0.089,-0.339 0.105,-0.136 0,0"/>
                        </g>
                        <g transform="translate(160.5511,214.1237)" id="g1556">
                        <path id="path1558" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.105,0.136 -0.291,0.154 -0.416,0.039 -0.125,-0.114 -0.141,-0.317 -0.036,-0.453 0.105,-0.136 0.291,-0.154 0.416,-0.04 C 0.089,-0.339 0.105,-0.136 0,0"/>
                        </g>
                        <g transform="translate(271.415,300.4175)" id="g1560">
                        <path id="path1562" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.21,0.272 -0.582,0.307 -0.832,0.079 -0.25,-0.229 -0.282,-0.635 -0.072,-0.907 0.21,-0.273 0.582,-0.308 0.832,-0.079 C 0.177,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(251.0464,280.9165)" id="g1564">
                        <path id="path1566" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.079 -1.081,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.135 -0.072,-0.907 0.178,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(181.3216,181.444)" id="g1568">
                        <path id="path1570" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.079 -1.081,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.135 -0.072,-0.907 0.177,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(305.1317,229.9519)" id="g1572">
                        <path id="path1574" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.079 -1.082,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.135 -0.072,-0.907 0.177,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(223.2804,283.834)" id="g1576">
                        <path id="path1578" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.079 -1.081,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.136 -0.072,-0.907 0.178,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(179.3882,178.8321)" id="g1580">
                        <path id="path1582" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.079 -1.081,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.136 -0.072,-0.907 0.178,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(193.97,143.3512)" id="g1584">
                        <path id="path1586" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.308 -0.832,0.079 -1.081,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.136 -0.072,-0.907 0.177,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(176.3243,128.0262)" id="g1588">
                        <path id="path1590" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.079 -1.082,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.135 -0.072,-0.907 0.177,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(253.9131,151.6963)" id="g1592">
                        <path id="path1594" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.079 -1.082,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.136 -0.072,-0.907 0.177,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(163.0484,170.9936)" id="g1596">
                        <path id="path1598" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.078 -1.081,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.136 -0.072,-0.907 0.177,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(177.0118,126.134)" id="g1600">
                        <path id="path1602" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.079 -1.081,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.135 -0.072,-0.907 0.178,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(201.7628,148.8091)" id="g1604">
                        <path id="path1606" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.079 -1.082,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.136 -0.072,-0.907 0.178,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(257.0852,165.6857)" id="g1608">
                        <path id="path1610" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.079 -1.081,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.135 -0.072,-0.907 0.177,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(263.0889,252.1496)" id="g1612">
                        <path id="path1614" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.079 -1.082,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.136 -0.072,-0.907 0.177,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(214.2451,149.2498)" id="g1616">
                        <path id="path1618" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.079 -1.081,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.135 -0.072,-0.907 0.178,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(178.0954,100.3687)" id="g1620">
                        <path id="path1622" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.078 -1.081,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.136 -0.072,-0.907 0.178,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(272.4963,222.1084)" id="g1624">
                        <path id="path1626" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.079 -1.082,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.135 -0.072,-0.907 0.178,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(288.2354,270.3368)" id="g1628">
                        <path id="path1630" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.21,0.272 -0.582,0.307 -0.832,0.079 -1.081,-0.15 -1.114,-0.556 -0.904,-0.828 -0.694,-1.1 -0.322,-1.135 -0.072,-0.907 0.177,-0.678 0.21,-0.272 0,0"/>
                        </g>
                        <g transform="translate(341.9488,259.7237)" id="g1632">
                        <path id="path1634" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.325,-0.031 0.611,0.232 0.639,0.586 0.668,0.94 0.427,1.252 0.102,1.283 -0.223,1.313 -0.509,1.051 -0.537,0.697 -0.565,0.343 -0.325,0.031 0,0"/>
                        </g>
                        <g transform="translate(176.8823,206.1615)" id="g1636">
                        <path id="path1638" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.689,-0.065 1.296,0.491 1.356,1.242 1.416,1.993 0.906,2.655 0.217,2.72 -0.473,2.786 -1.08,2.23 -1.139,1.478 -1.199,0.727 -0.689,0.065 0,0"/>
                        </g>
                        <g transform="translate(221.3657,369.8805)" id="g1640">
                        <path id="path1642" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.655,0.85 -1.818,0.96 -2.597,0.246 -0.779,-0.714 -0.88,-1.982 -0.225,-2.831 0.655,-0.85 1.817,-0.96 2.597,-0.246 C 0.554,-2.117 0.655,-0.849 0,0"/>
                        </g>
                        <g transform="translate(259.3854,240.3759)" id="g1644">
                        <path id="path1646" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.655,0.85 -1.817,0.96 -2.597,0.245 -0.779,-0.713 -0.88,-1.981 -0.225,-2.83 0.655,-0.85 1.818,-0.96 2.597,-0.246 C 0.554,-2.117 0.655,-0.85 0,0"/>
                        </g>
                        <g transform="translate(236.7043,243.7135)" id="g1648">
                        <path id="path1650" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.655,0.85 -1.818,0.959 -2.597,0.245 -0.779,-0.714 -0.88,-1.981 -0.225,-2.831 0.655,-0.849 1.817,-0.959 2.597,-0.245 C 0.554,-2.117 0.655,-0.85 0,0"/>
                        </g>
                        <g transform="translate(147.7911,249.4566)" id="g1652">
                        <path id="path1654" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.655,0.85 -1.818,0.959 -2.597,0.246 -0.779,-0.714 -0.88,-1.982 -0.225,-2.832 0.655,-0.849 1.818,-0.959 2.597,-0.245 C 0.554,-2.117 0.655,-0.85 0,0"/>
                        </g>
                        <g transform="translate(56.8737,122.7391)" id="g1656">
                        <path id="path1658" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.655,0.85 -1.818,0.959 -2.597,0.245 -0.779,-0.714 -0.88,-1.981 -0.225,-2.83 0.655,-0.85 1.817,-0.96 2.597,-0.246 C 0.554,-2.117 0.655,-0.85 0,0"/>
                        </g>
                        <g transform="translate(75.9839,167.5129)" id="g1660">
                        <path id="path1662" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.655,0.85 -1.818,0.96 -2.597,0.245 -0.779,-0.713 -0.88,-1.981 -0.225,-2.83 0.655,-0.85 1.817,-0.96 2.597,-0.246 C 0.554,-2.117 0.655,-0.849 0,0"/>
                        </g>
                        <g transform="translate(242.3873,339.4896)" id="g1664">
                        <path id="path1666" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.655,0.85 -1.818,0.959 -2.597,0.246 -0.779,-0.714 -0.88,-1.982 -0.225,-2.831 0.655,-0.85 1.817,-0.96 2.597,-0.246 C 0.554,-2.117 0.655,-0.849 0,0"/>
                        </g>
                        <g transform="translate(160.2986,217.9852)" id="g1668">
                        <path id="path1670" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.655,0.85 -1.818,0.959 -2.597,0.245 -0.779,-0.713 -0.88,-1.981 -0.225,-2.83 0.655,-0.85 1.817,-0.96 2.597,-0.246 C 0.554,-2.117 0.655,-0.85 0,0"/>
                        </g>
                        <g transform="translate(234.8806,393.0426)" id="g1672">
                        <path id="path1674" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.463,0.601 -1.285,0.678 -1.836,0.174 -0.551,-0.505 -0.623,-1.402 -0.16,-2.002 0.463,-0.601 1.286,-0.679 1.837,-0.174 C 0.392,-1.497 0.463,-0.601 0,0"/>
                        </g>
                        <g transform="translate(187.2401,239.9974)" id="g1676">
                        <path id="path1678" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.463,0.6 -1.285,0.678 -1.836,0.173 -0.551,-0.504 -0.623,-1.4 -0.159,-2.001 0.462,-0.601 1.285,-0.679 1.836,-0.174 C 0.392,-1.497 0.463,-0.601 0,0"/>
                        </g>
                        <g transform="translate(62.6068,263.2199)" id="g1680">
                        <path id="path1682" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.463,0.6 -1.285,0.678 -1.836,0.173 -0.551,-0.505 -0.623,-1.401 -0.16,-2.001 0.464,-0.601 1.286,-0.679 1.837,-0.174 C 0.392,-1.497 0.463,-0.601 0,0"/>
                        </g>
                        <g transform="translate(206.8824,339.5838)" id="g1684">
                        <path id="path1686" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.463,0.601 -1.285,0.678 -1.836,0.174 -0.551,-0.505 -0.623,-1.402 -0.16,-2.002 0.464,-0.601 1.286,-0.679 1.837,-0.174 C 0.392,-1.497 0.463,-0.601 0,0"/>
                        </g>
                        <g transform="translate(303.8219,322.9589)" id="g1688">
                        <path id="path1690" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.463,0.601 -1.285,0.678 -1.836,0.173 -0.551,-0.504 -0.623,-1.4 -0.16,-2.001 0.464,-0.601 1.286,-0.679 1.837,-0.174 C 0.392,-1.497 0.463,-0.601 0,0"/>
                        </g>
                        <g transform="translate(209.1901,319.9213)" id="g1692">
                        <path id="path1694" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.34,0.441 -0.944,0.499 -1.349,0.128 -0.405,-0.371 -0.457,-1.03 -0.117,-1.471 0.34,-0.442 0.944,-0.499 1.349,-0.128 C 0.288,-1.1 0.34,-0.441 0,0"/>
                        </g>
                        <g transform="translate(164.0186,274.8931)" id="g1696">
                        <path id="path1698" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.34,0.441 -0.944,0.498 -1.349,0.128 -0.405,-0.371 -0.458,-1.03 -0.117,-1.472 0.34,-0.441 0.944,-0.498 1.349,-0.127 C 0.288,-1.1 0.34,-0.441 0,0"/>
                        </g>
                        <g transform="translate(84.801,206.9735)" id="g1700">
                        <path id="path1702" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.34,0.441 -0.945,0.499 -1.349,0.128 -0.405,-0.371 -0.458,-1.03 -0.117,-1.471 0.34,-0.442 0.944,-0.499 1.349,-0.128 C 0.288,-1.1 0.34,-0.441 0,0"/>
                        </g>
                        <g transform="translate(38.2538,185.9319)" id="g1704">
                        <path id="path1706" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.34,0.441 -0.945,0.499 -1.35,0.128 -0.404,-0.371 -0.457,-1.03 -0.116,-1.471 0.34,-0.442 0.944,-0.499 1.349,-0.128 C 0.288,-1.1 0.34,-0.441 0,0"/>
                        </g>
                        <g transform="translate(149.6766,173.7347)" id="g1708">
                        <path id="path1710" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.34,0.441 -0.945,0.499 -1.349,0.128 -0.405,-0.371 -0.458,-1.03 -0.117,-1.471 0.34,-0.442 0.944,-0.499 1.349,-0.128 C 0.288,-1.1 0.34,-0.441 0,0"/>
                        </g>
                        <g transform="translate(227.732,365.3837)" id="g1712">
                        <path id="path1714" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.259,-0.238 -0.293,-0.661 -0.075,-0.944 0.218,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(204.1392,336.1959)" id="g1716">
                        <path id="path1718" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.865,0.082 -0.26,-0.238 -0.294,-0.661 -0.076,-0.944 0.219,-0.283 0.606,-0.319 0.866,-0.081 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(195.3347,348.6575)" id="g1720">
                        <path id="path1722" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.259,-0.238 -0.293,-0.661 -0.075,-0.944 0.219,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(203.7372,351.106)" id="g1724">
                        <path id="path1726" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.259,-0.238 -0.293,-0.66 -0.075,-0.944 0.219,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(189.4326,341.8446)" id="g1728">
                        <path id="path1730" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.259,-0.238 -0.293,-0.661 -0.075,-0.944 0.219,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(38.6054,233.2503)" id="g1732">
                        <path id="path1734" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.26,-0.238 -0.293,-0.661 -0.075,-0.944 0.218,-0.283 0.606,-0.32 0.866,-0.081 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(257.4202,336.1099)" id="g1736">
                        <path id="path1738" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.259,-0.238 -0.293,-0.66 -0.075,-0.944 0.219,-0.283 0.606,-0.319 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(211.7922,344.5193)" id="g1740">
                        <path id="path1742" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.109,0.142 -0.303,0.16 -0.433,0.041 -0.129,-0.119 -0.146,-0.33 -0.037,-0.472 0.109,-0.141 0.303,-0.16 0.433,-0.041 C 0.092,-0.353 0.109,-0.141 0,0"/>
                        </g>
                        <g transform="translate(80.5184,285.1266)" id="g1744">
                        <path id="path1746" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.109,0.142 -0.303,0.16 -0.433,0.041 -0.13,-0.119 -0.147,-0.33 -0.037,-0.472 0.109,-0.141 0.303,-0.16 0.432,-0.041 C 0.092,-0.353 0.109,-0.142 0,0"/>
                        </g>
                        <g transform="translate(155.2503,293.1571)" id="g1748">
                        <path id="path1750" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.109,0.142 -0.303,0.16 -0.433,0.041 -0.13,-0.119 -0.147,-0.33 -0.037,-0.472 0.109,-0.141 0.302,-0.16 0.432,-0.041 C 0.092,-0.353 0.109,-0.142 0,0"/>
                        </g>
                        <g transform="translate(104.6874,240.6649)" id="g1752">
                        <path id="path1754" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.109,0.142 -0.303,0.16 -0.433,0.041 -0.13,-0.119 -0.147,-0.33 -0.038,-0.472 0.11,-0.142 0.303,-0.16 0.433,-0.041 C 0.092,-0.353 0.109,-0.142 0,0"/>
                        </g>
                        <g transform="translate(185.2983,314.0775)" id="g1756">
                        <path id="path1758" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.109,0.142 -0.303,0.16 -0.433,0.041 -0.129,-0.119 -0.146,-0.33 -0.037,-0.472 0.109,-0.142 0.303,-0.16 0.433,-0.041 C 0.093,-0.353 0.109,-0.142 0,0"/>
                        </g>
                        <g transform="translate(150.504,286.1842)" id="g1760">
                        <path id="path1762" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.109,0.142 -0.303,0.16 -0.433,0.041 -0.13,-0.119 -0.147,-0.33 -0.038,-0.472 0.11,-0.141 0.304,-0.16 0.433,-0.041 C 0.092,-0.353 0.109,-0.141 0,0"/>
                        </g>
                        <g transform="translate(68.708,213.5676)" id="g1764">
                        <path id="path1766" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.109,0.142 -0.303,0.16 -0.433,0.041 -0.13,-0.119 -0.146,-0.33 -0.037,-0.472 0.109,-0.141 0.303,-0.16 0.433,-0.041 C 0.092,-0.353 0.109,-0.142 0,0"/>
                        </g>
                        <g transform="translate(60.8464,204.9215)" id="g1768">
                        <path id="path1770" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.109,0.142 -0.303,0.16 -0.433,0.041 -0.13,-0.119 -0.147,-0.33 -0.038,-0.472 0.11,-0.142 0.304,-0.16 0.433,-0.041 C 0.092,-0.353 0.109,-0.142 0,0"/>
                        </g>
                        <g transform="translate(205.0379,345.468)" id="g1772">
                        <path id="path1774" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.109,0.142 -0.303,0.16 -0.433,0.041 -0.13,-0.119 -0.147,-0.33 -0.037,-0.472 0.109,-0.142 0.303,-0.16 0.432,-0.041 C 0.092,-0.353 0.109,-0.142 0,0"/>
                        </g>
                        <g transform="translate(160.2874,304.9082)" id="g1776">
                        <path id="path1778" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.109,0.142 -0.303,0.16 -0.433,0.041 -0.13,-0.119 -0.146,-0.33 -0.037,-0.472 0.109,-0.141 0.303,-0.16 0.433,-0.041 C 0.092,-0.353 0.109,-0.142 0,0"/>
                        </g>
                        <g transform="translate(97.8648,248.994)" id="g1780">
                        <path id="path1782" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.109,0.142 -0.303,0.16 -0.433,0.041 -0.13,-0.119 -0.146,-0.33 -0.037,-0.472 0.109,-0.142 0.303,-0.16 0.432,-0.041 C 0.092,-0.353 0.109,-0.142 0,0"/>
                        </g>
                        <g transform="translate(213.2304,338.792)" id="g1784">
                        <path id="path1786" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.865,0.082 -0.26,-0.238 -0.294,-0.661 -0.076,-0.944 0.219,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(192.0347,318.499)" id="g1788">
                        <path id="path1790" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.865,0.082 -0.26,-0.238 -0.294,-0.661 -0.076,-0.944 0.219,-0.283 0.606,-0.319 0.866,-0.081 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(119.4786,214.9874)" id="g1792">
                        <path id="path1794" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.259,-0.238 -0.293,-0.661 -0.075,-0.944 0.219,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(248.3164,265.4649)" id="g1796">
                        <path id="path1798" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.26,-0.238 -0.293,-0.661 -0.075,-0.944 0.219,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(256.4328,215.7801)" id="g1800">
                        <path id="path1802" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.259,-0.238 -0.293,-0.661 -0.075,-0.944 0.219,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(163.1415,321.5351)" id="g1804">
                        <path id="path1806" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.26,-0.238 -0.293,-0.661 -0.075,-0.944 0.219,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(117.4669,212.2694)" id="g1808">
                        <path id="path1810" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.259,-0.238 -0.293,-0.661 -0.075,-0.944 0.219,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(132.6408,175.3477)" id="g1812">
                        <path id="path1814" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.26,-0.238 -0.293,-0.661 -0.075,-0.944 0.219,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(114.2784,159.4004)" id="g1816">
                        <path id="path1818" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.259,-0.238 -0.293,-0.661 -0.075,-0.944 0.219,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(195.018,184.0314)" id="g1820">
                        <path id="path1822" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.26,-0.238 -0.293,-0.66 -0.075,-0.944 0.218,-0.283 0.606,-0.32 0.866,-0.081 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(244.6473,206.7327)" id="g1824">
                        <path id="path1826" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.26,-0.238 -0.293,-0.661 -0.075,-0.944 0.218,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(100.4635,204.1127)" id="g1828">
                        <path id="path1830" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.26,-0.238 -0.293,-0.661 -0.075,-0.944 0.219,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(87.7935,137.2755)" id="g1832">
                        <path id="path1834" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.259,-0.238 -0.293,-0.661 -0.075,-0.944 0.218,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(140.7499,181.0271)" id="g1836">
                        <path id="path1838" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.865,0.082 -0.26,-0.238 -0.294,-0.661 -0.076,-0.944 0.219,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(198.3189,198.589)" id="g1840">
                        <path id="path1842" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.259,-0.238 -0.293,-0.661 -0.075,-0.944 0.218,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(204.5663,288.5641)" id="g1844">
                        <path id="path1846" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.259,-0.238 -0.293,-0.661 -0.075,-0.944 0.219,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(153.7392,181.4858)" id="g1848">
                        <path id="path1850" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.259,-0.238 -0.293,-0.661 -0.075,-0.944 0.219,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(116.1217,130.6197)" id="g1852">
                        <path id="path1854" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.26,-0.238 -0.293,-0.661 -0.075,-0.944 0.219,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(214.3558,257.3031)" id="g1856">
                        <path id="path1858" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.259,-0.238 -0.293,-0.661 -0.075,-0.944 0.219,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(173.0695,154.0465)" id="g1860">
                        <path id="path1862" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.259,-0.238 -0.293,-0.661 -0.075,-0.944 0.218,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(230.734,307.4899)" id="g1864">
                        <path id="path1866" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.218,0.283 -0.606,0.32 -0.866,0.082 -0.259,-0.238 -0.293,-0.661 -0.075,-0.944 0.219,-0.283 0.606,-0.32 0.866,-0.082 C 0.185,-0.706 0.218,-0.283 0,0"/>
                        </g>
                        <g transform="translate(314.1441,274.7263)" id="g1868">
                        <path id="path1870" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.338,-0.032 0.636,0.241 0.665,0.609 0.694,0.978 0.444,1.303 0.106,1.335 -0.232,1.367 -0.53,1.094 -0.559,0.725 -0.589,0.357 -0.338,0.032 0,0"/>
                        </g>
                        <g transform="translate(286.6285,296.4458)" id="g1872">
                        <path id="path1874" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.338,-0.032 0.636,0.241 0.665,0.609 0.695,0.978 0.444,1.303 0.106,1.335 -0.232,1.366 -0.53,1.094 -0.559,0.725 -0.588,0.357 -0.338,0.032 0,0"/>
                        </g>
                        <g transform="translate(253.5332,373.9534)" id="g1876">
                        <path id="path1878" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.169,-0.016 0.318,0.12 0.332,0.305 0.347,0.489 0.222,0.651 0.053,0.667 -0.116,0.683 -0.265,0.547 -0.28,0.362 -0.294,0.178 -0.169,0.016 0,0"/>
                        </g>
                        <g transform="translate(287.113,320.1375)" id="g1880">
                        <path id="path1882" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.338,-0.032 0.636,0.241 0.665,0.61 0.694,0.978 0.444,1.303 0.106,1.335 -0.232,1.367 -0.53,1.094 -0.559,0.725 -0.588,0.357 -0.338,0.032 0,0"/>
                        </g>
                        <g transform="translate(308.1081,310.2669)" id="g1884">
                        <path id="path1886" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.717,-0.068 1.349,0.511 1.411,1.293 1.474,2.074 0.942,2.763 0.225,2.831 -0.492,2.899 -1.124,2.32 -1.186,1.538 -1.248,0.757 -0.717,0.068 0,0"/>
                        </g>
                        <g transform="translate(307.8379,302.9925)" id="g1888">
                        <path id="path1890" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.169,-0.016 0.318,0.12 0.332,0.305 0.347,0.489 0.222,0.651 0.053,0.667 -0.116,0.683 -0.265,0.547 -0.28,0.363 -0.294,0.178 -0.169,0.016 0,0"/>
                        </g>
                        <g transform="translate(313.2292,307.528)" id="g1892">
                        <path id="path1894" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.169,-0.016 0.318,0.12 0.333,0.305 0.347,0.489 0.222,0.651 0.053,0.667 -0.116,0.683 -0.265,0.547 -0.28,0.363 -0.294,0.178 -0.169,0.016 0,0"/>
                        </g>
                        <g transform="translate(303.1057,305.9336)" id="g1896">
                        <path id="path1898" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.338,-0.032 0.636,0.241 0.665,0.609 0.694,0.978 0.444,1.303 0.106,1.335 -0.232,1.367 -0.53,1.094 -0.559,0.725 -0.588,0.357 -0.338,0.032 0,0"/>
                        </g>
                        <g transform="translate(114.8591,240.7084)" id="g1900">
                        <path id="path1902" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.717,-0.068 1.349,0.511 1.411,1.293 1.474,2.074 0.943,2.763 0.225,2.831 -0.492,2.899 -1.124,2.32 -1.186,1.538 -1.248,0.757 -0.717,0.068 0,0"/>
                        </g>
                        <g transform="translate(249.3318,359.8375)" id="g1904">
                        <path id="path1906" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.338,-0.032 0.636,0.241 0.665,0.609 0.694,0.978 0.444,1.303 0.106,1.334 -0.232,1.366 -0.53,1.094 -0.559,0.725 -0.588,0.356 -0.338,0.032 0,0"/>
                        </g>
                        <g transform="translate(188.1613,342.0038)" id="g1908">
                        <path id="path1910" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.254,0.48 -0.817,0.644 -1.257,0.368 -0.44,-0.277 -0.591,-0.891 -0.337,-1.371 0.254,-0.48 0.817,-0.644 1.257,-0.368 C 0.103,-1.093 0.254,-0.48 0,0"/>
                        </g>
                        <g transform="translate(144.5943,357.0821)" id="g1912">
                        <path id="path1914" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.163,0.308 -0.524,0.413 -0.807,0.236 -1.089,0.058 -1.186,-0.335 -1.023,-0.643 -0.86,-0.951 -0.499,-1.057 -0.216,-0.879 0.066,-0.701 0.163,-0.308 0,0"/>
                        </g>
                        <g transform="translate(208.263,352.008)" id="g1916">
                        <path id="path1918" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.081,0.154 -0.262,0.207 -0.403,0.118 -0.141,-0.089 -0.19,-0.286 -0.109,-0.44 0.082,-0.154 0.263,-0.206 0.404,-0.117 C 0.033,-0.351 0.081,-0.154 0,0"/>
                        </g>
                        <g transform="translate(170.0474,332.9509)" id="g1920">
                        <path id="path1922" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.081,0.154 -0.262,0.207 -0.403,0.118 -0.544,0.029 -0.593,-0.168 -0.511,-0.322 -0.43,-0.476 -0.249,-0.529 -0.108,-0.44 0.033,-0.351 0.082,-0.154 0,0"/>
                        </g>
                        <g transform="translate(161.2775,326.208)" id="g1924">
                        <path id="path1926" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.082,0.154 -0.262,0.207 -0.403,0.118 -0.142,-0.089 -0.19,-0.286 -0.108,-0.44 0.081,-0.154 0.262,-0.206 0.403,-0.117 C 0.033,-0.351 0.081,-0.154 0,0"/>
                        </g>
                        <g transform="translate(203.0899,361.1374)" id="g1928">
                        <path id="path1930" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.082,0.154 -0.262,0.207 -0.403,0.118 -0.545,0.029 -0.593,-0.168 -0.511,-0.322 -0.43,-0.476 -0.249,-0.529 -0.108,-0.44 0.033,-0.351 0.082,-0.154 0,0"/>
                        </g>
                        <g transform="translate(188.8054,396.6932)" id="g1932">
                        <path id="path1934" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.509,0.961 -1.636,1.291 -2.518,0.736 -3.399,0.181 -3.702,-1.047 -3.193,-2.009 -2.684,-2.97 -1.557,-3.299 -0.675,-2.745 0.206,-2.19 0.509,-0.961 0,0"/>
                        </g>
                        <g transform="translate(129.3583,345.6869)" id="g1936">
                        <path id="path1938" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.509,0.961 -1.636,1.291 -2.518,0.736 -3.399,0.181 -3.702,-1.047 -3.193,-2.009 -2.684,-2.97 -1.557,-3.299 -0.675,-2.745 0.206,-2.19 0.509,-0.961 0,0"/>
                        </g>
                        <g transform="translate(203.4599,364.9877)" id="g1940">
                        <path id="path1942" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.509,0.961 -1.636,1.291 -2.518,0.736 -3.4,0.181 -3.702,-1.047 -3.193,-2.009 -2.684,-2.97 -1.557,-3.299 -0.675,-2.745 0.206,-2.19 0.509,-0.961 0,0"/>
                        </g>
                        <g transform="translate(170.6219,385.2555)" id="g1944">
                        <path id="path1946" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.36,0.68 -1.157,0.913 -1.78,0.52 -0.624,-0.392 -0.838,-1.261 -0.478,-1.94 0.36,-0.68 1.157,-0.913 1.78,-0.521 C 0.146,-1.549 0.36,-0.68 0,0"/>
                        </g>
                        <g transform="translate(219.3864,407.7554)" id="g1948">
                        <path id="path1950" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.264,0.5 -0.85,0.671 -1.308,0.382 -0.458,-0.288 -0.616,-0.926 -0.351,-1.426 0.264,-0.499 0.85,-0.67 1.308,-0.382 C 0.107,-1.138 0.264,-0.499 0,0"/>
                        </g>
                        <g transform="translate(112.7665,392.6504)" id="g1952">
                        <path id="path1954" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.264,0.499 -0.85,0.671 -1.308,0.383 -0.458,-0.289 -0.615,-0.927 -0.351,-1.427 0.264,-0.499 0.85,-0.67 1.308,-0.382 C 0.107,-1.138 0.264,-0.499 0,0"/>
                        </g>
                        <g transform="translate(142.3805,366.7865)" id="g1956">
                        <path id="path1958" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.264,0.499 -0.85,0.671 -1.308,0.383 -0.458,-0.289 -0.615,-0.927 -0.351,-1.427 0.264,-0.499 0.85,-0.67 1.308,-0.382 C 0.107,-1.138 0.264,-0.5 0,0"/>
                        </g>
                        <g transform="translate(86.0824,403.1861)" id="g1960">
                        <path id="path1962" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.17,0.32 -0.545,0.43 -0.839,0.246 -1.133,0.061 -1.234,-0.349 -1.064,-0.669 -0.895,-0.99 -0.519,-1.1 -0.225,-0.915 0.069,-0.73 0.17,-0.32 0,0"/>
                        </g>
                        <g transform="translate(276.3714,384.7127)" id="g1964">
                        <path id="path1966" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.085,0.16 -0.273,0.215 -0.42,0.123 -0.567,0.03 -0.617,-0.175 -0.532,-0.335 -0.447,-0.495 -0.259,-0.55 -0.113,-0.457 0.034,-0.365 0.085,-0.16 0,0"/>
                        </g>
                        <g transform="translate(293.6599,369.3129)" id="g1968">
                        <path id="path1970" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.085,0.16 -0.273,0.215 -0.42,0.123 -0.567,0.03 -0.617,-0.174 -0.532,-0.335 -0.447,-0.495 -0.259,-0.55 -0.113,-0.457 0.034,-0.365 0.085,-0.16 0,0"/>
                        </g>
                        <g transform="translate(152.3367,397.9059)" id="g1972">
                        <path id="path1974" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.085,0.16 -0.273,0.215 -0.42,0.123 -0.567,0.03 -0.617,-0.174 -0.532,-0.335 -0.448,-0.495 -0.26,-0.55 -0.113,-0.458 0.034,-0.365 0.085,-0.16 0,0"/>
                        </g>
                        <g transform="translate(287.8694,363.3508)" id="g1976">
                        <path id="path1978" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.085,0.16 -0.273,0.215 -0.42,0.123 -0.567,0.03 -0.617,-0.174 -0.532,-0.335 -0.447,-0.495 -0.26,-0.55 -0.112,-0.457 0.034,-0.365 0.085,-0.16 0,0"/>
                        </g>
                        <g transform="translate(112.5691,378.0749)" id="g1980">
                        <path id="path1982" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.085,0.16 -0.273,0.215 -0.42,0.122 -0.566,0.03 -0.617,-0.174 -0.532,-0.335 -0.447,-0.495 -0.259,-0.55 -0.112,-0.457 0.035,-0.365 0.085,-0.16 0,0"/>
                        </g>
                        <g transform="translate(103.443,371.0583)" id="g1984">
                        <path id="path1986" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.085,0.16 -0.273,0.215 -0.42,0.123 -0.567,0.03 -0.617,-0.174 -0.532,-0.335 -0.447,-0.495 -0.26,-0.55 -0.113,-0.457 0.035,-0.365 0.085,-0.16 0,0"/>
                        </g>
                        <g transform="translate(300.5023,379.9244)" id="g1988">
                        <path id="path1990" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.085,0.16 -0.273,0.215 -0.42,0.123 -0.567,0.03 -0.617,-0.175 -0.532,-0.335 -0.447,-0.495 -0.259,-0.55 -0.113,-0.458 0.034,-0.365 0.085,-0.16 0,0"/>
                        </g>
                        <g transform="translate(146.9535,407.406)" id="g1992">
                        <path id="path1994" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.085,0.16 -0.273,0.215 -0.42,0.123 -0.567,0.03 -0.617,-0.174 -0.532,-0.335 -0.448,-0.495 -0.26,-0.55 -0.113,-0.458 0.034,-0.365 0.085,-0.16 0,0"/>
                        </g>
                        <g transform="translate(162.7869,369.8071)" id="g1996">
                        <path id="path1998" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.17,0.32 -0.545,0.43 -0.839,0.246 -1.133,0.06 -1.234,-0.349 -1.064,-0.669 -0.895,-0.99 -0.519,-1.1 -0.225,-0.915 0.069,-0.73 0.17,-0.32 0,0"/>
                        </g>
                        <g transform="translate(160.3706,367.5138)" id="g2000">
                        <path id="path2002" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.17,0.321 -0.545,0.43 -0.839,0.245 -1.133,0.061 -1.234,-0.349 -1.064,-0.669 -0.895,-0.99 -0.519,-1.1 -0.225,-0.915 0.069,-0.73 0.17,-0.32 0,0"/>
                        </g>
                        <g transform="translate(169.3961,328.2708)" id="g2004">
                        <path id="path2006" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.17,0.32 -0.545,0.43 -0.839,0.245 -1.133,0.061 -1.234,-0.349 -1.064,-0.669 -0.895,-0.99 -0.519,-1.1 -0.225,-0.915 0.069,-0.73 0.17,-0.32 0,0"/>
                        </g>
                        <g transform="translate(148.7612,316.0644)" id="g2008">
                        <path id="path2010" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.17,0.32 -0.545,0.43 -0.839,0.245 -1.133,0.061 -1.234,-0.349 -1.064,-0.669 -0.895,-0.99 -0.519,-1.1 -0.225,-0.915 0.069,-0.73 0.169,-0.32 0,0"/>
                        </g>
                        <g transform="translate(142.3217,362.7196)" id="g2012">
                        <path id="path2014" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.169,0.32 -0.545,0.43 -0.839,0.245 -1.133,0.06 -1.234,-0.349 -1.064,-0.669 -0.895,-0.99 -0.519,-1.1 -0.225,-0.915 0.069,-0.73 0.17,-0.32 0,0"/>
                        </g>
                        <g transform="translate(149.1504,313.9894)" id="g2016">
                        <path id="path2018" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.17,0.32 -0.545,0.43 -0.839,0.245 -1.133,0.06 -1.234,-0.349 -1.064,-0.67 -0.895,-0.99 -0.519,-1.1 -0.225,-0.915 0.069,-0.73 0.169,-0.32 0,0"/>
                        </g>
                        <g transform="translate(178.2908,332.3193)" id="g2020">
                        <path id="path2022" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.17,0.32 -0.545,0.43 -0.839,0.245 -1.133,0.06 -1.234,-0.349 -1.064,-0.67 -0.895,-0.99 -0.519,-1.1 -0.225,-0.915 0.069,-0.73 0.169,-0.32 0,0"/>
                        </g>
                        <g transform="translate(162.3592,396.0124)" id="g2024">
                        <path id="path2026" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.695,-0.203 1.41,0.246 1.596,1.004 1.783,1.762 1.37,2.541 0.675,2.745 -0.02,2.948 -0.735,2.498 -0.921,1.74 -1.108,0.982 -0.695,0.203 0,0"/>
                        </g>
                        <g transform="translate(126.3659,369.0944)" id="g2028">
                        <path id="path2030" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.919,0.364 -1.936,-0.153 -2.27,-1.155 -0.334,-1.003 0.141,-2.11 1.06,-2.474 0.92,-0.365 1.936,0.152 2.27,1.155 C 1.394,-1.472 0.919,-0.364 0,0"/>
                        </g>
                        <g transform="translate(157.253,354.8049)" id="g2032">
                        <path id="path2034" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.92,0.364 -1.936,-0.153 -2.27,-1.155 -0.334,-1.003 0.141,-2.11 1.06,-2.475 0.92,-0.364 1.936,0.153 2.27,1.156 C 1.394,-1.472 0.919,-0.364 0,0"/>
                        </g>
                        <g transform="translate(127.659,336.2942)" id="g2036">
                        <path id="path2038" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.65,0.258 -1.369,-0.108 -1.605,-0.817 -0.236,-0.709 0.099,-1.492 0.749,-1.75 0.651,-0.257 1.369,0.109 1.605,0.817 C 0.986,-1.041 0.65,-0.258 0,0"/>
                        </g>
                        <g transform="translate(138.243,321.1363)" id="g2040">
                        <path id="path2042" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.478,0.189 -1.006,-0.079 -1.179,-0.6 -0.174,-0.521 0.073,-1.097 0.55,-1.286 0.478,-0.189 1.006,0.08 1.18,0.6 C 0.724,-0.765 0.478,-0.189 0,0"/>
                        </g>
                        <g transform="translate(133.6461,368.6848)" id="g2044">
                        <path id="path2046" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.306,0.121 -0.645,-0.051 -0.757,-0.385 -0.111,-0.334 0.047,-0.704 0.354,-0.825 0.306,-0.121 0.645,0.051 0.756,0.385 C 0.465,-0.491 0.307,-0.121 0,0"/>
                        </g>
                        <g transform="translate(126.8684,332.0382)" id="g2048">
                        <path id="path2050" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.306,0.121 -0.645,-0.051 -0.757,-0.385 -0.111,-0.334 0.047,-0.704 0.354,-0.825 0.306,-0.121 0.645,0.051 0.756,0.385 C 0.465,-0.491 0.306,-0.122 0,0"/>
                        </g>
                        <g transform="translate(114.0497,337.8008)" id="g2052">
                        <path id="path2054" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.306,0.121 -0.645,-0.051 -0.757,-0.385 -0.111,-0.334 0.047,-0.703 0.354,-0.825 0.306,-0.121 0.645,0.051 0.756,0.385 C 0.465,-0.491 0.306,-0.121 0,0"/>
                        </g>
                        <g transform="translate(119.9647,344.238)" id="g2056">
                        <path id="path2058" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.307,0.121 -0.645,-0.051 -0.757,-0.385 -0.111,-0.334 0.047,-0.703 0.354,-0.825 0.306,-0.121 0.645,0.051 0.756,0.385 C 0.465,-0.491 0.306,-0.121 0,0"/>
                        </g>
                        <g transform="translate(112.1388,329.04)" id="g2060">
                        <path id="path2062" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.307,0.121 -0.645,-0.051 -0.757,-0.385 -0.111,-0.334 0.047,-0.703 0.354,-0.825 0.306,-0.121 0.645,0.051 0.756,0.385 C 0.465,-0.491 0.306,-0.122 0,0"/>
                        </g>
                        <g transform="translate(171.2547,359.8624)" id="g2064">
                        <path id="path2066" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.307,0.121 -0.645,-0.051 -0.757,-0.385 -0.111,-0.334 0.047,-0.704 0.354,-0.825 0.306,-0.121 0.645,0.051 0.756,0.385 C 0.464,-0.491 0.306,-0.121 0,0"/>
                        </g>
                        <g transform="translate(129.5712,342.9729)" id="g2068">
                        <path id="path2070" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.153,0.061 -0.322,-0.026 -0.378,-0.193 -0.056,-0.167 0.023,-0.351 0.176,-0.412 0.154,-0.061 0.323,0.026 0.379,0.193 C 0.232,-0.245 0.153,-0.061 0,0"/>
                        </g>
                        <g transform="translate(120.9313,303.7635)" id="g2072">
                        <path id="path2074" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.153,0.061 -0.322,-0.025 -0.378,-0.192 -0.056,-0.168 0.023,-0.352 0.176,-0.413 0.153,-0.061 0.323,0.025 0.379,0.193 C 0.232,-0.245 0.153,-0.061 0,0"/>
                        </g>
                        <g transform="translate(123.5315,340.2261)" id="g2076">
                        <path id="path2078" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.153,0.061 -0.323,-0.026 -0.378,-0.193 -0.056,-0.167 0.023,-0.351 0.176,-0.412 0.153,-0.061 0.323,0.026 0.378,0.193 C 0.232,-0.245 0.153,-0.061 0,0"/>
                        </g>
                        <g transform="translate(104.1533,283.0367)" id="g2080">
                        <path id="path2082" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.153,0.061 -0.323,-0.025 -0.378,-0.193 -0.056,-0.167 0.023,-0.351 0.176,-0.412 0.153,-0.061 0.323,0.026 0.379,0.193 C 0.232,-0.245 0.153,-0.061 0,0"/>
                        </g>
                        <g transform="translate(133.2919,338.9588)" id="g2084">
                        <path id="path2086" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.307,0.121 -0.645,-0.051 -0.757,-0.385 -0.111,-0.334 0.047,-0.704 0.354,-0.825 0.306,-0.121 0.645,0.051 0.756,0.385 C 0.464,-0.491 0.306,-0.122 0,0"/>
                        </g>
                        <g transform="translate(124.5903,310.9708)" id="g2088">
                        <path id="path2090" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.307,0.121 -0.645,-0.051 -0.757,-0.385 -0.111,-0.334 0.047,-0.704 0.354,-0.825 0.306,-0.121 0.645,0.051 0.756,0.385 C 0.465,-0.491 0.307,-0.122 0,0"/>
                        </g>
                        <g transform="translate(99.2033,298.3702)" id="g2092">
                        <path id="path2094" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.306,0.121 -0.645,-0.051 -0.757,-0.385 -0.111,-0.334 0.047,-0.703 0.354,-0.825 0.306,-0.121 0.645,0.051 0.756,0.385 C 0.465,-0.491 0.307,-0.121 0,0"/>
                        </g>
                        <g transform="translate(161.6519,322.0685)" id="g2096">
                        <path id="path2098" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.307,0.121 -0.645,-0.051 -0.757,-0.385 -0.111,-0.334 0.047,-0.703 0.354,-0.825 0.306,-0.121 0.645,0.051 0.756,0.385 C 0.465,-0.491 0.307,-0.121 0,0"/>
                        </g>
                        <g transform="translate(60.3489,366.1714)" id="g2100">
                        <path id="path2102" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.957,0.379 -2.014,-0.159 -2.362,-1.202 -0.348,-1.043 0.146,-2.196 1.103,-2.575 0.956,-0.379 2.014,0.159 2.362,1.203 C 1.45,-1.531 0.957,-0.379 0,0"/>
                        </g>
                        <g transform="translate(90.236,356.9862)" id="g2104">
                        <path id="path2106" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.957,0.379 -2.014,-0.159 -2.362,-1.202 -0.348,-1.043 0.146,-2.196 1.103,-2.575 0.957,-0.379 2.014,0.159 2.362,1.202 C 1.451,-1.532 0.957,-0.379 0,0"/>
                        </g>
                        <g transform="translate(59.1814,399.2811)" id="g2108">
                        <path id="path2110" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.677,0.268 -1.424,-0.113 -1.67,-0.85 -0.246,-0.737 0.103,-1.553 0.78,-1.821 0.676,-0.268 1.424,0.113 1.67,0.85 C 1.026,-1.083 0.676,-0.268 0,0"/>
                        </g>
                        <g transform="translate(70.5289,328.6016)" id="g2112">
                        <path id="path2114" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.677,0.268 -1.424,-0.113 -1.67,-0.85 -0.246,-0.738 0.103,-1.553 0.78,-1.821 0.676,-0.268 1.424,0.113 1.67,0.851 C 1.026,-1.083 0.676,-0.268 0,0"/>
                        </g>
                        <g transform="translate(151.0264,376.1389)" id="g2116">
                        <path id="path2118" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.676,0.268 -1.424,-0.113 -1.67,-0.85 -0.246,-0.737 0.103,-1.553 0.78,-1.821 0.676,-0.268 1.424,0.113 1.67,0.85 C 1.026,-1.083 0.676,-0.268 0,0"/>
                        </g>
                        <g transform="translate(63.2394,304.1203)" id="g2120">
                        <path id="path2122" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.497,0.197 -1.046,-0.083 -1.227,-0.625 -0.181,-0.542 0.076,-1.141 0.573,-1.337 0.497,-0.197 1.047,0.082 1.227,0.624 C 0.754,-0.796 0.497,-0.197 0,0"/>
                        </g>
                        <g transform="translate(65.6705,371.4297)" id="g2124">
                        <path id="path2126" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.319,0.126 -0.671,-0.053 -0.787,-0.401 -0.116,-0.347 0.048,-0.732 0.367,-0.858 0.319,-0.126 0.672,0.053 0.788,0.401 C 0.484,-0.511 0.319,-0.126 0,0"/>
                        </g>
                        <g transform="translate(35.3083,314.9541)" id="g2128">
                        <path id="path2130" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.319,0.126 -0.671,-0.053 -0.787,-0.401 -0.116,-0.347 0.048,-0.732 0.367,-0.858 0.319,-0.126 0.672,0.053 0.788,0.401 C 0.484,-0.511 0.319,-0.127 0,0"/>
                        </g>
                        <g transform="translate(25.0294,336.9653)" id="g2132">
                        <path id="path2134" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.319,0.126 -0.671,-0.053 -0.787,-0.401 -0.116,-0.347 0.048,-0.732 0.367,-0.858 0.319,-0.126 0.672,0.053 0.788,0.401 C 0.483,-0.51 0.319,-0.126 0,0"/>
                        </g>
                        <g transform="translate(24.4148,380.0516)" id="g2136">
                        <path id="path2138" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.319,0.126 -0.671,-0.053 -0.787,-0.401 -0.116,-0.348 0.049,-0.732 0.367,-0.858 0.319,-0.126 0.672,0.053 0.788,0.401 C 0.484,-0.511 0.319,-0.126 0,0"/>
                        </g>
                        <g transform="translate(104.8061,362.2492)" id="g2140">
                        <path id="path2142" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.319,0.126 -0.671,-0.053 -0.787,-0.401 -0.116,-0.348 0.048,-0.732 0.367,-0.858 0.319,-0.126 0.672,0.053 0.788,0.401 C 0.483,-0.511 0.319,-0.126 0,0"/>
                        </g>
                        <g transform="translate(41.1812,342.3475)" id="g2144">
                        <path id="path2146" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.159,0.063 -0.336,-0.026 -0.394,-0.2 -0.057,-0.174 0.025,-0.366 0.184,-0.429 0.16,-0.064 0.336,0.026 0.394,0.2 C 0.242,-0.255 0.159,-0.063 0,0"/>
                        </g>
                        <g transform="translate(34.8963,339.4892)" id="g2148">
                        <path id="path2150" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.16,0.063 -0.336,-0.026 -0.394,-0.201 -0.058,-0.173 0.025,-0.365 0.184,-0.429 0.159,-0.063 0.336,0.027 0.394,0.201 C 0.242,-0.255 0.159,-0.063 0,0"/>
                        </g>
                        <g transform="translate(45.0529,338.1703)" id="g2152">
                        <path id="path2154" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.319,0.126 -0.671,-0.053 -0.787,-0.401 -0.116,-0.347 0.048,-0.732 0.367,-0.858 0.319,-0.126 0.672,0.053 0.788,0.401 C 0.484,-0.511 0.319,-0.126 0,0"/>
                        </g>
                        <g transform="translate(30.57,283.2705)" id="g2156">
                        <path id="path2158" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.319,0.126 -0.671,-0.053 -0.787,-0.401 -0.116,-0.347 0.048,-0.732 0.367,-0.858 0.319,-0.126 0.672,0.053 0.788,0.401 C 0.484,-0.51 0.319,-0.126 0,0"/>
                        </g>
                        <g transform="translate(80.8255,292.2712)" id="g2160">
                        <path id="path2162" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.319,0.126 -0.671,-0.053 -0.787,-0.401 -0.116,-0.347 0.048,-0.732 0.367,-0.858 0.319,-0.126 0.672,0.053 0.788,0.401 C 0.483,-0.511 0.319,-0.126 0,0"/>
                        </g>
                        <g transform="translate(94.8134,322.9206)" id="g2164">
                        <path id="path2166" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.319,0.126 -0.671,-0.053 -0.787,-0.401 -0.116,-0.348 0.048,-0.732 0.367,-0.858 0.319,-0.126 0.672,0.053 0.788,0.401 C 0.484,-0.511 0.319,-0.126 0,0"/>
                        </g>
                        <g transform="translate(182.0801,339.986)" id="g2168">
                        <path id="path2170" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.308,0.157 0.441,0.555 0.297,0.89 0.153,1.225 -0.212,1.37 -0.52,1.214 -0.827,1.057 -0.96,0.659 -0.816,0.324 -0.673,-0.012 -0.307,-0.156 0,0"/>
                        </g>
                        <g transform="translate(148.29,343.8074)" id="g2172">
                        <path id="path2174" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.308,0.156 0.44,0.555 0.297,0.89 0.153,1.225 -0.212,1.37 -0.52,1.214 -0.827,1.057 -0.96,0.659 -0.817,0.323 -0.673,-0.012 -0.307,-0.156 0,0"/>
                        </g>
                        <g transform="translate(84.0892,392.9091)" id="g2176">
                        <path id="path2178" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.154,0.078 0.22,0.278 0.148,0.445 0.076,0.613 -0.106,0.685 -0.26,0.607 -0.414,0.529 -0.48,0.329 -0.408,0.162 -0.337,-0.006 -0.154,-0.078 0,0"/>
                        </g>
                        <g transform="translate(137.8474,364.5918)" id="g2180">
                        <path id="path2182" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.307,0.156 0.44,0.555 0.297,0.89 0.153,1.226 -0.212,1.37 -0.52,1.214 -0.827,1.057 -0.96,0.659 -0.816,0.324 -0.673,-0.012 -0.307,-0.156 0,0"/>
                        </g>
                        <g transform="translate(160.5578,367.4811)" id="g2184">
                        <path id="path2186" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.652,0.332 0.934,1.177 0.63,1.888 0.325,2.599 -0.451,2.907 -1.103,2.575 -1.755,2.243 -2.037,1.397 -1.732,0.686 -1.428,-0.025 -0.652,-0.332 0,0"/>
                        </g>
                        <g transform="translate(163.659,361.033)" id="g2188">
                        <path id="path2190" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.154,0.078 0.22,0.277 0.148,0.445 0.077,0.613 -0.106,0.685 -0.26,0.607 -0.414,0.528 -0.48,0.329 -0.408,0.162 -0.337,-0.006 -0.154,-0.078 0,0"/>
                        </g>
                        <g transform="translate(166.2491,367.8988)" id="g2192">
                        <path id="path2194" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.154,0.078 0.22,0.277 0.148,0.445 0.077,0.613 -0.106,0.685 -0.26,0.607 -0.414,0.529 -0.48,0.329 -0.408,0.162 -0.337,-0.006 -0.154,-0.078 0,0"/>
                        </g>
                        <g transform="translate(158.2117,361.0022)" id="g2196">
                        <path id="path2198" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.307,0.157 0.44,0.555 0.297,0.89 0.153,1.225 -0.212,1.37 -0.52,1.214 -0.827,1.057 -0.96,0.659 -0.817,0.324 -0.673,-0.012 -0.308,-0.156 0,0"/>
                        </g>
                        <g transform="translate(86.9219,378.3938)" id="g2200">
                        <path id="path2202" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.308,0.156 0.44,0.555 0.297,0.89 0.153,1.225 -0.212,1.37 -0.52,1.214 -0.827,1.057 -0.96,0.659 -0.817,0.323 -0.673,-0.012 -0.307,-0.157 0,0"/>
                        </g>
                        <g transform="translate(308.9959,129.4114)" id="g2204">
                        <path id="path2206" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.575,-0.746 1.597,-0.843 2.282,-0.216 2.967,0.412 3.055,1.525 2.48,2.272 1.904,3.018 0.883,3.115 0.198,2.488 -0.487,1.86 -0.576,0.747 0,0"/>
                        </g>
                        <g transform="translate(235.2487,19.9077)" id="g2208">
                        <path id="path2210" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.576,-0.746 1.597,-0.843 2.282,-0.216 2.967,0.412 3.055,1.525 2.48,2.272 1.904,3.018 0.883,3.115 0.198,2.488 -0.487,1.86 -0.576,0.747 0,0"/>
                        </g>
                        <g transform="translate(220.3567,78.062)" id="g2212">
                        <path id="path2214" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.575,-0.746 1.597,-0.843 2.282,-0.215 2.967,0.412 3.055,1.526 2.48,2.272 1.904,3.019 0.883,3.115 0.198,2.488 -0.487,1.86 -0.576,0.747 0,0"/>
                        </g>
                        <g transform="translate(158.9598,48.9663)" id="g2216">
                        <path id="path2218" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.576,-0.747 1.597,-0.843 2.282,-0.216 2.967,0.412 3.055,1.525 2.48,2.272 1.904,3.018 0.883,3.115 0.198,2.488 -0.487,1.86 -0.576,0.747 0,0"/>
                        </g>
                        <g transform="translate(190.225,36.9238)" id="g2220">
                        <path id="path2222" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.407,-0.528 1.129,-0.596 1.614,-0.152 2.098,0.291 2.16,1.079 1.754,1.606 1.347,2.134 0.624,2.203 0.14,1.759 -0.344,1.315 -0.407,0.528 0,0"/>
                        </g>
                        <g transform="translate(274.3255,129.4809)" id="g2224">
                        <path id="path2226" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.299,-0.388 0.83,-0.438 1.186,-0.112 1.542,0.214 1.588,0.793 1.289,1.181 0.99,1.568 0.459,1.619 0.103,1.293 -0.253,0.967 -0.299,0.388 0,0"/>
                        </g>
                        <g transform="translate(224.4596,41.544)" id="g2228">
                        <path id="path2230" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.299,-0.388 0.83,-0.438 1.186,-0.112 1.542,0.214 1.588,0.792 1.289,1.18 0.99,1.568 0.459,1.618 0.103,1.292 -0.253,0.966 -0.299,0.388 0,0"/>
                        </g>
                        <g transform="translate(212.0599,57.6279)" id="g2232">
                        <path id="path2234" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.299,-0.388 0.83,-0.438 1.186,-0.112 1.542,0.214 1.588,0.793 1.289,1.18 0.99,1.568 0.459,1.618 0.103,1.292 -0.253,0.967 -0.299,0.388 0,0"/>
                        </g>
                        <g transform="translate(402.6876,123.2341)" id="g2236">
                        <path id="path2238" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.192,-0.249 0.532,-0.281 0.761,-0.072 0.989,0.137 1.018,0.508 0.827,0.758 0.635,1.006 0.294,1.038 0.066,0.829 -0.162,0.62 -0.192,0.249 0,0"/>
                        </g>
                        <g transform="translate(306.4588,61.1314)" id="g2240">
                        <path id="path2242" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.121,-0.157 0.335,-0.177 0.479,-0.045 0.623,0.086 0.641,0.32 0.521,0.477 0.4,0.634 0.185,0.654 0.042,0.522 -0.102,0.39 -0.121,0.157 0,0"/>
                        </g>
                        <g transform="translate(263.5062,107.4511)" id="g2244">
                        <path id="path2246" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.096,-0.124 0.266,-0.14 0.38,-0.036 0.495,0.069 0.509,0.254 0.413,0.379 0.318,0.503 0.147,0.519 0.033,0.415 -0.081,0.31 -0.096,0.124 0,0"/>
                        </g>
                        <g transform="translate(207.8268,29.0371)" id="g2248">
                        <path id="path2250" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.096,-0.124 0.266,-0.14 0.38,-0.036 0.494,0.069 0.509,0.255 0.413,0.379 0.317,0.503 0.147,0.519 0.033,0.415 -0.081,0.31 -0.096,0.125 0,0"/>
                        </g>
                        <g transform="translate(273.7853,52.2097)" id="g2252">
                        <path id="path2254" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.096,-0.124 0.266,-0.141 0.38,-0.036 0.494,0.069 0.509,0.254 0.413,0.379 0.317,0.503 0.147,0.519 0.033,0.415 -0.081,0.31 -0.096,0.124 0,0"/>
                        </g>
                        <g transform="translate(267.677,113.5783)" id="g2256">
                        <path id="path2258" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.096,-0.124 0.266,-0.14 0.38,-0.036 0.494,0.069 0.509,0.254 0.413,0.379 0.318,0.503 0.147,0.519 0.033,0.415 -0.081,0.31 -0.096,0.125 0,0"/>
                        </g>
                        <g transform="translate(239.4424,52.8481)" id="g2260">
                        <path id="path2262" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.096,-0.124 0.266,-0.141 0.38,-0.036 0.494,0.069 0.509,0.254 0.413,0.379 0.317,0.503 0.147,0.519 0.033,0.415 -0.081,0.31 -0.096,0.124 0,0"/>
                        </g>
                        <g transform="translate(246.3507,60.4456)" id="g2264">
                        <path id="path2266" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.096,-0.124 0.266,-0.141 0.38,-0.036 0.494,0.069 0.509,0.254 0.413,0.379 0.318,0.503 0.147,0.519 0.033,0.415 -0.081,0.31 -0.096,0.124 0,0"/>
                        </g>
                        <g transform="translate(332.3516,141.3955)" id="g2268">
                        <path id="path2270" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.096,-0.124 0.266,-0.14 0.38,-0.036 0.494,0.069 0.509,0.254 0.413,0.379 0.318,0.503 0.147,0.519 0.033,0.415 -0.081,0.31 -0.096,0.124 0,0"/>
                        </g>
                        <g transform="translate(350.6151,109.4001)" id="g2272">
                        <path id="path2274" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.096,-0.125 0.266,-0.141 0.38,-0.036 0.494,0.068 0.509,0.254 0.413,0.379 0.317,0.503 0.147,0.519 0.033,0.415 -0.081,0.31 -0.096,0.124 0,0"/>
                        </g>
                        <g transform="translate(194.8291,51.6007)" id="g2276">
                        <path id="path2278" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.192,-0.249 0.533,-0.281 0.761,-0.072 0.989,0.137 1.019,0.508 0.827,0.757 0.635,1.006 0.294,1.038 0.066,0.829 -0.162,0.62 -0.192,0.249 0,0"/>
                        </g>
                        <g transform="translate(329.8438,126.7851)" id="g2280">
                        <path id="path2282" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.192,-0.249 0.532,-0.281 0.761,-0.072 0.989,0.137 1.018,0.508 0.827,0.757 0.635,1.006 0.294,1.038 0.066,0.829 -0.162,0.62 -0.192,0.249 0,0"/>
                        </g>
                        <g transform="translate(196.597,53.9889)" id="g2284">
                        <path id="path2286" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.192,-0.249 0.533,-0.281 0.761,-0.072 0.989,0.137 1.018,0.508 0.827,0.757 0.635,1.006 0.294,1.038 0.066,0.829 -0.162,0.62 -0.192,0.249 0,0"/>
                        </g>
                        <g transform="translate(211.5382,61.1566)" id="g2288">
                        <path id="path2290" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.192,-0.249 0.532,-0.281 0.761,-0.072 0.989,0.137 1.019,0.508 0.827,0.757 0.635,1.006 0.294,1.038 0.066,0.829 -0.162,0.62 -0.192,0.249 0,0"/>
                        </g>
                        <g transform="translate(125.9317,92.4953)" id="g2292">
                        <path id="path2294" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.192,-0.249 0.533,-0.281 0.761,-0.072 0.989,0.137 1.019,0.509 0.827,0.757 0.635,1.006 0.294,1.038 0.066,0.829 -0.162,0.62 -0.192,0.249 0,0"/>
                        </g>
                        <g transform="translate(164.7237,81.0391)" id="g2296">
                        <path id="path2298" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.192,-0.249 0.533,-0.281 0.761,-0.072 0.989,0.137 1.019,0.508 0.827,0.757 0.635,1.006 0.294,1.038 0.066,0.829 -0.162,0.62 -0.192,0.249 0,0"/>
                        </g>
                        <g transform="translate(339.9039,112.7334)" id="g2300">
                        <path id="path2302" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.63,0.06 -1.185,-0.449 -1.24,-1.136 -0.055,-0.687 0.412,-1.292 1.042,-1.352 0.63,-0.059 1.185,0.449 1.24,1.136 C 1.097,-0.665 0.63,-0.06 0,0"/>
                        </g>
                        <g transform="translate(261.4743,142.8034)" id="g2304">
                        <path id="path2306" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.599,-0.777 1.662,-0.877 2.375,-0.224 3.087,0.428 3.18,1.587 2.581,2.364 1.982,3.141 0.918,3.242 0.206,2.589 -0.507,1.936 -0.599,0.777 0,0"/>
                        </g>
                        <g transform="translate(471.6598,46.6406)" id="g2308">
                        <path id="path2310" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.599,-0.777 1.662,-0.877 2.375,-0.225 3.087,0.428 3.18,1.587 2.581,2.364 1.982,3.141 0.919,3.241 0.206,2.589 -0.507,1.936 -0.599,0.777 0,0"/>
                        </g>
                        <g transform="translate(115.4069,66.2767)" id="g2312">
                        <path id="path2314" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.599,-0.777 1.662,-0.877 2.375,-0.225 3.087,0.428 3.179,1.587 2.581,2.364 1.982,3.141 0.919,3.241 0.206,2.589 -0.507,1.936 -0.599,0.777 0,0"/>
                        </g>
                        <g transform="translate(414.7358,136.1463)" id="g2316">
                        <path id="path2318" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.599,-0.777 1.662,-0.877 2.375,-0.224 3.087,0.428 3.18,1.587 2.581,2.364 1.982,3.141 0.919,3.241 0.206,2.589 -0.507,1.936 -0.599,0.777 0,0"/>
                        </g>
                        <g transform="translate(344.4052,85.6085)" id="g2320">
                        <path id="path2322" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.599,-0.777 1.662,-0.877 2.375,-0.225 3.087,0.428 3.18,1.587 2.581,2.364 1.982,3.141 0.919,3.241 0.206,2.589 -0.507,1.936 -0.599,0.777 0,0"/>
                        </g>
                        <g transform="translate(383.3807,93.3374)" id="g2324">
                        <path id="path2326" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.423,-0.549 1.175,-0.62 1.679,-0.159 2.183,0.303 2.248,1.122 1.825,1.672 1.401,2.221 0.649,2.292 0.146,1.831 -0.358,1.369 -0.424,0.549 0,0"/>
                        </g>
                        <g transform="translate(440.1756,64.5063)" id="g2328">
                        <path id="path2330" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.424,-0.549 1.175,-0.62 1.679,-0.159 2.183,0.303 2.248,1.122 1.825,1.672 1.401,2.221 0.65,2.292 0.146,1.831 -0.358,1.369 -0.423,0.549 0,0"/>
                        </g>
                        <g transform="translate(269.4564,49.5166)" id="g2332">
                        <path id="path2334" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.311,-0.404 0.863,-0.456 1.234,-0.117 1.604,0.223 1.652,0.825 1.341,1.228 1.03,1.632 0.477,1.684 0.107,1.345 -0.263,1.006 -0.311,0.404 0,0"/>
                        </g>
                        <g transform="translate(306.0888,101.4488)" id="g2336">
                        <path id="path2338" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.311,-0.404 0.864,-0.456 1.234,-0.117 1.604,0.223 1.652,0.825 1.341,1.228 1.03,1.632 0.477,1.684 0.107,1.345 -0.263,1.006 -0.311,0.404 0,0"/>
                        </g>
                        <g transform="translate(419.0055,98.1452)" id="g2340">
                        <path id="path2342" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.311,-0.404 0.864,-0.456 1.234,-0.117 1.604,0.223 1.652,0.825 1.341,1.228 1.03,1.632 0.477,1.684 0.107,1.345 -0.263,1.006 -0.311,0.404 0,0"/>
                        </g>
                        <g transform="translate(406.1023,114.8824)" id="g2344">
                        <path id="path2346" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.311,-0.404 0.863,-0.456 1.234,-0.117 1.604,0.223 1.652,0.825 1.341,1.228 1.03,1.632 0.477,1.684 0.107,1.345 -0.263,1.006 -0.311,0.404 0,0"/>
                        </g>
                        <g transform="translate(223.7654,58.6499)" id="g2348">
                        <path id="path2350" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.311,-0.404 0.864,-0.456 1.234,-0.117 1.604,0.223 1.652,0.825 1.341,1.229 1.03,1.632 0.477,1.684 0.107,1.345 -0.263,1.006 -0.311,0.404 0,0"/>
                        </g>
                        <g transform="translate(462.1226,91.9104)" id="g2352">
                        <path id="path2354" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.2,-0.259 0.554,-0.292 0.792,-0.075 1.029,0.143 1.06,0.529 0.86,0.788 0.661,1.047 0.306,1.08 0.069,0.863 -0.169,0.645 -0.2,0.259 0,0"/>
                        </g>
                        <g transform="translate(391.907,68.3903)" id="g2356">
                        <path id="path2358" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.1,-0.13 0.277,-0.146 0.396,-0.037 0.515,0.072 0.53,0.265 0.43,0.394 0.33,0.523 0.153,0.54 0.034,0.431 -0.084,0.323 -0.1,0.13 0,0"/>
                        </g>
                        <g transform="translate(318.7792,73.9898)" id="g2360">
                        <path id="path2362" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.1,-0.13 0.277,-0.146 0.396,-0.038 0.514,0.071 0.53,0.265 0.43,0.394 0.33,0.523 0.153,0.54 0.034,0.431 -0.085,0.323 -0.1,0.13 0,0"/>
                        </g>
                        <g transform="translate(401.6971,85.1307)" id="g2364">
                        <path id="path2366" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.1,-0.13 0.277,-0.146 0.396,-0.037 0.515,0.071 0.53,0.265 0.43,0.394 0.33,0.523 0.153,0.54 0.034,0.431 -0.084,0.323 -0.1,0.13 0,0"/>
                        </g>
                        <g transform="translate(347.1711,65.1453)" id="g2368">
                        <path id="path2370" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.1,-0.13 0.277,-0.146 0.396,-0.037 0.515,0.071 0.53,0.264 0.43,0.394 0.33,0.523 0.153,0.54 0.034,0.431 -0.085,0.322 -0.1,0.129 0,0"/>
                        </g>
                        <g transform="translate(323.1193,80.3659)" id="g2372">
                        <path id="path2374" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.1,-0.13 0.277,-0.146 0.396,-0.038 0.514,0.071 0.53,0.264 0.43,0.394 0.33,0.523 0.153,0.54 0.034,0.431 -0.084,0.322 -0.1,0.129 0,0"/>
                        </g>
                        <g transform="translate(434.5967,109.9084)" id="g2376">
                        <path id="path2378" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.1,-0.13 0.277,-0.146 0.396,-0.037 0.515,0.071 0.53,0.265 0.43,0.394 0.33,0.523 0.153,0.54 0.034,0.431 -0.085,0.323 -0.1,0.13 0,0"/>
                        </g>
                        <g transform="translate(441.7853,117.8145)" id="g2380">
                        <path id="path2382" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.1,-0.13 0.277,-0.146 0.396,-0.037 0.515,0.071 0.53,0.265 0.43,0.394 0.33,0.524 0.153,0.54 0.035,0.431 -0.084,0.323 -0.1,0.129 0,0"/>
                        </g>
                        <g transform="translate(314.1732,63.2446)" id="g2384">
                        <path id="path2386" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.1,-0.13 0.277,-0.146 0.396,-0.037 0.515,0.071 0.53,0.265 0.43,0.394 0.33,0.523 0.153,0.54 0.034,0.431 -0.085,0.323 -0.1,0.13 0,0"/>
                        </g>
                        <g transform="translate(407.9356,77.5144)" id="g2388">
                        <path id="path2390" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.1,-0.13 0.277,-0.146 0.396,-0.037 0.515,0.072 0.53,0.265 0.43,0.394 0.33,0.524 0.153,0.54 0.034,0.432 -0.084,0.323 -0.1,0.13 0,0"/>
                        </g>
                        <g transform="translate(279.9848,73.4866)" id="g2392">
                        <path id="path2394" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.2,-0.259 0.554,-0.292 0.791,-0.075 1.029,0.143 1.06,0.529 0.86,0.788 0.66,1.047 0.306,1.08 0.069,0.863 -0.169,0.645 -0.2,0.259 0,0"/>
                        </g>
                        <g transform="translate(388.1719,108.6102)" id="g2396">
                        <path id="path2398" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.199,-0.259 0.554,-0.292 0.791,-0.075 1.029,0.143 1.06,0.529 0.86,0.788 0.66,1.047 0.306,1.081 0.068,0.863 -0.169,0.645 -0.2,0.259 0,0"/>
                        </g>
                        <g transform="translate(311.5634,48.0411)" id="g2400">
                        <path id="path2402" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.2,-0.259 0.554,-0.293 0.792,-0.075 1.029,0.143 1.06,0.529 0.86,0.788 0.661,1.047 0.306,1.08 0.069,0.863 -0.169,0.645 -0.199,0.259 0,0"/>
                        </g>
                        <g transform="translate(390.0114,111.0955)" id="g2404">
                        <path id="path2406" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.2,-0.259 0.554,-0.292 0.792,-0.075 1.029,0.143 1.06,0.529 0.86,0.788 0.661,1.047 0.306,1.081 0.069,0.863 -0.169,0.645 -0.2,0.259 0,0"/>
                        </g>
                        <g transform="translate(239.3431,57.175)" id="g2408">
                        <path id="path2410" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.2,-0.259 0.554,-0.292 0.792,-0.075 1.029,0.143 1.06,0.529 0.86,0.788 0.661,1.047 0.306,1.081 0.069,0.863 -0.169,0.645 -0.2,0.259 0,0"/>
                        </g>
                        <g transform="translate(256.1337,71.7574)" id="g2412">
                        <path id="path2414" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.2,-0.259 0.554,-0.293 0.792,-0.075 1.029,0.143 1.06,0.529 0.86,0.788 0.661,1.047 0.306,1.081 0.069,0.863 -0.169,0.645 -0.2,0.259 0,0"/>
                        </g>
                        <g transform="translate(182.3051,49.2346)" id="g2416">
                        <path id="path2418" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.2,-0.259 0.554,-0.292 0.792,-0.075 1.029,0.143 1.06,0.529 0.86,0.788 0.661,1.047 0.306,1.08 0.069,0.863 -0.169,0.645 -0.2,0.259 0,0"/>
                        </g>
                        <g transform="translate(136.924,28.4766)" id="g2420">
                        <path id="path2422" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.2,-0.259 0.554,-0.293 0.792,-0.075 1.029,0.143 1.06,0.529 0.86,0.788 0.661,1.047 0.306,1.08 0.069,0.863 -0.169,0.645 -0.199,0.259 0,0"/>
                        </g>
                        <g transform="translate(405.5595,118.5541)" id="g2424">
                        <path id="path2426" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.2,-0.259 0.554,-0.292 0.791,-0.075 1.029,0.143 1.06,0.529 0.86,0.788 0.661,1.047 0.306,1.08 0.069,0.863 -0.169,0.645 -0.2,0.259 0,0"/>
                        </g>
                        <g transform="translate(255.4794,73.5579)" id="g2428">
                        <path id="path2430" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.2,-0.259 0.554,-0.292 0.792,-0.075 1.029,0.143 1.06,0.529 0.86,0.788 0.661,1.047 0.306,1.08 0.069,0.863 -0.169,0.645 -0.2,0.259 0,0"/>
                        </g>
                        <g transform="translate(231.9279,51.9818)" id="g2432">
                        <path id="path2434" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.2,-0.259 0.554,-0.292 0.791,-0.075 1.029,0.143 1.06,0.529 0.86,0.788 0.661,1.047 0.306,1.081 0.069,0.863 -0.169,0.645 -0.2,0.259 0,0"/>
                        </g>
                        <g transform="translate(179.2868,35.9231)" id="g2436">
                        <path id="path2438" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.2,-0.259 0.554,-0.292 0.791,-0.075 1.029,0.143 1.06,0.529 0.86,0.788 0.661,1.047 0.306,1.081 0.069,0.863 -0.169,0.645 -0.2,0.259 0,0"/>
                        </g>
                        <g transform="translate(346.956,122.4599)" id="g2440">
                        <path id="path2442" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.2,-0.259 0.554,-0.292 0.792,-0.075 1.029,0.143 1.06,0.529 0.86,0.788 0.661,1.047 0.306,1.081 0.069,0.863 -0.169,0.645 -0.2,0.259 0,0"/>
                        </g>
                        <g transform="translate(220.0506,51.5624)" id="g2444">
                        <path id="path2446" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.2,-0.259 0.554,-0.293 0.791,-0.075 1.029,0.143 1.06,0.529 0.86,0.788 0.66,1.047 0.306,1.08 0.069,0.863 -0.169,0.645 -0.2,0.259 0,0"/>
                        </g>
                        <g transform="translate(254.4483,98.0746)" id="g2448">
                        <path id="path2450" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.2,-0.259 0.554,-0.292 0.791,-0.075 1.029,0.143 1.06,0.529 0.86,0.788 0.66,1.047 0.306,1.08 0.069,0.863 -0.169,0.645 -0.2,0.259 0,0"/>
                        </g>
                        <g transform="translate(264.7329,106.7749)" id="g2452">
                        <path id="path2454" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.2,-0.259 0.554,-0.292 0.792,-0.075 1.029,0.143 1.06,0.529 0.86,0.788 0.661,1.047 0.306,1.081 0.069,0.863 -0.169,0.645 -0.2,0.259 0,0"/>
                        </g>
                        <g transform="translate(202.375,76.653)" id="g2456">
                        <path id="path2458" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.2,-0.259 0.554,-0.292 0.792,-0.075 1.029,0.143 1.06,0.529 0.86,0.788 0.661,1.047 0.306,1.081 0.069,0.863 -0.169,0.645 -0.2,0.259 0,0"/>
                        </g>
                        <g transform="translate(323.0282,105.154)" id="g2460">
                        <path id="path2462" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.2,-0.259 0.554,-0.292 0.792,-0.075 1.029,0.143 1.06,0.529 0.86,0.788 0.661,1.047 0.306,1.081 0.069,0.863 -0.169,0.645 -0.2,0.259 0,0"/>
                        </g>
                        <g transform="translate(392.3959,85.0908)" id="g2464">
                        <path id="path2466" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.656,0.062 -1.233,-0.467 -1.29,-1.182 -0.057,-0.715 0.428,-1.345 1.084,-1.407 0.656,-0.062 1.233,0.468 1.29,1.183 C 1.141,-0.692 0.656,-0.062 0,0"/>
                        </g>
                        <g transform="translate(313.2679,43.7681)" id="g2468">
                        <path id="path2470" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.075,-0.141 0.24,-0.189 0.369,-0.108 0.498,-0.027 0.542,0.153 0.468,0.294 0.393,0.435 0.228,0.483 0.099,0.402 -0.03,0.321 -0.074,0.141 0,0"/>
                        </g>
                        <g transform="translate(365.8864,138.2922)" id="g2472">
                        <path id="path2474" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.155,-0.293 0.499,-0.394 0.768,-0.225 1.036,-0.056 1.128,0.319 0.973,0.612 0.818,0.905 0.475,1.005 0.206,0.836 -0.063,0.667 -0.155,0.293 0,0"/>
                        </g>
                        <g transform="translate(324.7129,53.0434)" id="g2476">
                        <path id="path2478" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.155,-0.293 0.499,-0.393 0.767,-0.224 1.036,-0.055 1.128,0.319 0.973,0.612 0.818,0.905 0.475,1.006 0.206,0.837 -0.063,0.667 -0.155,0.293 0,0"/>
                        </g>
                        <g transform="translate(324.357,54.9407)" id="g2480">
                        <path id="path2482" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.155,-0.293 0.499,-0.393 0.767,-0.224 1.036,-0.055 1.128,0.319 0.973,0.612 0.818,0.905 0.475,1.006 0.206,0.837 -0.063,0.668 -0.155,0.293 0,0"/>
                        </g>
                        <g transform="translate(394.3731,144.8161)" id="g2484">
                        <path id="path2486" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.437,-0.173 0.92,0.073 1.078,0.549 1.237,1.025 1.012,1.551 0.575,1.724 0.138,1.897 -0.345,1.652 -0.504,1.175 -0.662,0.699 -0.437,0.173 0,0"/>
                        </g>
                        <g transform="translate(365.3957,85.7775)" id="g2488">
                        <path id="path2490" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.28,-0.111 0.59,0.047 0.692,0.352 0.794,0.657 0.649,0.995 0.369,1.106 0.089,1.217 -0.221,1.06 -0.323,0.754 -0.425,0.449 -0.28,0.111 0,0"/>
                        </g>
                        <g transform="translate(410.2028,160.7019)" id="g2492">
                        <path id="path2494" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.14,-0.056 0.295,0.023 0.346,0.176 0.397,0.329 0.325,0.497 0.185,0.553 0.044,0.609 -0.111,0.53 -0.161,0.377 -0.212,0.224 -0.14,0.055 0,0"/>
                        </g>
                        <g transform="translate(425.5448,179.6543)" id="g2496">
                        <path id="path2498" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.14,-0.055 0.295,0.023 0.346,0.176 0.397,0.329 0.324,0.498 0.184,0.553 0.044,0.609 -0.111,0.53 -0.162,0.377 -0.212,0.224 -0.14,0.056 0,0"/>
                        </g>
                        <g transform="translate(406.8572,154.1114)" id="g2500">
                        <path id="path2502" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.28,-0.111 0.59,0.047 0.692,0.352 0.794,0.658 0.649,0.995 0.369,1.106 0.089,1.217 -0.221,1.06 -0.323,0.754 -0.425,0.449 -0.28,0.111 0,0"/>
                        </g>
                        <g transform="translate(374.8215,56.2803)" id="g2504">
                        <path id="path2506" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.28,-0.111 0.59,0.047 0.692,0.352 0.794,0.658 0.649,0.995 0.369,1.106 0.089,1.217 -0.221,1.06 -0.323,0.754 -0.425,0.449 -0.28,0.111 0,0"/>
                        </g>
                        <g transform="translate(312.9255,47.5532)" id="g2508">
                        <path id="path2510" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.28,-0.111 0.59,0.047 0.692,0.352 0.794,0.658 0.649,0.995 0.369,1.106 0.089,1.217 -0.221,1.06 -0.323,0.754 -0.425,0.449 -0.28,0.111 0,0"/>
                        </g>
                        <g transform="translate(481.5056,58.2382)" id="g2512">
                        <path id="path2514" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.454,-0.18 0.957,0.076 1.122,0.571 1.287,1.067 1.053,1.615 0.598,1.794 0.143,1.975 -0.359,1.719 -0.524,1.223 -0.689,0.728 -0.455,0.18 0,0"/>
                        </g>
                        <g transform="translate(414.1012,44.3914)" id="g2516">
                        <path id="path2518" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.292,-0.116 0.614,0.048 0.72,0.366 0.826,0.684 0.675,1.036 0.384,1.151 0.092,1.267 -0.23,1.103 -0.336,0.785 -0.442,0.467 -0.292,0.115 0,0"/>
                        </g>
                        <g transform="translate(391.6263,61.8572)" id="g2520">
                        <path id="path2522" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.292,-0.116 0.614,0.049 0.72,0.366 0.826,0.684 0.675,1.036 0.384,1.151 0.092,1.267 -0.23,1.103 -0.336,0.785 -0.442,0.467 -0.292,0.116 0,0"/>
                        </g>
                        <g transform="translate(378.8357,33.8314)" id="g2524">
                        <path id="path2526" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.292,-0.116 0.614,0.049 0.72,0.367 0.826,0.684 0.675,1.036 0.384,1.151 0.092,1.267 -0.23,1.103 -0.336,0.785 -0.442,0.467 -0.292,0.116 0,0"/>
                        </g>
                        <g transform="translate(350.5716,359.811)" id="g2528">
                        <path id="path2530" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.575,0.746 -1.597,0.843 -2.282,0.216 -2.967,-0.412 -3.055,-1.525 -2.48,-2.272 -1.904,-3.018 -0.883,-3.115 -0.198,-2.488 0.487,-1.86 0.576,-0.746 0,0"/>
                        </g>
                        <g transform="translate(424.3187,469.3147)" id="g2532">
                        <path id="path2534" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.575,0.746 -1.597,0.843 -2.282,0.216 -2.967,-0.412 -3.055,-1.525 -2.48,-2.272 -1.904,-3.018 -0.883,-3.115 -0.198,-2.488 0.487,-1.86 0.576,-0.747 0,0"/>
                        </g>
                        <g transform="translate(439.2108,411.1604)" id="g2536">
                        <path id="path2538" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.575,0.746 -1.597,0.843 -2.282,0.216 -2.967,-0.412 -3.055,-1.525 -2.48,-2.272 -1.904,-3.018 -0.883,-3.115 -0.198,-2.488 0.487,-1.86 0.576,-0.747 0,0"/>
                        </g>
                        <g transform="translate(500.6077,440.2561)" id="g2540">
                        <path id="path2542" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.576,0.747 -1.597,0.843 -2.282,0.216 -2.967,-0.412 -3.055,-1.526 -2.48,-2.272 -1.904,-3.018 -0.883,-3.115 -0.198,-2.488 0.487,-1.86 0.576,-0.747 0,0"/>
                        </g>
                        <g transform="translate(469.3425,452.2986)" id="g2544">
                        <path id="path2546" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.407,0.528 -1.129,0.596 -1.614,0.153 -0.484,-0.444 -0.546,-1.232 -0.14,-1.76 0.407,-0.527 1.13,-0.596 1.614,-0.152 C 0.344,-1.315 0.407,-0.528 0,0"/>
                        </g>
                        <g transform="translate(385.242,359.7415)" id="g2548">
                        <path id="path2550" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.299,0.388 -0.83,0.438 -1.186,0.112 -0.356,-0.326 -0.402,-0.905 -0.103,-1.293 0.299,-0.387 0.83,-0.438 1.186,-0.112 C 0.253,-0.967 0.299,-0.388 0,0"/>
                        </g>
                        <g transform="translate(435.1079,447.6784)" id="g2552">
                        <path id="path2554" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.299,0.388 -0.83,0.438 -1.186,0.112 -1.542,-0.214 -1.588,-0.793 -1.289,-1.18 -0.99,-1.568 -0.459,-1.618 -0.103,-1.292 0.253,-0.966 0.299,-0.388 0,0"/>
                        </g>
                        <g transform="translate(447.5076,431.5945)" id="g2556">
                        <path id="path2558" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.299,0.388 -0.83,0.438 -1.186,0.112 -0.356,-0.326 -0.402,-0.905 -0.103,-1.293 0.299,-0.387 0.83,-0.437 1.186,-0.111 C 0.253,-0.967 0.299,-0.388 0,0"/>
                        </g>
                        <g transform="translate(256.8799,365.9883)" id="g2560">
                        <path id="path2562" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.192,0.249 -0.532,0.281 -0.761,0.072 -0.228,-0.209 -0.257,-0.581 -0.066,-0.83 0.192,-0.248 0.533,-0.28 0.761,-0.071 C 0.162,-0.62 0.192,-0.249 0,0"/>
                        </g>
                        <g transform="translate(353.1087,428.091)" id="g2564">
                        <path id="path2566" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.121,0.157 -0.335,0.177 -0.479,0.045 -0.623,-0.087 -0.642,-0.32 -0.521,-0.477 -0.4,-0.634 -0.185,-0.654 -0.041,-0.522 0.102,-0.391 0.121,-0.157 0,0"/>
                        </g>
                        <g transform="translate(396.0612,381.7712)" id="g2568">
                        <path id="path2570" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.096,0.124 -0.266,0.141 -0.38,0.036 -0.115,-0.105 -0.129,-0.29 -0.033,-0.415 0.096,-0.124 0.266,-0.14 0.38,-0.036 C 0.081,-0.31 0.096,-0.124 0,0"/>
                        </g>
                        <g transform="translate(451.7407,460.1853)" id="g2572">
                        <path id="path2574" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.096,0.124 -0.266,0.141 -0.38,0.036 -0.114,-0.105 -0.129,-0.29 -0.033,-0.415 0.096,-0.124 0.266,-0.14 0.38,-0.036 C 0.081,-0.31 0.096,-0.125 0,0"/>
                        </g>
                        <g transform="translate(385.7822,437.0126)" id="g2576">
                        <path id="path2578" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.096,0.124 -0.266,0.141 -0.38,0.036 -0.115,-0.105 -0.129,-0.29 -0.033,-0.415 0.095,-0.124 0.266,-0.14 0.38,-0.036 C 0.081,-0.31 0.096,-0.124 0,0"/>
                        </g>
                        <g transform="translate(391.8904,375.6441)" id="g2580">
                        <path id="path2582" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.096,0.124 -0.266,0.14 -0.38,0.036 -0.114,-0.105 -0.129,-0.29 -0.033,-0.415 0.096,-0.124 0.266,-0.14 0.38,-0.036 C 0.081,-0.31 0.096,-0.125 0,0"/>
                        </g>
                        <g transform="translate(420.1252,436.3744)" id="g2584">
                        <path id="path2586" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.096,0.124 -0.266,0.14 -0.38,0.036 -0.115,-0.105 -0.129,-0.29 -0.033,-0.415 0.095,-0.124 0.266,-0.14 0.38,-0.036 C 0.081,-0.31 0.096,-0.125 0,0"/>
                        </g>
                        <g transform="translate(413.2168,428.7769)" id="g2588">
                        <path id="path2590" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.096,0.124 -0.266,0.14 -0.38,0.036 -0.114,-0.105 -0.129,-0.29 -0.033,-0.415 0.095,-0.124 0.266,-0.14 0.38,-0.036 C 0.081,-0.31 0.096,-0.125 0,0"/>
                        </g>
                        <g transform="translate(327.2159,347.827)" id="g2592">
                        <path id="path2594" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.096,0.124 -0.266,0.14 -0.38,0.036 -0.114,-0.105 -0.129,-0.29 -0.033,-0.415 0.096,-0.124 0.266,-0.14 0.38,-0.036 C 0.081,-0.31 0.096,-0.124 0,0"/>
                        </g>
                        <g transform="translate(308.9525,379.8224)" id="g2596">
                        <path id="path2598" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.096,0.124 -0.266,0.141 -0.38,0.036 -0.114,-0.105 -0.129,-0.29 -0.033,-0.415 0.095,-0.124 0.266,-0.14 0.38,-0.036 C 0.081,-0.31 0.096,-0.124 0,0"/>
                        </g>
                        <g transform="translate(464.7384,437.6217)" id="g2600">
                        <path id="path2602" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.192,0.249 -0.533,0.281 -0.761,0.072 -0.228,-0.209 -0.258,-0.58 -0.066,-0.829 0.192,-0.249 0.533,-0.281 0.761,-0.072 C 0.162,-0.62 0.192,-0.249 0,0"/>
                        </g>
                        <g transform="translate(329.7237,362.4372)" id="g2604">
                        <path id="path2606" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.192,0.249 -0.532,0.281 -0.761,0.072 -0.228,-0.209 -0.257,-0.58 -0.066,-0.829 0.192,-0.249 0.533,-0.281 0.761,-0.072 C 0.162,-0.62 0.192,-0.249 0,0"/>
                        </g>
                        <g transform="translate(462.9705,435.2335)" id="g2608">
                        <path id="path2610" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.192,0.249 -0.532,0.281 -0.761,0.072 -0.228,-0.209 -0.257,-0.581 -0.066,-0.829 0.192,-0.249 0.533,-0.281 0.761,-0.072 C 0.162,-0.62 0.192,-0.249 0,0"/>
                        </g>
                        <g transform="translate(448.0293,428.0659)" id="g2612">
                        <path id="path2614" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.192,0.249 -0.533,0.281 -0.761,0.072 -0.228,-0.209 -0.258,-0.58 -0.066,-0.829 0.192,-0.249 0.533,-0.281 0.761,-0.072 C 0.162,-0.62 0.192,-0.249 0,0"/>
                        </g>
                        <g transform="translate(533.6357,396.7271)" id="g2616">
                        <path id="path2618" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.192,0.249 -0.532,0.281 -0.761,0.072 -0.228,-0.209 -0.257,-0.581 -0.066,-0.83 0.192,-0.248 0.533,-0.281 0.761,-0.071 C 0.162,-0.62 0.192,-0.249 0,0"/>
                        </g>
                        <g transform="translate(494.8438,408.1834)" id="g2620">
                        <path id="path2622" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.192,0.249 -0.533,0.281 -0.761,0.072 -0.228,-0.209 -0.258,-0.581 -0.066,-0.829 0.192,-0.249 0.533,-0.281 0.761,-0.072 C 0.162,-0.62 0.192,-0.249 0,0"/>
                        </g>
                        <g transform="translate(319.6636,376.489)" id="g2624">
                        <path id="path2626" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.63,-0.06 1.185,0.449 1.24,1.136 1.295,1.823 0.828,2.428 0.198,2.488 -0.432,2.547 -0.987,2.039 -1.042,1.352 -1.097,0.665 -0.63,0.059 0,0"/>
                        </g>
                        <g transform="translate(398.0932,346.4189)" id="g2628">
                        <path id="path2630" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.599,0.777 -1.662,0.877 -2.375,0.224 -3.087,-0.428 -3.18,-1.587 -2.581,-2.364 -1.982,-3.141 -0.919,-3.242 -0.206,-2.589 0.507,-1.936 0.599,-0.777 0,0"/>
                        </g>
                        <g transform="translate(187.9077,442.5819)" id="g2632">
                        <path id="path2634" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.599,0.777 -1.662,0.877 -2.375,0.224 -3.087,-0.428 -3.18,-1.587 -2.581,-2.364 -1.982,-3.141 -0.919,-3.241 -0.206,-2.589 0.507,-1.936 0.599,-0.777 0,0"/>
                        </g>
                        <g transform="translate(544.1607,422.9458)" id="g2636">
                        <path id="path2638" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.599,0.777 -1.662,0.877 -2.375,0.224 -3.088,-0.428 -3.18,-1.587 -2.581,-2.364 -1.982,-3.141 -0.919,-3.242 -0.206,-2.589 0.506,-1.936 0.599,-0.777 0,0"/>
                        </g>
                        <g transform="translate(244.8316,353.0761)" id="g2640">
                        <path id="path2642" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.599,0.777 -1.662,0.877 -2.375,0.224 -3.087,-0.428 -3.179,-1.587 -2.58,-2.364 -1.982,-3.141 -0.918,-3.242 -0.206,-2.589 0.507,-1.936 0.599,-0.777 0,0"/>
                        </g>
                        <g transform="translate(315.1623,403.6139)" id="g2644">
                        <path id="path2646" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.599,0.777 -1.662,0.877 -2.375,0.225 -3.087,-0.428 -3.18,-1.587 -2.581,-2.364 -1.982,-3.141 -0.918,-3.241 -0.206,-2.589 0.507,-1.936 0.599,-0.777 0,0"/>
                        </g>
                        <g transform="translate(276.1868,395.8851)" id="g2648">
                        <path id="path2650" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.423,0.549 -1.175,0.62 -1.679,0.159 -0.504,-0.462 -0.569,-1.281 -0.146,-1.831 0.424,-0.549 1.175,-0.62 1.679,-0.159 C 0.358,-1.369 0.423,-0.549 0,0"/>
                        </g>
                        <g transform="translate(219.3918,424.7161)" id="g2652">
                        <path id="path2654" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.424,0.549 -1.175,0.62 -1.679,0.159 -0.504,-0.462 -0.569,-1.281 -0.146,-1.831 0.424,-0.549 1.175,-0.62 1.679,-0.159 C 0.358,-1.369 0.423,-0.549 0,0"/>
                        </g>
                        <g transform="translate(390.111,439.7058)" id="g2656">
                        <path id="path2658" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.311,0.404 -0.863,0.456 -1.234,0.117 -0.37,-0.34 -0.418,-0.942 -0.107,-1.345 0.311,-0.404 0.864,-0.456 1.234,-0.117 C 0.263,-1.006 0.311,-0.404 0,0"/>
                        </g>
                        <g transform="translate(353.4786,387.7737)" id="g2660">
                        <path id="path2662" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.311,0.404 -0.864,0.456 -1.234,0.117 -0.37,-0.34 -0.418,-0.942 -0.107,-1.345 0.311,-0.404 0.864,-0.456 1.234,-0.117 C 0.263,-1.006 0.311,-0.404 0,0"/>
                        </g>
                        <g transform="translate(240.562,391.0772)" id="g2664">
                        <path id="path2666" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.311,0.404 -0.864,0.456 -1.234,0.117 -0.37,-0.34 -0.418,-0.942 -0.107,-1.345 0.311,-0.404 0.864,-0.456 1.234,-0.117 C 0.263,-1.006 0.311,-0.404 0,0"/>
                        </g>
                        <g transform="translate(253.4652,374.3399)" id="g2668">
                        <path id="path2670" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.311,0.404 -0.863,0.456 -1.234,0.117 -0.37,-0.34 -0.418,-0.941 -0.107,-1.345 0.311,-0.404 0.864,-0.456 1.234,-0.117 C 0.263,-1.005 0.311,-0.404 0,0"/>
                        </g>
                        <g transform="translate(435.8021,430.5724)" id="g2672">
                        <path id="path2674" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.311,0.404 -0.864,0.456 -1.234,0.117 -0.37,-0.339 -0.418,-0.942 -0.107,-1.345 0.311,-0.404 0.864,-0.456 1.234,-0.117 C 0.263,-1.006 0.311,-0.404 0,0"/>
                        </g>
                        <g transform="translate(197.4449,397.3119)" id="g2676">
                        <path id="path2678" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.2,0.259 -0.554,0.293 -0.792,0.075 -1.029,-0.143 -1.06,-0.529 -0.86,-0.788 -0.661,-1.047 -0.306,-1.08 -0.069,-0.863 0.169,-0.645 0.2,-0.259 0,0"/>
                        </g>
                        <g transform="translate(267.6604,420.8321)" id="g2680">
                        <path id="path2682" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.1,0.13 -0.277,0.146 -0.396,0.037 -0.514,-0.071 -0.53,-0.265 -0.43,-0.394 -0.33,-0.524 -0.153,-0.54 -0.034,-0.431 0.084,-0.323 0.1,-0.129 0,0"/>
                        </g>
                        <g transform="translate(340.7882,415.2326)" id="g2684">
                        <path id="path2686" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.1,0.129 -0.277,0.146 -0.396,0.038 -0.514,-0.071 -0.53,-0.265 -0.43,-0.394 -0.33,-0.523 -0.153,-0.54 -0.034,-0.431 0.084,-0.323 0.1,-0.13 0,0"/>
                        </g>
                        <g transform="translate(257.8704,404.0918)" id="g2688">
                        <path id="path2690" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.1,0.13 -0.277,0.146 -0.396,0.037 -0.515,-0.071 -0.53,-0.265 -0.43,-0.394 -0.33,-0.524 -0.153,-0.54 -0.034,-0.431 0.085,-0.323 0.1,-0.13 0,0"/>
                        </g>
                        <g transform="translate(312.3964,424.0771)" id="g2692">
                        <path id="path2694" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.1,0.13 -0.277,0.146 -0.396,0.037 -0.515,-0.071 -0.53,-0.264 -0.43,-0.394 -0.33,-0.523 -0.153,-0.54 -0.034,-0.431 0.085,-0.322 0.1,-0.129 0,0"/>
                        </g>
                        <g transform="translate(336.4482,408.8566)" id="g2696">
                        <path id="path2698" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.1,0.13 -0.277,0.146 -0.396,0.038 -0.514,-0.071 -0.53,-0.264 -0.43,-0.394 -0.33,-0.523 -0.153,-0.54 -0.034,-0.431 0.084,-0.323 0.1,-0.129 0,0"/>
                        </g>
                        <g transform="translate(224.9708,379.3141)" id="g2700">
                        <path id="path2702" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.1,0.13 -0.277,0.146 -0.396,0.037 -0.514,-0.071 -0.53,-0.265 -0.43,-0.394 -0.33,-0.524 -0.153,-0.54 -0.034,-0.431 0.085,-0.323 0.1,-0.13 0,0"/>
                        </g>
                        <g transform="translate(217.7821,371.4079)" id="g2704">
                        <path id="path2706" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.1,0.13 -0.277,0.146 -0.396,0.037 -0.514,-0.071 -0.53,-0.264 -0.43,-0.394 -0.33,-0.523 -0.153,-0.54 -0.034,-0.431 0.084,-0.323 0.1,-0.129 0,0"/>
                        </g>
                        <g transform="translate(345.3943,425.9778)" id="g2708">
                        <path id="path2710" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.1,0.129 -0.277,0.146 -0.396,0.038 -0.515,-0.071 -0.53,-0.265 -0.43,-0.394 -0.33,-0.523 -0.153,-0.54 -0.034,-0.431 0.085,-0.323 0.1,-0.129 0,0"/>
                        </g>
                        <g transform="translate(251.6319,411.7079)" id="g2712">
                        <path id="path2714" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.1,0.13 -0.277,0.146 -0.396,0.037 -0.514,-0.071 -0.53,-0.264 -0.43,-0.394 -0.33,-0.524 -0.153,-0.54 -0.034,-0.431 0.084,-0.323 0.1,-0.129 0,0"/>
                        </g>
                        <g transform="translate(379.5827,415.7358)" id="g2716">
                        <path id="path2718" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.2,0.259 -0.554,0.292 -0.791,0.075 -1.029,-0.143 -1.06,-0.529 -0.86,-0.788 -0.661,-1.047 -0.306,-1.08 -0.069,-0.863 0.169,-0.645 0.2,-0.259 0,0"/>
                        </g>
                        <g transform="translate(271.3957,380.6122)" id="g2720">
                        <path id="path2722" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.2,0.259 -0.554,0.292 -0.792,0.075 -1.029,-0.143 -1.06,-0.529 -0.86,-0.788 -0.661,-1.047 -0.306,-1.081 -0.069,-0.863 0.169,-0.645 0.2,-0.259 0,0"/>
                        </g>
                        <g transform="translate(348.0041,441.1814)" id="g2724">
                        <path id="path2726" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.2,0.259 -0.554,0.292 -0.792,0.075 -1.029,-0.143 -1.06,-0.529 -0.86,-0.788 -0.661,-1.047 -0.306,-1.081 -0.069,-0.863 0.169,-0.645 0.199,-0.259 0,0"/>
                        </g>
                        <g transform="translate(269.5561,378.1269)" id="g2728">
                        <path id="path2730" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.2,0.259 -0.554,0.292 -0.792,0.075 -1.029,-0.143 -1.06,-0.529 -0.86,-0.788 -0.66,-1.047 -0.306,-1.081 -0.069,-0.863 0.169,-0.645 0.2,-0.259 0,0"/>
                        </g>
                        <g transform="translate(420.2244,432.0474)" id="g2732">
                        <path id="path2734" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.2,0.259 -0.554,0.292 -0.792,0.075 -1.029,-0.143 -1.06,-0.529 -0.86,-0.788 -0.661,-1.047 -0.306,-1.081 -0.069,-0.863 0.169,-0.645 0.2,-0.259 0,0"/>
                        </g>
                        <g transform="translate(403.4338,417.4651)" id="g2736">
                        <path id="path2738" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.2,0.259 -0.554,0.293 -0.792,0.075 -1.029,-0.143 -1.06,-0.529 -0.86,-0.788 -0.661,-1.047 -0.306,-1.081 -0.069,-0.863 0.169,-0.645 0.2,-0.259 0,0"/>
                        </g>
                        <g transform="translate(477.2623,439.9879)" id="g2740">
                        <path id="path2742" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.2,0.259 -0.554,0.292 -0.792,0.075 -1.029,-0.143 -1.06,-0.529 -0.86,-0.788 -0.661,-1.047 -0.306,-1.081 -0.069,-0.863 0.169,-0.645 0.2,-0.259 0,0"/>
                        </g>
                        <g transform="translate(522.6435,460.7459)" id="g2744">
                        <path id="path2746" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.2,0.259 -0.554,0.292 -0.792,0.075 -1.029,-0.143 -1.06,-0.529 -0.86,-0.788 -0.661,-1.047 -0.306,-1.081 -0.069,-0.863 0.169,-0.645 0.2,-0.259 0,0"/>
                        </g>
                        <g transform="translate(254.008,370.6684)" id="g2748">
                        <path id="path2750" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.2,0.259 -0.554,0.292 -0.791,0.074 -1.029,-0.143 -1.06,-0.529 -0.86,-0.788 -0.66,-1.047 -0.306,-1.081 -0.069,-0.863 0.169,-0.645 0.2,-0.259 0,0"/>
                        </g>
                        <g transform="translate(404.0881,415.6645)" id="g2752">
                        <path id="path2754" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.2,0.259 -0.554,0.292 -0.792,0.075 -1.029,-0.143 -1.06,-0.529 -0.86,-0.788 -0.661,-1.047 -0.306,-1.08 -0.069,-0.863 0.169,-0.645 0.2,-0.259 0,0"/>
                        </g>
                        <g transform="translate(427.6396,437.2407)" id="g2756">
                        <path id="path2758" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.2,0.259 -0.554,0.293 -0.792,0.075 -1.029,-0.143 -1.06,-0.529 -0.86,-0.788 -0.661,-1.047 -0.306,-1.081 -0.069,-0.863 0.169,-0.645 0.2,-0.259 0,0"/>
                        </g>
                        <g transform="translate(480.2807,453.2993)" id="g2760">
                        <path id="path2762" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.2,0.259 -0.554,0.293 -0.792,0.075 -1.029,-0.143 -1.06,-0.529 -0.86,-0.788 -0.661,-1.047 -0.306,-1.08 -0.069,-0.863 0.169,-0.645 0.2,-0.259 0,0"/>
                        </g>
                        <g transform="translate(312.6114,366.7625)" id="g2764">
                        <path id="path2766" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.2,0.259 -0.554,0.292 -0.791,0.075 -1.029,-0.143 -1.06,-0.529 -0.86,-0.788 -0.661,-1.047 -0.306,-1.081 -0.069,-0.863 0.169,-0.645 0.2,-0.259 0,0"/>
                        </g>
                        <g transform="translate(439.5169,437.66)" id="g2768">
                        <path id="path2770" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.2,0.259 -0.554,0.292 -0.791,0.075 -1.029,-0.143 -1.06,-0.529 -0.86,-0.788 -0.66,-1.047 -0.306,-1.081 -0.069,-0.863 0.169,-0.645 0.2,-0.259 0,0"/>
                        </g>
                        <g transform="translate(405.1193,391.1479)" id="g2772">
                        <path id="path2774" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.2,0.259 -0.554,0.293 -0.792,0.075 -1.029,-0.143 -1.06,-0.529 -0.86,-0.788 -0.66,-1.047 -0.306,-1.08 -0.069,-0.863 0.169,-0.645 0.2,-0.259 0,0"/>
                        </g>
                        <g transform="translate(394.8346,382.4474)" id="g2776">
                        <path id="path2778" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.2,0.259 -0.554,0.292 -0.792,0.075 -1.029,-0.143 -1.06,-0.529 -0.86,-0.788 -0.661,-1.047 -0.306,-1.08 -0.069,-0.863 0.169,-0.645 0.2,-0.259 0,0"/>
                        </g>
                        <g transform="translate(457.1925,412.5694)" id="g2780">
                        <path id="path2782" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.2,0.259 -0.554,0.292 -0.792,0.075 -1.029,-0.143 -1.06,-0.529 -0.86,-0.788 -0.661,-1.047 -0.306,-1.081 -0.069,-0.863 0.169,-0.645 0.2,-0.259 0,0"/>
                        </g>
                        <g transform="translate(336.5392,384.0684)" id="g2784">
                        <path id="path2786" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.2,0.259 -0.554,0.292 -0.792,0.075 -1.029,-0.143 -1.06,-0.529 -0.86,-0.788 -0.661,-1.047 -0.306,-1.081 -0.069,-0.863 0.169,-0.645 0.2,-0.259 0,0"/>
                        </g>
                        <g transform="translate(267.1717,404.1315)" id="g2788">
                        <path id="path2790" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C 0.656,-0.062 1.233,0.467 1.29,1.182 1.347,1.897 0.862,2.527 0.206,2.589 -0.45,2.651 -1.028,2.121 -1.085,1.407 -1.141,0.692 -0.656,0.062 0,0"/>
                        </g>
                        <g transform="translate(346.2996,445.4544)" id="g2792">
                        <path id="path2794" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.075,0.141 -0.24,0.189 -0.369,0.108 -0.129,-0.082 -0.173,-0.261 -0.099,-0.402 0.075,-0.141 0.24,-0.189 0.369,-0.108 C 0.03,-0.321 0.074,-0.141 0,0"/>
                        </g>
                        <g transform="translate(293.681,350.9302)" id="g2796">
                        <path id="path2798" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.155,0.293 -0.499,0.393 -0.767,0.224 -1.036,0.055 -1.128,-0.319 -0.973,-0.612 -0.818,-0.905 -0.475,-1.006 -0.206,-0.837 0.063,-0.668 0.155,-0.293 0,0"/>
                        </g>
                        <g transform="translate(334.8546,436.179)" id="g2800">
                        <path id="path2802" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.155,0.293 -0.499,0.394 -0.767,0.224 -1.036,0.055 -1.128,-0.319 -0.973,-0.612 -0.818,-0.905 -0.474,-1.006 -0.206,-0.837 0.063,-0.667 0.155,-0.293 0,0"/>
                        </g>
                        <g transform="translate(335.2105,434.2817)" id="g2804">
                        <path id="path2806" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="M 0,0 C -0.155,0.293 -0.499,0.393 -0.767,0.224 -1.036,0.055 -1.128,-0.319 -0.973,-0.612 -0.818,-0.905 -0.475,-1.006 -0.206,-0.837 0.063,-0.668 0.155,-0.293 0,0"/>
                        </g>
                        <g transform="translate(265.1944,344.4064)" id="g2808">
                        <path id="path2810" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.437,0.173 -0.92,-0.073 -1.078,-0.549 -0.159,-0.476 0.066,-1.002 0.503,-1.175 0.437,-0.173 0.92,0.072 1.079,0.548 C 0.662,-0.699 0.437,-0.173 0,0"/>
                        </g>
                        <g transform="translate(294.1718,403.4449)" id="g2812">
                        <path id="path2814" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.28,0.111 -0.59,-0.047 -0.692,-0.352 -0.102,-0.305 0.043,-0.643 0.323,-0.754 0.28,-0.111 0.59,0.047 0.692,0.352 C 0.425,-0.449 0.28,-0.111 0,0"/>
                        </g>
                        <g transform="translate(249.3647,328.5206)" id="g2816">
                        <path id="path2818" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.14,0.055 -0.295,-0.023 -0.346,-0.176 -0.051,-0.153 0.021,-0.321 0.161,-0.377 0.141,-0.056 0.295,0.023 0.346,0.176 C 0.212,-0.224 0.14,-0.056 0,0"/>
                        </g>
                        <g transform="translate(234.0227,309.568)" id="g2820">
                        <path id="path2822" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.14,0.056 -0.295,-0.023 -0.346,-0.176 -0.051,-0.153 0.022,-0.322 0.162,-0.377 0.14,-0.056 0.295,0.023 0.346,0.176 C 0.212,-0.224 0.14,-0.055 0,0"/>
                        </g>
                        <g transform="translate(252.7103,335.1111)" id="g2824">
                        <path id="path2826" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.28,0.111 -0.59,-0.047 -0.692,-0.352 -0.102,-0.306 0.043,-0.644 0.323,-0.754 0.28,-0.111 0.59,0.046 0.692,0.352 C 0.425,-0.449 0.28,-0.111 0,0"/>
                        </g>
                        <g transform="translate(284.746,432.9421)" id="g2828">
                        <path id="path2830" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.28,0.111 -0.59,-0.047 -0.692,-0.352 -0.102,-0.306 0.043,-0.643 0.323,-0.754 0.28,-0.111 0.59,0.046 0.692,0.352 C 0.425,-0.449 0.28,-0.111 0,0"/>
                        </g>
                        <g transform="translate(346.642,441.6693)" id="g2832">
                        <path id="path2834" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.28,0.111 -0.59,-0.047 -0.692,-0.352 -0.102,-0.306 0.043,-0.643 0.323,-0.754 0.28,-0.111 0.59,0.046 0.692,0.352 C 0.425,-0.449 0.28,-0.111 0,0"/>
                        </g>
                        <g transform="translate(178.062,430.9842)" id="g2836">
                        <path id="path2838" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.454,0.18 -0.957,-0.076 -1.122,-0.571 -0.165,-0.496 0.069,-1.044 0.524,-1.223 0.454,-0.181 0.957,0.075 1.122,0.571 C 0.689,-0.728 0.455,-0.18 0,0"/>
                        </g>
                        <g transform="translate(245.4663,444.831)" id="g2840">
                        <path id="path2842" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.292,0.116 -0.614,-0.048 -0.72,-0.366 -0.106,-0.318 0.045,-0.67 0.336,-0.785 0.292,-0.116 0.614,0.048 0.72,0.366 C 0.442,-0.467 0.292,-0.115 0,0"/>
                        </g>
                        <g transform="translate(267.9412,427.3652)" id="g2844">
                        <path id="path2846" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.292,0.116 -0.614,-0.049 -0.72,-0.366 -0.106,-0.318 0.045,-0.67 0.336,-0.785 0.292,-0.116 0.614,0.048 0.72,0.366 C 0.442,-0.467 0.292,-0.116 0,0"/>
                        </g>
                        <g transform="translate(280.7318,455.3911)" id="g2848">
                        <path id="path2850" style="fill:#e1e1e1;fill-opacity:1;fill-rule:evenodd;stroke:none" d="m 0,0 c -0.291,0.115 -0.614,-0.049 -0.72,-0.367 -0.106,-0.317 0.045,-0.669 0.336,-0.784 0.292,-0.116 0.614,0.048 0.72,0.366 C 0.442,-0.467 0.292,-0.116 0,0"/>
                        </g>
                    </g>
                    </g>
                    <g id="g2852">
                    <g clip-path="url(#clipPath2858)" id="g2854">
                        <g transform="translate(499.5747,444.7434)" id="g2860">
                        <path id="path2862" style="fill:#f5f5f5;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -1.496,-2.226 c -12.608,-18.762 -14.27,-42.898 -3.593,-62.59 1.372,-2.531 2.928,-4.964 4.662,-7.272 12.489,-16.616 33.868,-26.205 54.811,-24.586 12.317,0.953 24.919,5.461 36.696,1.898 15.326,-4.636 23.263,-20.882 29.492,-35.513 6.229,-14.63 14.214,-30.867 29.561,-35.437 9.612,-2.862 20.202,-0.282 29.115,4.435 23.598,12.489 37.424,39.364 38.248,65.783 0.824,26.419 -9.902,52.107 -25.497,73.381 C 170.151,7.675 137.479,30.508 100.672,36.282 63.866,42.057 23.373,29.081 0,0"/>
                        </g>
                        <g transform="translate(166.0253,102.0789)" id="g2864">
                        <path id="path2866" style="fill:#f5f5f5;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,-36.316 -29.439,-65.755 -65.755,-65.755 -36.315,0 -65.755,29.439 -65.755,65.755 0,36.315 29.44,65.755 65.755,65.755 C -29.439,65.755 0,36.315 0,0"/>
                        </g>
                    </g>
                    </g>
                    <g id="g2868">
                    <g clip-path="url(#clipPath2874)" id="g2870">
                        <g transform="translate(399.875,368.8142)" id="g2876">
                        <path id="path2878" style="fill:#ececec;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -63.527,0 -115.025,-51.94 -115.025,-116.01 0,-64.071 51.498,-116.01 115.025,-116.01 63.526,0 115.025,51.939 115.025,116.01 C 115.025,-51.94 63.526,0 0,0"/>
                        </g>
                        <g transform="translate(399.875,368.8142)" id="g2880">
                        <path id="path2882" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,0 0.632,-0.002 1.866,-0.027 0.618,-0.013 1.385,-0.029 2.298,-0.048 0.914,-0.015 1.975,-0.033 3.175,-0.144 1.201,-0.089 2.544,-0.188 4.026,-0.299 1.479,-0.144 3.089,-0.377 4.837,-0.589 3.488,-0.481 7.487,-1.235 11.933,-2.321 1.117,-0.251 2.237,-0.619 3.402,-0.936 1.156,-0.351 2.367,-0.627 3.562,-1.063 1.203,-0.409 2.436,-0.828 3.698,-1.257 1.267,-0.414 2.514,-0.972 3.816,-1.469 5.164,-2.085 10.673,-4.66 16.241,-8.052 11.146,-6.7 22.817,-16.326 32.776,-29.463 4.993,-6.54 9.475,-13.979 13.18,-22.18 3.7,-8.196 6.675,-17.156 8.391,-26.714 1.755,-9.54 2.451,-19.641 1.661,-29.959 -0.299,-5.166 -1.128,-10.36 -2.148,-15.575 -0.596,-2.591 -1.147,-5.212 -1.93,-7.791 -0.674,-2.61 -1.597,-5.16 -2.454,-7.749 -1.9,-5.11 -4.069,-10.197 -6.696,-15.124 -2.654,-4.907 -5.607,-9.727 -8.983,-14.321 -3.398,-4.574 -7.131,-8.967 -11.195,-13.118 -4.115,-4.099 -8.551,-7.945 -13.282,-11.484 -4.722,-3.556 -9.823,-6.67 -15.122,-9.48 l -2.001,-1.034 c -0.665,-0.352 -1.337,-0.691 -2.028,-0.991 -1.37,-0.625 -2.743,-1.251 -4.118,-1.878 -1.405,-0.56 -2.811,-1.12 -4.221,-1.682 l -1.057,-0.421 -1.078,-0.368 -2.159,-0.737 -2.164,-0.736 -2.201,-0.631 c -1.474,-0.399 -2.927,-0.893 -4.429,-1.204 -1.493,-0.346 -2.988,-0.692 -4.486,-1.039 -1.514,-0.272 -3.029,-0.545 -4.548,-0.819 -6.093,-0.97 -12.297,-1.479 -18.545,-1.521 -6.25,0.041 -12.455,0.547 -18.551,1.516 -1.519,0.274 -3.035,0.547 -4.549,0.82 -1.499,0.346 -2.995,0.692 -4.489,1.037 -1.502,0.312 -2.956,0.803 -4.43,1.203 l -2.201,0.631 -2.165,0.736 -2.16,0.737 -1.078,0.368 -1.058,0.42 c -1.41,0.562 -2.818,1.122 -4.222,1.681 -1.376,0.628 -2.749,1.254 -4.12,1.879 -0.691,0.301 -1.364,0.638 -2.028,0.991 l -2.002,1.034 c -5.301,2.81 -10.404,5.923 -15.127,9.48 -4.733,3.539 -9.171,7.386 -13.286,11.486 -4.065,4.151 -7.8,8.544 -11.198,13.119 -3.377,4.595 -6.331,9.416 -8.986,14.324 -2.627,4.927 -4.796,10.015 -6.697,15.126 -0.857,2.589 -1.78,5.14 -2.454,7.75 -0.784,2.579 -1.335,5.201 -1.931,7.792 -1.019,5.216 -1.848,10.411 -2.148,15.577 -0.789,10.319 -0.092,20.421 1.663,29.962 1.717,9.559 4.693,18.519 8.393,26.715 3.706,8.201 8.19,15.639 13.182,22.179 9.961,13.136 21.632,22.761 32.778,29.46 5.567,3.391 11.076,5.966 16.24,8.05 1.301,0.496 2.548,1.055 3.816,1.468 1.261,0.429 2.494,0.848 3.697,1.257 1.195,0.436 2.406,0.713 3.562,1.063 1.165,0.317 2.285,0.685 3.401,0.936 4.446,1.086 8.444,1.84 11.932,2.321 1.748,0.211 3.357,0.444 4.836,0.589 1.481,0.11 2.824,0.209 4.026,0.299 1.199,0.11 2.26,0.128 3.174,0.143 0.913,0.019 1.68,0.035 2.298,0.048 C -0.632,-0.002 0,0 0,0 0,0 -0.632,-0.03 -1.865,-0.069 -2.482,-0.087 -3.249,-0.11 -4.161,-0.137 c -0.913,-0.022 -1.973,-0.047 -3.171,-0.164 -1.2,-0.095 -2.542,-0.201 -4.021,-0.318 -1.477,-0.151 -3.084,-0.39 -4.829,-0.608 -3.483,-0.493 -7.473,-1.258 -11.91,-2.355 -1.115,-0.252 -2.232,-0.623 -3.395,-0.943 -1.153,-0.353 -2.361,-0.632 -3.554,-1.069 -1.2,-0.412 -2.43,-0.833 -3.688,-1.264 -1.264,-0.415 -2.508,-0.976 -3.807,-1.474 -5.151,-2.092 -10.645,-4.672 -16.195,-8.065 -11.113,-6.705 -22.745,-16.325 -32.666,-29.439 -4.973,-6.529 -9.437,-13.953 -13.125,-22.135 -3.683,-8.177 -6.643,-17.114 -8.347,-26.646 -1.744,-9.515 -2.432,-19.587 -1.638,-29.874 0.301,-5.15 1.131,-10.328 2.15,-15.527 0.595,-2.583 1.146,-5.195 1.928,-7.766 0.673,-2.602 1.595,-5.143 2.45,-7.724 1.897,-5.093 4.061,-10.163 6.682,-15.073 2.648,-4.89 5.594,-9.694 8.961,-14.272 3.388,-4.559 7.112,-8.936 11.164,-13.072 4.103,-4.085 8.527,-7.917 13.244,-11.443 4.708,-3.544 9.794,-6.645 15.077,-9.444 l 1.995,-1.031 c 0.662,-0.352 1.332,-0.687 2.021,-0.987 1.366,-0.622 2.735,-1.246 4.106,-1.871 1.4,-0.557 2.802,-1.116 4.207,-1.675 l 1.055,-0.419 1.074,-0.366 2.152,-0.735 2.158,-0.732 2.193,-0.628 c 1.469,-0.399 2.918,-0.889 4.415,-1.199 1.488,-0.344 2.979,-0.689 4.473,-1.034 1.508,-0.271 3.019,-0.543 4.532,-0.816 6.075,-0.965 12.259,-1.469 18.487,-1.511 6.227,0.043 12.408,0.55 18.481,1.516 1.513,0.273 3.023,0.545 4.531,0.816 1.493,0.346 2.983,0.691 4.471,1.035 1.497,0.31 2.944,0.802 4.413,1.199 l 2.193,0.628 2.156,0.734 2.152,0.734 1.074,0.367 1.054,0.419 c 1.405,0.559 2.807,1.118 4.206,1.675 1.371,0.625 2.739,1.249 4.104,1.871 0.689,0.299 1.358,0.637 2.021,0.987 l 1.994,1.031 c 5.281,2.799 10.365,5.901 15.072,9.443 4.715,3.526 9.137,7.358 13.239,11.442 4.052,4.136 7.774,8.512 11.162,13.07 3.366,4.577 6.311,9.381 8.958,14.27 2.621,4.91 4.784,9.979 6.681,15.071 0.855,2.58 1.777,5.122 2.449,7.723 0.783,2.57 1.333,5.183 1.929,7.765 1.019,5.198 1.848,10.375 2.15,15.525 0.794,10.286 0.106,20.357 -1.637,29.871 -1.703,9.532 -4.662,18.468 -8.345,26.645 -3.687,8.182 -8.15,15.607 -13.123,22.136 -9.92,13.115 -21.551,22.736 -32.664,29.442 -5.551,3.394 -11.045,5.974 -16.197,8.067 -1.298,0.498 -2.542,1.058 -3.807,1.475 -1.258,0.431 -2.488,0.852 -3.688,1.263 -1.193,0.438 -2.401,0.717 -3.555,1.07 -1.163,0.32 -2.28,0.69 -3.394,0.943 -4.438,1.097 -8.429,1.862 -11.912,2.356 -1.745,0.217 -3.353,0.457 -4.83,0.608 -1.48,0.117 -2.821,0.223 -4.021,0.318 C 6.135,-0.184 5.075,-0.159 4.162,-0.137 3.249,-0.11 2.483,-0.087 1.865,-0.069 0.632,-0.03 0,0 0,0"/>
                        </g>
                        <g transform="translate(443.325,324.5412)" id="g2884">
                        <path id="path2886" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -1.078,0.831 -2.156,1.663 -3.234,2.494 -0.353,0.272 -0.717,0.559 -0.913,0.961 -0.214,0.44 -0.194,0.954 -0.271,1.438 -0.285,1.791 -2.131,3.174 -3.914,2.931 -0.691,1.773 -0.855,3.714 -1.481,5.511 -0.625,1.797 -1.916,3.564 -3.777,3.89 -0.726,0.127 -1.499,0.027 -2.179,0.314 -0.748,0.315 -1.239,1.037 -1.885,1.531 -2.167,1.66 -5.951,0.755 -7.325,3.123 -0.323,0.556 -0.445,1.222 -0.826,1.739 -0.476,0.646 -1.272,0.951 -2.024,1.224 -2.715,0.987 -5.736,1.974 -8.41,0.877 -0.951,-0.391 -1.816,-1.036 -2.831,-1.201 -1.134,-0.185 -2.361,0.249 -3.413,-0.217 -0.629,-0.278 -1.15,-0.864 -1.836,-0.897 -0.484,-0.023 -0.929,0.24 -1.351,0.48 -2.651,1.51 -5.817,2.435 -8.768,1.976 0.354,0.237 0.709,0.48 1.11,0.62 0.303,0.106 0.623,0.15 0.933,0.233 0.761,0.204 1.454,0.653 1.955,1.265 -0.063,0.114 -0.126,0.229 -0.189,0.344 -0.406,-0.275 -0.954,-0.019 -1.336,0.288 -0.382,0.307 -0.781,0.689 -1.269,0.666 -0.245,-0.012 -0.471,-0.128 -0.71,-0.182 -1.012,-0.232 -1.968,0.645 -3.006,0.657 -0.341,0.004 -0.676,-0.087 -1.002,-0.191 -1.471,-0.471 -2.849,-1.235 -4.03,-2.236 -0.133,-0.112 -0.266,-0.232 -0.347,-0.386 -0.109,-0.207 -0.112,-0.455 -0.08,-0.687 0.11,-0.798 0.631,-1.527 1.347,-1.886 0.772,-0.388 1.686,-0.343 2.534,-0.186 0.083,0.016 0.163,0.041 0.245,0.059 -0.555,-0.455 -1.027,-1.002 -1.344,-1.647 -0.602,-1.221 -0.56,-2.811 0.318,-3.848 -1,-0.672 -2.088,0.9 -3.284,1.013 -0.879,0.083 -1.606,-0.639 -2.193,-1.302 -0.805,-0.908 -1.609,-1.815 -2.413,-2.723 -0.949,0.269 -1.899,0.537 -2.848,0.805 -0.457,0.13 -0.951,0.258 -1.395,0.089 -0.446,-0.17 -0.734,-0.6 -1.099,-0.91 -0.989,-0.84 -2.666,-0.651 -3.446,0.389 -0.088,0.118 -0.159,0.246 -0.22,0.377 0.396,0.228 0.738,0.522 0.87,0.951 -0.126,0.419 -0.593,0.639 -1.033,0.62 0.124,0.6 0.445,1.158 0.95,1.503 0.683,0.466 1.662,0.649 1.984,1.403 0.512,0.335 1.025,0.671 1.537,1.006 0.182,0.12 0.372,0.246 0.48,0.437 0.103,0.18 0.101,0.43 -0.042,0.573 0.94,0.976 -0.214,3.394 0.804,4.622 0.667,0.803 1.944,0.662 2.885,0.218 0.942,-0.443 1.819,-1.124 2.855,-1.202 1.564,-0.118 2.844,1.141 4.036,2.168 1.193,1.027 2.69,1.764 4.233,1.163 -0.427,0.166 0.811,2.132 1.541,2.069 0.438,-0.038 0.477,-0.731 0.81,-0.912 2.125,-1.162 4.811,0.372 7.125,0.637 2.936,0.335 5.922,0.226 8.824,-0.339 0.189,0.768 -0.668,1.345 -1.386,1.663 -2.587,1.142 -5.196,2.292 -7.959,2.881 -4.901,1.045 -10.094,0.245 -14.678,-1.791 -1.134,-0.504 -2.301,-1.095 -3.538,-1.022 -0.606,0.036 -1.197,0.232 -1.804,0.233 -1.077,0 -1.999,-0.595 -2.808,-1.355 -0.885,0.033 -1.761,-0.326 -2.531,-0.785 -0.345,-0.205 -0.677,-0.431 -1,-0.668 0.213,-0.289 0.66,-0.112 0.975,0.058 0.557,0.301 1.165,0.502 1.79,0.603 -0.125,-0.14 -0.247,-0.279 -0.366,-0.418 -0.739,-0.861 -1.799,-0.643 -2.92,-0.775 -0.386,-0.045 -0.783,-0.051 -1.151,-0.177 -0.394,-0.135 -0.72,-0.396 -1.012,-0.701 0.362,0.427 0.725,0.854 1.087,1.281 0.251,0.296 0.519,0.649 0.454,1.033 1.108,0.018 2.191,0.609 2.811,1.535 0.105,0.157 0.206,0.331 0.374,0.416 0.318,0.161 0.721,-0.067 1.052,0.065 0.278,0.111 0.403,0.427 0.557,0.685 0.398,0.67 1.122,1.061 1.81,1.419 1.134,0.591 2.268,1.181 3.403,1.772 -0.448,0.065 -0.895,0.13 -1.342,0.195 -0.383,-0.014 -0.683,-0.056 -0.96,-0.116 l -0.105,0.003 c -3.743,-0.213 -7.439,-1.231 -10.77,-2.966 -0.285,-0.148 -0.569,-0.302 -0.871,-0.411 -0.284,-0.103 -0.581,-0.164 -0.874,-0.235 -1.871,-0.453 -3.619,-1.306 -5.351,-2.153 -3.242,-1.586 -6.485,-3.172 -9.728,-4.759 -0.347,-0.17 -0.757,-0.466 -0.659,-0.842 0.672,-0.073 1.343,-0.146 2.015,-0.219 -1.485,-0.361 -2.892,-1.044 -4.097,-1.99 -0.384,-0.3 -0.77,-0.638 -1.246,-0.733 -0.274,-0.055 -0.56,-0.024 -0.834,-0.079 -0.39,-0.078 -0.724,-0.321 -1.044,-0.558 -3.362,-2.485 -6.723,-4.969 -10.085,-7.453 -1.903,-1.407 -3.821,-2.826 -5.403,-4.591 -1.803,-2.011 -4.104,-3.74 -5.562,-6.019 -1.193,-1.865 -1.941,-4.005 -3.255,-5.786 0.939,0.739 1.877,1.482 2.813,2.227 0.43,0.343 0.864,0.689 1.22,1.11 0.292,0.344 0.527,0.732 0.782,1.105 0.647,0.949 1.42,1.804 2.191,2.656 0.364,0.402 0.735,0.81 1.197,1.092 0.296,0.18 0.624,0.305 0.905,0.509 0.353,0.257 0.612,0.625 0.941,0.913 0.33,0.289 0.787,0.501 1.197,0.352 -0.341,-0.61 -0.712,-1.202 -1.112,-1.775 -0.137,-0.197 -0.286,-0.398 -0.498,-0.51 -0.222,-0.117 -0.484,-0.118 -0.729,-0.173 -1.059,-0.235 -1.63,-1.368 -2.056,-2.374 0.424,0.032 0.848,0.063 1.272,0.094 0.115,-0.211 0.005,-0.47 -0.104,-0.684 -1.076,-2.112 -2.166,-4.244 -3.69,-6.054 0.992,1.285 1.619,2.853 1.788,4.472 -1.554,-0.908 -2.651,-2.415 -3.852,-3.762 -0.771,-0.866 -1.699,-1.728 -2.849,-1.836 0.022,0.506 0.18,1.005 0.453,1.43 -1.178,0.048 -1.963,-1.172 -2.496,-2.234 -1.075,-2.143 -2.151,-4.287 -3.227,-6.432 -0.689,-1.373 -1.378,-2.747 -2.067,-4.12 -0.537,-1.071 -1.074,-2.141 -1.612,-3.212 -0.204,-0.408 -0.41,-0.895 -0.203,-1.301 1.565,1.538 2.952,3.261 4.123,5.123 0.205,0.325 0.405,0.658 0.67,0.937 0.279,0.295 0.622,0.521 0.924,0.792 1.174,1.056 1.689,2.763 3.002,3.638 -0.078,-1.286 -1.216,-2.194 -2.077,-3.146 -0.886,-0.98 -1.551,-2.164 -1.928,-3.436 -0.123,-0.414 -0.218,-0.844 -0.438,-1.215 -0.221,-0.372 -0.555,-0.665 -0.781,-1.033 -0.483,-0.786 -0.41,-1.782 -0.32,-2.702 0.005,-0.05 0.011,-0.103 0.041,-0.144 0.082,-0.106 0.249,-0.042 0.362,0.029 0.817,0.52 1.634,1.039 2.451,1.559 -0.142,-0.743 0.119,-1.495 0.285,-2.233 0.165,-0.739 0.212,-1.592 -0.27,-2.172 -1.348,-1.625 -2.353,-2.548 -2.524,-4.817 -0.116,-1.542 -0.226,-3.297 -1.424,-4.262 -0.259,-0.208 -0.577,-0.394 -0.67,-0.714 -0.089,-0.308 0.065,-0.627 0.13,-0.941 0.248,-1.187 -0.752,-2.213 -1.464,-3.191 -0.203,-0.279 -0.392,-0.583 -0.452,-0.924 -0.053,-0.304 0,-0.616 0.019,-0.924 0.045,-0.715 -0.1,-1.44 -0.414,-2.082 0.525,-0.312 1.05,-0.624 1.576,-0.936 0.255,-0.151 0.518,-0.31 0.69,-0.554 0.191,-0.274 0.245,-0.622 0.402,-0.917 0.24,-0.45 0.717,-0.767 0.843,-1.262 0.063,-0.247 0.028,-0.507 0.007,-0.762 -0.111,-1.344 0.188,-2.719 0.847,-3.893 0.204,-0.364 0.446,-0.719 0.538,-1.128 0.204,-0.916 -0.39,-1.911 -0.054,-2.788 -0.325,-0.048 -0.152,-0.603 0.082,-0.834 0.235,-0.232 0.594,-0.261 0.921,-0.29 0.327,-0.03 0.691,-0.095 0.885,-0.362 0.359,-0.497 -0.143,-1.14 -0.325,-1.727 -0.179,-0.574 -0.008,-1.243 0.423,-1.658 0.234,-0.226 0.568,-0.45 0.529,-0.774 -0.044,-0.372 -0.512,-0.478 -0.843,-0.648 -0.959,-0.493 -0.944,-1.908 -0.515,-2.904 0.43,-0.996 1.141,-1.933 1.126,-3.019 0.89,-0.087 1.7,-0.744 1.974,-1.604 0.09,-0.279 0.165,-0.621 0.439,-0.72 0.338,-0.123 0.653,0.241 0.778,0.581 0.44,1.197 0.039,2.644 0.705,3.73 0.307,0.5 0.802,0.85 1.185,1.293 0.383,0.444 0.658,1.083 0.407,1.614 -0.151,0.319 -0.462,0.533 -0.633,0.84 -0.171,0.308 -0.089,0.817 0.259,0.851 0.495,-0.359 0.863,-0.891 1.027,-1.483 0.448,0.001 0.896,0.001 1.343,0.002 -0.003,-0.708 -0.007,-1.416 -0.011,-2.124 -0.799,-0.592 -1.162,-1.719 -0.861,-2.672 0.099,-0.314 0.281,-0.626 0.578,-0.765 0.202,-0.094 0.434,-0.099 0.641,-0.181 1.135,-0.455 0.704,-2.711 1.905,-2.938 0.485,-0.091 0.961,0.26 1.453,0.221 0.383,-0.03 0.85,-0.263 1.093,0.037 0.167,0.207 0.07,0.511 -0.01,0.766 -0.247,0.793 -0.243,1.665 0.013,2.456 -0.449,1.049 -0.739,2.168 -0.855,3.304 0.113,0.061 0.227,0.122 0.34,0.183 0.567,-0.48 1.152,-0.983 1.453,-1.665 0.195,-0.443 0.261,-0.94 0.496,-1.363 0.236,-0.422 0.743,-0.763 1.186,-0.576 0.412,0.174 0.548,0.702 0.52,1.151 -0.027,0.45 -0.163,0.902 -0.072,1.344 0.18,0.878 1.133,1.323 1.967,1.634 0.096,-0.307 -0.291,-0.513 -0.543,-0.71 -0.571,-0.446 -0.592,-1.298 -0.509,-2.022 0.126,-1.115 0.397,-2.263 1.118,-3.117 0.721,-0.854 1.999,-1.313 2.987,-0.8 1.227,0.637 1.427,2.292 1.448,3.683 0.384,0.2 0.953,0.351 1.166,-0.029 0.149,-0.266 -0.016,-0.598 0.009,-0.904 0.045,-0.567 0.722,-0.923 0.77,-1.49 0.028,-0.322 -0.157,-0.619 -0.325,-0.894 -0.454,-0.744 -0.751,-1.889 -0.014,-2.349 0.191,-0.12 0.419,-0.161 0.635,-0.229 1.041,-0.327 1.814,-1.375 1.827,-2.474 0.382,-0.094 0.673,-0.479 0.661,-0.875 -0.012,-0.397 -0.326,-0.763 -0.714,-0.832 -0.171,-0.031 -0.368,-0.017 -0.494,-0.138 -0.274,-0.264 0.094,-0.833 -0.195,-1.08 -0.094,-0.081 -0.228,-0.091 -0.345,-0.133 -0.618,-0.224 -0.53,-1.11 -0.467,-1.769 0.142,-1.493 -0.537,-3.039 -1.728,-3.936 -0.849,-0.64 -2.114,-0.918 -2.942,-0.25 -0.391,0.315 -0.621,0.789 -0.945,1.174 -0.325,0.385 -0.843,0.698 -1.312,0.521 -0.2,-0.076 -0.359,-0.229 -0.512,-0.379 -0.947,-0.925 -1.941,-1.933 -2.198,-3.237 -0.086,-0.437 -0.088,-0.9 -0.283,-1.299 -0.243,-0.496 -0.741,-0.806 -1.095,-1.228 -0.443,-0.528 -0.65,-1.249 -0.558,-1.935 0.373,-0.451 -0.179,-1.056 -0.423,-1.588 -0.245,-0.533 -0.627,-0.998 -0.833,-1.547 -0.431,-1.145 -0.029,-2.421 0.374,-3.577 0.534,-1.538 1.118,-3.149 2.343,-4.211 0.315,-0.273 0.665,-0.501 1.011,-0.732 1.39,-0.929 2.795,-1.971 3.549,-3.471 0.845,-0.223 1.825,0.515 2.562,0.044 0.278,-0.178 0.438,-0.488 0.586,-0.784 0.401,-0.803 0.803,-1.606 1.204,-2.409 0.321,-0.641 0.666,-1.311 1.262,-1.704 0.596,-0.393 1.519,-0.377 1.907,0.224 0.474,0.735 -0.111,1.751 0.178,2.578 0.387,1.111 2.142,1.382 2.283,2.551 0.06,0.496 -0.186,1.101 0.178,1.44 0.148,0.138 0.358,0.18 0.545,0.259 0.623,0.262 0.989,1.029 0.803,1.684 1.438,0.114 3.199,0.066 3.904,-1.203 0.154,-0.276 0.449,-0.651 0.683,-0.44 -0.202,1.58 -0.404,3.192 -0.099,4.756 0.085,0.437 0.209,0.885 0.117,1.321 -0.274,1.283 -2.11,1.543 -2.717,2.705 -0.709,1.358 0.586,3.261 -0.345,4.475 -0.573,0.746 -1.775,0.858 -2.194,1.701 -0.144,0.29 -0.173,0.635 -0.36,0.898 -0.191,0.268 -0.512,0.403 -0.78,0.593 -1.039,0.737 -1.209,2.22 -1.084,3.496 0.124,1.275 0.441,2.598 0.023,3.808 -0.155,0.448 -0.409,0.87 -0.454,1.342 -0.079,0.829 0.638,1.659 1.464,1.653 0.825,-0.006 1.539,-0.892 1.338,-1.7 -0.136,-0.545 -0.588,-0.939 -0.933,-1.381 -0.345,-0.442 -0.589,-1.086 -0.271,-1.548 0.846,-0.096 1.184,-1.44 0.486,-1.932 -0.203,-0.143 -0.453,-0.211 -0.647,-0.368 -0.506,-0.407 -0.424,-1.235 -0.07,-1.781 0.354,-0.546 0.904,-0.932 1.305,-1.445 0.211,-0.271 0.398,-0.592 0.713,-0.728 0.167,-0.073 0.353,-0.084 0.535,-0.094 0.486,-0.028 0.972,-0.056 1.457,-0.083 0.185,-0.011 0.373,-0.021 0.55,0.031 0.287,0.085 0.502,0.319 0.723,0.523 0.768,0.713 1.742,1.151 2.696,1.577 0.336,0.15 0.687,0.302 1.053,0.284 0.854,-0.042 1.367,-0.93 1.94,-1.571 0.841,-0.94 2.039,-1.458 3.197,-1.948 0.55,2.04 1.091,4.258 0.297,6.214 -0.626,1.543 -1.976,2.64 -3.046,3.91 -1.039,1.232 -1.865,2.889 -1.374,4.429 0.273,0.141 0.545,0.283 0.818,0.424 1.171,-0.502 2.112,-1.522 2.524,-2.736 0.316,-0.931 0.327,-1.938 0.533,-2.901 0.305,-1.43 1.05,-2.759 2.096,-3.773 -0.021,1.13 -0.042,2.261 -0.062,3.391 -0.006,0.326 0.005,0.693 0.243,0.913 0.23,0.213 0.581,0.201 0.89,0.165 0.933,-0.109 1.853,-0.326 2.737,-0.644 0.264,-0.095 0.536,-0.206 0.721,-0.419 0.236,-0.272 0.287,-0.654 0.328,-1.013 0.156,-1.375 0.178,-3.057 -0.98,-3.8 -0.849,-0.546 -2.124,-0.395 -2.71,-1.221 -0.396,-0.557 -0.325,-1.401 -0.843,-1.846 -0.289,-0.249 -0.722,-0.327 -0.93,-0.649 -0.322,-0.502 0.13,-1.173 -0.002,-1.756 -0.085,-0.374 -0.41,-0.727 -0.282,-1.09 0.077,-0.219 0.296,-0.346 0.469,-0.499 0.811,-0.718 0.635,-2.015 0.39,-3.076 -0.201,-0.868 -0.401,-1.736 -0.602,-2.605 0.168,1.76 -0.324,3.576 -1.357,5.004 -0.93,-0.217 -1.872,0.209 -2.789,0.476 -0.917,0.268 -2.064,0.31 -2.662,-0.44 -0.498,-0.626 -0.393,-1.54 -0.144,-2.302 0.248,-0.763 0.618,-1.519 0.569,-2.32 -0.06,-0.978 -0.723,-2.028 -0.201,-2.853 0.388,-0.167 0.776,-0.334 1.163,-0.501 0.622,-0.268 1.359,-0.972 0.903,-1.476 -0.401,-0.443 -1.481,-0.269 -1.408,-0.865 0.019,-0.148 0.126,-0.268 0.229,-0.377 0.878,-0.928 1.871,-2.136 1.434,-3.342 0.674,0.186 1.372,-0.17 1.952,-0.564 1.497,-1.018 2.764,-2.375 3.681,-3.943 0.284,-0.485 0.534,-0.989 0.826,-1.468 0.655,-0.066 0.838,0.883 0.763,1.542 -0.114,1 -0.229,2 -0.343,3 -0.087,0.759 -0.175,1.523 -0.393,2.256 -0.309,1.036 -0.871,1.977 -1.233,2.996 -0.363,1.018 -0.508,2.199 0.007,3.148 1.267,-0.793 2.162,-2.164 2.383,-3.651 0.079,-0.529 0.077,-1.068 0.16,-1.597 0.263,-1.656 1.351,-3.1 1.549,-4.766 0.068,-0.571 0.037,-1.184 0.331,-1.677 0.179,-0.303 0.463,-0.525 0.739,-0.74 1.069,-0.831 2.138,-1.663 3.208,-2.494 0.269,-0.209 0.457,-0.663 0.765,-0.519 -0.416,1.417 -0.833,2.833 -1.249,4.25 0.875,-0.742 1.75,-1.485 2.625,-2.227 -0.127,0.686 -0.035,1.442 0.392,1.992 0.426,0.549 1.231,0.82 1.849,0.506 0.618,-0.313 0.851,-1.266 0.359,-1.756 1.31,1.208 3.429,1.411 4.941,0.473 0.389,-0.241 0.76,-0.556 1.213,-0.611 0.828,-0.1 1.678,0.7 2.426,0.326 0.767,-0.384 0.908,-1.804 1.76,-1.721 0.505,0.049 0.893,0.685 1.38,0.543 0.06,-0.413 0.121,-0.826 0.181,-1.238 1.344,0.136 3.02,0.566 3.241,1.911 0.039,0.241 0.024,0.493 0.105,0.722 0.118,0.329 0.411,0.554 0.682,0.772 1.05,0.847 1.99,1.941 2.261,3.27 0.27,1.329 -0.32,2.899 -1.575,3.389 -0.326,0.29 -0.009,0.825 0.33,1.099 0.34,0.274 0.754,0.67 0.57,1.068 -0.112,0.242 -0.404,0.339 -0.57,0.548 -0.444,0.555 0.217,1.497 -0.217,2.06 -0.196,0.255 -0.544,0.322 -0.82,0.487 -0.808,0.484 -0.8,1.753 -0.227,2.505 0.572,0.752 1.503,1.114 2.386,1.441 0.864,0.321 1.728,0.641 2.592,0.961 0.676,0.251 1.473,0.662 1.487,1.389 0.011,0.517 -0.366,1.159 0.042,1.473 0.233,0.179 0.567,0.086 0.852,0.155 0.688,0.165 0.791,1.096 0.745,1.808 -0.034,0.516 -0.068,1.033 -0.102,1.549 -0.015,0.225 -0.029,0.456 0.046,0.668 0.145,0.416 0.576,0.64 0.918,0.913 0.342,0.273 0.632,0.768 0.388,1.133 -1.169,-0.051 -2.337,-0.102 -3.506,-0.153 -0.517,-0.022 -1.068,-0.037 -1.514,0.229 -0.446,0.266 -0.699,0.925 -0.367,1.326 -0.283,0.097 -0.566,0.193 -0.848,0.29 0.017,0.662 0.035,1.325 0.053,1.987 0.005,0.191 0.012,0.389 0.101,0.557 0.096,0.183 0.274,0.304 0.445,0.417 0.551,0.365 1.102,0.731 1.653,1.096 -0.109,-0.605 0.232,-1.262 0.787,-1.517 0.507,-0.034 0.601,0.752 0.357,1.202 -0.244,0.45 -0.637,0.942 -0.429,1.41 0.076,0.169 0.223,0.297 0.31,0.461 0.436,0.825 -0.83,1.739 -0.573,2.636 -0.955,0.252 -1.909,0.505 -2.863,0.757 -0.219,0.361 -0.471,0.7 -0.746,1.019 -2.704,-0.606 -5.512,-0.936 -8.397,-0.936 -0.227,0 -0.451,0.013 -0.678,0.017 -0.068,-0.731 0.017,-1.523 0.139,-2.237 0.456,0.383 0.912,0.766 1.368,1.149 -0.108,-1.431 0.044,-2.881 0.445,-4.258 0.104,-0.358 0.219,-0.77 0.02,-1.085 -0.191,-0.3 -0.595,-0.386 -0.829,-0.652 -0.701,-0.795 0.658,-2.099 0.173,-3.043 -1.051,-0.041 -1.93,1.471 -2.863,0.981 -0.219,-0.115 -0.384,-0.332 -0.621,-0.404 -0.527,-0.16 -0.969,0.506 -0.926,1.06 0.044,0.554 0.355,1.056 0.42,1.607 0.094,0.81 -0.349,1.574 -0.521,2.371 -0.163,0.757 -0.082,1.565 -0.354,2.29 -0.272,0.724 -1.135,1.329 -1.794,0.932 -0.005,0.678 -0.261,1.337 -0.676,1.869 -6.131,1.084 -11.763,3.622 -16.53,7.26 -0.08,-0.056 -0.162,-0.11 -0.232,-0.18 -0.654,-0.659 -0.588,-1.72 -0.593,-2.652 -0.004,-0.932 -0.278,-2.06 -1.166,-2.321 -0.774,0.6 -0.632,1.944 -1.419,2.526 -0.371,0.274 -0.871,0.312 -1.25,0.576 -0.604,0.42 -0.716,1.258 -0.774,1.995 -0.095,1.199 -0.121,2.582 0.763,3.388 0.148,0.136 0.321,0.248 0.5,0.353 -6.882,7.02 27.426,3.027 27.426,13.68 0,7.371 -1.706,11.035 -3.084,12.669 1.67,-0.584 4.727,-1.173 9.901,-1.173 12.949,0 17.552,34.56 24.538,24.681 0.711,0.719 1.783,1.081 2.772,0.863 3.099,-0.682 3.336,-5.4 6.034,-7.081 1.203,0.025 2.405,0.051 3.608,0.076 0.574,-1.118 1.929,-1.666 3.174,-1.566 1.714,0.139 3.316,1.484 3.584,3.198 0.267,1.713 -0.99,3.576 -2.697,3.787 -0.533,0.066 -1.088,-0.013 -1.6,0.15 -0.512,0.164 -0.974,0.713 -0.778,1.217 0.891,1.221 2.85,0.766 4.021,-0.185 1.17,-0.951 2.113,-2.299 3.554,-2.731 0.778,2.099 4.031,2.643 4.366,4.858 0.085,0.563 -0.046,1.165 0.172,1.689 0.476,1.142 2.308,1.296 2.602,2.498 0.124,0.509 -0.088,1.033 -0.152,1.553 C -1.46,-1.626 -0.911,-0.524 0,0"/>
                        </g>
                        <g transform="translate(418.2949,306.9925)" id="g2888">
                        <path id="path2890" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.468,0.364 -1.016,0.597 -1.584,0.794 1.093,-2.297 1.966,-4.72 2.597,-7.24 0.32,0.218 0.626,0.464 0.908,0.758 C 1.842,-3.617 1.627,-1.266 0,0"/>
                        </g>
                        <g transform="translate(351.5161,302.1793)" id="g2892">
                        <path id="path2894" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.07,-0.03 0.144,-0.057 0.22,-0.049 0.3,-0.04 0.369,0.007 0.446,0.032 0.713,0.116 0.975,-0.089 1.193,-0.266 1.411,-0.443 1.719,-0.609 1.953,-0.454 2.177,-0.306 2.163,0.034 2.061,0.283 1.959,0.533 1.794,0.771 1.798,1.041 1.799,1.165 1.837,1.285 1.855,1.407 1.917,1.845 1.692,2.311 1.311,2.53 0.93,2.749 0.418,2.709 0.076,2.432 0.239,2.219 0.407,1.992 0.437,1.725 0.467,1.459 0.298,1.15 0.032,1.134 -0.161,1.123 -0.328,1.261 -0.515,1.309 -0.79,1.378 -1.103,1.221 -1.213,0.957 -0.902,0.538 -0.478,0.204 0,0"/>
                        </g>
                        <g transform="translate(420.1419,348.3884)" id="g2896">
                        <path id="path2898" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 1.137,-1.932 3.891,-2.672 5.83,-1.568 0.111,0.063 0.221,0.133 0.304,0.23 C 6.525,-0.883 6.14,-0.192 5.759,0.273 3.955,1.15 1.715,1.044 0,0"/>
                        </g>
                        <g transform="translate(409.2613,355.9767)" id="g2900">
                        <path id="path2902" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.985,-0.12 1.97,-0.24 2.955,-0.36 3.45,-0.42 4.118,-0.802 3.854,-1.23 3.158,-1.094 2.585,-1.957 2.753,-2.653 c 0.168,-0.695 0.804,-1.171 1.449,-1.47 4.225,-1.959 9.335,1.34 13.757,-0.112 2.355,-0.773 4.137,-2.792 6.467,-3.639 0.957,-0.348 2.208,-0.743 2.259,-1.768 0.013,-0.262 -0.067,-0.521 -0.063,-0.784 0.012,-0.807 0.81,-1.404 1.598,-1.54 0.789,-0.135 1.593,0.053 2.391,0.097 1.655,0.093 3.337,-0.458 4.621,-1.515 0.357,-0.317 -0.249,-0.769 -0.585,-1.109 -0.751,-0.761 0.094,-2.163 1.142,-2.349 1.049,-0.186 2.071,0.347 3.069,0.721 1.849,0.693 3.944,0.854 5.789,0.152 1.846,-0.702 3.382,-2.349 3.684,-4.315 0.047,-0.305 0.051,-0.654 -0.16,-0.876 -0.175,-0.185 -0.45,-0.227 -0.702,-0.242 -2.432,-0.149 -4.881,1.357 -5.862,3.606 -0.118,0.268 -0.232,0.566 -0.482,0.715 -0.128,0.077 -0.278,0.105 -0.426,0.111 -1.46,0.058 -2.19,-2.03 -1.475,-3.315 0.715,-1.285 2.198,-1.886 3.569,-2.395 1.626,-0.602 3.264,-1.209 4.974,-1.481 2.085,-0.333 4.213,-0.16 6.318,0.014 3.84,0.316 7.702,0.637 11.436,1.596 -0.579,0.802 -1.158,1.605 -1.737,2.408 -0.935,1.297 -1.91,2.632 -3.286,3.436 -2.662,1.556 -6.325,0.843 -8.703,2.812 -0.688,0.57 -1.23,1.343 -2.033,1.734 -0.583,0.284 -1.247,0.336 -1.893,0.374 -3.127,0.184 -6.266,0.149 -9.388,-0.107 -1.061,-0.087 -2.185,-0.187 -3.137,0.292 -1.636,0.823 -2.074,2.936 -3.182,4.402 -0.909,1.202 -2.271,1.955 -3.59,2.672 -0.753,0.409 -1.504,0.818 -2.257,1.227 -0.481,0.261 -0.968,0.525 -1.495,0.672 -1.072,0.298 -2.223,0.091 -3.317,0.296 -1.02,0.192 -1.938,0.731 -2.833,1.262 -1.739,1.032 -3.478,2.064 -5.217,3.096 C 12.892,2.358 12.307,2.698 11.659,2.761 10.288,2.893 8.949,1.757 7.626,2.144 7.148,2.284 6.748,2.609 6.326,2.875 4.041,4.314 0.783,3.915 -1.094,1.966 -1.344,1.707 -1.583,1.387 -1.563,1.026 -1.525,0.343 -0.673,0.082 0,0"/>
                        </g>
                        <g transform="translate(506.2693,220.6746)" id="g2904">
                        <path id="path2906" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.342,0.861 -0.697,1.742 -1.313,2.43 -0.562,0.628 -1.305,1.054 -1.988,1.544 -2.216,1.587 -3.882,3.94 -4.651,6.57 0.897,0.473 1.299,1.541 1.511,2.539 0.449,2.112 0.604,5.614 -0.118,8.49 -0.788,3.141 -2.621,5.533 -6.259,4.544 -0.41,-0.112 -0.826,-0.244 -1.25,-0.215 -1.655,0.114 -2.977,2.564 -4.415,1.729 -1.26,0.589 -0.099,2.722 -0.869,3.887 -0.346,0.524 -1.089,0.86 -1.062,1.489 0.015,0.357 0.293,0.641 0.425,0.972 0.348,0.873 -0.459,1.876 -1.38,2.024 -0.921,0.148 -1.832,-0.316 -2.577,-0.882 -0.745,-0.566 -1.413,-1.253 -2.25,-1.668 1.637,-1.732 2.352,-4.303 1.846,-6.641 -1.597,-0.091 -3.348,-0.136 -4.615,0.848 -0.29,0.226 -0.56,0.509 -0.917,0.595 -0.307,0.075 -0.629,-0.009 -0.926,-0.119 -1.758,-0.649 -3.064,-2.128 -4.292,-3.552 -0.096,-0.11 -0.189,-0.225 -0.278,-0.342 -0.764,1.667 -2.025,3.103 -3.586,4.051 -1.199,-0.154 -1.74,-1.671 -1.55,-2.875 0.189,-1.204 0.833,-2.309 0.95,-3.523 -0.517,-1.384 -2.968,-0.221 -3.955,-1.315 -0.503,-0.557 -0.353,-1.461 0.033,-2.106 0.387,-0.645 0.966,-1.159 1.329,-1.817 -0.938,-1.516 -1.877,-3.032 -2.816,-4.548 -0.188,0.636 -0.484,1.376 -1.129,1.508 -0.878,0.179 -1.458,-0.898 -1.639,-1.784 -0.18,-0.885 -0.458,-1.99 -1.34,-2.154 0.358,-1.124 2.21,-0.464 3.116,-1.21 0.69,-0.568 0.521,-1.641 0.582,-2.537 0.06,-0.895 0.955,-1.948 1.667,-1.408 0.318,0.241 0.388,0.685 0.447,1.083 0.445,3.008 1.695,5.891 3.581,8.264 0.531,0.669 1.143,1.379 1.147,2.236 0.003,0.731 -0.448,1.479 -0.177,2.158 0.378,0.946 1.672,0.861 2.635,1.252 -0.203,-0.403 -0.458,-0.78 -0.77,-1.105 -0.522,-0.541 -1.201,-0.99 -1.435,-1.707 -0.276,-0.842 0.147,-1.845 -0.292,-2.613 -0.225,-0.393 -0.631,-0.636 -0.96,-0.946 -0.961,-0.908 -1.204,-2.328 -1.394,-3.641 -0.394,-2.727 -0.77,-5.609 0.271,-8.157 0.558,-1.364 1.507,-2.578 1.787,-4.027 -0.758,-0.589 -1.842,0.035 -2.528,0.708 -0.686,0.674 -1.524,1.484 -2.447,1.228 -0.716,-0.198 -1.341,-1.02 -2.024,-0.728 0.504,1.955 -0.512,4.199 -2.307,5.096 -0.448,0.179 -0.744,0.683 -0.686,1.165 -1.04,0.032 -1.515,-1.27 -1.721,-2.299 -0.205,-1.029 -0.804,-2.317 -1.831,-2.149 -0.346,0.057 -0.659,0.288 -1.008,0.271 -0.782,-0.036 -1.013,-1.156 -1.702,-1.53 -0.559,-0.303 -1.294,-0.046 -1.854,-0.347 -0.429,-0.231 -0.644,-0.731 -1.025,-1.035 -0.935,-0.745 -2.28,-0.035 -3.255,0.656 -0.975,0.69 -2.365,1.351 -3.25,0.547 -0.711,-0.645 -0.572,-1.839 -1.132,-2.622 -0.692,-0.968 -2.354,-1.199 -2.515,-2.382 -0.72,0.689 -2.024,0.595 -2.64,-0.19 0.022,-1.349 0.457,-2.688 1.23,-3.789 -0.723,-0.785 -1.623,-1.403 -2.612,-1.793 0.42,-1.091 0.949,-2.14 1.576,-3.125 -0.961,-0.62 -0.673,-2.287 -1.595,-2.966 -0.538,-0.396 -1.277,-0.294 -1.926,-0.443 -0.65,-0.149 -1.294,-0.906 -0.879,-1.431 -0.113,-0.924 -1.694,-1.463 -2.281,-0.744 -0.588,0.719 -0.775,1.737 -1.469,2.352 -1.022,0.906 -2.634,0.543 -3.885,1.083 -0.387,0.167 -0.74,0.422 -1.149,0.525 -1.306,0.328 -2.491,-1.069 -2.625,-2.42 -0.134,-1.351 0.396,-2.667 0.622,-4.006 0.226,-1.338 0.025,-2.946 -1.116,-3.666 -0.568,-0.36 -1.314,-0.456 -1.748,-0.972 -0.882,-1.049 0.25,-2.552 0.488,-3.906 0.162,-0.918 -0.119,-1.85 -0.398,-2.74 -0.469,-1.496 -1.366,-3.307 -2.918,-3.198 -1.225,0.087 -1.98,1.375 -2.386,2.544 -0.406,1.169 -0.777,2.506 -1.849,3.112 -1.949,1.101 -4.415,-1.103 -6.532,-0.384 0.17,-0.476 0.34,-0.951 0.51,-1.426 -0.974,-0.235 -1.221,-1.541 -1.028,-2.532 0.194,-0.991 0.619,-2.03 0.251,-2.969 -0.441,-1.124 -1.781,-1.533 -2.95,-1.8 0.38,-1.287 0.45,-2.666 0.201,-3.986 0.445,-0.462 -0.541,-1.647 -1.17,-1.76 -0.629,-0.114 -1.258,0.161 -1.894,0.213 -1.322,0.107 -2.645,-0.891 -2.917,-2.2 1.306,-0.373 2.613,-0.747 3.919,-1.121 0.461,-0.132 0.946,-0.265 1.413,-0.155 0.485,0.114 0.87,0.47 1.25,0.794 3.026,2.585 7.727,3.756 10.948,1.421 0.65,-0.471 1.315,-1.098 2.112,-1.024 0.517,0.049 0.955,0.391 1.36,0.719 1.347,1.092 2.824,2.454 2.75,4.196 -0.019,0.461 -0.151,0.927 -0.042,1.375 0.243,1.001 1.466,1.334 2.219,2.031 1.78,1.648 0.52,4.599 -0.819,6.627 1.669,1.038 3.338,2.077 5.007,3.115 0.436,0.271 0.903,0.552 1.415,0.545 0.528,-0.006 0.998,-0.315 1.482,-0.528 2.882,-1.267 6.078,0.872 8.298,3.117 1.77,-2.294 5.174,-3.12 7.785,-1.891 1.042,-0.718 1.004,-2.383 0.258,-3.41 -0.746,-1.026 -1.963,-1.571 -3.123,-2.071 0.741,-1.034 1.505,-2.124 1.669,-3.388 0.164,-1.265 -0.501,-2.737 -1.736,-3.008 0.24,-0.438 0.481,-0.875 0.721,-1.313 1.004,0.167 2.072,0.229 3.002,-0.187 0.93,-0.417 1.659,-1.439 1.446,-2.442 -1.674,-0.932 -3.73,-0.236 -5.58,0.255 -1.85,0.491 -4.207,0.572 -5.262,-1.037 -0.695,-1.656 -1.913,-3.084 -3.431,-4.026 0.673,1.118 0.474,2.693 -0.457,3.604 -1.347,0.776 -2.901,-0.589 -3.797,-1.867 -0.896,-1.278 -2.176,-2.793 -3.663,-2.346 -0.523,0.157 -0.988,0.556 -1.533,0.532 -0.572,-0.025 -1.009,-0.504 -1.374,-0.95 -0.866,-1.055 -1.766,-2.29 -1.598,-3.649 0.169,-1.358 2.122,-2.344 2.921,-1.237 -0.37,1.345 -0.562,3.146 0.663,3.796 1.305,0.694 2.865,-1.018 2.533,-2.468 -0.332,-1.45 -1.783,-2.356 -3.2,-2.768 -1.417,-0.413 -2.934,-0.504 -4.271,-1.135 -0.556,-0.262 -1.08,-1.091 -0.541,-1.389 0.526,-0.308 1.175,-0.398 1.764,-0.243 0.435,-1.147 0.037,-2.56 -0.93,-3.305 -0.968,-0.745 -2.424,-0.76 -3.406,-0.035 -2.091,1.543 -1.297,5.03 -2.843,7.127 -0.637,0.866 -1.669,1.423 -2.737,1.479 -2.215,0.116 -4.037,-1.785 -5.052,-3.775 -0.224,-0.44 -0.439,-0.908 -0.824,-1.215 -0.861,-0.688 -2.103,-0.283 -3.17,-0.018 -1.068,0.265 -2.532,0.127 -2.812,-0.945 2.275,-2.749 5.237,-4.914 8.536,-6.237 0.316,-0.126 0.662,-0.269 0.818,-0.573 0.179,-0.349 0.042,-0.767 0.018,-1.158 -0.067,-1.076 0.732,-1.985 1.477,-2.758 0.729,-0.757 1.521,-1.55 2.545,-1.77 1.023,-0.22 2.296,0.438 2.309,1.494 0.025,1.943 -3.628,2.261 -3.559,4.203 1.352,0.668 3.028,0.623 4.343,-0.118 1.551,-3.04 6.06,-3.997 8.693,-1.844 1.148,0.938 1.997,2.358 3.416,2.775 2.257,0.662 4.234,-1.531 6.369,-2.521 2.725,-1.264 5.906,-0.532 8.811,0.22 2.461,0.638 4.922,1.275 7.382,1.913 -1.384,0.174 -2.768,0.349 -4.152,0.524 2.265,0.654 4.421,1.692 6.35,3.056 -0.102,1.155 -1.084,2.168 -2.226,2.299 3.135,0.625 3.994,4.934 6.731,6.598 0.872,0.53 1.917,0.773 2.689,1.443 1.107,0.961 1.396,2.577 1.352,4.05 -0.102,3.429 -1.687,6.788 -4.261,9.03 1.988,-0.866 4.201,-1.199 6.353,-0.956 -0.019,-1.324 0.937,-3.202 2.027,-2.464 0.316,0.214 0.468,0.596 0.603,0.954 0.62,1.656 1.24,3.312 1.86,4.968 0.459,1.225 0.947,2.495 1.896,3.389 1.58,1.488 4.171,1.676 5.443,3.439 -0.191,-0.777 0.821,-1.409 1.578,-1.169 0.756,0.241 1.231,0.982 1.602,1.69 0.921,1.756 1.266,4.508 -0.575,5.215 -1.654,0.634 -4.252,-0.842 -4.911,0.814 -0.172,0.433 -0.083,0.921 0.028,1.373 1.151,4.688 4.539,8.761 8.915,10.721 1.465,0.657 3.322,1.474 3.33,3.092 1.036,-0.158 1.799,-1.324 1.536,-2.347 1.133,-0.148 2.318,0.168 3.231,0.86 -0.78,0.551 -0.548,1.836 0.106,2.534 0.654,0.698 1.585,1.066 2.294,1.707 2.003,1.807 2.272,5.674 4.926,6.1 2.012,-0.798 1.748,-3.761 0.901,-5.768 -0.847,-2.006 -1.838,-4.556 -0.35,-6.139 0.6,1.401 1.85,2.503 3.308,2.915 -1.358,-1.716 -1.592,-4.258 -0.57,-6.198 0.99,2.289 2.81,4.201 5.036,5.292 -0.124,0.634 -0.248,1.268 -0.371,1.901 1.762,-0.41 3.451,1.289 3.745,3.089 C 1.36,-3.492 0.673,-1.693 0,0"/>
                        </g>
                        <g transform="translate(346.6946,182.2069)" id="g2908">
                        <path id="path2910" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.875,0.63 -1.891,1.201 -2.168,2.26 -2.3,2.761 -2.266,3.369 -2.632,3.712 -3.026,4.081 -3.775,4.041 -4.453,4.037 -6.439,4.025 -8.231,4.454 -9.654,5.28 c -0.451,0.262 -0.873,0.567 -1.431,0.695 -0.502,0.115 -1.093,0.08 -1.695,-0.033 -2.994,-0.561 -6.28,-3.274 -7.242,-5.978 -0.297,-0.833 -0.456,-1.746 -1.232,-2.45 -0.334,-0.304 -0.768,-0.55 -0.991,-0.904 -0.214,-0.341 -0.161,-0.673 -0.077,-0.954 0.436,-1.47 1.514,-2.595 3.032,-3.167 0.542,-0.205 1.178,-0.377 1.323,-0.908 0.113,-0.414 -0.106,-0.955 -0.088,-1.412 0.048,-1.171 1.533,-1.396 2.378,-2.067 1.099,-0.874 1.121,-2.575 2.112,-3.545 0.761,-0.745 2.016,-0.987 3.232,-1.211 1.085,-0.2 2.17,-0.4 3.254,-0.599 2.369,-0.436 5.423,-0.658 7.847,1.381 1.423,1.196 2.139,2.856 2.212,4.238 0.073,1.382 -0.397,2.55 -0.864,3.69 0.802,0.164 1.562,1.003 1.765,1.718 C 4.084,-5.51 3.871,-4.905 3.618,-4.36 2.81,-2.62 1.581,-1.139 0,0"/>
                        </g>
                        <g transform="translate(456.2208,154.0828)" id="g2912">
                        <path id="path2914" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 1.535,-0.449 3.302,0.033 4.402,1.203 4.597,1.41 4.779,1.653 4.803,1.937 4.828,2.222 4.632,2.54 4.349,2.548 3,1.517 0.706,2.101 -0.274,0.708 -0.364,0.581 -0.439,0.42 -0.386,0.273 -0.33,0.118 -0.157,0.046 0,0"/>
                        </g>
                        <g transform="translate(448.7367,151.5159)" id="g2916">
                        <path id="path2918" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.254,-0.019 -0.484,-0.15 -0.718,-0.251 -0.925,-0.399 -1.985,-0.352 -2.929,-0.703 -0.61,-0.228 -1.149,-0.613 -1.679,-0.993 -0.997,-0.716 -1.994,-1.431 -2.992,-2.147 2.18,0.464 4.36,0.928 6.54,1.392 0.561,0.12 1.127,0.241 1.649,0.48 0.876,0.402 1.577,1.113 2.42,1.583 C 1.74,-0.465 1.189,-0.29 0.638,-0.116 0.43,-0.05 0.217,0.016 0,0"/>
                        </g>
                        <g transform="translate(472.2962,330.5323)" id="g2920">
                        <path id="path2922" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.179,0.576 -0.77,0.944 -1.363,1.024 -1.956,1.103 -2.554,0.946 -3.125,0.766 -4.84,0.225 -6.486,-0.539 -8.01,-1.5 c -0.386,-0.243 -0.77,-0.505 -1.061,-0.858 -0.767,-0.932 -0.73,-2.271 -0.654,-3.479 1.221,0.037 2.442,0.075 3.663,0.112 0.337,0.01 0.678,0.021 1.011,-0.035 0.658,-0.111 1.245,-0.469 1.864,-0.719 0.797,-0.321 1.663,-0.464 2.519,-0.417 0.411,0.39 0.306,1.081 0.054,1.59 -0.251,0.51 -0.624,0.987 -0.668,1.554 C -1.389,-2.394 0.404,-1.3 0,0"/>
                        </g>
                        <g transform="translate(467.6098,311.302)" id="g2924">
                        <path id="path2926" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.859,-0.028 1.697,-0.264 2.549,-0.379 3.401,-0.495 4.316,-0.477 5.058,-0.039 5.8,0.399 6.289,1.36 5.966,2.163 5.711,2.801 5.055,3.162 4.447,3.473 3.924,3.739 3.402,4.006 2.879,4.273 2.536,4.448 2.171,4.646 2.001,4.993 1.705,5.599 2.142,6.297 2.579,6.809 3.016,7.32 3.511,7.943 3.33,8.593 3.231,8.949 2.946,9.216 2.663,9.45 c -0.865,0.716 -1.83,1.31 -2.857,1.758 -0.403,0.176 -0.825,0.331 -1.264,0.351 C -2.038,11.584 -2.6,11.372 -3.143,11.162 -4.008,10.828 -4.872,10.495 -5.737,10.161 -6.266,9.957 -6.851,9.7 -7.061,9.169 -7.271,8.639 -6.713,7.886 -6.223,8.172 -5.798,7.099 -6.994,6.105 -7.278,4.985 -7.483,4.176 -7.191,3.332 -6.903,2.549 c 0.394,-1.072 0.89,-2.256 1.936,-2.697 0.319,-0.135 0.666,-0.187 1.011,-0.203 C -2.632,-0.412 -1.325,0.043 0,0"/>
                        </g>
                        <g transform="translate(485.4018,327.3446)" id="g2928">
                        <path id="path2930" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.279,-0.214 0.575,-0.434 0.922,-0.483 1.269,-0.532 1.676,-0.339 1.737,0.009 1.782,0.262 1.639,0.507 1.502,0.724 1.162,1.262 0.822,1.799 0.482,2.337 0.184,2.81 -0.125,3.295 -0.572,3.629 -1.018,3.964 -1.639,4.122 -2.139,3.876 -2.399,3.127 -2.163,2.275 -1.714,1.623 -1.265,0.971 -0.627,0.48 0,0"/>
                        </g>
                        <g transform="translate(492.3177,318.291)" id="g2932">
                        <path id="path2934" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.496,-0.348 1.094,-0.563 1.499,-1.015 1.77,-1.317 1.931,-1.7 2.119,-2.06 2.681,-3.138 3.529,-4.063 4.55,-4.713 4.637,-3.989 4.588,-3.247 4.408,-2.54 4.34,-2.272 4.248,-2.002 4.069,-1.792 3.848,-1.534 3.52,-1.4 3.222,-1.237 2.548,-0.869 1.977,-0.31 1.591,0.358 1.422,0.65 1.288,0.963 1.09,1.235 0.531,2.001 -0.45,2.337 -1.086,3.04 -1.367,3.352 -1.576,3.731 -1.887,4.012 -2.198,4.294 -2.673,4.462 -3.036,4.252 -2.584,3.517 -2.131,2.782 -1.678,2.046 -1.212,1.289 -0.726,0.51 0,0"/>
                        </g>
                        <g transform="translate(485.8077,191.3352)" id="g2936">
                        <path id="path2938" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.273,0.188 -0.618,0.325 -0.931,0.218 -1.243,0.11 -1.432,-0.337 -1.2,-0.574 -1.685,-0.818 -2.257,-0.766 -2.792,-0.85 c -0.535,-0.084 -1.125,-0.415 -1.161,-0.96 -0.012,-0.182 0.041,-0.371 -0.013,-0.545 -0.11,-0.352 -0.604,-0.492 -0.659,-0.857 -0.043,-0.288 0.248,-0.541 0.537,-0.557 0.289,-0.017 0.56,0.133 0.8,0.295 0.499,0.337 0.978,0.757 1.57,0.858 0.591,0.101 1.32,-0.318 1.259,-0.921 0.751,0.091 1.417,0.686 1.596,1.428 C 1.117,-1.279 0.681,-0.469 0,0"/>
                        </g>
                        <g transform="translate(474.0314,280.2508)" id="g2940">
                        <path id="path2942" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.127,-0.972 0.13,-1.949 0.386,-2.895 0.222,-0.826 0.445,-1.651 0.668,-2.477 0.208,-0.773 0.514,-1.656 1.264,-1.92 0.414,-0.146 0.875,-0.06 1.305,-0.154 0.927,-0.203 1.566,-1.205 2.512,-1.285 1.092,-0.092 1.879,1.117 1.981,2.218 0.103,1.101 -0.206,2.217 -0.041,3.31 0.198,1.317 1.223,2.547 2.535,2.696 0.465,0.053 0.962,-0.02 1.378,0.195 0.576,0.298 0.77,1.017 0.905,1.656 0.22,1.041 0.437,2.15 0.067,3.146 C 12.61,5.432 11.773,6.153 11.548,7.132 10.774,7.44 9.881,6.837 9.562,6.062 9.243,5.287 9.341,4.41 9.444,3.577 9.383,4.07 7.564,2.661 7.428,2.57 6.01,1.617 5.084,1.266 3.563,1.64 1.908,2.047 0.324,2.477 0,0"/>
                        </g>
                        <g transform="translate(463.0675,246.8268)" id="g2944">
                        <path id="path2946" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.488,0.382 0.701,1.018 0.831,1.627 1.104,2.904 1.121,4.271 0.643,5.486 -0.2,7.629 -2.67,8.979 -4.91,8.52 -5.514,8.397 -6.185,8.17 -6.709,8.497 -7.168,8.784 -7.32,9.395 -7.727,9.754 -8.434,10.38 -9.562,9.997 -10.295,9.403 -11.028,8.809 -11.66,8.009 -12.569,7.766 c -0.353,0.772 -1.28,1.227 -2.1,1.031 -0.821,-0.197 -1.446,-1.024 -1.416,-1.874 0.039,-1.101 0.994,-1.918 1.465,-2.912 0.586,-1.234 0.385,-2.743 -0.269,-3.942 -0.653,-1.199 -1.709,-2.126 -2.831,-2.894 -0.306,-0.208 -0.628,-0.417 -0.826,-0.732 -0.358,-0.571 -0.213,-1.313 -0.043,-1.967 0.419,-1.618 0.911,-3.217 1.473,-4.791 0.873,0.535 1.915,-0.414 2.366,-1.337 0.451,-0.924 0.904,-2.075 1.909,-2.253 1.032,-0.182 2.216,0.801 3.043,0.151 0.264,-0.208 0.421,-0.555 0.73,-0.687 0.268,-0.116 0.578,-0.036 0.847,0.076 2.245,0.934 3.022,4.286 1.42,6.126 0.686,1.339 1.777,2.462 3.091,3.181 0.345,0.189 0.72,0.363 0.953,0.682 0.65,0.891 -0.165,2.309 0.477,3.205 C -1.773,-0.464 -0.684,-0.535 0,0"/>
                        </g>
                        <g transform="translate(467.0533,288.3012)" id="g2948">
                        <path id="path2950" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.909,6.032 -5.674,13.296 -13.214,14.554 -5.282,1.647 -11.439,-1.105 -14.16,-5.959 -2.721,-4.853 -2.046,-11.293 1.266,-15.758 3.311,-4.465 8.961,-6.913 14.487,-6.75 3.45,0.101 7.033,1.264 9.282,3.905 C -0.053,-7.326 0.527,-3.496 0,0"/>
                        </g>
                        <g transform="translate(381.6754,230.987)" id="g2952"/>
                        <g transform="translate(403.9147,242.8805)" id="g2956"/>
                        <g transform="translate(454.2848,230.987)" id="g2960"/>
                        <g transform="translate(384.7584,277.5383)" id="g2964"/>
                        <g transform="translate(396.2877,286.716)" id="g2968"/>
                        <g transform="translate(407.3317,286.716)" id="g2972"/>
                        <g transform="translate(417.9157,279.863)" id="g2976"/>
                        <g transform="translate(434.6754,286.716)" id="g2980"/>
                        <g transform="translate(353.7197,187.6039)" id="g2984">
                        <path id="path2986" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -5.412,-0.16 -11.277,-0.187 -15.639,3.021 -2.589,1.904 -4.32,4.735 -6.603,6.996 -2.283,2.261 -5.64,4.003 -8.652,2.883 -3.446,-1.28 -5.467,-5.921 -9.136,-5.698 -2.687,0.163 -4.42,2.944 -6.904,3.983 -2.749,1.15 -8.061,0.353 -10.159,-1.763 -2.098,-2.116 -4.518,-4.824 -5.64,-7.585 6.13,-7.842 16.894,-10.103 26.779,-11.281 17.813,-2.122 22.803,-1.484 40.683,-0.041 4.318,0.348 20.368,5.223 24.342,6.947 3.973,1.725 10.781,1.806 12.031,4.366 C 28.057,1.442 13.044,0.386 0,0"/>
                        </g>
                        <g transform="translate(505.2889,327.9127)" id="g2988">
                        <path id="path2990" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -2.036,6.133 -6.865,11.812 -13.253,12.794 -19.64,13.776 -26.799,8.231 -25.802,1.846 -29.32,4.029 -32.945,6.254 -37.018,6.997 -41.09,7.74 -45.771,6.67 -48.198,3.316 c -1.42,-1.961 -2.154,-4.697 -4.395,-5.616 -3.336,-1.369 -5.035,2.56 -11.456,0.537 -6.291,-1.982 -9.67,-8.903 -9.803,-9.611 0,0 -17.776,-0.278 -23.152,-10.045 24.109,6.328 49.507,7.706 74.159,4.023 3.917,-0.586 7.873,-1.299 11.814,-0.903 3.941,0.397 7.956,2.082 10.18,5.36 C 1.664,-9.232 1.411,-4.251 0,0"/>
                        </g>
                        <g transform="translate(348.1338,292.9238)" id="g2992">
                        <path id="path2994" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -4.675,1.139 -6.113,5.146 -13.119,4.991 -2.712,-0.06 -8.165,-2.781 -8.165,-2.781 0,0 -1.87,4.161 -2.815,6.283 -1.566,3.513 -5.806,5.595 -9.544,4.685 -3.41,-0.83 -6.04,-4.067 -6.305,-7.545 -0.327,2.422 -3.355,4.194 -5.911,3.681 -2.897,-0.582 -5.943,-2.646 -7.552,-5.125 -1.608,-2.479 -2.265,-2.736 -4.446,-7.378 l -1.317,-3.255 c 19.8,0.209 39.589,1.3 59.291,3.269 1.411,0.141 3.256,0.783 3.104,2.193 C 3.107,0.074 1.033,-0.251 0,0"/>
                        </g>
                        <g transform="translate(479.9964,157.711)" id="g2996">
                        <path id="path2998" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -4.675,1.139 -6.113,5.146 -13.119,4.991 -2.711,-0.06 -8.166,-2.781 -8.166,-2.781 0,0 -1.869,4.161 -2.814,6.283 -1.566,3.513 -5.806,5.595 -9.544,4.685 -3.41,-0.83 -6.04,-4.067 -6.304,-7.545 -0.328,2.422 -3.356,4.194 -5.912,3.681 -2.897,-0.582 -5.943,-2.646 -7.552,-5.125 -1.608,-2.479 -2.265,-2.736 -4.446,-7.378 l -1.316,-3.255 c 19.799,0.209 39.588,1.3 59.29,3.269 1.411,0.141 3.256,0.784 3.104,2.193 C 3.107,0.074 1.033,-0.251 0,0"/>
                        </g>
                        <g transform="translate(428.9817,371.2442)" id="g3000">
                        <path id="path3002" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -4.675,1.139 -6.113,5.146 -13.119,4.991 -2.712,-0.06 -8.165,-2.781 -8.165,-2.781 0,0 -1.87,4.161 -2.815,6.283 -1.566,3.513 -5.806,5.595 -9.543,4.685 -3.411,-0.83 -6.041,-4.067 -6.306,-7.545 -0.327,2.422 -3.355,4.194 -5.911,3.681 -2.897,-0.582 -5.943,-2.646 -7.552,-5.125 -1.608,-2.479 -2.265,-2.736 -4.446,-7.378 l -1.316,-3.255 c 19.798,0.209 39.588,1.3 59.29,3.269 1.411,0.141 3.256,0.783 3.104,2.193 C 3.107,0.074 1.033,-0.251 0,0"/>
                        </g>
                    </g>
                    </g>
                    <g id="g3004">
                    <g clip-path="url(#clipPath3010)" id="g3006">
                        <g transform="translate(663.968,429.2868)" id="g3012">
                        <path id="path3014" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 194, 236);" d="m 0,0 c 7.501,-21.34 -3.718,-44.72 -25.058,-52.221 -21.34,-7.501 -44.72,3.718 -52.221,25.058 -7.501,21.339 3.718,44.72 25.058,52.221 C -30.881,32.559 -7.501,21.34 0,0"/>
                        </g>
                        <g id="g3016">
                        <g id="g3018"/>
                        <g id="g3030">
                            <g style="opacity:0.130005" id="g3028" clip-path="url(#clipPath3022)">
                            <g id="g3026" transform="translate(644.8388,415.3684)">
                                <path id="path3024" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.511,-0.18 -1.076,0.091 -1.256,0.602 -1.437,1.12 -1.167,1.685 -0.655,1.864 -0.138,2.046 0.427,1.775 0.609,1.258 0.788,0.746 0.517,0.182 0,0 m -5.492,3.169 c -1.035,-0.364 -2.159,0.181 -2.52,1.209 -0.362,1.029 0.174,2.156 1.209,2.52 1.029,0.361 2.152,-0.183 2.513,-1.211 0.362,-1.029 -0.174,-2.156 -1.202,-2.518 m -42.393,-22.873 c -1.353,-0.475 -2.829,0.238 -3.303,1.585 -0.473,1.347 0.232,2.828 1.585,3.304 1.347,0.473 2.824,-0.241 3.297,-1.588 0.474,-1.346 -0.232,-2.827 -1.579,-3.301 m -7.09,22.006 c 1.035,0.364 2.158,-0.18 2.519,-1.209 0.362,-1.029 -0.173,-2.156 -1.208,-2.52 -1.029,-0.361 -2.152,0.183 -2.514,1.212 -0.361,1.028 0.174,2.155 1.203,2.517 m 73.933,12.124 c -0.094,0.268 -0.197,0.54 -0.304,0.804 l -0.044,0.124 c -0.111,0.277 -0.222,0.553 -0.339,0.827 -0.122,0.286 -0.243,0.573 -0.369,0.851 -0.161,0.357 -0.321,0.714 -0.494,1.066 -0.405,0.853 -0.845,1.686 -1.312,2.495 -5.214,-1.608 -12.446,-4.192 -18.968,-7.76 -11.946,-6.532 -15.926,-16.134 -30.1,-22.328 -14.165,-6.198 -21.17,0.776 -18.427,5.271 2.736,4.492 20.171,13.367 38.803,20.147 12.707,4.628 21.705,7.349 26.149,8.617 -0.746,1.027 -1.542,2.015 -2.379,2.961 -0.206,0.229 -0.415,0.464 -0.627,0.69 -0.137,0.148 -0.273,0.297 -0.415,0.443 -0.034,0.037 -0.077,0.078 -0.111,0.115 C 9.709,29.081 9.383,29.407 9.056,29.72 8.918,29.853 8.778,29.993 8.634,30.125 8.485,30.269 8.331,30.41 8.182,30.554 1.622,26.476 -11.588,18.996 -29.12,12.77 -43.954,7.5 -54.364,4.289 -60.489,2.522 c -0.054,-0.923 -0.074,-1.862 -0.055,-2.794 0.002,-0.504 0.019,-1.009 0.042,-1.512 0.013,-0.178 0.02,-0.358 0.034,-0.535 0.004,-0.111 0.016,-0.225 0.022,-0.342 l 0.002,-0.007 c 0.055,-0.653 0.116,-1.304 0.199,-1.961 0.023,-0.244 0.054,-0.493 0.092,-0.739 l 0.002,-0.006 c 0.057,-0.421 0.126,-0.838 0.198,-1.261 0.028,-0.159 0.053,-0.311 0.087,-0.467 0.065,-0.384 0.144,-0.769 0.23,-1.152 l 0.002,-0.006 c 0.082,-0.392 0.17,-0.782 0.27,-1.167 0.063,-0.279 0.134,-0.562 0.212,-0.843 0.178,-0.666 0.377,-1.331 0.595,-1.99 0.033,-0.115 0.064,-0.223 0.104,-0.335 0.072,-0.227 0.151,-0.451 0.23,-0.676 0.138,-0.393 0.282,-0.783 0.431,-1.165 0.078,-0.204 0.157,-0.408 0.246,-0.601 0.057,-0.162 0.12,-0.322 0.189,-0.479 0.218,-0.519 0.439,-1.03 0.677,-1.528 0.204,-0.44 0.414,-0.877 0.634,-1.304 1.429,-2.811 3.156,-5.392 5.121,-7.734 9.385,4.77 33.781,17.099 45.485,22.306 8.668,3.86 19.576,6.748 26.677,8.39 -0.12,1.218 -0.311,2.44 -0.551,3.659 -0.027,0.137 -0.057,0.281 -0.092,0.423 -0.021,0.139 -0.055,0.275 -0.082,0.412 -0.057,0.261 -0.122,0.525 -0.187,0.79 -0.054,0.233 -0.116,0.47 -0.178,0.707 -0.043,0.161 -0.085,0.321 -0.127,0.481 -0.096,0.352 -0.196,0.695 -0.297,1.044 -0.087,0.285 -0.173,0.571 -0.267,0.859 -0.11,0.333 -0.222,0.672 -0.341,1.009 -0.05,0.143 -0.1,0.286 -0.157,0.428"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3032">
                        <g id="g3034"/>
                        <g id="g3046">
                            <g style="opacity:0.25" id="g3044" clip-path="url(#clipPath3038)">
                            <g id="g3042" transform="translate(613.32,383.6236)">
                                <path id="path3040" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -3.616,-1.271 -6.847,-1.468 -7.208,-0.439 -7.57,0.59 -4.927,2.457 -1.311,3.729 2.306,5 5.536,5.197 5.898,4.168 6.259,3.139 3.616,1.271 0,0 M 19.668,12.665 C 3.48,7.059 -10.44,4.05 -16.778,2.831 c 0.066,-0.068 0.136,-0.127 0.201,-0.195 0.09,-0.095 0.183,-0.181 0.283,-0.265 0.029,-0.025 0.055,-0.058 0.085,-0.082 0.106,-0.103 0.21,-0.2 0.32,-0.294 0.234,-0.226 0.486,-0.446 0.732,-0.667 0.823,-0.727 1.674,-1.415 2.548,-2.068 0.047,-0.033 0.095,-0.072 0.142,-0.104 0.815,-0.604 1.645,-1.174 2.501,-1.714 0.148,-0.102 0.308,-0.199 0.46,-0.293 1.569,-0.955 3.194,-1.813 4.87,-2.555 1.726,-0.766 3.51,-1.414 5.334,-1.943 0.007,0.003 0.013,0.005 0.013,0.005 C 0.988,-7.436 1.268,-7.513 1.547,-7.59 1.57,-7.595 1.593,-7.602 1.616,-7.607 2.202,-7.759 2.792,-7.902 3.379,-8.018 3.54,-8.059 3.691,-8.09 3.848,-8.119 l 0.007,0.003 C 3.915,-8.13 3.968,-8.14 4.029,-8.153 4.144,-8.183 4.258,-8.206 4.375,-8.221 4.79,-8.306 5.207,-8.377 5.628,-8.439 6.423,-8.566 7.223,-8.67 8.02,-8.747 c 8.107,3.445 15.349,6.299 17.571,6.554 2.566,0.293 -1.955,-2.788 -7.825,-6.337 2.606,0.377 5.221,1.009 7.809,1.918 3.635,1.278 6.976,3.013 9.981,5.127 0.258,0.182 0.523,0.366 0.777,0.56 0.318,0.231 0.632,0.475 0.946,0.718 0.363,0.282 0.722,0.576 1.078,0.877 1.904,1.6 3.639,3.359 5.201,5.253 l 0.007,0.003 c 1.244,1.502 2.374,3.09 3.39,4.743 0.173,0.285 0.344,0.576 0.513,0.874 C 45.512,10.61 42.701,9.3 38.661,7.46 26.482,1.91 5.2,-3.973 5.179,-2.257 c -0.024,1.722 11.492,8.502 27.133,13.489 7.322,2.328 13.335,4.154 17.664,5.431 0.269,0.669 0.522,1.346 0.766,2.027 0.545,1.579 0.993,3.194 1.347,4.838 0.085,0.395 0.162,0.793 0.237,1.197 0.094,0.531 0.182,1.059 0.258,1.598 0.132,0.9 0.226,1.809 0.291,2.721 0.005,0.045 0.005,0.086 0.004,0.128 C 47.226,25.364 35.311,18.086 19.668,12.665"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3048">
                        <g id="g3050"/>
                        <g id="g3062">
                            <g style="opacity:0.130005" id="g3060" clip-path="url(#clipPath3054)">
                            <g id="g3058" transform="translate(643.7174,452.3201)">
                                <path id="path3056" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -5.044,-3.707 -14.114,-9.452 -26.511,-13.606 -11.951,-4.005 -23.219,-6.886 -30.265,-8.544 0.699,1.857 1.531,3.656 2.498,5.39 7.018,0.8 15.181,2.051 21.45,3.988 13.693,4.232 26.238,12.725 23.289,13.461 -2.944,0.745 -12.344,-5.06 -25.351,-8.911 -5.871,-1.734 -11.699,-2.97 -16.33,-3.806 1.446,1.944 3.082,3.766 4.872,5.432 0.02,0.021 0.043,0.036 0.064,0.058 0.037,0.034 0.068,0.065 0.107,0.093 5.173,1.006 11.946,2.826 20.442,6.058 4.963,1.885 8.777,3.372 11.715,4.538 0.45,-0.045 0.896,-0.098 1.347,-0.164 0.008,-0.004 0.017,-0.008 0.023,-0.006 0.74,-0.111 1.475,-0.231 2.209,-0.386 0.021,0 0.044,-0.006 0.07,-0.018 1.293,-0.253 2.578,-0.579 3.84,-0.962 0,0 0.007,0.002 0.009,-0.004 0.195,-0.057 0.384,-0.117 0.582,-0.18 l 0.006,0.002 C -5.823,2.395 -5.72,2.361 -5.608,2.323 -5.211,2.19 -4.814,2.056 -4.419,1.908 -4.202,1.83 -3.992,1.75 -3.781,1.669 -3.628,1.611 -3.48,1.551 -3.333,1.491 -2.342,1.103 -1.372,0.674 -0.415,0.204 l 0.017,-0.008 c 0.126,-0.06 0.236,-0.113 0.364,-0.18 z"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3064">
                        <g id="g3066"/>
                        <g id="g3078">
                            <g style="opacity:0.39999402" id="g3076" clip-path="url(#clipPath3070)">
                            <g id="g3074" transform="translate(663.7755,429.8541)">
                                <path id="path3072" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.094,0.268 -0.197,0.54 -0.297,0.806 -0.312,0.85 -0.326,0.887 -0.347,0.929 L -0.374,1.004 C -0.484,1.28 -0.596,1.556 -0.713,1.83 -0.82,2.094 -0.933,2.355 -1.05,2.608 -1.221,2.996 -1.395,3.37 -1.576,3.747 c -0.45,0.942 -0.933,1.858 -1.456,2.746 -0.064,0.124 -0.144,0.251 -0.215,0.373 -0.069,0.116 -0.138,0.232 -0.206,0.348 -0.189,0.319 -0.385,0.635 -0.584,0.943 -1.135,1.773 -2.399,3.437 -3.773,4.993 -0.325,0.369 -0.655,0.729 -0.989,1.081 -0.487,0.509 -0.984,1.007 -1.49,1.487 -0.401,0.385 -0.81,0.752 -1.226,1.118 -0.486,0.424 -0.981,0.838 -1.492,1.234 -0.19,0.164 -0.391,0.317 -0.592,0.471 0,0 -0.002,0.006 -0.009,0.004 -0.146,0.116 -0.296,0.225 -0.449,0.339 -0.073,0.052 -0.141,0.105 -0.222,0.154 -0.296,0.225 -0.602,0.439 -0.907,0.648 -0.103,0.075 -0.205,0.145 -0.315,0.218 -0.074,0.051 -0.154,0.1 -0.228,0.151 -0.146,0.096 -0.285,0.194 -0.435,0.281 -0.594,0.394 -1.21,0.773 -1.824,1.125 l -0.089,0.052 c -0.519,0.301 -1.046,0.585 -1.576,0.855 -0.162,0.083 -0.324,0.166 -0.486,0.249 -0.129,0.067 -0.238,0.119 -0.365,0.18 l -0.016,0.008 c -0.957,0.47 -1.928,0.899 -2.919,1.286 -0.147,0.061 -0.294,0.121 -0.448,0.179 -0.21,0.08 -0.42,0.16 -0.637,0.238 -0.395,0.149 -0.793,0.282 -1.19,0.416 -0.111,0.038 -0.214,0.072 -0.325,0.11 l -0.007,-0.003 c -0.197,0.064 -0.386,0.124 -0.582,0.181 -0.002,0.006 -0.008,0.004 -0.008,0.004 -1.569,0.478 -3.174,0.86 -4.803,1.149 0.306,-0.075 0.615,-0.155 0.919,-0.244 0.021,0 0.044,-0.006 0.069,-0.018 0.326,-0.089 0.651,-0.178 0.975,-0.281 0,0 0.006,0.002 0.008,-0.004 0.196,-0.058 0.385,-0.117 0.582,-0.181 l 0.006,0.002 c 0.112,-0.037 0.215,-0.071 0.326,-0.109 0.397,-0.134 0.795,-0.267 1.19,-0.416 0.217,-0.078 0.427,-0.158 0.637,-0.238 0.154,-0.058 0.301,-0.118 0.448,-0.179 0.991,-0.387 1.962,-0.817 2.919,-1.286 l 0.016,-0.008 c 0.127,-0.061 0.236,-0.113 0.365,-0.18 0.697,-0.35 1.385,-0.711 2.062,-1.104 l 0.089,-0.053 c 0.078,-0.042 0.158,-0.091 0.23,-0.136 0.688,-0.403 1.37,-0.828 2.029,-1.269 0.074,-0.051 0.154,-0.1 0.228,-0.151 0.11,-0.074 0.212,-0.143 0.315,-0.219 0.214,-0.149 0.427,-0.298 0.635,-0.449 0.167,-0.117 0.334,-0.233 0.494,-0.352 0.153,-0.114 0.303,-0.222 0.449,-0.339 0.006,0.002 0.009,-0.004 0.009,-0.004 0.307,-0.236 0.607,-0.473 0.904,-0.719 0.389,-0.312 0.775,-0.631 1.15,-0.962 0.503,-0.433 0.989,-0.879 1.467,-1.341 0.433,-0.415 0.847,-0.837 1.26,-1.273 0.342,-0.356 0.68,-0.721 1.008,-1.096 0.164,-0.187 0.328,-0.375 0.494,-0.569 1.42,-1.666 2.713,-3.453 3.863,-5.367 0.068,-0.116 0.137,-0.232 0.206,-0.348 0.062,-0.097 0.118,-0.197 0.174,-0.296 0.346,-0.586 0.674,-1.179 0.981,-1.792 0.18,-0.336 0.351,-0.682 0.516,-1.031 0.305,-0.628 0.591,-1.263 0.863,-1.917 0.115,-0.268 0.222,-0.532 0.331,-0.802 l 0.008,-0.025 c 0.131,-0.332 0.256,-0.666 0.374,-1.003 0.057,-0.141 0.107,-0.285 0.158,-0.428 0.041,-0.119 0.083,-0.237 0.116,-0.351 0.077,-0.219 0.153,-0.437 0.224,-0.657 0.262,-0.805 0.496,-1.612 0.696,-2.418 0.12,-0.462 0.234,-0.926 0.334,-1.389 0.018,-0.091 0.042,-0.181 0.054,-0.275 0.17,-0.781 0.318,-1.562 0.438,-2.34 0.03,-0.227 0.063,-0.461 0.094,-0.688 0.515,-3.756 0.488,-7.507 -0.023,-11.154 -0.006,-0.023 -0.003,-0.05 -0.009,-0.073 -0.077,-0.539 -0.165,-1.067 -0.259,-1.597 -0.267,-1.453 -0.605,-2.882 -1.03,-4.285 -0.417,-1.422 -0.911,-2.808 -1.476,-4.169 -0.349,-0.823 -0.72,-1.64 -1.117,-2.445 l -0.006,-0.002 c -0.831,-1.68 -1.783,-3.296 -2.835,-4.85 l -0.006,-0.002 c -1.598,-2.348 -3.438,-4.529 -5.506,-6.517 L -13,-43.036 c -0.637,-0.617 -1.305,-1.209 -1.985,-1.784 -0.357,-0.301 -0.716,-0.595 -1.079,-0.877 -0.56,-0.441 -1.138,-0.869 -1.723,-1.278 -1.242,-0.871 -2.545,-1.686 -3.901,-2.415 -1.92,-1.053 -3.947,-1.962 -6.08,-2.711 -4.246,-1.493 -8.571,-2.243 -12.838,-2.32 -0.917,-0.021 -1.833,-0.007 -2.747,0.043 -0.732,0.03 -1.467,0.087 -2.194,0.161 -0.728,0.08 -1.449,0.177 -2.168,0.289 -0.318,0.049 -0.633,0.106 -0.947,0.164 0.514,-0.128 1.026,-0.249 1.538,-0.349 0.222,-0.055 0.432,-0.094 0.65,-0.136 0.046,-0.012 0.084,-0.02 0.128,-0.025 0.071,-0.024 0.145,-0.033 0.218,-0.043 0.415,-0.085 0.832,-0.155 1.253,-0.218 1.44,-0.229 2.895,-0.383 4.362,-0.449 0.914,-0.05 1.83,-0.064 2.747,-0.043 4.267,0.078 8.592,0.827 12.838,2.32 3.635,1.277 6.976,3.012 9.981,5.126 0.192,0.131 0.382,0.268 0.571,0.411 0.392,0.278 0.774,0.566 1.152,0.867 0.363,0.282 0.722,0.576 1.079,0.877 1.856,1.556 3.559,3.268 5.09,5.11 1.267,1.517 2.42,3.12 3.448,4.799 1.11,1.805 2.084,3.696 2.904,5.651 0.321,0.778 0.626,1.565 0.902,2.355 0.551,1.581 1.008,3.192 1.361,4.836 0.094,0.433 0.185,0.871 0.263,1.305 0.094,0.53 0.182,1.058 0.259,1.597 0.121,0.869 0.22,1.744 0.283,2.621 l 0.006,0.002 c 0.278,3.615 0.074,7.305 -0.653,10.987 -0.027,0.137 -0.057,0.281 -0.086,0.425 -0.03,0.164 -0.068,0.333 -0.104,0.495 -0.05,0.242 -0.104,0.475 -0.16,0.715 C 1.308,-4.297 1.245,-4.06 1.183,-3.823 1.147,-3.66 1.104,-3.5 1.062,-3.34 0.966,-2.988 0.867,-2.645 0.765,-2.295 0.679,-2.01 0.593,-1.725 0.498,-1.436 0.388,-1.104 0.276,-0.765 0.158,-0.428 0.107,-0.285 0.057,-0.141 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(608.0434,452.0303)" id="g3080">
                        <path id="path3082" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,0 -0.003,-0.001 -0.008,-0.003 h -10e-4 c 0.003,-0.018 -0.236,-0.156 -0.694,-0.402 -0.462,-0.24 -1.128,-0.618 -1.98,-1.116 -1.688,-1.016 -4.094,-2.594 -6.723,-4.991 -2.622,-2.392 -5.454,-5.627 -7.82,-9.76 -2.352,-4.121 -4.244,-9.142 -4.959,-14.682 l -0.128,0.266 0.005,-0.003 0.148,-0.09 -0.02,-0.185 c -0.105,-0.957 -0.213,-1.94 -0.323,-2.94 -0.083,-1.001 -0.051,-2.026 -0.083,-3.055 0.102,-3.136 0.436,-6.215 1.275,-9.067 l 0.274,-1.073 0.357,-1.038 c 0.239,-0.688 0.476,-1.37 0.71,-2.044 0.285,-0.655 0.568,-1.302 0.848,-1.942 0.14,-0.32 0.28,-0.638 0.419,-0.954 0.163,-0.304 0.325,-0.607 0.485,-0.908 2.521,-4.847 5.703,-8.692 8.726,-11.502 3.033,-2.818 5.87,-4.637 7.858,-5.818 1.001,-0.581 1.821,-0.957 2.354,-1.255 0.539,-0.287 0.82,-0.446 0.812,-0.463 -0.008,-0.017 -0.303,0.108 -0.859,0.363 -0.55,0.267 -1.389,0.614 -2.411,1.169 -2.031,1.13 -4.922,2.912 -8.017,5.72 -3.083,2.798 -6.333,6.659 -8.91,11.553 -0.164,0.304 -0.329,0.61 -0.496,0.918 -0.142,0.319 -0.285,0.64 -0.429,0.963 -0.286,0.648 -0.575,1.302 -0.867,1.964 -0.239,0.683 -0.481,1.372 -0.726,2.069 l -0.364,1.051 -0.281,1.088 c -0.857,2.889 -1.203,6.015 -1.306,9.199 0.032,1.045 0.002,2.086 0.087,3.102 0.112,1.015 0.223,2.013 0.331,2.985 l 0.127,-0.274 -0.005,0.003 -0.152,0.092 0.023,0.175 c 0.735,5.622 2.671,10.696 5.08,14.854 2.421,4.167 5.317,7.411 7.994,9.789 2.686,2.382 5.14,3.924 6.867,4.892 0.872,0.474 1.555,0.826 2.033,1.036 0.474,0.218 0.728,0.326 0.74,0.312 v 0 C 0,0.001 0,0 0,0"/>
                        </g>
                        <g transform="translate(212.4614,435.5801)" id="g3084">
                        <path id="path3086" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,-15.467 -12.538,-28.006 -28.006,-28.006 -15.467,0 -28.005,12.539 -28.005,28.006 0,15.467 12.538,28.005 28.005,28.005 C -12.538,28.005 0,15.467 0,0"/>
                        </g>
                        <g id="g3088">
                        <g id="g3090"/>
                        <g id="g3102">
                            <g style="opacity:0.30000299" id="g3100" clip-path="url(#clipPath3094)">
                            <g id="g3098" transform="translate(196.6231,421.3458)">
                                <path id="path3096" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.716,-1.073 -0.86,-2.422 -1.07,-3.701 -0.21,-1.28 -0.561,-2.638 -1.538,-3.471 -0.976,-0.833 -2.751,-0.763 -3.269,0.422 -0.282,0.643 -0.125,1.395 -0.275,2.083 -0.195,0.895 -0.885,1.593 -1.206,2.449 -0.274,0.731 -0.265,1.535 -0.279,2.318 -0.077,4.275 -1.049,8.748 -3.869,11.914 -0.347,0.389 -0.741,0.768 -1.238,0.909 -0.59,0.167 -1.27,-0.063 -1.645,-0.557 -0.233,-0.307 -0.356,-0.7 -0.64,-0.958 -0.617,-0.561 -1.678,-0.142 -2.077,0.595 -0.399,0.737 -0.332,1.635 -0.254,2.473 0.096,1.04 0.193,2.079 0.289,3.119 0.051,0.544 0.117,1.127 0.473,1.536 0.505,0.582 1.4,0.599 2.015,1.058 0.807,0.601 0.927,1.764 1.441,2.637 0.514,0.873 2.098,1.227 2.32,0.234 1.711,3.622 5.339,-1.83 7.537,-1.448 0.639,0.111 1.265,0.415 1.905,0.317 1.131,-0.175 1.701,-1.453 2.074,-2.554 C 1.313,17.546 1.932,15.718 2.55,13.89 2.786,13.194 3.092,12.419 3.763,12.145 4.278,11.935 4.88,12.084 5.398,11.884 6.769,11.358 6.296,9.156 5.177,8.192 4.058,7.228 2.495,6.63 1.953,5.243 1.544,4.198 1.846,2.965 1.408,1.933 1.093,1.194 0.445,0.665 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3104">
                        <g id="g3106"/>
                        <g id="g3118">
                            <g style="opacity:0.30000299" id="g3116" clip-path="url(#clipPath3110)">
                            <g id="g3114" transform="translate(167.06,413.652)">
                                <path id="path3112" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 H 0.005 C 0.286,-0.234 0.573,-0.455 0.863,-0.671 1.092,-0.843 1.324,-1.012 1.558,-1.177 1.792,-1.342 2.029,-1.504 2.269,-1.66 2.437,-1.771 2.605,-1.877 2.777,-1.983 2.755,-1.933 2.733,-1.888 2.712,-1.837 2.11,-0.45 2.097,1.542 3.434,2.21 3.688,2.339 3.978,2.408 4.189,2.605 4.786,3.168 4.316,4.351 4.913,4.914 5.25,5.227 5.77,5.198 6.185,5.384 6.931,5.724 7.182,6.69 7.134,7.523 7.081,8.352 6.824,9.179 6.927,10.006 c 0.161,1.252 1.135,2.513 0.597,3.651 -0.603,1.27 -2.404,1.087 -3.664,1.667 -1.759,0.813 -2.28,3.055 -3.417,4.648 -1.019,1.424 -3.418,3.005 -5.262,2.6 -1.337,-0.292 -1.803,-1.097 -1.953,-2.092 -0.057,0.01 -0.11,0.02 -0.168,0.03 -0.493,0.06 -1.07,0.093 -1.336,0.513 -0.31,0.488 0.009,1.204 -0.31,1.683 -0.166,0.251 -0.458,0.363 -0.695,0.542 -0.238,0.175 -0.439,0.503 -0.289,0.764 0.122,0.22 0.434,0.262 0.591,0.464 0.127,0.161 0.125,0.411 -0.002,0.566 -0.499,0.617 -1.078,-0.621 -1.361,-0.912 -0.081,-0.086 -0.157,-0.157 -0.229,-0.215 V 23.91 c -0.005,-0.054 -0.01,-0.104 -0.011,-0.158 -0.009,-0.17 -0.01,-0.343 -0.015,-0.516 -0.005,-0.172 -0.013,-0.344 -0.015,-0.516 -10e-4,-0.14 0.002,-0.279 0.002,-0.419 10e-4,-0.139 -0.001,-0.28 0.002,-0.418 -10e-4,-0.068 -10e-4,-0.132 0.002,-0.199 C -10.531,18.5 -10.003,15.35 -8.983,12.5 -8.518,11.2 -8,9.992 -7.352,8.785 -7.082,8.261 -6.786,7.746 -6.476,7.24 -6.092,6.615 -5.605,5.93 -5.171,5.341 -4.769,4.775 -4.35,4.268 -3.898,3.737 -3.28,3.001 -2.619,2.328 -1.93,1.659 -1.319,1.063 -0.665,0.537 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3120">
                        <g id="g3122"/>
                        <g id="g3134">
                            <g style="opacity:0.30000299" id="g3132" clip-path="url(#clipPath3126)">
                            <g id="g3130" transform="translate(210.7718,445.1824)">
                                <path id="path3128" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.139,0.273 -0.187,0.616 -0.282,0.896 -1.339,4 -4.055,5.43 -5.743,7.857 c -0.55,0.79 -0.978,1.442 -1.967,1.608 -1.464,0.247 -2.216,-0.595 -3.239,0.833 -0.275,0.384 -0.76,0.743 -1.176,0.521 0.103,-0.305 0.211,-0.609 0.314,-0.918 0.022,-0.064 0.043,-0.132 0.033,-0.2 -0.024,-0.212 -0.336,-0.267 -0.512,-0.148 -0.177,0.125 -0.263,0.338 -0.386,0.516 -0.454,0.68 -1.537,0.779 -2.108,0.201 -0.019,0.286 -0.202,0.555 -0.459,0.675 -0.064,-0.556 -0.695,-0.96 -1.217,-0.778 -0.081,0.277 0.403,0.321 0.575,0.555 0.158,0.22 -0.025,0.53 -0.223,0.718 -0.523,0.477 -1.217,0.761 -1.924,0.787 -0.448,0.014 -0.934,-0.066 -1.322,0.173 -0.225,0.139 -0.382,0.367 -0.612,0.501 -0.489,0.291 -1.11,0.035 -1.611,-0.24 -0.684,-0.376 -1.392,-0.853 -1.64,-1.606 -0.253,-0.748 0.273,-1.773 1.047,-1.687 0.196,0.025 0.401,0.118 0.592,0.061 0.274,-0.08 0.395,-0.407 0.414,-0.697 0.019,-0.285 -0.016,-0.593 0.119,-0.848 0.13,-0.255 0.533,-0.386 0.691,-0.148 0.368,0.349 0.331,0.942 0.244,1.445 -0.084,0.504 -0.179,1.071 0.119,1.479 0.302,0.409 1.145,0.268 1.081,-0.238 -0.039,-0.299 -0.375,-0.512 -0.365,-0.815 0.01,-0.308 0.377,-0.476 0.679,-0.465 0.302,0.005 0.61,0.115 0.903,0.034 0.296,-0.076 0.527,-0.472 0.312,-0.691 -0.374,-0.421 -1.325,0.318 -1.523,-0.209 -0.054,-0.135 -0.003,-0.29 -0.018,-0.435 -0.041,-0.443 -0.589,-0.599 -1.025,-0.649 -0.436,-0.045 -0.898,-0.085 -1.292,0.11 -0.393,0.195 -0.658,0.728 -0.427,1.105 -0.22,0.166 -0.56,0.006 -0.682,-0.246 -0.123,-0.247 -0.091,-0.546 -0.059,-0.823 -0.461,0.11 -0.878,-0.284 -1.145,-0.675 -0.271,-0.395 -0.53,-0.854 -0.98,-0.989 -0.455,-0.135 -1.075,0.062 -1.315,-0.351 -0.313,-0.54 0.568,-1.238 0.251,-1.773 -0.181,-0.301 -0.608,-0.288 -0.946,-0.379 -0.897,-0.247 -1.223,-1.575 -0.622,-2.292 0.596,-0.718 1.818,-0.691 2.47,-0.02 0.454,0.461 0.644,1.116 0.974,1.673 0.331,0.553 0.95,1.053 1.561,0.865 0.239,-0.075 0.442,-0.249 0.631,-0.415 0.295,-0.257 0.589,-0.513 0.884,-0.775 0.189,-0.165 0.396,-0.371 0.375,-0.624 -0.02,-0.204 -0.177,-0.36 -0.246,-0.55 -0.193,-0.545 0.578,-1.075 1.07,-0.782 0.497,0.293 0.555,1.058 0.227,1.532 -0.455,0.657 -1.495,0.995 -1.459,1.801 0.538,0.437 1.372,-0.039 1.676,-0.671 0.304,-0.629 0.304,-1.371 0.559,-2.021 0.255,-0.655 0.981,-1.238 1.598,-0.928 -0.154,0.562 -0.303,1.121 -0.456,1.68 0.394,0.294 0.833,-0.58 1.301,-0.441 0.286,0.087 0.326,0.503 0.205,0.785 -0.117,0.282 -0.336,0.52 -0.386,0.824 -0.083,0.554 0.527,1.04 1.073,0.943 0.54,-0.097 0.93,-0.631 1.026,-1.18 0.037,-0.217 0.043,-0.448 0.134,-0.649 0.2,-0.436 0.727,-0.574 1.16,-0.76 0.438,-0.186 0.886,-0.639 0.699,-1.081 -0.087,-0.193 -0.289,-0.377 -0.22,-0.577 0.064,-0.177 0.321,-0.257 0.319,-0.447 -0.006,-0.127 -0.136,-0.211 -0.252,-0.26 -0.294,-0.118 -0.615,-0.155 -0.901,-0.293 -0.286,-0.132 -0.547,-0.41 -0.528,-0.727 0.03,-0.453 0.557,-0.676 0.801,-1.055 0.236,-0.36 0.195,-0.835 0.341,-1.244 0.138,-0.377 0.428,-0.675 0.66,-0.999 0.725,-1.031 0.884,-2.35 1.23,-3.568 0.153,-0.549 0.439,-1.164 0.989,-1.274 0.302,-0.058 0.605,0.056 0.891,0.166 0.798,0.312 1.629,0.647 2.192,1.297 0.567,0.654 0.766,1.725 0.2,2.379 -0.07,0.086 -0.162,0.164 -0.269,0.179 -0.15,0.02 -0.285,-0.082 -0.419,-0.144 -0.406,-0.186 -0.902,-0.022 -1.236,0.286 -0.33,0.302 -0.53,0.725 -0.725,1.135 -0.212,0.451 -0.425,0.906 -0.642,1.361 0.265,0.223 0.681,0.123 0.95,-0.102 0.264,-0.224 0.425,-0.548 0.639,-0.822 0.652,-0.849 1.737,-1.233 2.788,-1.372 0.266,-0.034 0.542,-0.06 0.789,-0.176 0.782,-0.376 0.995,-1.56 1.823,-1.823 0.23,-0.075 0.488,-0.064 0.705,-0.171 0.326,-0.162 0.487,-0.544 0.58,-0.903 0.175,-0.668 0.229,-1.37 0.497,-2.007 0.264,-0.636 0.812,-1.218 1.488,-1.234 0.422,-0.014 0.729,0.112 1.039,0.412 l -0.038,0.079 c 0.043,0.625 0.126,1.149 0.133,1.783 0.001,0.131 -0.039,0.302 -0.046,0.434 0.002,0.412 0.013,0.803 -0.003,1.209 -0.017,0.407 -0.074,0.906 -0.109,1.309 -0.027,0.326 -0.069,0.58 -0.11,0.902 -0.039,0.34 -0.113,0.689 -0.165,1.026 -0.155,1.01 -0.589,2.828 -0.848,3.802"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3136">
                        <g id="g3138"/>
                        <g id="g3150">
                            <g style="opacity:0.30000299" id="g3148" clip-path="url(#clipPath3142)">
                            <g id="g3146" transform="translate(201.8363,420.0988)">
                                <path id="path3144" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.453,-0.059 -0.985,0.174 -1.332,-0.128 -0.203,-0.177 -0.251,-0.47 -0.333,-0.728 -0.115,-0.359 -0.331,-0.696 -0.652,-0.885 -0.32,-0.188 -0.753,-0.199 -1.046,0.032 -0.292,0.231 -0.377,0.717 -0.132,1 0.111,0.129 0.271,0.204 0.394,0.321 0.608,0.571 0.209,1.648 0.673,2.33 0.274,0.402 0.702,0.809 1.003,1.216 0.231,0.313 0.317,0.563 0.737,0.642 C 1.146,4.146 1.928,0.252 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3152">
                        <g id="g3154"/>
                        <g id="g3166">
                            <g style="opacity:0.30000299" id="g3164" clip-path="url(#clipPath3158)">
                            <g id="g3162" transform="translate(178.0571,456.7696)">
                                <path id="path3160" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.56,-0.332 -0.863,-0.968 -1.298,-1.458 -0.435,-0.49 -1.209,-0.834 -1.71,-0.416 -0.242,0.201 -0.348,0.529 -0.372,0.846 -0.034,0.455 0.079,0.921 0.318,1.307 0.246,0.398 0.619,0.71 0.828,1.13 0.21,0.42 0.175,1.039 -0.242,1.242 -0.226,0.11 -0.512,0.071 -0.711,0.224 -0.359,0.276 -0.092,0.915 0.33,1.073 C -2.435,4.105 -1.97,3.974 -1.522,3.94 0.104,3.815 1.314,4.887 2.547,5.775 3.507,6.465 5.543,7.27 6.636,6.541 7.072,6.25 7.235,5.513 6.818,5.195 6.631,5.052 6.375,5.023 6.201,4.865 5.992,4.676 5.959,4.361 5.837,4.104 5.522,3.436 4.63,3.203 4.337,2.525 4.16,2.117 4.232,1.606 3.962,1.255 3.749,0.976 3.383,0.881 3.044,0.803 2.335,0.64 1.625,0.476 0.916,0.313 0.6,0.241 0.279,0.166 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3168">
                        <g id="g3170"/>
                        <g id="g3182">
                            <g style="opacity:0.30000299" id="g3180" clip-path="url(#clipPath3174)">
                            <g id="g3178" transform="translate(158.3079,444.2109)">
                                <path id="path3176" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.529,0.451 1.436,0.495 1.834,-0.08 2.118,-0.491 2.045,-1.047 1.964,-1.544 1.854,-2.212 1.744,-2.881 1.63,-3.55 1.596,-3.749 1.567,-3.966 1.65,-4.152 c 0.19,-0.428 0.875,-0.354 1.142,0.023 0.271,0.382 0.246,0.898 0.18,1.361 -0.066,0.467 -0.154,0.957 0.029,1.389 0.457,1.072 2.032,0.891 2.955,1.582 0.574,0.428 0.836,1.154 1.181,1.788 0.345,0.635 0.916,1.266 1.627,1.226 0.24,-0.011 0.474,-0.105 0.714,-0.098 0.702,0.014 1.123,1.055 0.631,1.568 -0.101,0.109 -0.237,0.197 -0.307,0.329 -0.122,0.242 0.015,0.548 0.23,0.708 0.215,0.156 0.487,0.198 0.749,0.236 0.601,0.093 1.202,0.181 1.803,0.269 0.663,0.097 1.516,0.435 1.43,1.111 -0.073,0.585 -0.847,0.856 -0.956,1.437 -0.03,0.141 -0.01,0.294 -0.071,0.426 -0.178,0.374 -0.726,0.23 -1.079,0.035 -0.136,0.541 -0.889,0.794 -1.315,0.446 C 10.234,9.389 10.184,8.864 10.054,8.417 9.749,7.335 8.891,6.521 8.073,5.765 7.799,5.514 7.49,5.246 7.121,5.233 6.752,5.219 6.37,5.626 6.542,5.954 6.661,6.18 6.982,6.307 6.954,6.561 6.913,6.878 6.371,6.862 6.267,7.167 6.491,8.06 7.504,8.42 8.282,8.891 c 0.945,0.568 1.693,1.474 2.069,2.529 0.064,0.167 0.115,0.365 0.033,0.525 -0.113,0.227 -0.41,0.267 -0.664,0.27 C 9.125,12.231 8.382,12.158 8.158,11.595 8.039,11.293 8.12,10.948 8.045,10.632 7.825,9.693 6.558,9.603 5.778,9.051 5.474,8.837 5.235,8.536 4.899,8.373 4.538,8.2 4.116,8.219 3.716,8.192 3.644,8.188 3.573,8.18 3.502,8.171 3.254,7.828 3.014,7.478 2.783,7.122 2.552,6.766 2.329,6.404 2.113,6.037 1.098,4.315 0.259,2.473 -0.385,0.534 -0.61,-0.14 -0.81,-0.826 -0.985,-1.522 -1.16,-2.218 -1.309,-2.925 -1.433,-3.641 c 0.282,0.576 0.415,1.29 0.528,1.795 C -0.751,-1.164 -0.525,-0.451 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3184">
                        <g id="g3186"/>
                        <g id="g3198">
                            <g style="opacity:0.39999402" id="g3196" clip-path="url(#clipPath3190)">
                            <g id="g3194" transform="translate(212.5031,435.4564)">
                                <path id="path3192" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,0.193 -0.005,0.391 -0.009,0.584 0,0.031 0,0.058 -0.004,0.09 v 0.053 c -0.009,0.202 -0.018,0.405 -0.032,0.606 -0.009,0.194 -0.022,0.387 -0.04,0.575 -0.023,0.288 -0.05,0.566 -0.081,0.849 -0.076,0.705 -0.18,1.401 -0.314,2.088 -0.014,0.094 -0.036,0.193 -0.054,0.287 -0.018,0.09 -0.036,0.18 -0.054,0.27 -0.05,0.247 -0.103,0.494 -0.162,0.736 -0.328,1.392 -0.763,2.744 -1.293,4.05 -0.126,0.31 -0.256,0.615 -0.391,0.916 -0.197,0.436 -0.404,0.867 -0.619,1.289 -0.171,0.337 -0.351,0.665 -0.535,0.992 -0.215,0.382 -0.44,0.759 -0.678,1.128 -0.085,0.148 -0.179,0.291 -0.274,0.435 0,0 0,0.005 -0.004,0.005 -0.067,0.107 -0.139,0.211 -0.211,0.318 -0.036,0.05 -0.067,0.099 -0.108,0.148 -0.139,0.212 -0.287,0.418 -0.435,0.62 -0.05,0.072 -0.099,0.139 -0.153,0.211 -0.036,0.05 -0.076,0.099 -0.112,0.148 -0.072,0.095 -0.14,0.189 -0.216,0.279 -0.292,0.386 -0.602,0.768 -0.916,1.131 l -0.045,0.054 c -0.265,0.31 -0.539,0.611 -0.817,0.903 -0.085,0.09 -0.171,0.179 -0.256,0.269 -0.067,0.072 -0.126,0.13 -0.193,0.198 l -0.009,0.009 c -0.507,0.516 -1.033,1.01 -1.581,1.482 -0.08,0.071 -0.161,0.143 -0.246,0.215 -0.117,0.099 -0.234,0.198 -0.355,0.296 -0.22,0.185 -0.445,0.36 -0.669,0.535 -0.063,0.049 -0.122,0.094 -0.185,0.143 h -0.004 c -0.112,0.086 -0.22,0.167 -0.332,0.247 0,0.005 -0.005,0.005 -0.005,0.005 -0.898,0.66 -1.841,1.266 -2.82,1.818 0.18,-0.116 0.36,-0.238 0.535,-0.363 0.013,-0.005 0.027,-0.014 0.04,-0.027 0.189,-0.13 0.377,-0.261 0.561,-0.4 0,0 0.005,0 0.005,-0.004 0.112,-0.081 0.22,-0.162 0.332,-0.247 h 0.005 c 0.063,-0.05 0.121,-0.095 0.184,-0.144 0.224,-0.175 0.449,-0.35 0.669,-0.534 0.121,-0.099 0.238,-0.198 0.355,-0.297 0.085,-0.072 0.166,-0.143 0.247,-0.215 0.547,-0.472 1.073,-0.966 1.58,-1.482 L -9.69,20.26 c 0.068,-0.067 0.126,-0.126 0.193,-0.198 0.368,-0.381 0.728,-0.767 1.073,-1.171 l 0.045,-0.054 c 0.041,-0.045 0.081,-0.095 0.117,-0.14 0.35,-0.413 0.691,-0.839 1.015,-1.27 0.036,-0.05 0.076,-0.099 0.112,-0.148 0.054,-0.072 0.103,-0.14 0.153,-0.212 0.103,-0.143 0.206,-0.287 0.305,-0.431 0.081,-0.112 0.162,-0.224 0.238,-0.336 0.072,-0.108 0.144,-0.211 0.211,-0.319 0.005,0 0.005,-0.005 0.005,-0.005 0.143,-0.22 0.282,-0.44 0.417,-0.664 0.18,-0.288 0.355,-0.579 0.521,-0.876 0.224,-0.39 0.436,-0.786 0.638,-1.19 0.184,-0.363 0.354,-0.727 0.521,-1.1 0.139,-0.305 0.274,-0.615 0.399,-0.929 0.063,-0.158 0.126,-0.315 0.189,-0.476 C -3.004,9.353 -2.577,7.916 -2.272,6.43 -2.254,6.34 -2.236,6.25 -2.218,6.161 -2.2,6.084 -2.187,6.008 -2.173,5.932 -2.083,5.478 -2.007,5.025 -1.949,4.562 -1.908,4.306 -1.877,4.046 -1.85,3.785 -1.796,3.314 -1.756,2.842 -1.729,2.362 -1.715,2.164 -1.706,1.971 -1.697,1.774 V 1.756 c 0.009,-0.243 0.013,-0.485 0.013,-0.728 0.005,-0.103 0.005,-0.206 0.005,-0.31 0,-0.085 0,-0.17 -0.005,-0.251 0,-0.157 0,-0.314 -0.004,-0.472 -0.014,-0.574 -0.045,-1.145 -0.099,-1.706 -0.027,-0.323 -0.058,-0.646 -0.099,-0.965 -0.009,-0.063 -0.013,-0.126 -0.027,-0.189 -0.067,-0.539 -0.148,-1.073 -0.247,-1.599 -0.031,-0.152 -0.063,-0.309 -0.094,-0.462 -0.516,-2.523 -1.379,-4.921 -2.528,-7.144 -0.009,-0.013 -0.014,-0.031 -0.023,-0.045 -0.17,-0.328 -0.345,-0.646 -0.525,-0.965 -0.498,-0.871 -1.037,-1.711 -1.626,-2.515 -0.588,-0.817 -1.216,-1.594 -1.885,-2.339 -0.409,-0.449 -0.831,-0.889 -1.267,-1.316 h -0.004 c -0.911,-0.889 -1.886,-1.711 -2.91,-2.469 h -0.004 c -1.554,-1.146 -3.224,-2.129 -4.998,-2.937 h -0.005 c -0.547,-0.252 -1.108,-0.481 -1.674,-0.696 -0.297,-0.112 -0.593,-0.22 -0.889,-0.319 -0.458,-0.157 -0.925,-0.301 -1.392,-0.431 -0.993,-0.278 -2.012,-0.507 -3.045,-0.669 -1.468,-0.242 -2.972,-0.368 -4.508,-0.368 -3.058,0 -5.999,0.494 -8.751,1.405 -0.593,0.193 -1.177,0.409 -1.752,0.647 -0.462,0.184 -0.92,0.386 -1.369,0.597 -0.449,0.216 -0.889,0.44 -1.325,0.674 -0.193,0.103 -0.382,0.211 -0.57,0.318 0.301,-0.197 0.602,-0.39 0.907,-0.57 0.13,-0.085 0.256,-0.157 0.386,-0.233 0.027,-0.018 0.049,-0.032 0.076,-0.045 0.041,-0.032 0.086,-0.054 0.131,-0.077 0.247,-0.148 0.498,-0.287 0.754,-0.422 0.871,-0.471 1.769,-0.898 2.694,-1.27 0.575,-0.238 1.159,-0.454 1.751,-0.647 2.753,-0.912 5.694,-1.406 8.752,-1.406 2.618,0 5.15,0.36 7.553,1.038 0.152,0.04 0.305,0.085 0.458,0.134 0.314,0.09 0.624,0.189 0.934,0.297 0.296,0.099 0.592,0.206 0.889,0.319 1.54,0.579 3.017,1.293 4.414,2.128 1.154,0.687 2.254,1.455 3.291,2.299 1.118,0.907 2.169,1.899 3.134,2.968 0.382,0.427 0.754,0.862 1.109,1.307 0.71,0.889 1.365,1.818 1.962,2.793 0.158,0.256 0.315,0.516 0.463,0.777 0.18,0.318 0.355,0.637 0.525,0.965 0.274,0.53 0.535,1.069 0.773,1.616 h 0.004 c 0.992,2.255 1.693,4.666 2.057,7.189 0.013,0.095 0.027,0.193 0.04,0.292 0.018,0.112 0.032,0.229 0.045,0.341 0.022,0.167 0.041,0.328 0.058,0.494 0.014,0.162 0.027,0.328 0.041,0.494 0.013,0.113 0.022,0.225 0.031,0.337 0.018,0.247 0.032,0.49 0.045,0.737 0.009,0.202 0.018,0.404 0.022,0.61 0.005,0.238 0.01,0.481 0.01,0.723 0,0.103 0,0.207 -0.005,0.31"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(665.8236,74.5984)" id="g3200">
                        <path id="path3202" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -6.246,-10.385 -19.729,-13.741 -30.115,-7.494 -40.5,-1.248 -43.856,12.235 -37.609,22.62 -31.363,33.006 -17.88,36.361 -7.494,30.115 2.891,23.868 6.246,10.385 0,0"/>
                        </g>
                        <g id="g3204">
                        <g id="g3206"/>
                        <g id="g3218">
                            <g style="opacity:0.30000299" id="g3216" clip-path="url(#clipPath3210)">
                            <g id="g3214" transform="translate(645.14,107.8298)">
                                <path id="path3212" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.095,-0.429 0.175,-0.811 0.25,-1.087 -1.096,-0.188 -2.303,-0.44 -2.964,-1.334 -0.669,-0.903 -0.549,-2.144 -0.824,-3.233 -0.081,-0.324 -0.226,-0.669 -0.527,-0.812 -0.251,-0.12 -0.546,-0.069 -0.817,-0.009 -1.589,0.349 -3.423,0.866 -4.706,-0.134 -0.745,-0.58 -1.221,-1.629 -2.158,-1.746 -0.989,-0.123 -1.701,0.895 -1.999,1.865 C -10.032,-2.699 -5.124,-0.454 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3220">
                        <g id="g3222"/>
                        <g id="g3234">
                            <g style="opacity:0.30000299" id="g3232" clip-path="url(#clipPath3226)">
                            <g id="g3230" transform="translate(636.2683,96.7829)">
                                <path id="path3228" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.051,-0.008 -0.101,0.012 -0.147,0.035 -2.126,1.017 0.647,4.445 2.291,4.148 3.308,3.965 3.539,2.863 3.017,2.07 2.358,1.068 0.964,0.963 0.165,0.115 0.118,0.065 0.068,0.01 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3236">
                        <g id="g3238"/>
                        <g id="g3250">
                            <g style="opacity:0.30000299" id="g3248" clip-path="url(#clipPath3242)">
                            <g id="g3246" transform="translate(630.8105,93.7544)">
                                <path id="path3244" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.278,-0.09 -0.561,0.127 -0.738,0.36 -1.349,1.164 -1.386,2.358 -0.827,3.198 0.139,4.65 2.866,4.8 3.229,2.768 3.359,2.041 2.952,1.221 2.253,0.982 1.869,0.851 1.44,0.892 1.064,0.743 0.755,0.62 0.511,0.382 0.26,0.166 0.181,0.099 0.099,0.032 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3252">
                        <g id="g3254"/>
                        <g id="g3266">
                            <g style="opacity:0.30000299" id="g3264" clip-path="url(#clipPath3258)">
                            <g id="g3262" transform="translate(630.8052,87.4298)">
                                <path id="path3260" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.297,-0.016 -0.589,0.258 -0.864,0.143 -0.238,-0.099 -0.329,-0.452 -0.586,-0.479 -0.23,-0.024 -0.381,0.235 -0.44,0.459 -0.191,0.722 -0.09,1.516 0.275,2.167 0.064,0.114 0.139,0.227 0.246,0.303 0.309,0.221 0.898,0.233 0.898,0.233 C -0.068,2.813 0.281,2.506 0.448,2.139 0.615,1.772 0.629,1.355 0.605,0.953 0.581,0.54 0.413,0.021 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3268">
                        <g id="g3270"/>
                        <g id="g3282">
                            <g style="opacity:0.30000299" id="g3280" clip-path="url(#clipPath3274)">
                            <g id="g3278" transform="translate(633.4358,90.6369)">
                                <path id="path3276" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 1.174,0.925 2.968,-0.118 3.7,-1.121 0.573,-0.786 0.991,-3.143 -0.716,-2.93 -0.573,0.071 -1.106,0.41 -1.412,0.899 -0.216,0.344 -0.331,0.764 -0.64,1.028 -0.024,0.021 -0.049,0.04 -0.075,0.059 -0.334,0.239 -0.794,0.301 -1.07,0.608 C -0.582,-1.049 -0.432,-0.341 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3284">
                        <g id="g3286"/>
                        <g id="g3298">
                            <g style="opacity:0.30000299" id="g3296" clip-path="url(#clipPath3290)">
                            <g id="g3294" transform="translate(633.6943,86.9567)">
                                <path id="path3292" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.004,-0.194 -0.041,-0.406 -0.191,-0.529 -0.31,-0.627 -0.477,-0.65 -0.629,-0.626 -1.083,-0.555 -1.413,-0.043 -1.29,0.4 -1.188,0.766 -0.798,1.009 -0.425,0.986 -0.168,0.724 -0.008,0.367 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3300">
                        <g id="g3302"/>
                        <g id="g3314">
                            <g style="opacity:0.30000299" id="g3312" clip-path="url(#clipPath3306)">
                            <g id="g3310" transform="translate(633.4994,87.8962)">
                                <path id="path3308" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.074,0.03 -0.152,0.042 -0.23,0.047 -0.027,0.028 -0.05,0.06 -0.08,0.085 z"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3316">
                        <g id="g3318"/>
                        <g id="g3330">
                            <g style="opacity:0.30000299" id="g3328" clip-path="url(#clipPath3322)">
                            <g id="g3326" transform="translate(627.4272,93.102)">
                                <path id="path3324" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.213,-0.462 0.349,-0.996 0.187,-1.479 0.054,-1.875 -0.259,-2.183 -0.446,-2.556 -1.06,-3.781 -0.241,-5.495 -1.148,-6.522 -1.447,-6.859 -1.872,-7.037 -2.315,-7.149 -2.32,-4.397 -1.806,-1.62 -0.738,1.034 -0.422,0.752 -0.179,0.387 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3332">
                        <g id="g3334"/>
                        <g id="g3346">
                            <g style="opacity:0.30000299" id="g3344" clip-path="url(#clipPath3338)">
                            <g id="g3342" transform="translate(626.6441,77.9326)">
                                <path id="path3340" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.737,1.875 -1.219,3.842 -1.422,5.847 -0.291,6.83 0.717,7.704 2.443,7.423 3.368,7.264 4.276,6.603 4.412,5.674 4.481,5.209 4.353,4.741 4.227,4.289 4.091,3.803 3.956,3.316 3.82,2.83 3.766,2.634 3.706,2.431 3.566,2.284 3.135,1.834 2.384,2.233 1.764,2.166 1.301,2.115 0.908,1.784 0.65,1.396 0.392,1.008 0.242,0.56 0.061,0.13 0.042,0.087 0.02,0.044 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3348">
                        <g id="g3350"/>
                        <g id="g3362">
                            <g style="opacity:0.30000299" id="g3360" clip-path="url(#clipPath3354)">
                            <g id="g3358" transform="translate(633.4375,79.7985)">
                                <path id="path3356" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.112,0.282 -0.057,0.6 -0.089,0.901 -0.135,1.324 -0.349,1.708 -0.476,2.114 -0.602,2.52 -0.623,3.011 -0.334,3.323 -0.245,3.42 -0.122,3.495 0.01,3.492 0.152,3.489 0.276,3.398 0.383,3.304 1.022,2.745 1.431,1.976 1.825,1.224 L 1.614,1.478 C 1.783,1.221 1.892,0.927 1.888,0.621 1.883,0.156 1.602,-0.313 1.166,-0.476 0.731,-0.639 0.171,-0.432 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3364">
                        <g id="g3366"/>
                        <g id="g3378">
                            <g style="opacity:0.30000299" id="g3376" clip-path="url(#clipPath3370)">
                            <g id="g3374" transform="translate(656.3416,100.4426)">
                                <path id="path3372" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.122,0.092 -0.245,0.194 -0.395,0.227 -0.826,0.322 -1.147,-0.172 -1.563,-0.317 -1.993,-0.466 -2.482,-0.202 -2.72,0.185 -3.907,2.107 -1.082,3.424 0.457,2.652 2.015,1.87 2.42,-1.816 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3380">
                        <g id="g3382"/>
                        <g id="g3394">
                            <g style="opacity:0.30000299" id="g3392" clip-path="url(#clipPath3386)">
                            <g id="g3390" transform="translate(653.7134,89.7115)">
                                <path id="path3388" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.219,0.706 -0.355,1.437 -0.406,2.175 -0.041,0.592 -0.019,1.219 0.282,1.731 0.51,0.87 1.637,1.135 2.643,1.201 C 3.386,5.164 4.304,5.124 5.045,4.671 5.526,4.377 5.893,3.933 6.308,3.55 6.996,2.914 7.822,2.443 8.52,1.818 9.005,1.382 9.431,0.834 9.638,0.226 10.578,-1.242 11.02,-3.03 10.836,-4.765 10.757,-5.516 10.533,-6.309 9.945,-6.784 8.854,-7.664 7.123,-7.031 5.911,-7.736 4.849,-8.355 4.435,-9.866 3.26,-10.228 c -1.139,-0.351 -2.246,0.591 -3.006,1.51 -1.07,1.291 -2.045,3 -1.445,4.566 0.4,1.042 1.457,1.851 1.457,2.968 C 0.266,-0.778 0.12,-0.388 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3396">
                        <g id="g3398"/>
                        <g id="g3410">
                            <g style="opacity:0.30000299" id="g3408" clip-path="url(#clipPath3402)">
                            <g id="g3406" transform="translate(664.3267,92.4151)">
                                <path id="path3404" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.527,0.344 -1.054,0.688 -1.581,1.032 -0.151,0.099 -0.308,0.203 -0.4,0.359 -0.212,0.359 0.043,0.864 0.436,1.004 0.392,0.141 0.842,-0.016 1.157,-0.29 C -0.073,1.833 0.135,1.459 0.336,1.094 L -0.047,1.548 C 0.262,1.1 0.295,0.463 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3412">
                        <g id="g3414"/>
                        <g id="g3426">
                            <g style="opacity:0.30000299" id="g3424" clip-path="url(#clipPath3418)">
                            <g id="g3422" transform="translate(666.3725,88.4613)">
                                <path id="path3420" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.088,-0.326 -0.479,-0.587 -0.769,-0.415 -0.929,-0.32 -1.005,-0.132 -1.07,0.042 -1.238,0.491 -1.406,0.939 -1.574,1.388 -1.627,1.53 -1.68,1.686 -1.632,1.829 -1.569,2.02 -1.337,2.115 -1.14,2.077 -0.942,2.04 -0.779,1.9 -0.652,1.745 -0.29,1.301 -0.157,0.718 -0.035,0.158 l -0.11,0.826 C -0.029,0.667 0.088,0.325 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3428">
                        <g id="g3430"/>
                        <g id="g3442">
                            <g style="opacity:0.30000299" id="g3440" clip-path="url(#clipPath3434)">
                            <g id="g3438" transform="translate(636.5431,92.9478)">
                                <path id="path3436" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.656,0.395 -0.044,1.416 0.614,1.02 1.27,0.625 0.657,-0.395 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3444">
                        <g id="g3446"/>
                        <g id="g3458">
                            <g style="opacity:0.30000299" id="g3456" clip-path="url(#clipPath3450)">
                            <g id="g3454" transform="translate(638.5402,96.4345)">
                                <path id="path3452" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.844,-0.508 0.057,-1.82 -0.789,-1.312 -1.633,-0.804 -0.845,0.508 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3460">
                        <g id="g3462"/>
                        <g id="g3474">
                            <g style="opacity:0.30000299" id="g3472" clip-path="url(#clipPath3466)">
                            <g id="g3470" transform="translate(639.0307,90.09)">
                                <path id="path3468" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.713,1.374 -0.898,2.969 0.342,4.221 1.034,4.92 2.154,5.266 2.818,4.345 3.482,3.426 3.08,2.298 2.62,1.419 2.227,0.667 2.42,0.329 2.598,-0.437 2.7,-0.879 2.779,-1.356 2.635,-1.8 2.37,-2.621 1.421,-3.114 0.69,-2.525 0.044,-2.005 0.016,-0.909 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3476">
                        <g id="g3478"/>
                        <g id="g3490">
                            <g style="opacity:0.30000299" id="g3488" clip-path="url(#clipPath3482)">
                            <g id="g3486" transform="translate(634.1925,85.6329)">
                                <path id="path3484" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.537,-0.073 1.24,-0.24 1.705,-0.609 1.766,-0.644 1.827,-0.681 1.887,-0.724 2.386,-1.082 2.825,-1.734 2.488,-2.355 2.194,-2.897 1.502,-3.031 0.986,-2.719 0.728,-2.563 0.589,-2.327 0.408,-2.098 0.179,-1.808 -0.08,-1.566 -0.387,-1.362 -0.934,-0.999 -0.776,0.106 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3492">
                        <g id="g3494"/>
                        <g id="g3506">
                            <g style="opacity:0.30000299" id="g3504" clip-path="url(#clipPath3498)">
                            <g id="g3502" transform="translate(637.4858,84.8674)">
                                <path id="path3500" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.108,0.099 -0.179,0.239 -0.204,0.383 -0.316,0.781 0.17,1.179 0.552,0.942 0.799,0.789 0.951,0.497 0.841,0.209 0.701,-0.155 0.295,-0.27 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3508">
                        <g id="g3510"/>
                        <g id="g3522">
                            <g style="opacity:0.30000299" id="g3520" clip-path="url(#clipPath3514)">
                            <g id="g3518" transform="translate(650.1585,86.9572)">
                                <path id="path3516" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -1.05,0.338 -1.129,1.49 -1.246,2.406 -1.363,3.32 -1.61,4.384 -0.786,5.053 0.002,5.692 1.127,5.272 1.641,4.503 2.153,3.737 2.308,2.624 2.071,1.738 2.027,1.573 1.952,1.429 1.866,1.295 1.849,1.209 1.828,1.124 1.799,1.041 1.539,0.302 0.802,-0.258 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3524">
                        <g id="g3526"/>
                        <g id="g3538">
                            <g style="opacity:0.30000299" id="g3536" clip-path="url(#clipPath3530)">
                            <g id="g3534" transform="translate(649.8453,84.5191)">
                                <path id="path3532" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.03,0.079 -0.044,0.161 -0.04,0.246 0.002,0.021 0.004,0.034 0.006,0.051 -0.1,0.276 -0.001,0.572 0.212,0.818 C 0.41,1.382 0.935,1.359 1.154,1.09 1.493,0.673 1.629,0.065 1.195,-0.348 0.78,-0.743 0.167,-0.503 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3540">
                        <g id="g3542"/>
                        <g id="g3554">
                            <g style="opacity:0.30000299" id="g3552" clip-path="url(#clipPath3546)">
                            <g id="g3550" transform="translate(647.7526,84.3461)">
                                <path id="path3548" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.762,0.088 -1.019,0.782 -1.268,1.406 -0.257,0.645 -0.613,1.316 -0.744,2.002 -0.109,0.571 -0.011,1.214 0.505,1.557 0.48,0.318 1.099,0.133 1.403,-0.33 C 0.257,4.087 0.253,3.369 0.372,2.744 0.39,2.651 0.417,2.563 0.441,2.474 0.451,2.466 0.462,2.462 0.471,2.453 1.21,1.797 1.5,-0.173 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3556">
                        <g id="g3558"/>
                        <g id="g3570">
                            <g style="opacity:0.30000299" id="g3568" clip-path="url(#clipPath3562)">
                            <g id="g3566" transform="translate(668.7695,89.153)">
                                <path id="path3564" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.995,0.378 -1.885,0.998 -2.396,1.975 -0.616,1.176 -0.908,3.14 -0.241,4.373 -0.021,0.364 0.029,0.709 0.169,1.014 C -1.214,5.068 -0.378,2.573 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3572">
                        <g id="g3574"/>
                        <g id="g3586">
                            <g style="opacity:0.30000299" id="g3584" clip-path="url(#clipPath3578)">
                            <g id="g3582" transform="translate(660.2354,75.9042)">
                                <path id="path3580" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.043,0.007 -0.082,0.025 -0.123,0.036 -0.497,-0.567 -1.257,-0.982 -1.963,-0.927 -0.238,-0.238 -0.636,-0.311 -0.888,-0.011 -0.254,0.303 -0.367,0.627 -0.351,0.953 -0.115,0.359 -0.079,0.765 0.088,1.128 0.308,0.672 0.88,0.895 1.454,1.287 0.014,0.01 0.026,0.022 0.04,0.032 0.247,0.274 0.499,0.543 0.7,0.852 0.115,0.178 0.214,0.371 0.367,0.518 C -0.196,4.328 0.647,4.15 1.106,3.67 1.166,3.607 1.221,3.54 1.271,3.47 1.57,3.386 1.653,3.009 1.66,2.678 1.748,2.411 1.813,2.132 1.871,1.858 L 1.656,2.416 C 1.644,1.885 1.611,1.346 1.385,0.87 1.134,0.342 0.578,-0.088 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3588">
                        <g id="g3590"/>
                        <g id="g3602">
                            <g style="opacity:0.30000299" id="g3600" clip-path="url(#clipPath3594)">
                            <g id="g3598" transform="translate(653.3883,97.0626)">
                                <path id="path3596" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.711,-0.027 1.044,-0.814 0.661,-1.378 -0.162,-0.239 -0.422,-0.385 -0.663,-0.533 -0.06,-0.038 -0.127,-0.073 -0.191,-0.112 -0.022,-0.053 -0.05,-0.107 -0.059,-0.13 -0.099,-0.249 -0.224,-0.467 -0.432,-0.64 -0.461,-0.382 -1.356,-0.141 -1.291,0.563 0.041,0.431 0.207,0.812 0.508,1.116 0.013,0.024 0.033,0.044 0.048,0.066 C -1.187,-0.455 -0.686,0.026 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3604">
                        <g id="g3606"/>
                        <g id="g3618">
                            <g style="opacity:0.30000299" id="g3616" clip-path="url(#clipPath3610)">
                            <g id="g3614" transform="translate(655.3288,70.8941)">
                                <path id="path3612" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.236,1.098 1.52,1.134 2.329,1.578 3.194,2.054 3.332,3.382 4.451,3.447 5.273,3.495 5.715,2.734 5.596,1.997 5.464,1.18 4.979,0.438 4.327,-0.157 3.566,-1.22 2.458,-2.017 1.178,-1.704 0.449,-1.525 -0.168,-0.781 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3620">
                        <g id="g3622"/>
                        <g id="g3634">
                            <g style="opacity:0.30000299" id="g3632" clip-path="url(#clipPath3626)">
                            <g id="g3630" transform="translate(662.4579,76.3811)">
                                <path id="path3628" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.272,0.404 1.02,0.387 1.115,-0.167 1.193,-0.627 1.209,-1.09 1.066,-1.541 0.935,-1.957 0.585,-2.48 0.106,-2.47 c -0.038,0.001 -0.069,0.011 -0.102,0.019 -0.234,-0.062 -0.491,-0.053 -0.716,0.045 -0.558,0.243 -0.775,0.883 -0.551,1.434 0.107,0.265 0.303,0.483 0.563,0.606 0.251,0.119 0.534,0.119 0.7,0.366"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3636">
                        <g id="g3638"/>
                        <g id="g3650">
                            <g style="opacity:0.30000299" id="g3648" clip-path="url(#clipPath3642)">
                            <g id="g3646" transform="translate(662.732,78.5312)">
                                <path id="path3644" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.011,0.217 0.086,0.363 0.263,0.479 0.427,0.585 0.619,0.511 0.753,0.402 0.923,0.263 0.917,0.071 0.887,-0.127 0.854,-0.346 0.586,-0.481 0.388,-0.449 0.158,-0.412 0.012,-0.23 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3652">
                        <g id="g3654"/>
                        <g id="g3666">
                            <g style="opacity:0.30000299" id="g3664" clip-path="url(#clipPath3658)">
                            <g id="g3662" transform="translate(664.8794,73.8427)">
                                <path id="path3660" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.791,1.536 0.548,2.702 0.253,4.31 0.094,5.177 0.021,6.072 0.396,6.897 1.024,8.275 2.486,8.811 3.916,9.096 3.52,6.251 2.557,3.437 0.983,0.82 0.661,0.285 0.315,-0.227 -0.044,-0.725 -0.121,-0.494 -0.123,-0.238 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3668">
                        <g id="g3670"/>
                        <g id="g3682">
                            <g style="opacity:0.30000299" id="g3680" clip-path="url(#clipPath3674)">
                            <g id="g3678" transform="translate(666.9944,83.7248)">
                                <path id="path3676" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.431,-0.172 -0.927,-0.1 -1.169,0.342 -0.006,0.013 -0.01,0.027 -0.016,0.04 -0.075,0.079 -0.136,0.169 -0.171,0.263 -0.151,0.405 0.016,0.777 0.363,1.013 0.179,0.121 0.37,0.202 0.567,0.257 0.727,0.322 1.66,0.68 2.431,0.614 C 2.014,1.815 1.99,1.1 1.929,0.384 1.268,0.378 0.616,0.263 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3684">
                        <g id="g3686"/>
                        <g id="g3698">
                            <g style="opacity:0.30000299" id="g3696" clip-path="url(#clipPath3690)">
                            <g id="g3694" transform="translate(667.1814,88.2983)">
                                <path id="path3692" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.175,0.312 0.68,0.397 0.856,0.023 0.885,-0.039 0.91,-0.103 0.933,-0.167 0.944,-0.185 0.96,-0.199 0.97,-0.218 1.05,-0.377 1.055,-0.541 1.006,-0.688 0.989,-0.826 0.94,-0.961 0.845,-1.089 0.808,-1.139 0.764,-1.18 0.716,-1.215 0.693,-1.242 0.672,-1.273 0.646,-1.297 0.482,-1.446 0.194,-1.461 0.042,-1.282 -0.164,-1.041 -0.33,-0.772 -0.266,-0.443 -0.232,-0.266 -0.136,-0.11 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3700">
                        <g id="g3702"/>
                        <g id="g3714">
                            <g style="opacity:0.30000299" id="g3712" clip-path="url(#clipPath3706)">
                            <g id="g3710" transform="translate(664.7716,81.5142)">
                                <path id="path3708" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.161,-0.169 -0.305,-0.279 -0.526,-0.306 -0.355,-0.684 -1.202,-1.268 -1.786,-0.636 -0.344,0.372 -0.158,0.884 0.2,1.162 0.407,0.316 1.003,0.458 1.478,0.649 C -0.082,1.091 0.449,0.471 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3716">
                        <g id="g3718"/>
                        <g id="g3730">
                            <g style="opacity:0.30000299" id="g3728" clip-path="url(#clipPath3722)">
                            <g id="g3726" transform="translate(630.4313,92.8157)">
                                <path id="path3724" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.271,0.45 0.751,0.538 1.24,0.504 1.739,0.47 2.191,0.492 2.648,0.714 3.205,0.985 3.758,0.402 3.47,-0.142 3.182,-0.687 2.63,-1.038 2.033,-1.157 1.546,-1.255 0.923,-1.298 0.547,-0.941 0.427,-0.897 0.307,-0.839 0.189,-0.76 -0.06,-0.594 -0.16,-0.266 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3732">
                        <g id="g3734"/>
                        <g id="g3746">
                            <g style="opacity:0.30000299" id="g3744" clip-path="url(#clipPath3738)">
                            <g id="g3742" transform="translate(629.4483,97.714)">
                                <path id="path3740" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.386,-0.404 -0.882,-0.713 -1.415,-0.818 0.074,0.129 0.143,0.26 0.22,0.387 0.654,1.088 1.392,2.094 2.193,3.024 C 1.007,2.571 1.019,2.552 1.026,2.526 1.274,1.591 0.622,0.65 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3748">
                        <g id="g3750"/>
                        <g id="g3762">
                            <g style="opacity:0.30000299" id="g3760" clip-path="url(#clipPath3754)">
                            <g id="g3758" transform="translate(635.4682,74.0573)">
                                <path id="path3756" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.138,0.785 0.692,1.338 1.351,1.52 2.308,1.784 3.201,1.547 4.081,2.117 4.774,2.565 5.486,3.177 6.37,3.103 6.995,3.051 7.567,2.62 7.688,1.992 7.801,1.41 7.571,0.896 7.172,0.455 7.008,-0.08 6.674,-0.572 6.192,-0.954 5.183,-1.755 3.805,-1.841 2.649,-1.355 1.543,-1.505 0.201,-1.146 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3764">
                        <g id="g3766"/>
                        <g id="g3778">
                            <g style="opacity:0.30000299" id="g3776" clip-path="url(#clipPath3770)">
                            <g id="g3774" transform="translate(638.3931,76.6997)">
                                <path id="path3772" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.237,0.249 -0.236,0.677 -0.063,0.962 0.154,1.318 0.648,1.546 1.045,1.418 1.217,1.428 1.388,1.376 1.543,1.213 2.056,0.672 1.497,-0.104 0.891,-0.221 0.593,-0.279 0.219,-0.23 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3780">
                        <g id="g3782"/>
                        <g id="g3794">
                            <g style="opacity:0.30000299" id="g3792" clip-path="url(#clipPath3786)">
                            <g id="g3790" transform="translate(643.3352,72.8673)">
                                <path id="path3788" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.176,0.042 -0.369,0.218 -0.393,0.405 -0.455,0.87 -0.341,1.277 -0.009,1.617 0.308,1.942 0.821,1.733 0.943,1.34 1.172,1.12 1.232,0.765 1.086,0.47 0.883,0.062 0.432,-0.104 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3796">
                        <g id="g3798"/>
                        <g id="g3810">
                            <g style="opacity:0.19999701" id="g3808" clip-path="url(#clipPath3802)">
                            <g id="g3806" transform="translate(640.6966,106.8813)">
                                <path id="path3804" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -2.661,-1.75 -4.981,-4.108 -6.733,-7.02 -6.246,-10.385 -2.891,-23.868 7.495,-30.115 5.534,-3.328 11.947,-3.929 17.676,-2.194 -6.83,-4.492 -15.908,-4.97 -23.382,-0.475 -10.385,6.247 -13.741,19.73 -7.494,30.115 C -9.52,-4.837 -5.023,-1.521 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(674.4913,92.3268)" id="g3812">
                        <path id="path3814" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 1.441,0.586 3.265,-0.797 3.089,-2.343 -0.176,-1.546 -2.265,-2.483 -3.537,-1.588 -1.272,0.896 -1.094,3.178 0.302,3.865"/>
                        </g>
                        <g transform="translate(670.0775,97.4827)" id="g3816">
                        <path id="path3818" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.825,0.336 1.869,-0.456 1.768,-1.341 1.667,-2.226 0.472,-2.762 -0.257,-2.25 c -0.728,0.513 -0.626,1.819 0.173,2.213"/>
                        </g>
                        <g transform="translate(425.7471,89.3776)" id="g3820">
                        <path id="path3822" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 194, 236);" d="M 0,0 C -2.573,-21.122 12.464,-40.331 33.586,-42.904 54.709,-45.477 73.917,-30.44 76.49,-9.317 79.063,11.805 64.026,31.014 42.904,33.586 21.782,36.159 2.573,21.122 0,0"/>
                        </g>
                        <g transform="translate(455.2856,72.6323)" id="g3824">
                        <path id="path3826" style="fill:#ff735d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.56,-4.597 2.713,-8.778 7.31,-9.338 4.597,-0.559 8.777,2.713 9.337,7.31 C 17.207,2.569 13.935,6.75 9.337,7.31 4.74,7.87 0.56,4.597 0,0"/>
                        </g>
                        <g id="g3828">
                        <g id="g3830"/>
                        <g id="g3842">
                            <g style="opacity:0.30000299" id="g3840" clip-path="url(#clipPath3834)">
                            <g id="g3838" transform="translate(455.2856,72.6323)">
                                <path id="path3836" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.56,-4.597 2.713,-8.778 7.31,-9.338 4.597,-0.559 8.777,2.713 9.337,7.31 C 17.207,2.569 13.935,6.75 9.337,7.31 4.74,7.87 0.56,4.597 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(454.3703,72.6589)" id="g3844">
                        <path id="path3846" style="fill:#ff735d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.559,-4.585 2.423,-8.719 7.008,-9.278 4.584,-0.558 8.509,3.053 9.068,7.638 C 16.634,2.945 13.61,6.731 9.026,7.29 4.441,7.848 0.559,4.585 0,0"/>
                        </g>
                        <g id="g3848">
                        <g id="g3850"/>
                        <g id="g3862">
                            <g style="opacity:0.30000299" id="g3860" clip-path="url(#clipPath3854)">
                            <g id="g3858" transform="translate(455.8199,122.8541)">
                                <path id="path3856" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -9.438,-4.419 -16.915,-12.581 -20.286,-22.816 0.003,-0.003 1.55,-1.6 1.272,-3.556 -0.229,-1.613 -2.031,-2.08 -2.668,-2.197 -0.093,-0.557 -0.192,-1.111 -0.261,-1.677 -0.351,-2.887 -0.356,-5.734 -0.079,-8.512 0.113,-0.084 3.285,-2.461 3.464,-4.674 0.136,-1.675 -0.652,-3.289 -1.417,-4.443 0.234,-0.652 0.476,-1.301 0.743,-1.937 2.176,-5.172 5.469,-9.796 9.595,-13.563 0.381,0.165 2.661,1.075 4.702,0.04 2.233,-1.132 1.494,-4.394 1.494,-4.394 l -0.275,-0.085 c 4.546,-2.769 9.732,-4.65 15.36,-5.336 4.254,-0.518 8.428,-0.311 12.407,0.505 -6.322,-2.96 -13.521,-4.246 -20.961,-3.34 -21.123,2.573 -36.16,21.782 -33.587,42.904 C -28.442,-16.213 -15.775,-3.237 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g3864">
                        <g id="g3866"/>
                        <g id="g3878">
                            <g style="opacity:0.30000299" id="g3876" clip-path="url(#clipPath3870)">
                            <g id="g3874" transform="translate(435.6641,91.9214)">
                                <path id="path3872" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.062,-0.509 0.3,-0.971 0.809,-1.033 0.508,-0.062 0.971,0.3 1.033,0.809 C 1.904,0.284 1.542,0.747 1.033,0.809 0.525,0.871 0.062,0.509 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(478.0911,67.5525)" id="g3880">
                        <path id="path3882" style="fill:#ff735d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.366,1.756 1.303,3.34 2.348,4.797 3.024,5.739 3.972,6.741 5.12,6.589 L 6.101,6.428 C 7.48,6.972 9.18,6.561 10.159,5.447 11.066,4.414 11.316,2.915 11.052,1.565 10.788,0.216 10.065,-1.003 9.22,-2.088 8.269,-3.308 7.148,-4.395 5.9,-5.309 5.203,-5.819 4.42,-6.29 3.556,-6.314 2.604,-6.341 1.703,-5.803 1.083,-5.081 -0.086,-3.72 -0.366,-1.756 0,0"/>
                        </g>
                        <g id="g3884">
                        <g id="g3886"/>
                        <g id="g3898">
                            <g style="opacity:0.30000299" id="g3896" clip-path="url(#clipPath3890)">
                            <g id="g3894" transform="translate(477.9504,67.5696)">
                                <path id="path3892" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.366,1.756 1.303,3.34 2.349,4.798 3.023,5.739 3.971,6.741 5.12,6.589 L 6.101,6.428 C 7.48,6.972 9.18,6.561 10.159,5.447 11.066,4.414 11.316,2.915 11.052,1.566 10.788,0.216 10.065,-1.003 9.22,-2.088 8.269,-3.308 7.148,-4.395 5.9,-5.309 5.203,-5.819 4.419,-6.29 3.556,-6.314 2.604,-6.341 1.703,-5.803 1.083,-5.081 -0.086,-3.719 -0.366,-1.756 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(477.181,67.6634)" id="g3900">
                        <path id="path3902" style="fill:#ff735d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.365,1.756 1.303,3.34 2.348,4.797 3.023,5.739 3.734,6.226 5.12,6.589 L 6.632,6.836 C 8.134,6.783 9.18,6.561 10.159,5.447 11.066,4.414 11.316,2.915 11.052,1.565 10.788,0.216 10.065,-1.004 9.22,-2.088 8.269,-3.308 7.148,-4.395 5.9,-5.309 5.203,-5.819 4.56,-6.139 3.696,-6.163 2.744,-6.19 2.109,-5.547 1.489,-4.825 0.321,-3.464 -0.366,-1.756 0,0"/>
                        </g>
                        <g transform="translate(466.4167,53.9343)" id="g3904">
                        <path id="path3906" style="fill:#ff735d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -1.411,-0.125 -2.803,0.147 -4.122,0.513 -0.851,0.236 -1.803,0.633 -1.916,1.392 l -0.071,0.654 c -0.689,0.764 -0.713,1.925 -0.059,2.772 0.607,0.786 1.699,1.249 2.78,1.356 C -2.307,6.794 -1.234,6.584 -0.24,6.269 0.878,5.915 1.929,5.426 2.873,4.82 3.4,4.482 3.915,4.081 4.105,3.539 4.314,2.941 4.084,2.26 3.656,1.72 2.851,0.703 1.411,0.126 0,0"/>
                        </g>
                        <g id="g3908">
                        <g id="g3910"/>
                        <g id="g3922">
                            <g style="opacity:0.30000299" id="g3920" clip-path="url(#clipPath3914)">
                            <g id="g3918" transform="translate(466.5767,53.9149)">
                                <path id="path3916" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -1.411,-0.126 -2.803,0.147 -4.122,0.512 -0.851,0.237 -1.803,0.634 -1.916,1.393 l -0.071,0.654 c -0.689,0.764 -0.713,1.925 -0.059,2.772 0.607,0.786 1.699,1.249 2.78,1.356 C -2.307,6.794 -1.234,6.584 -0.24,6.269 0.878,5.915 1.929,5.425 2.873,4.82 3.4,4.482 3.915,4.081 4.105,3.539 4.314,2.941 4.084,2.26 3.656,1.72 2.851,0.702 1.411,0.126 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(465.6064,53.7394)" id="g3924">
                        <path id="path3926" style="fill:#ff735d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -1.411,-0.126 -2.803,0.147 -4.122,0.513 -0.851,0.236 -1.363,0.588 -1.916,1.392 l -0.488,0.908 c -0.258,0.963 -0.296,1.671 0.358,2.518 0.607,0.786 1.699,1.249 2.78,1.356 C -2.307,6.794 -1.234,6.584 -0.24,6.269 0.879,5.915 1.929,5.425 2.873,4.82 3.4,4.482 3.772,4.139 3.962,3.597 4.171,2.999 3.808,2.466 3.38,1.925 2.575,0.908 1.411,0.126 0,0"/>
                        </g>
                        <g transform="translate(446.1048,108.7056)" id="g3928">
                        <path id="path3930" style="fill:#ff735d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 1.172,1.357 2.762,2.286 4.383,3.053 1.047,0.495 2.363,0.91 3.293,0.22 L 8.455,2.655 C 9.925,2.461 11.211,1.276 11.526,-0.173 11.817,-1.517 11.307,-2.949 10.421,-4 9.535,-5.052 8.31,-5.766 7.044,-6.304 5.621,-6.908 4.113,-7.314 2.579,-7.506 1.722,-7.614 0.808,-7.645 0.041,-7.246 -0.804,-6.807 -1.33,-5.9 -1.522,-4.967 -1.882,-3.21 -1.173,-1.357 0,0"/>
                        </g>
                        <g id="g3932">
                        <g id="g3934"/>
                        <g id="g3946">
                            <g style="opacity:0.30000299" id="g3944" clip-path="url(#clipPath3938)">
                            <g id="g3942" transform="translate(446.1048,108.7056)">
                                <path id="path3940" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 1.172,1.357 2.762,2.286 4.383,3.053 1.047,0.495 2.363,0.91 3.293,0.22 L 8.455,2.655 C 9.925,2.461 11.211,1.276 11.526,-0.173 11.817,-1.517 11.307,-2.949 10.421,-4 9.535,-5.052 8.31,-5.766 7.044,-6.304 5.621,-6.908 4.113,-7.314 2.579,-7.506 1.722,-7.614 0.808,-7.645 0.041,-7.246 -0.804,-6.807 -1.33,-5.9 -1.522,-4.967 -1.882,-3.21 -1.173,-1.357 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(444.6661,108.2967)" id="g3948">
                        <path id="path3950" style="fill:#ff735d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 1.173,1.357 2.762,2.286 4.383,3.052 5.431,3.547 6.289,3.628 7.676,3.273 L 9.118,2.754 C 10.405,1.978 11.211,1.275 11.526,-0.173 11.817,-1.517 11.308,-2.949 10.421,-4 9.535,-5.052 8.311,-5.767 7.045,-6.304 5.621,-6.908 4.113,-7.314 2.579,-7.507 1.722,-7.614 1.004,-7.581 0.237,-7.183 -0.608,-6.744 -0.851,-5.874 -1.042,-4.941 -1.402,-3.184 -1.173,-1.357 0,0"/>
                        </g>
                        <g transform="translate(482.6256,80.752)" id="g3952">
                        <path id="path3954" style="fill:#ff735d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.134,0.41 0.364,0.806 0.726,1.041 1.227,1.367 1.876,1.327 2.469,1.249 2.931,1.199 3.327,0.825 3.689,0.279 4.084,-0.302 4.264,-1.039 4.12,-1.727 3.976,-2.414 3.492,-3.035 2.837,-3.289 1.994,-3.615 0.97,-3.277 0.406,-2.571 -0.159,-1.865 -0.28,-0.86 0,0"/>
                        </g>
                        <g id="g3956">
                        <g id="g3958"/>
                        <g id="g3970">
                            <g style="opacity:0.30000299" id="g3968" clip-path="url(#clipPath3962)">
                            <g id="g3966" transform="translate(482.5013,80.767)">
                                <path id="path3964" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.134,0.41 0.364,0.806 0.725,1.041 1.227,1.367 1.876,1.328 2.469,1.249 2.931,1.199 3.327,0.825 3.689,0.279 4.084,-0.302 4.264,-1.039 4.12,-1.726 3.976,-2.414 3.492,-3.035 2.837,-3.289 1.993,-3.615 0.97,-3.277 0.406,-2.571 -0.159,-1.865 -0.28,-0.86 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(482.2332,80.7346)" id="g3972">
                        <path id="path3974" style="fill:#ff735d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.123,0.377 0.335,0.741 0.667,0.957 1.128,1.257 1.725,1.221 2.27,1.148 2.695,1.102 3.059,0.758 3.392,0.257 3.755,-0.277 3.921,-0.955 3.788,-1.587 3.656,-2.22 3.211,-2.791 2.608,-3.024 1.833,-3.324 0.892,-3.013 0.373,-2.364 -0.146,-1.715 -0.257,-0.79 0,0"/>
                        </g>
                        <g id="g3976">
                        <g id="g3978"/>
                        <g id="g3990">
                            <g style="opacity:0.19999701" id="g3988" clip-path="url(#clipPath3982)">
                            <g id="g3986" transform="translate(482.2332,80.7346)">
                                <path id="path3984" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.123,0.377 0.335,0.741 0.667,0.957 1.128,1.257 1.725,1.221 2.27,1.148 2.695,1.102 3.059,0.758 3.392,0.257 3.755,-0.277 3.921,-0.955 3.788,-1.587 3.656,-2.22 3.211,-2.791 2.608,-3.024 1.833,-3.324 0.892,-3.013 0.373,-2.364 -0.146,-1.715 -0.257,-0.79 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(486.1671,103.8744)" id="g3992">
                        <path id="path3994" style="fill:#ff735d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.107,0.33 0.292,0.648 0.583,0.837 0.986,1.099 1.508,1.067 1.984,1.004 2.356,0.964 2.674,0.663 2.965,0.225 3.283,-0.243 3.428,-0.835 3.312,-1.388 3.196,-1.941 2.807,-2.44 2.28,-2.644 1.603,-2.906 0.78,-2.635 0.326,-2.067 -0.128,-1.499 -0.225,-0.691 0,0"/>
                        </g>
                        <g id="g3996">
                        <g id="g3998"/>
                        <g id="g4010">
                            <g style="opacity:0.30000299" id="g4008" clip-path="url(#clipPath4002)">
                            <g id="g4006" transform="translate(486.0671,103.8866)">
                                <path id="path4004" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.107,0.33 0.292,0.648 0.583,0.837 0.986,1.099 1.508,1.067 1.984,1.004 2.356,0.964 2.674,0.663 2.965,0.224 3.283,-0.243 3.428,-0.835 3.312,-1.388 3.196,-1.941 2.807,-2.44 2.28,-2.644 1.603,-2.906 0.78,-2.635 0.326,-2.067 -0.128,-1.499 -0.225,-0.691 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(485.8515,103.8605)" id="g4012">
                        <path id="path4014" style="fill:#ff735d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.099,0.303 0.269,0.596 0.536,0.769 0.907,1.01 1.386,0.981 1.825,0.923 2.166,0.886 2.459,0.609 2.726,0.206 3.019,-0.223 3.151,-0.768 3.045,-1.276 2.939,-1.784 2.581,-2.243 2.097,-2.431 1.474,-2.672 0.717,-2.422 0.3,-1.9 -0.117,-1.378 -0.207,-0.635 0,0"/>
                        </g>
                        <g id="g4016">
                        <g id="g4018"/>
                        <g id="g4030">
                            <g style="opacity:0.19999701" id="g4028" clip-path="url(#clipPath4022)">
                            <g id="g4026" transform="translate(485.8515,103.8605)">
                                <path id="path4024" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.099,0.303 0.269,0.596 0.536,0.769 0.907,1.01 1.386,0.981 1.825,0.923 2.166,0.886 2.459,0.609 2.726,0.206 3.019,-0.223 3.151,-0.768 3.045,-1.276 2.939,-1.784 2.581,-2.243 2.097,-2.431 1.474,-2.672 0.717,-2.422 0.3,-1.9 -0.117,-1.378 -0.207,-0.635 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(465.6718,115.4862)" id="g4032">
                        <path id="path4034" style="fill:#ff735d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.141,0.432 0.383,0.849 0.764,1.096 1.293,1.44 1.976,1.398 2.601,1.315 3.087,1.263 3.505,0.869 3.886,0.294 4.302,-0.318 4.492,-1.094 4.34,-1.819 4.189,-2.543 3.678,-3.198 2.988,-3.465 2.1,-3.809 1.022,-3.452 0.428,-2.709 -0.167,-1.965 -0.295,-0.906 0,0"/>
                        </g>
                        <g id="g4036">
                        <g id="g4038"/>
                        <g id="g4050">
                            <g style="opacity:0.30000299" id="g4048" clip-path="url(#clipPath4042)">
                            <g id="g4046" transform="translate(465.5409,115.5022)">
                                <path id="path4044" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.141,0.432 0.383,0.849 0.764,1.097 1.293,1.44 1.976,1.399 2.601,1.315 3.087,1.263 3.505,0.869 3.886,0.294 4.302,-0.318 4.492,-1.094 4.34,-1.819 4.189,-2.543 3.679,-3.197 2.988,-3.465 2.1,-3.809 1.022,-3.452 0.427,-2.709 -0.168,-1.965 -0.295,-0.906 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(465.2584,115.4679)" id="g4052">
                        <path id="path4054" style="fill:#ff735d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.129,0.397 0.352,0.781 0.703,1.008 1.189,1.324 1.817,1.286 2.391,1.209 2.839,1.161 3.223,0.799 3.573,0.27 3.956,-0.292 4.13,-1.006 3.991,-1.672 3.851,-2.338 3.382,-2.94 2.748,-3.186 1.931,-3.502 0.94,-3.174 0.393,-2.49 -0.154,-1.807 -0.271,-0.833 0,0"/>
                        </g>
                        <g id="g4056">
                        <g id="g4058"/>
                        <g id="g4070">
                            <g style="opacity:0.19999701" id="g4068" clip-path="url(#clipPath4062)">
                            <g id="g4066" transform="translate(465.2584,115.4679)">
                                <path id="path4064" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.129,0.397 0.352,0.781 0.703,1.008 1.189,1.324 1.817,1.286 2.391,1.209 2.839,1.161 3.223,0.799 3.573,0.27 3.956,-0.292 4.13,-1.006 3.991,-1.672 3.851,-2.338 3.382,-2.94 2.748,-3.186 1.931,-3.502 0.94,-3.174 0.393,-2.49 -0.154,-1.807 -0.271,-0.833 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(473.213,114.1418)" id="g4072">
                        <path id="path4074" style="fill:#ff735d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.07,0.216 0.191,0.424 0.382,0.548 0.646,0.72 0.988,0.699 1.3,0.658 1.543,0.631 1.752,0.434 1.943,0.147 2.151,-0.159 2.246,-0.547 2.17,-0.91 2.094,-1.272 1.839,-1.599 1.494,-1.732 1.05,-1.904 0.511,-1.726 0.214,-1.354 -0.084,-0.982 -0.148,-0.453 0,0"/>
                        </g>
                        <g id="g4076">
                        <g id="g4078"/>
                        <g id="g4090">
                            <g style="opacity:0.30000299" id="g4088" clip-path="url(#clipPath4082)">
                            <g id="g4086" transform="translate(473.1475,114.1496)">
                                <path id="path4084" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.07,0.216 0.192,0.424 0.382,0.548 0.646,0.72 0.988,0.699 1.3,0.658 1.544,0.632 1.752,0.434 1.943,0.147 2.151,-0.159 2.246,-0.547 2.17,-0.909 2.094,-1.271 1.839,-1.599 1.494,-1.732 1.05,-1.904 0.511,-1.726 0.214,-1.354 -0.084,-0.982 -0.147,-0.453 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(473.0063,114.1325)" id="g4092">
                        <path id="path4094" style="fill:#ff735d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.065,0.199 0.176,0.39 0.351,0.504 0.594,0.662 0.908,0.643 1.195,0.605 1.419,0.581 1.611,0.399 1.786,0.135 1.978,-0.146 2.065,-0.503 1.995,-0.836 1.926,-1.169 1.691,-1.47 1.374,-1.593 0.965,-1.751 0.47,-1.587 0.196,-1.245 -0.077,-0.903 -0.136,-0.416 0,0"/>
                        </g>
                        <g id="g4096">
                        <g id="g4098"/>
                        <g id="g4110">
                            <g style="opacity:0.19999701" id="g4108" clip-path="url(#clipPath4102)">
                            <g id="g4106" transform="translate(473.0063,114.1325)">
                                <path id="path4104" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.065,0.199 0.176,0.39 0.351,0.504 0.594,0.662 0.908,0.643 1.195,0.605 1.419,0.581 1.611,0.399 1.786,0.135 1.978,-0.146 2.065,-0.503 1.995,-0.836 1.926,-1.169 1.691,-1.47 1.374,-1.593 0.965,-1.751 0.47,-1.587 0.196,-1.245 -0.077,-0.903 -0.136,-0.416 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g4112">
                        <g id="g4114"/>
                        <g id="g4126">
                            <g style="opacity:0.19999701" id="g4124" clip-path="url(#clipPath4118)">
                            <g id="g4122" transform="translate(454.3703,72.6589)">
                                <path id="path4120" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c -0.559,-4.585 2.423,-8.719 7.008,-9.278 4.584,-0.558 8.509,3.053 9.068,7.638 C 16.634,2.945 13.61,6.731 9.026,7.29 4.441,7.848 0.559,4.585 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g4128">
                        <g id="g4130"/>
                        <g id="g4142">
                            <g style="opacity:0.19999701" id="g4140" clip-path="url(#clipPath4134)">
                            <g id="g4138" transform="translate(477.181,67.6634)">
                                <path id="path4136" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.365,1.756 1.303,3.34 2.348,4.797 3.023,5.739 3.734,6.226 5.12,6.589 L 6.632,6.836 C 8.134,6.783 9.18,6.561 10.159,5.447 11.066,4.414 11.316,2.915 11.052,1.565 10.788,0.216 10.065,-1.004 9.22,-2.088 8.269,-3.308 7.148,-4.395 5.9,-5.309 5.203,-5.819 4.56,-6.139 3.696,-6.163 2.744,-6.19 2.109,-5.547 1.489,-4.825 0.321,-3.464 -0.366,-1.756 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g4144">
                        <g id="g4146"/>
                        <g id="g4158">
                            <g style="opacity:0.19999701" id="g4156" clip-path="url(#clipPath4150)">
                            <g id="g4154" transform="translate(465.6064,53.7394)">
                                <path id="path4152" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -1.411,-0.126 -2.803,0.147 -4.122,0.513 -0.851,0.236 -1.363,0.588 -1.916,1.392 l -0.488,0.908 c -0.258,0.963 -0.296,1.671 0.358,2.518 0.607,0.786 1.699,1.249 2.78,1.356 C -2.307,6.794 -1.234,6.584 -0.24,6.269 0.879,5.915 1.929,5.425 2.873,4.82 3.4,4.482 3.772,4.139 3.962,3.597 4.171,2.999 3.808,2.466 3.38,1.925 2.575,0.908 1.411,0.126 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g4160">
                        <g id="g4162"/>
                        <g id="g4174">
                            <g style="opacity:0.19999701" id="g4172" clip-path="url(#clipPath4166)">
                            <g id="g4170" transform="translate(444.6661,108.2967)">
                                <path id="path4168" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="M 0,0 C 1.173,1.357 2.762,2.286 4.383,3.052 5.431,3.547 6.289,3.628 7.676,3.273 L 9.118,2.754 C 10.405,1.978 11.211,1.275 11.526,-0.173 11.817,-1.517 11.308,-2.949 10.421,-4 9.535,-5.052 8.311,-5.767 7.045,-6.304 5.621,-6.908 4.113,-7.314 2.579,-7.507 1.722,-7.614 1.004,-7.581 0.237,-7.183 -0.608,-6.744 -0.851,-5.874 -1.042,-4.941 -1.402,-3.184 -1.173,-1.357 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(64.6596,131.9348)" id="g4176">
                        <path id="path4178" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 194, 236);" d="m 0,0 c -13.484,-9.004 -16.73,-26.685 -7.25,-39.491 9.481,-12.807 28.097,-15.889 41.581,-6.885 13.485,9.003 16.73,26.684 7.25,39.491 C 32.101,5.921 13.484,9.004 0,0"/>
                        </g>
                        <g id="g4180">
                        <g id="g4182"/>
                        <g id="g4238">
                            <g style="opacity:0.19999701" id="g4236" clip-path="url(#clipPath4186)">
                            <g id="g4190" transform="translate(72.8636,133.3132)">
                                <path id="path4188" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 1.67,-2.202 3.6,-3.593 5.984,-5.004 6.533,-5.329 7.025,-4.582 6.733,-4.148 5.461,-2.259 4.303,-0.425 2.852,1.361 2.46,1.844 2.073,2.382 1.671,2.921 0.621,2.67 -0.421,2.367 -1.448,2.004 -1.011,1.289 -0.465,0.613 0,0"/>
                            </g>
                            <g id="g4194" transform="translate(70.9431,128.3492)">
                                <path id="path4192" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 3.722,-4.829 8.657,-8.741 14.127,-11.674 5.519,-2.959 11.799,-4.877 18.089,-5.606 2.406,-0.278 5.467,-0.487 8.432,-0.236 -0.075,0.977 -0.207,1.952 -0.389,2.922 -2.338,-0.297 -4.724,-0.267 -7.065,-0.04 -5.284,0.512 -10.463,1.932 -15.272,4.059 -4.677,2.068 -9,4.779 -12.682,8.224 C 2.898,-0.159 -0.176,2.885 -1.563,6.157 -2.163,5.895 -2.757,5.614 -3.344,5.311 -2.466,3.28 -1.014,1.316 0,0"/>
                            </g>
                            <g id="g4198" transform="translate(92.9274,129.4785)">
                                <path id="path4196" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 2.581,-1.583 8.057,-3.583 11.58,-2.313 10.905,-1.561 10.195,-0.848 9.454,-0.178 9.248,-0.214 9.038,-0.242 8.823,-0.256 6.613,-0.402 4.403,0.316 2.438,1.197 0.141,2.226 -3.435,4.411 -5.161,7.038 -5.777,7.157 -6.396,7.259 -7.019,7.341 -5.945,4.274 -2.512,1.54 0,0"/>
                            </g>
                            <g id="g4202" transform="translate(65.9282,119.082)">
                                <path id="path4200" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 4.963,-5.487 11.357,-9.398 18.12,-12.62 6.17,-2.94 12.802,-5.04 19.727,-5.429 2.206,-0.124 4.539,-0.147 6.799,0.104 0.624,2.131 0.982,4.326 1.072,6.537 -3.14,-0.255 -6.361,-0.117 -9.14,0.263 -5.749,0.784 -11.231,2.764 -16.383,5.261 C 14.788,-3.263 9.54,-0.102 5.322,4.09 3.254,6.145 1.405,8.471 -0.179,10.88 -0.595,11.513 -0.974,12.155 -1.345,12.799 -3.103,11.617 -4.682,10.285 -6.084,8.838 -4.531,5.554 -2.248,2.486 0,0"/>
                            </g>
                            <g id="g4206" transform="translate(61.9167,99.2199)">
                                <path id="path4204" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -3.41,2.446 -6.814,5.046 -9.888,7.931 0.044,-0.753 0.122,-1.504 0.23,-2.254 6.818,-6.774 15.653,-12.099 24.169,-16.141 5.393,-2.56 11.034,-4.647 16.842,-6.187 0.56,0.222 1.117,0.457 1.668,0.713 -6.03,1.615 -11.869,3.862 -17.429,6.6 C 10.135,-6.651 4.904,-3.519 0,0"/>
                            </g>
                            <g id="g4210" transform="translate(91.0192,125.3687)">
                                <path id="path4208" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 3.658,-2.185 7.764,-3.779 12.115,-4.029 1.508,-0.087 3.432,-0.043 5.267,0.301 -0.42,0.777 -0.876,1.543 -1.378,2.293 -1.437,-0.3 -2.934,-0.37 -4.394,-0.27 -3.648,0.25 -7.155,1.527 -10.288,3.274 -4.485,2.5 -8.946,5.886 -11.703,10.128 -0.696,-0.026 -1.392,-0.071 -2.087,-0.143 C -9.759,6.678 -4.205,2.511 0,0"/>
                            </g>
                            <g id="g4214" transform="translate(101.2682,87.2429)">
                                <path id="path4212" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -2.649,0.234 -5.292,0.533 -7.941,1.065 -5.229,1.05 -10.344,2.578 -15.171,4.773 -5.147,2.34 -9.866,5.422 -14.245,8.881 -4.062,3.209 -8.638,6.773 -11.578,11.087 -0.107,-0.664 -0.195,-1.331 -0.253,-2.001 2.337,-3.252 5.967,-5.999 8.839,-8.456 4.63,-3.962 9.653,-7.544 15.179,-10.306 6.744,-3.37 14.722,-5.867 22.668,-6.87 0.074,0.049 0.151,0.093 0.225,0.142 C -1.481,-1.153 -0.724,-0.589 0,0"/>
                            </g>
                            <g id="g4218" transform="translate(78.5085,95.5664)">
                                <path id="path4216" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 6.915,-3.182 14.434,-5.559 22.076,-6.459 0.832,-0.098 1.668,-0.178 2.506,-0.244 2.725,2.622 4.825,5.668 6.265,8.946 -2.879,-0.122 -5.735,0.031 -8.593,0.437 -6.56,0.932 -12.828,3.002 -18.77,5.772 -6.162,2.874 -11.957,6.616 -16.686,11.374 -2.527,2.543 -4.775,5.428 -6.635,8.443 -0.326,0.529 -0.634,1.081 -0.94,1.639 -2.234,-2.902 -3.838,-6.148 -4.774,-9.553 1.481,-2.178 3.138,-4.225 5.008,-6.165 C -14.768,8.2 -7.679,3.533 0,0"/>
                            </g>
                            <g id="g4222" transform="translate(99.7737,119.6418)">
                                <path id="path4220" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -2.359,0.748 -4.763,0.846 -7.069,1.915 -2.357,1.093 -4.475,2.836 -7.023,3.465 -1.263,0.312 -1.791,-1.306 -0.981,-2.026 2.059,-1.834 5.344,-3.089 7.919,-4.201 2.094,-0.905 4.929,-1.581 7.09,-0.576 C 0.487,-1.167 0.748,-0.237 0,0"/>
                            </g>
                            <g id="g4226" transform="translate(68.7221,88.2092)">
                                <path id="path4224" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.527,0.194 -1.075,0.327 -1.636,0.398 -0.592,0.075 -0.928,-0.764 -0.323,-0.989 0.443,-0.164 0.87,-0.361 1.257,-0.625 0.42,-0.286 0.848,-0.374 1.324,-0.544 0.44,-0.157 0.808,0.272 0.571,0.652 C 0.885,-0.611 0.582,-0.214 0,0"/>
                            </g>
                            <g id="g4230" transform="translate(85.0956,83.5625)">
                                <path id="path4228" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -3.097,1.14 -6.144,3.172 -9.422,3.71 -0.739,0.121 -1.449,-0.769 -0.916,-1.371 2.309,-2.61 6.341,-3.879 9.612,-5.042 0.275,-0.097 0.55,-0.188 0.824,-0.281 1.898,0.203 3.785,0.582 5.635,1.138 C 3.795,-1.291 1.872,-0.69 0,0"/>
                            </g>
                            <g id="g4234" transform="translate(63.3527,91.5483)">
                                <path id="path4232" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.968,-0.236 1.269,0.952 0.724,1.496 -1.163,3.376 -3.9,4.535 -6.058,6.172 -7.48,7.25 -8.886,8.357 -10.253,9.502 -9.855,8.163 -9.35,6.843 -8.735,5.551 -6.176,3.014 -3.185,0.775 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(68.6031,85.3042)" id="g4240">
                        <path id="path4242" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.013,-0.027 -0.321,0.096 -0.87,0.343 -0.554,0.237 -1.325,0.648 -2.247,1.205 -1.84,1.117 -4.235,2.962 -6.348,5.503 -1.05,1.273 -1.926,2.584 -2.636,3.823 -0.68,1.256 -1.23,2.422 -1.583,3.442 -0.202,0.501 -0.331,0.972 -0.455,1.382 -0.131,0.408 -0.218,0.766 -0.276,1.062 -0.128,0.589 -0.184,0.916 -0.155,0.923 0.08,0.019 0.37,-1.28 1.17,-3.257 0.385,-0.993 0.956,-2.129 1.643,-3.355 0.719,-1.21 1.59,-2.491 2.623,-3.744 2.08,-2.5 4.402,-4.352 6.18,-5.522 C -1.171,0.634 0.036,0.073 0,0"/>
                        </g>
                        <g transform="translate(110.0421,104.475)" id="g4244">
                        <path id="path4246" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 194, 236);" d="m 0,0 c 0.008,-0.149 -0.77,-0.3 -2.2,-0.447 -0.363,-0.033 -0.76,-0.07 -1.192,-0.109 -0.436,-0.023 -0.91,-0.011 -1.42,-0.014 -1.019,0.016 -2.189,-0.021 -3.467,0.135 -0.642,0.062 -1.314,0.127 -2.013,0.194 -0.7,0.076 -1.416,0.23 -2.164,0.352 -1.505,0.219 -3.068,0.651 -4.723,1.073 -3.274,0.963 -6.795,2.324 -10.275,4.187 -3.46,1.904 -6.521,4.114 -9.114,6.334 -1.256,1.158 -2.47,2.233 -3.474,3.376 -0.51,0.561 -1.03,1.077 -1.474,1.622 -0.438,0.549 -0.858,1.077 -1.261,1.582 -0.827,0.987 -1.433,1.988 -2.002,2.834 -0.276,0.429 -0.544,0.82 -0.763,1.198 -0.202,0.383 -0.388,0.736 -0.558,1.058 -0.656,1.279 -0.952,2.013 -0.824,2.088 0.129,0.075 0.67,-0.516 1.529,-1.633 0.214,-0.285 0.448,-0.597 0.702,-0.935 0.264,-0.336 0.575,-0.685 0.89,-1.07 0.647,-0.759 1.318,-1.669 2.196,-2.563 0.422,-0.461 0.864,-0.942 1.323,-1.443 0.462,-0.499 0.996,-0.969 1.515,-1.485 1.022,-1.051 2.239,-2.037 3.482,-3.112 2.567,-2.056 5.536,-4.127 8.86,-5.957 3.345,-1.789 6.699,-3.149 9.821,-4.181 1.579,-0.456 3.069,-0.938 4.507,-1.222 0.715,-0.155 1.4,-0.346 2.07,-0.461 C -9.358,1.288 -8.714,1.18 -8.097,1.077 -6.869,0.829 -5.74,0.762 -4.752,0.634 -4.257,0.579 -3.796,0.509 -3.37,0.47 -2.947,0.442 -2.558,0.415 -2.203,0.391 -0.798,0.28 -0.008,0.148 0,0"/>
                        </g>
                        <g transform="translate(93.5259,82.8029)" id="g4248">
                        <path id="path4250" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.003,0.007 0.06,0.047 0.187,0.118 0.335,0.2 0.522,0.302 0.754,0.429 1.285,0.708 2.024,1.097 2.969,1.594 L 3.017,1.605 C 2.998,1.621 2.924,1.57 2.934,1.538 l 0.04,0.061 C 3.082,1.664 3.203,1.738 3.328,1.814 L 3.352,1.829 3.382,1.826 H 3.386 L 3.333,1.814 c 1.922,1.207 4.611,3.166 7.159,6.303 l 0.132,0.055 c -0.04,0.03 -0.177,-0.068 -0.16,-0.13 l 0.033,0.079 c 2.244,2.775 4.365,6.541 5.438,11.097 1.097,4.526 1.091,9.837 -0.564,14.985 l 0.182,-0.147 -0.004,0.001 -0.139,0.014 -0.045,0.139 c -0.392,1.224 -0.833,2.525 -1.457,3.762 -2.695,5.634 -7.367,9.754 -12.134,12.211 -4.799,2.491 -9.707,3.406 -13.775,3.46 -4.093,0.064 -7.359,-0.719 -9.527,-1.42 -1.084,-0.362 -1.917,-0.677 -2.468,-0.923 -0.26,-0.108 -0.469,-0.195 -0.634,-0.263 -0.144,-0.057 -0.22,-0.083 -0.223,-0.076 0,0 1.102,0.646 3.272,1.421 2.164,0.754 5.448,1.591 9.583,1.566 4.109,-0.015 9.082,-0.908 13.954,-3.412 2.425,-1.249 4.823,-2.882 6.954,-4.96 2.14,-2.062 4.023,-4.566 5.386,-7.417 0.635,-1.259 1.083,-2.583 1.481,-3.829 l -0.184,0.154 0.005,-0.001 0.139,-0.015 0.042,-0.132 C 17.457,29.102 17.446,23.713 16.314,19.127 15.205,14.513 13.03,10.712 10.733,7.928 l 0.034,0.079 C 10.781,7.942 10.639,7.842 10.597,7.869 l 0.132,0.055 C 8.122,4.777 5.382,2.838 3.422,1.667 L 3.396,1.651 3.368,1.654 3.364,1.655 3.417,1.667 C 3.29,1.593 3.165,1.521 3.055,1.458 l 0.04,0.061 C 3.102,1.483 3.025,1.429 3.002,1.443 L 3.051,1.454 C 2.086,0.984 1.332,0.617 0.79,0.353 0.55,0.241 0.358,0.151 0.204,0.08 0.072,0.02 0.003,-0.007 0,0"/>
                        </g>
                        <g transform="translate(55.9629,122.9695)" id="g4252">
                        <path id="path4254" style="fill:#ff735d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.167,0.296 0.354,0.582 0.532,0.873 -13.288,5.373 -20.366,6.888 -22.506,6.189 -0.179,-0.058 -0.304,-0.13 -0.334,-0.194 l -0.04,-0.074 c -0.052,-0.09 0.002,-0.286 0.028,-0.366 0.476,-1.487 4.975,-7.775 42.925,-26.274 22.846,-11.138 41.133,-16.923 47.413,-17.61 0.77,-0.084 1.228,0.799 0.686,1.325 -2.21,2.145 -7.287,5.895 -15.401,10.799 -0.112,-0.23 -0.213,-0.464 -0.333,-0.691 6.655,-4.069 10.5,-7.084 9.96,-8.084 -1.083,-2.007 -19.412,4.859 -40.939,15.337 C 0.465,-8.291 -16.108,1.83 -15.025,3.837 -14.431,4.938 -8.646,3.367 0,0"/>
                        </g>
                        <g transform="translate(110.4726,100.4364)" id="g4256">
                        <path id="path4258" style="fill:#ff735d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.073,-0.201 -0.162,-0.398 -0.239,-0.598 10.378,-6.22 17.246,-11.387 18.053,-13.903 0.269,-0.84 0.049,-1.618 -0.605,-2.137 -0.666,-0.528 -2.691,-2.136 -18.434,3.148 -10.143,3.404 -22.149,8.408 -33.807,14.092 -4.911,2.394 -10.094,4.992 -15.113,7.631 -14.481,7.612 -27.614,15.574 -29.046,20.046 -0.313,0.978 -0.095,1.702 0.154,2.146 0.232,0.455 0.723,1.051 1.75,1.386 3.826,1.25 14.037,-2.089 24.646,-6.408 0.086,0.116 0.163,0.238 0.251,0.353 -17.981,7.133 -30.753,10.067 -32.771,7.344 -4.347,-5.867 18.959,-20.616 48.823,-35.152 C -6.475,-16.588 20.693,-23.783 22.983,-19.539 24.503,-16.723 15.17,-9.074 0,0"/>
                        </g>
                        <g transform="translate(112.4749,92.7629)" id="g4260">
                        <path id="path4262" style="fill:#ff735d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.163,-0.169 -1.811,0.011 -1.867,0.021 -0.728,0.136 -1.464,0.405 -2.169,0.623 -1.926,0.596 -3.826,1.287 -5.694,2.028 -2.643,1.048 -5.192,2.437 -7.966,3.138 -0.314,0.079 -0.42,-0.312 -0.192,-0.469 4.43,-3.05 10.97,-5.377 16.324,-6.427 0.763,-0.15 1.938,-0.474 2.417,0.354 C 1.17,-0.185 0.969,0.249 0.419,0.535 0.06,0.721 -0.266,0.276 0,0"/>
                        </g>
                        <g id="g4264">
                        <g id="g4266"/>
                        <g id="g4282">
                            <g style="opacity:0.30000299" id="g4280" clip-path="url(#clipPath4270)">
                            <g id="g4274" transform="translate(55.9629,122.9695)">
                                <path id="path4272" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.167,0.296 0.354,0.582 0.532,0.873 -13.288,5.373 -20.366,6.888 -22.506,6.189 -0.179,-0.058 -0.304,-0.13 -0.334,-0.194 l -0.04,-0.074 c -0.052,-0.09 0.002,-0.286 0.028,-0.366 0.476,-1.487 4.975,-7.775 42.925,-26.274 22.846,-11.138 41.133,-16.923 47.413,-17.61 0.77,-0.084 1.228,0.799 0.686,1.325 -2.21,2.145 -7.287,5.895 -15.401,10.799 -0.112,-0.23 -0.213,-0.464 -0.333,-0.691 6.655,-4.069 10.5,-7.084 9.96,-8.084 -1.083,-2.007 -19.412,4.859 -40.939,15.337 C 0.465,-8.291 -16.108,1.83 -15.025,3.837 -14.431,4.938 -8.646,3.367 0,0"/>
                            </g>
                            <g id="g4278" transform="translate(112.4749,92.7629)">
                                <path id="path4276" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.163,-0.169 -1.811,0.011 -1.867,0.021 -0.728,0.136 -1.464,0.405 -2.169,0.623 -1.926,0.596 -3.826,1.287 -5.694,2.028 -2.643,1.048 -5.192,2.437 -7.966,3.138 -0.314,0.079 -0.42,-0.312 -0.192,-0.469 4.43,-3.05 10.97,-5.377 16.324,-6.427 0.763,-0.15 1.938,-0.474 2.417,0.354 C 1.17,-0.185 0.969,0.249 0.419,0.535 0.06,0.721 -0.266,0.276 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g4284">
                        <g id="g4286"/>
                        <g id="g4298">
                            <g style="opacity:0.30000299" id="g4296" clip-path="url(#clipPath4290)">
                            <g id="g4294" transform="translate(110.4726,100.4364)">
                                <path id="path4292" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.073,-0.201 -0.162,-0.398 -0.239,-0.598 10.378,-6.22 17.246,-11.387 18.053,-13.903 0.269,-0.84 0.049,-1.618 -0.605,-2.137 -0.666,-0.528 -2.691,-2.136 -18.434,3.148 -10.143,3.404 -22.149,8.408 -33.807,14.092 -4.911,2.394 -10.094,4.992 -15.113,7.631 -14.481,7.612 -27.614,15.574 -29.046,20.046 -0.313,0.978 -0.095,1.702 0.154,2.146 0.232,0.455 0.723,1.051 1.75,1.386 3.826,1.25 14.037,-2.089 24.646,-6.408 0.086,0.116 0.163,0.238 0.251,0.353 -17.981,7.133 -30.753,10.067 -32.771,7.344 -4.347,-5.867 18.959,-20.616 48.823,-35.152 C -6.475,-16.588 20.693,-23.783 22.983,-19.539 24.503,-16.723 15.17,-9.074 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                    </g>
                    </g>
                    <g id="g4300">
                    <g clip-path="url(#clipPath4306)" id="g4302">
                        <g transform="translate(363.5812,432.661)" id="g4308"/>
                        <g transform="translate(384.2951,430.3964)" id="g4312"/>
                        <g transform="translate(405.1583,430.3666)" id="g4316"/>
                        <g transform="translate(413.0871,423.5419)" id="g4320"/>
                        <g transform="translate(430.0451,425.807)" id="g4324"/>
                        <g transform="translate(439.1056,425.807)" id="g4328"/>
                        <g transform="translate(448.1652,425.807)" id="g4332"/>
                        <g transform="translate(275.9406,396.8891)" id="g4336"/>
                        <g transform="translate(296.1305,400.6459)" id="g4340"/>
                        <g transform="translate(307.3234,405.849)" id="g4344"/>
                        <g transform="translate(315.3429,405.849)" id="g4348"/>
                        <g transform="translate(327.4757,405.6986)" id="g4352"/>
                        <g transform="translate(331.005,397.2836)" id="g4356"/>
                        <g transform="translate(344.8278,396.0814)" id="g4360"/>
                        <g transform="translate(356.8107,401.3783)" id="g4364"/>
                        <g transform="translate(361.7296,401.5287)" id="g4368"/>
                        <g transform="translate(384.7736,400.6459)" id="g4372"/>
                        <g transform="translate(395.5353,398.7865)" id="g4376"/>
                        <g transform="translate(408.756,400.9652)" id="g4380"/>
                        <g transform="translate(416.5304,401.5287)" id="g4384"/>
                        <g transform="translate(441.8663,401.3783)" id="g4388"/>
                        <g transform="translate(452.007,400.6459)" id="g4392"/>
                        <g transform="translate(463.4445,396.0814)" id="g4396"/>
                        <g transform="translate(473.6222,405.473)" id="g4400"/>
                        <g transform="translate(484.9288,400.6459)" id="g4404"/>
                        <g transform="translate(500.0294,405.6986)" id="g4408"/>
                        <g transform="translate(513.0812,401.3783)" id="g4412"/>
                        <g transform="translate(523.2589,400.6459)" id="g4416"/>
                    </g>
                    </g>
                    <g id="g4420">
                    <g clip-path="url(#clipPath4426)" id="g4422">
                        <g transform="translate(352.7482,43.9779)" id="g4428">
                        <path id="path4430" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -4.161,0.915 -8.321,1.829 -12.482,2.744 -13.116,2.883 -13.325,1.896 -12.69,1.757 -8.529,0.842 -4.369,-0.073 -0.208,-0.987 0.426,-1.127 0.635,-0.14 0,0"/>
                        </g>
                        <g transform="translate(353.3402,46.6713)" id="g4432">
                        <path id="path4434" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -4.161,0.915 -8.321,1.829 -12.482,2.744 -13.116,2.883 -13.325,1.896 -12.69,1.757 -8.529,0.842 -4.369,-0.073 -0.208,-0.987 0.426,-1.127 0.635,-0.139 0,0"/>
                        </g>
                        <g transform="translate(369.2813,34.58)" id="g4436">
                        <path id="path4438" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 2.949,13.414 -19.971,4.39 -2.874,-13.073 -0.053,-0.346 z"/>
                        </g>
                        <g transform="translate(368.5253,35.7582)" id="g4440">
                        <path id="path4442" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 2.532,11.49 -18.011,3.951 -2.529,-11.49 z"/>
                        </g>
                        <g transform="translate(365.9493,48.9516)" id="g4444">
                        <path id="path4446" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -0.845,0.178 -2.647,-12.564 0.845,-0.178 z"/>
                        </g>
                        <g transform="translate(351.4388,45.8964)" id="g4448">
                        <path id="path4450" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -0.178,-0.845 18.877,-3.978 0.178,0.845 z"/>
                        </g>
                        <g transform="translate(359.5654,50.2968)" id="g4452">
                        <path id="path4454" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -0.845,0.178 -2.647,-12.564 0.845,-0.178 z"/>
                        </g>
                        <g transform="translate(324.339,51.786)" id="g4456">
                        <path id="path4458" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 4.161,-0.915 8.321,-1.829 12.482,-2.744 0.634,-0.139 0.843,0.848 0.208,0.987 C 8.529,-0.842 4.369,0.073 0.208,0.987 -0.426,1.127 -0.635,0.14 0,0"/>
                        </g>
                        <g transform="translate(323.7469,49.0925)" id="g4460">
                        <path id="path4462" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 4.161,-0.915 8.321,-1.829 12.482,-2.744 0.634,-0.139 0.843,0.848 0.208,0.987 C 8.529,-0.842 4.369,0.073 0.208,0.987 -0.426,1.127 -0.635,0.14 0,0"/>
                        </g>
                        <g transform="translate(331.9271,72.2067)" id="g4464">
                        <path id="path4466" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 5.066,-9.678 11.147,-2.66 8.447,6.807 z"/>
                        </g>
                        <g transform="translate(343.8955,65.7116)" id="g4468">
                        <path id="path4470" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -0.921,0.181 1.746,8.934 0.92,-0.18 z"/>
                        </g>
                        <g transform="translate(346.448,73.5562)" id="g4472">
                        <path id="path4474" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.959,-0.613 -2.234,-0.333 -2.848,0.626 -3.461,1.585 -3.181,2.86 -2.222,3.474 -1.262,4.088 0.013,3.807 0.626,2.848 1.24,1.889 0.959,0.614 0,0"/>
                        </g>
                        <g transform="translate(336.9934,62.529)" id="g4476">
                        <path id="path4478" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -0.372,-1.692 -3.095,-1.98 -4.069,-18.507 1.62,-2.532 -0.294,-1.338 12.068,-2.642 0.337,1.533 2.465,1.577 3.912,18.565 -1.809,2.871 0.352,1.492 z"/>
                        </g>
                        <g transform="translate(307.8058,61.184)" id="g4480">
                        <path id="path4482" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -2.949,-13.414 19.971,-4.39 2.874,13.073 0.053,0.345 z"/>
                        </g>
                        <g transform="translate(308.5618,60.0057)" id="g4484">
                        <path id="path4486" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -2.532,-11.49 18.011,-3.951 2.529,11.49 z"/>
                        </g>
                        <g transform="translate(311.1378,46.8123)" id="g4488">
                        <path id="path4490" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 0.845,-0.178 3.492,12.386 2.647,12.564 Z"/>
                        </g>
                        <g transform="translate(325.6483,49.8676)" id="g4492">
                        <path id="path4494" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 0.178,0.845 -18.699,4.823 -18.878,3.978 Z"/>
                        </g>
                        <g transform="translate(317.5217,45.4671)" id="g4496">
                        <path id="path4498" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 0.845,-0.178 3.492,12.386 2.647,12.564 Z"/>
                        </g>
                        <g transform="translate(349.4935,55.2964)" id="g4500">
                        <path id="path4502" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.024,-0.114 -3.638,0.552 -8.07,1.486 -4.435,0.934 -8.009,1.783 -7.985,1.897 0.024,0.113 3.637,-0.552 8.071,-1.486 C -3.551,0.963 0.024,0.113 0,0"/>
                        </g>
                        <g transform="translate(333.5264,58.8572)" id="g4504">
                        <path id="path4506" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.028,-0.006 -0.048,-0.494 -0.209,-1.372 -0.184,-0.945 -0.428,-2.196 -0.723,-3.71 -0.629,-3.128 -1.526,-7.443 -2.543,-12.204 -0.087,-0.41 -0.174,-0.817 -0.256,-1.197 l -0.161,0.248 c 4.49,-0.95 8.499,-1.82 11.382,-2.466 1.388,-0.319 2.532,-0.583 3.4,-0.782 0.798,-0.193 1.235,-0.313 1.229,-0.34 -0.006,-0.027 -0.453,0.04 -1.262,0.186 -0.875,0.167 -2.028,0.388 -3.426,0.655 -2.899,0.573 -6.918,1.394 -11.41,2.337 l -0.206,0.043 0.044,0.206 c 0.081,0.381 0.168,0.788 0.256,1.198 1.015,4.761 1.959,9.066 2.662,12.179 0.348,1.502 0.636,2.743 0.854,3.681 C -0.159,-0.471 -0.028,0.006 0,0"/>
                        </g>
                        <g transform="translate(343.1572,35.2381)" id="g4508">
                        <path id="path4510" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.024,-0.114 -2.749,0.364 -6.086,1.068 -9.425,1.771 -12.111,2.433 -12.087,2.547 -12.063,2.66 -9.338,2.182 -6,1.479 -2.663,0.776 0.024,0.114 0,0"/>
                        </g>
                        <g transform="translate(347.7563,58.3841)" id="g4512">
                        <path id="path4514" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.024,-0.114 -2.566,0.326 -5.677,0.981 -3.112,0.656 -5.614,1.28 -5.59,1.393 0.024,0.114 2.565,-0.326 5.677,-0.981 C -2.479,0.737 0.024,0.114 0,0"/>
                        </g>
                        <g transform="translate(348.2455,59.9536)" id="g4516">
                        <path id="path4518" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.024,-0.114 -2.561,0.325 -5.665,0.979 -3.106,0.654 -5.604,1.277 -5.58,1.391 0.024,0.113 2.56,-0.325 5.666,-0.98 C -2.474,0.736 0.024,0.114 0,0"/>
                        </g>
                        <g transform="translate(358.3817,40.7021)" id="g4520">
                        <path id="path4522" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.063,0.098 1.83,1.425 4.228,2.963 6.626,4.503 8.62,5.671 8.683,5.573 8.746,5.476 6.853,4.149 4.455,2.61 2.057,1.071 0.063,-0.098 0,0"/>
                        </g>
                        <g transform="translate(355.417,41.7142)" id="g4524">
                        <path id="path4526" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.065,0.096 0.944,0.893 2.253,1.778 3.563,2.665 4.677,3.305 4.742,3.209 4.808,3.113 3.799,2.316 2.489,1.43 1.18,0.544 0.065,-0.096 0,0"/>
                        </g>
                        <g transform="translate(311.6278,48.9179)" id="g4528">
                        <path id="path4530" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.05,0.105 2.526,1.441 5.752,2.984 8.98,4.528 11.636,5.694 11.687,5.589 11.737,5.484 9.161,4.149 5.934,2.605 2.707,1.062 0.05,-0.105 0,0"/>
                        </g>
                        <g transform="translate(309.3794,49.6903)" id="g4532">
                        <path id="path4534" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.045,0.112 1.323,0.749 2.963,1.615 4.606,2.475 5.906,3.241 5.973,3.141 6.036,3.049 4.825,2.116 3.159,1.242 1.496,0.365 0.04,-0.105 0,0"/>
                        </g>
                    </g>
                    </g>
                    <g id="g4536">
                    <g clip-path="url(#clipPath4542)" id="g4538">
                        <g transform="translate(369.9864,131.2736)" id="g4544">
                        <path id="path4546" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c 0,0 3.049,-8.339 -1.589,-19.468 -4.639,-11.128 -6.844,-18.165 -13.957,-18.998 -7.113,-0.833 -19.463,-0.418 -19.463,-0.418 l -0.608,20.243 z"/>
                        </g>
                        <g id="g4548">
                        <g id="g4550"/>
                        <g id="g4562">
                            <g style="opacity:0.30000299" id="g4560" clip-path="url(#clipPath4554)">
                            <g id="g4558" transform="translate(369.9864,131.2736)">
                                <path id="path4556" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c 0,0 3.049,-8.339 -1.589,-19.468 -4.639,-11.128 -6.844,-18.165 -13.957,-18.998 -7.113,-0.833 -19.463,-0.418 -19.463,-0.418 l -0.608,20.243 z"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(321.5341,127.6336)" id="g4564">
                        <path id="path4566" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c 0,0 9.532,-13.666 12.165,-15.708 l 1.504,-2.025 c 2.098,0.808 24.116,7.505 25.227,9.351 1.11,1.846 0.396,3.637 0.396,3.637 L 42.657,-5.894 48.452,3.64 23.42,0.622 c 0,0 2.642,2.314 1.043,3.165 C 22.863,4.638 0,0 0,0"/>
                        </g>
                        <g transform="translate(334.9771,92.3894)" id="g4568">
                        <path id="path4570" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c 0,0 -3.99,5.389 -7.209,14.833 -3.219,9.443 -6.234,20.411 -6.234,20.411 L 0.226,17.511 Z"/>
                        </g>
                        <g id="g4572">
                        <g id="g4574"/>
                        <g id="g4586">
                            <g style="opacity:0.30000299" id="g4584" clip-path="url(#clipPath4578)">
                            <g id="g4582" transform="translate(360.4298,119.2517)">
                                <path id="path4580" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="M 0,0 1.1,-11.463 3.761,2.488 0.396,3.637 C 0.396,3.637 0.941,1.352 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(609.1771,348.0816)" id="g4588">
                        <path id="path4590" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c 0,0 1.751,-4.79 -0.913,-11.181 -2.664,-6.392 -3.93,-10.433 -8.016,-10.911 -4.085,-0.479 -11.178,-0.241 -11.178,-0.241 l -0.349,11.626 z"/>
                        </g>
                        <g id="g4592">
                        <g id="g4594"/>
                        <g id="g4606">
                            <g style="opacity:0.30000299" id="g4604" clip-path="url(#clipPath4598)">
                            <g id="g4602" transform="translate(609.1771,348.0816)">
                                <path id="path4600" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c 0,0 1.751,-4.79 -0.913,-11.181 -2.664,-6.392 -3.93,-10.433 -8.016,-10.911 -4.085,-0.479 -11.178,-0.241 -11.178,-0.241 l -0.349,11.626 z"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(581.349,345.991)" id="g4608">
                        <path id="path4610" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c 0,0 5.475,-7.849 6.987,-9.022 l 0.864,-1.163 c 1.204,0.464 13.85,4.31 14.488,5.371 0.638,1.06 0.228,2.089 0.228,2.089 L 24.5,-3.385 27.828,2.091 13.451,0.357 3.559,2.331 Z"/>
                        </g>
                        <g transform="translate(589.0698,325.7488)" id="g4612">
                        <path id="path4614" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c 0,0 -2.292,3.095 -4.141,8.519 -1.848,5.424 -3.58,11.723 -3.58,11.723 L 0.13,10.057 Z"/>
                        </g>
                        <g id="g4616">
                        <g id="g4618"/>
                        <g id="g4630">
                            <g style="opacity:0.30000299" id="g4628" clip-path="url(#clipPath4622)">
                            <g id="g4626" transform="translate(603.6883,341.1769)">
                                <path id="path4624" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="M 0,0 0.632,-6.584 2.16,1.429 0.228,2.089 C 0.228,2.089 0.54,0.776 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(250.5817,322.1134)" id="g4632">
                        <path id="path4634" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="M 0,0 5.319,8.259 17.553,0.015 28.989,4.802 16.852,-3.477 7.713,-5.304 Z"/>
                        </g>
                        <g transform="translate(255.9008,343.1386)" id="g4636">
                        <path id="path4638" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="M 0,0 -5.319,-7.447 V -21.025 L 0,-12.766 Z"/>
                        </g>
                        <g id="g4640">
                        <g id="g4642"/>
                        <g id="g4654">
                            <g style="opacity:0.30000299" id="g4652" clip-path="url(#clipPath4646)">
                            <g id="g4650" transform="translate(255.9008,343.1386)">
                                <path id="path4648" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="M 0,0 -5.319,-7.447 V -21.025 L 0,-12.766 Z"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(262.5497,345.7982)" id="g4656">
                        <path id="path4658" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c -1.33,-0.266 -6.649,-2.66 -6.649,-2.66 v -12.765 l 12.234,-8.245 11.436,4.787 c 0.483,1.171 1.064,7.041 1.064,7.041 z"/>
                        </g>
                        <g transform="translate(580.0305,45.111)" id="g4660">
                        <path id="path4662" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="M 0,0 -2.418,11.205 14.48,14.484 19.975,27.866 16.78,11.024 10.741,1.98 Z"/>
                        </g>
                        <g transform="translate(567.0871,66.8554)" id="g4664">
                        <path id="path4666" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 1.748,-10.534 11.195,-11.21 -2.418,11.204 z"/>
                        </g>
                        <g id="g4668">
                        <g id="g4670"/>
                        <g id="g4682">
                            <g style="opacity:0.30000299" id="g4680" clip-path="url(#clipPath4674)">
                            <g id="g4678" transform="translate(567.0871,66.8554)">
                                <path id="path4676" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 1.748,-10.534 11.195,-11.21 -2.418,11.204 z"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(570.3838,74.5331)" id="g4684">
                        <path id="path4686" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c -0.879,-1.316 -3.297,-7.678 -3.297,-7.678 l 10.526,-10.539 16.898,3.279 5.495,13.382 c -0.567,1.364 -4.927,6.689 -4.927,6.689 z"/>
                        </g>
                        <g transform="translate(147.7661,35.7267)" id="g4688">
                        <path id="path4690" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="M 0,0 9.876,2.733 7.74,8.96 -0.71,22.017 -10.974,14.844 -8.919,6.819 Z"/>
                        </g>
                        <g transform="translate(136.7923,50.5707)" id="g4692">
                        <path id="path4694" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 12.758,-7.317 5.956,1.433 -8.45,13.057 z"/>
                        </g>
                        <g id="g4696">
                        <g id="g4698"/>
                        <g id="g4710">
                            <g style="opacity:0.30000299" id="g4708" clip-path="url(#clipPath4702)">
                            <g id="g4706" transform="translate(147.7661,35.7267)">
                                <path id="path4704" style="fill-opacity: 1; fill-rule: evenodd; stroke: none; fill: rgb(0, 161, 223);" d="M 0,0 1.784,7.527 7.74,8.96 9.876,2.733 Z"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(564.9634,369.5465)" id="g4712">
                        <path id="path4714" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 6.648,1.84 c 0.577,0.159 0.9,0.772 0.706,1.338 L 5.978,7.19 C 5.95,7.27 5.913,7.346 5.867,7.417 l -6.37,9.844 c -0.32,0.494 -0.985,0.624 -1.467,0.287 l -7.06,-4.934 c -0.355,-0.248 -0.519,-0.69 -0.411,-1.109 l 1.44,-5.625 c 0.058,-0.226 0.19,-0.426 0.375,-0.568 L -0.908,0.176 C -0.649,-0.022 -0.313,-0.087 0,0"/>
                        </g>
                        <g transform="translate(556.7637,380.9336)" id="g4716">
                        <path id="path4718" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 8.827,-5.062 c 0.23,-0.132 0.502,-0.171 0.759,-0.109 l 3.124,0.751 c 0.696,0.168 1.018,0.973 0.629,1.574 L 7.696,5.874 C 7.377,6.367 6.711,6.498 6.229,6.161 L -0.078,1.752 C -0.702,1.316 -0.66,0.379 0,0"/>
                        </g>
                        <g id="g4720">
                        <g id="g4722"/>
                        <g id="g4734">
                            <g style="opacity:0.30000299" id="g4732" clip-path="url(#clipPath4726)">
                            <g id="g4730" transform="translate(564.8708,371.1177)">
                                <path id="path4728" style="fill-opacity: 1; fill-rule: evenodd; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 0.931,3.927 c 0.09,0.381 0.387,0.679 0.767,0.771 L 5.11,5.518 C 5.631,5.643 6.162,5.352 6.336,4.845 L 7.446,1.607 C 7.641,1.041 7.318,0.428 6.741,0.269 L 1.288,-1.241 C 0.526,-1.451 -0.182,-0.769 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(247.1512,372.7775)" id="g4736">
                        <path id="path4738" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 4.406,-6.043 4.232,3.092 7.94,9.203 L 8.703,11.398 3.085,7.89 Z"/>
                        </g>
                        <g transform="translate(255.8546,384.1753)" id="g4740">
                        <path id="path4742" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 -2.558,-10.647 2.493,-3.702 7.939,9.203 z"/>
                        </g>
                        <g id="g4744">
                        <g id="g4746"/>
                        <g id="g4758">
                            <g style="opacity:0.30000299" id="g4756" clip-path="url(#clipPath4750)">
                            <g id="g4754" transform="translate(247.1512,372.7775)">
                                <path id="path4752" style="fill-opacity: 1; fill-rule: evenodd; stroke: none; fill: rgb(0, 161, 223);" d="M 0,0 6.145,0.75 8.638,-2.951 4.406,-6.043 Z"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(199.7439,65.4338)" id="g4760">
                        <path id="path4762" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 0.044,4.033 -5.518,3.991 -2.93,-5.891 1.593,-4.664 3.259,-0.098 z"/>
                        </g>
                        <g transform="translate(192.933,62.903)" id="g4764">
                        <path id="path4766" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="M 0,0 4.159,4.027 1.337,10.555 -1.593,4.664 Z"/>
                        </g>
                        <g id="g4768">
                        <g id="g4770"/>
                        <g id="g4782">
                            <g style="opacity:0.30000299" id="g4780" clip-path="url(#clipPath4774)">
                            <g id="g4778" transform="translate(199.7439,65.4338)">
                                <path id="path4776" style="fill-opacity: 1; fill-rule: evenodd; stroke: none; fill: rgb(0, 161, 223);" d="M 0,0 -2.652,1.496 -5.474,8.024 0.044,4.033 Z"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(700.058,392.6702)" id="g4784">
                        <path id="path4786" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 0.044,4.033 -5.518,3.991 -2.93,-5.891 1.593,-4.664 3.259,-0.098 z"/>
                        </g>
                        <g transform="translate(693.2471,390.1394)" id="g4788">
                        <path id="path4790" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="M 0,0 4.159,4.027 1.337,10.555 -1.593,4.664 Z"/>
                        </g>
                        <g id="g4792">
                        <g id="g4794"/>
                        <g id="g4806">
                            <g style="opacity:0.30000299" id="g4804" clip-path="url(#clipPath4798)">
                            <g id="g4802" transform="translate(700.058,392.6702)">
                                <path id="path4800" style="fill-opacity: 1; fill-rule: evenodd; stroke: none; fill: rgb(0, 161, 223);" d="M 0,0 -2.652,1.496 -5.474,8.024 0.044,4.033 Z"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(113.2137,440.2224)" id="g4808">
                        <path id="path4810" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 0.044,4.033 -5.518,3.991 -2.93,-5.891 1.593,-4.664 3.259,-0.098 z"/>
                        </g>
                        <g transform="translate(106.4027,437.6916)" id="g4812">
                        <path id="path4814" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="M 0,0 4.159,4.027 1.337,10.555 -1.593,4.664 Z"/>
                        </g>
                        <g id="g4816">
                        <g id="g4818"/>
                        <g id="g4830">
                            <g style="opacity:0.30000299" id="g4828" clip-path="url(#clipPath4822)">
                            <g id="g4826" transform="translate(113.2137,440.2224)">
                                <path id="path4824" style="fill-opacity: 1; fill-rule: evenodd; stroke: none; fill: rgb(0, 161, 223);" d="M 0,0 -2.652,1.496 -5.474,8.024 0.044,4.033 Z"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(361.9129,173.0173)" id="g4832">
                        <path id="path4834" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 -12.387,-1.732 -0.748,-1.321 c 0,0 -4.885,-0.762 -5.314,-0.911 l -1.417,-7.085 7.98,-1.044 7.906,6.563 z"/>
                        </g>
                        <g transform="translate(342.0473,161.9681)" id="g4836">
                        <path id="path4838" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c 0.224,-0.149 3.058,-4.922 7.607,-7.16 4.549,-2.237 7.698,-3.041 7.698,-3.041 L 5.042,0.476 Z"/>
                        </g>
                        <g transform="translate(358.1812,172.2917)" id="g4840">
                        <path id="path4842" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 -1.348,-2.695 -6.53,-0.518 -0.829,-3.525 -2.384,-3.11 10.262,-10.677 4.561,6.946 V 0.726 Z"/>
                        </g>
                        <g id="g4844">
                        <g id="g4846"/>
                        <g id="g4858">
                            <g style="opacity:0.30000299" id="g4856" clip-path="url(#clipPath4850)">
                            <g id="g4854" transform="translate(350.3031,169.0783)">
                                <path id="path4852" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 -6.839,-0.025 -1.417,-7.085 5.043,0.476 2.384,3.11 z"/>
                            </g>
                            </g>
                        </g>
                        </g>
                    </g>
                    </g>
                    <g id="g4860">
                    <g clip-path="url(#clipPath4866)" id="g4862">
                        <g transform="translate(643.666,229.2644)" id="g4868">
                        <path id="path4870" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c 3.96,5.378 6.548,15.714 5.318,22.278 -1.231,6.565 -3.655,12.906 -4.279,19.555 -0.257,2.731 0.118,6.051 2.564,7.291 1.998,1.013 4.556,0.022 5.974,-1.711 1.417,-1.734 1.938,-4.019 2.287,-6.231 0.35,-2.213 0.585,-4.493 1.568,-6.505 0.036,1.642 2.015,2.756 3.593,2.302 1.578,-0.455 2.627,-2.031 2.942,-3.643 0.315,-1.612 0.896,-2.723 0.877,-4.621 C 20.792,23.805 19.201,16.125 17.16,11.146 15.119,6.167 9.167,-0.404 3.252,-2.144"/>
                        </g>
                        <g transform="translate(661.1164,241.2591)" id="g4872">
                        <path id="path4874" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(26, 46, 53);" d="m 0,0 c -0.066,-0.058 -0.572,0.488 -1.514,1.203 -0.938,0.716 -2.356,1.553 -4.074,2.085 -1.721,0.523 -3.365,0.625 -4.543,0.557 -1.181,-0.064 -1.906,-0.232 -1.928,-0.147 -0.018,0.053 0.683,0.352 1.895,0.514 1.207,0.166 2.933,0.12 4.729,-0.427 C -3.643,3.232 -2.188,2.302 -1.282,1.488 -0.368,0.674 0.044,0.034 0,0"/>
                        </g>
                        <g transform="translate(664.2945,254.9084)" id="g4876">
                        <path id="path4878" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.056,-0.075 -0.818,0.506 -2.187,1.171 -1.362,0.666 -3.381,1.341 -5.694,1.47 -2.314,0.123 -4.395,-0.33 -5.817,-0.856 -1.429,-0.522 -2.242,-1.029 -2.291,-0.949 -0.02,0.031 0.168,0.179 0.529,0.424 0.355,0.252 0.911,0.555 1.627,0.867 1.425,0.63 3.579,1.162 5.98,1.034 C -5.454,3.028 -3.372,2.267 -2.017,1.498 -1.338,1.114 -0.814,0.759 -0.486,0.473 -0.151,0.194 0.022,0.028 0,0"/>
                        </g>
                        <g transform="translate(655.8471,268.5562)" id="g4880">
                        <path id="path4882" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.023,-0.165 -2.506,0.465 -5.477,-0.243 -2.982,-0.664 -4.942,-2.313 -5.034,-2.174 -0.04,0.046 0.388,0.52 1.238,1.1 0.846,0.58 2.141,1.224 3.679,1.581 1.539,0.352 2.985,0.339 3.999,0.186 C -0.577,0.299 0.016,0.059 0,0"/>
                        </g>
                        <g transform="translate(573.2904,197.1103)" id="g4884">
                        <path id="path4886" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c -0.821,-0.515 -7.201,-7.663 -16.445,-6.601 -9.245,1.063 -14.142,4.995 -18.03,4.129 -3.888,-0.867 -20.694,-14.413 -20.057,-19.303 0.638,-4.889 2.818,-3.807 2.818,-3.807 0,0 3.51,-3.088 6.33,-0.747 0,0 0.452,-1.86 3.349,0.815 2.896,2.675 1.925,6.107 2.88,7.973 0.954,1.866 8.348,5.466 8.348,5.466 0,0 10.602,-10.18 21.897,-9.955 11.296,0.224 15.605,7.532 15.605,7.532 z"/>
                        </g>
                        <g transform="translate(645.4126,192.8638)" id="g4888">
                        <path id="path4890" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c 0.354,-0.216 2.755,-7.358 6.663,-10.271 3.907,-2.913 6.19,-4.108 4.907,-6.774 -1.283,-2.666 -14.775,-17.521 -15.531,-20.821 -0.756,-3.301 1.839,-9.008 -3.271,-9.586 0,0 -1.488,-3.562 -4.155,-2.278 0,0 -1.549,-2.067 -2.878,-0.821 -1.33,1.246 -4.105,3.227 -2.708,8.154 1.397,4.928 13.084,17.186 12.362,19.908 -0.722,2.721 -9.68,10.02 -9.68,10.02 z"/>
                        </g>
                        <g id="g4892">
                        <g id="g4894"/>
                        <g id="g4906">
                            <g style="opacity:0.30000299" id="g4904" clip-path="url(#clipPath4898)">
                            <g id="g4902" transform="translate(631.1213,180.3944)">
                                <path id="path4900" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 3.691,-3.185 13.481,9.942 -2.103,4.125 z"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(579.0037,188.965)" id="g4908">
                        <path id="path4910" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 2.62,-16.949 -1.414,-1.647 c 0,0 -12.67,-2.22 -16.521,-5.278 -3.852,-3.058 -17.372,-16.509 -11.908,-21.896 0,0 5.983,-7.28 9.998,-2.29 0,0 4.371,-1.197 4.709,2.862 0.339,4.059 -1.292,6.402 -1.292,6.402 l 5.357,7.047 c 0,0 32.71,1.769 34.359,5.528 1.648,3.759 1.579,18.942 1.579,18.942 l 1.744,15.36 c 0,0 -6.31,3.414 -16.482,2.001 C 2.576,8.668 0,0 0,0"/>
                        </g>
                        <g transform="translate(637.8285,203.2707)" id="g4912">
                        <path id="path4914" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c 0.519,-0.316 10.008,-11.353 17.163,-12.794 7.155,-1.441 27.048,5.429 31.368,3.652 4.321,-1.777 8.723,-7.023 11.302,-10.861 1.737,-2.584 2.612,-4.938 6.368,-4.022 0,0 3.09,-4.507 6.419,-0.364 0,0 3.389,1.653 2.198,4.937 -1.19,3.283 -13.347,15.732 -20.091,18.733 -6.744,3.001 -7.003,-1.311 -11.363,0.222 -4.36,1.532 -9.319,14.21 -15.223,17.269 0,0 -6.508,0.684 -14.476,-1.797 C 5.697,12.494 0,0 0,0"/>
                        </g>
                        <g id="g4916">
                        <g id="g4918"/>
                        <g id="g4930">
                            <g style="opacity:0.30000299" id="g4928" clip-path="url(#clipPath4922)">
                            <g id="g4926" transform="translate(564.6154,191.4756)">
                                <path id="path4924" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,0 1.753,-10.479 7.414,-14.955 0,0 2.576,0.702 6.387,4.155 L 6.215,3.548 C 4.221,2.065 2.156,0.858 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(567.0456,208.2034)" id="g4932">
                        <path id="path4934" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c -0.024,-0.873 -1.02,-22.954 13.567,-29.647 12.921,-5.929 40.554,-1.017 40.554,-1.017 0,0 9.09,1.071 15.235,5.125 9.606,6.338 12.295,12.29 12.295,12.29 l 18.33,24.266 c 0,0 -9.944,11.589 -21.588,12.146 C 66.749,23.721 65.996,13.527 57.18,11.856 48.364,10.185 39.848,5.986 35.499,11.55 l -4.348,5.563 z"/>
                        </g>
                        <g transform="translate(575.6352,169.4223)" id="g4936">
                        <path id="path4938" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,0 9.891,-6.107 9.542,-11.055 l 4.278,0.47 c 0,0 -1.451,7.744 -9.245,11.532 z"/>
                        </g>
                        <g transform="translate(553.7871,190.9868)" id="g4940">
                        <path id="path4942" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,0 3.783,-4.377 5.04,-9.694 1.045,-4.419 0.947,-5.766 0.947,-5.766 1.452,-0.37 2.993,-0.505 4.607,-0.447 0,0 0.221,8.247 -5.126,15.332 z"/>
                        </g>
                        <g transform="translate(611.2779,217.1351)" id="g4944">
                        <path id="path4946" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,0 7.107,-19.855 -2.816,-40.871 l 4.307,0.324 c 0,0 12.431,22.204 2.182,41.247 z"/>
                        </g>
                        <g transform="translate(654.5097,190.6151)" id="g4948">
                        <path id="path4950" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.01,-0.032 -0.298,0.023 -0.803,0.178 -0.504,0.153 -1.221,0.425 -2.073,0.836 -1.708,0.81 -3.907,2.279 -5.992,4.271 -2.088,1.99 -3.713,4.029 -4.853,5.517 -1.135,1.495 -1.79,2.453 -1.735,2.496 0.058,0.046 0.817,-0.833 2.022,-2.265 1.211,-1.426 2.868,-3.411 4.924,-5.371 2.054,-1.96 4.168,-3.441 5.803,-4.321 C -1.076,0.449 0.028,0.083 0,0"/>
                        </g>
                        <g transform="translate(648.1273,193.9266)" id="g4952">
                        <path id="path4954" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.03,-0.02 -0.193,-0.4 -0.625,-1.074 -0.209,-0.342 -0.486,-0.746 -0.837,-1.194 -0.343,-0.453 -0.725,-0.978 -1.206,-1.509 -0.911,-1.107 -2.13,-2.308 -3.544,-3.57 -1.443,-1.23 -3.112,-2.486 -4.969,-3.644 -1.869,-1.142 -3.74,-2.069 -5.482,-2.815 -1.756,-0.713 -3.37,-1.275 -4.76,-1.624 -0.687,-0.202 -1.323,-0.325 -1.879,-0.443 -0.555,-0.125 -1.037,-0.206 -1.435,-0.254 -0.792,-0.11 -1.231,-0.153 -1.237,-0.118 -0.016,0.097 1.733,0.356 4.451,1.17 1.363,0.39 2.947,0.982 4.672,1.71 1.711,0.762 3.551,1.69 5.396,2.818 1.834,1.143 3.489,2.371 4.931,3.565 1.413,1.226 2.644,2.384 3.58,3.449 1.906,2.1 2.86,3.59 2.944,3.533"/>
                        </g>
                        <g transform="translate(591.1269,198.2695)" id="g4956">
                        <path id="path4958" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.008,-0.049 -0.447,0.055 -1.233,-0.005 -0.78,-0.051 -1.916,-0.336 -3.088,-1.106 -2.422,-1.505 -4.231,-5.261 -5.105,-9.461 -0.837,-4.26 -0.727,-8.239 -0.528,-11.076 0.103,-1.423 0.246,-2.57 0.337,-3.365 0.103,-0.792 0.15,-1.234 0.113,-1.241 -0.034,-0.006 -0.148,0.423 -0.313,1.209 -0.153,0.788 -0.353,1.934 -0.504,3.364 -0.293,2.85 -0.468,6.871 0.384,11.213 0.451,2.162 1.154,4.163 2.054,5.86 0.898,1.698 2.098,3.052 3.364,3.807 1.257,0.769 2.465,1.009 3.278,0.998 0.408,0 0.723,-0.047 0.931,-0.092 C -0.102,0.053 0.004,0.018 0,0"/>
                        </g>
                        <g transform="translate(606.0424,171.584)" id="g4960">
                        <path id="path4962" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.074,0.006 -0.027,1.187 0.066,3.089 0.087,1.902 0.222,4.529 0.082,7.417 -0.14,2.89 -0.63,5.468 -1.201,7.271 -0.559,1.807 -1.09,2.864 -1.007,2.905 0.032,0.017 0.189,-0.234 0.445,-0.706 0.266,-0.467 0.582,-1.18 0.911,-2.083 0.341,-0.9 0.633,-2.011 0.89,-3.257 0.232,-1.251 0.403,-2.64 0.482,-4.103 C 0.809,7.605 0.614,4.962 0.434,3.063 0.246,1.162 0.069,-0.006 0,0"/>
                        </g>
                        <g transform="translate(578.5267,179.2391)" id="g4964">
                        <path id="path4966" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.021,-0.029 -0.316,0.154 -0.834,0.512 -0.524,0.349 -1.236,0.923 -2.065,1.686 -0.836,0.759 -1.749,1.751 -2.673,2.925 -0.903,1.189 -1.806,2.568 -2.593,4.104 -0.771,1.545 -1.347,3.09 -1.769,4.523 -0.398,1.44 -0.656,2.764 -0.771,3.886 -0.124,1.121 -0.164,2.034 -0.134,2.663 0.019,0.629 0.046,0.975 0.082,0.975 0.097,0 0.081,-1.39 0.417,-3.588 0.16,-1.101 0.451,-2.394 0.866,-3.8 0.44,-1.4 1.018,-2.908 1.774,-4.424 0.772,-1.506 1.644,-2.866 2.51,-4.049 0.887,-1.168 1.756,-2.169 2.547,-2.95 C -1.071,0.889 0.058,0.078 0,0"/>
                        </g>
                        <g transform="translate(658.535,226.5447)" id="g4968">
                        <path id="path4970" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.056,-0.069 -1.055,0.776 -2.916,1.737 -1.848,0.945 -4.557,2.104 -7.704,2.499 -3.163,0.327 -6.072,-0.037 -8.064,-0.626 -2.005,-0.587 -3.105,-1.317 -3.153,-1.231 -0.017,0.025 0.238,0.235 0.748,0.541 0.508,0.31 1.285,0.694 2.294,1.041 2.016,0.695 4.987,1.129 8.234,0.792 C -7.304,4.343 -4.576,3.105 -2.738,2.06 -1.82,1.525 -1.115,1.029 -0.661,0.645 -0.203,0.266 0.02,0.024 0,0"/>
                        </g>
                        <g transform="translate(679.9201,202.5692)" id="g4972">
                        <path id="path4974" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.125,0.04 0.654,-1.729 0.405,-3.955 -0.232,-2.228 -1.125,-3.843 -1.239,-3.777 -0.145,0.06 0.502,1.702 0.722,3.833 C 0.128,-1.77 -0.154,-0.028 0,0"/>
                        </g>
                        <g transform="translate(685.7414,202.3485)" id="g4976">
                        <path id="path4978" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.122,0.05 0.792,-1.681 0.735,-3.933 0.694,-6.187 -0.051,-7.886 -0.171,-7.831 -0.32,-7.785 0.177,-6.079 0.214,-3.922 0.271,-1.766 -0.151,-0.04 0,0"/>
                        </g>
                        <g transform="translate(647.2481,168.0534)" id="g4980">
                        <path id="path4982" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.101,-0.121 -1.319,1.023 -3.25,1.399 -1.924,0.416 -3.494,-0.154 -3.539,-0.004 -0.024,0.058 0.335,0.289 0.995,0.465 0.655,0.178 1.62,0.259 2.649,0.049 C -2.118,1.696 -1.263,1.241 -0.73,0.819 -0.194,0.397 0.045,0.044 0,0"/>
                        </g>
                        <g transform="translate(655.9799,179.8957)" id="g4984">
                        <path id="path4986" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(26, 46, 53);" d="m 0,0 c 0.042,-0.05 -0.664,-0.733 -1.915,-1.708 -1.248,-0.975 -3.059,-2.22 -5.181,-3.387 -2.125,-1.165 -4.148,-2.024 -5.641,-2.554 -1.493,-0.532 -2.448,-0.761 -2.468,-0.699 -0.024,0.075 0.887,0.427 2.334,1.042 1.448,0.614 3.423,1.516 5.524,2.667 2.099,1.155 3.92,2.337 5.215,3.229 C -0.836,-0.519 -0.05,0.061 0,0"/>
                        </g>
                        <g transform="translate(569.0985,155.4902)" id="g4988">
                        <path id="path4990" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.133,-0.059 -1.14,2.115 -3.126,4.273 -1.951,2.176 -3.861,3.631 -3.761,3.761 0.066,0.104 2.145,-1.18 4.15,-3.415 C -0.695,2.398 0.141,0.035 0,0"/>
                        </g>
                        <g transform="translate(572.1695,157.3703)" id="g4992">
                        <path id="path4994" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.166,-0.021 -0.391,2.456 -1.548,5.236 -2.69,8.024 -4.277,9.939 -4.144,10.041 -4.065,10.132 -2.251,8.319 -1.066,5.435 0.128,2.556 0.121,-0.009 0,0"/>
                        </g>
                        <g transform="translate(538.5419,194.5617)" id="g4996">
                        <path id="path4998" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.087,0.084 1.738,-1.715 2.893,-4.467 4.047,-7.22 4.172,-9.658 4.052,-9.661 3.887,-9.689 3.533,-7.334 2.413,-4.668 1.296,-2.002 -0.135,-0.098 0,0"/>
                        </g>
                        <g transform="translate(545.1774,193.0815)" id="g5000">
                        <path id="path5002" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.115,0.059 0.933,-1.97 0.733,-4.599 0.557,-7.231 -0.542,-9.122 -0.648,-9.048 -0.796,-8.986 0.049,-7.077 0.214,-4.562 0.408,-2.05 -0.156,-0.04 0,0"/>
                        </g>
                        <g transform="translate(670.1493,215.5927)" id="g5004">
                        <path id="path5006" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.014,-0.012 -0.088,-0.146 -0.295,-0.393 -0.207,-0.247 -0.512,-0.613 -0.962,-1.029 -0.874,-0.854 -2.273,-1.98 -4.226,-2.993 -1.946,-1.017 -4.447,-1.878 -7.307,-2.372 -2.861,-0.475 -6.071,-0.627 -9.402,-0.261 -3.327,0.369 -6.459,1.303 -8.987,2.768 -2.545,1.444 -4.418,3.391 -5.613,5.237 -1.202,1.857 -1.734,3.596 -1.95,4.799 -0.098,0.606 -0.151,1.08 -0.149,1.403 -0.009,0.322 -0.005,0.491 0.013,0.491 0.054,0.004 0.073,-0.674 0.334,-1.853 0.274,-1.172 0.848,-2.85 2.058,-4.636 1.205,-1.775 3.056,-3.642 5.544,-5.024 2.475,-1.404 5.536,-2.304 8.808,-2.667 3.276,-0.361 6.447,-0.226 9.265,0.216 2.82,0.461 5.287,1.27 7.221,2.228 C -1.747,-2.159 -0.089,0.116 0,0"/>
                        </g>
                        <g transform="translate(643.0488,199.4746)" id="g5008">
                        <path id="path5010" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.025,-0.026 -0.376,-0.433 -1.124,-1.149 -0.37,-0.364 -0.834,-0.795 -1.408,-1.256 -0.569,-0.466 -1.196,-1.026 -1.956,-1.557 -0.743,-0.555 -1.563,-1.155 -2.491,-1.729 -0.902,-0.615 -1.926,-1.174 -2.992,-1.781 -2.166,-1.151 -4.63,-2.268 -7.312,-3.185 -2.691,-0.892 -5.329,-1.493 -7.751,-1.886 -1.216,-0.161 -2.369,-0.335 -3.46,-0.391 -1.086,-0.103 -2.102,-0.122 -3.029,-0.13 -0.927,-0.036 -1.765,0.03 -2.5,0.057 -0.736,0.02 -1.366,0.083 -1.88,0.149 -1.029,0.118 -1.594,0.2 -1.59,0.236 0.004,0.035 0.576,0.022 1.605,-0.034 0.514,-0.034 1.143,-0.067 1.875,-0.06 0.731,10e-4 1.563,-0.039 2.482,0.02 0.92,0.032 1.926,0.071 3,0.193 1.079,0.073 2.219,0.262 3.422,0.434 2.393,0.415 4.998,1.024 7.66,1.906 2.653,0.907 5.095,1.998 7.252,3.114 1.061,0.59 2.083,1.129 2.987,1.723 0.929,0.553 1.754,1.13 2.505,1.661 0.768,0.508 1.406,1.044 1.989,1.485 0.588,0.437 1.069,0.844 1.457,1.182 C -0.473,-0.331 -0.025,0.026 0,0"/>
                        </g>
                        <g transform="translate(609.1692,237.0362)" id="g5012">
                        <path id="path5014" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -5.253,-20.839 -27.653,-33.97 -50.031,-29.328 -22.377,4.642 -36.26,25.299 -31.006,46.138 5.253,20.84 27.652,33.97 50.03,29.328 C -8.629,41.496 5.253,20.839 0,0"/>
                        </g>
                        <g transform="translate(609.1693,237.0362)" id="g5016">
                        <path id="path5018" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,0 0.025,0.221 0.099,0.645 0.08,0.441 0.194,1.066 0.341,1.879 0.077,0.414 0.163,0.874 0.258,1.382 0.04,0.517 0.084,1.081 0.132,1.691 0.049,0.612 0.101,1.269 0.156,1.972 0.026,0.704 -0.028,1.456 -0.04,2.251 0.035,1.596 -0.268,3.343 -0.518,5.261 -0.424,1.885 -0.852,3.95 -1.691,6.052 -1.558,4.224 -4.162,8.772 -8.079,12.892 l -0.724,0.79 c -0.258,0.249 -0.533,0.484 -0.801,0.729 -0.541,0.485 -1.087,0.976 -1.64,1.473 -0.53,0.523 -1.178,0.917 -1.776,1.382 -0.612,0.449 -1.23,0.903 -1.855,1.361 -2.632,1.627 -5.457,3.22 -8.617,4.312 -0.787,0.276 -1.572,0.584 -2.379,0.842 -0.822,0.211 -1.651,0.423 -2.486,0.637 l -1.258,0.322 c -0.422,0.101 -0.858,0.145 -1.289,0.22 -0.865,0.136 -1.737,0.274 -2.615,0.412 -3.53,0.34 -7.216,0.482 -10.932,-0.08 -1.875,-0.152 -3.711,-0.669 -5.593,-1.05 -0.917,-0.285 -1.839,-0.572 -2.766,-0.86 -0.938,-0.258 -1.837,-0.642 -2.74,-1.026 l -1.363,-0.568 -0.683,-0.286 -0.657,-0.347 c -0.877,-0.462 -1.759,-0.927 -2.645,-1.394 -1.68,-1.085 -3.43,-2.113 -4.985,-3.441 -6.468,-4.977 -11.43,-12.335 -13.637,-20.701 -2.019,-8.396 -1.126,-17.3 2.62,-24.571 1.824,-3.636 4.119,-6.981 6.891,-9.765 0.65,-0.737 1.431,-1.333 2.134,-2.002 l 1.077,-0.973 1.159,-0.861 c 0.781,-0.558 1.517,-1.172 2.322,-1.673 0.814,-0.489 1.622,-0.975 2.426,-1.458 3.294,-1.774 6.69,-3.222 10.155,-4.033 3.428,-0.969 6.891,-1.276 10.219,-1.448 6.685,-0.1 12.879,1.307 18.102,3.511 5.24,2.207 9.509,5.22 12.768,8.331 3.266,3.114 5.607,6.286 7.116,9.082 0.38,0.698 0.789,1.333 1.085,1.973 0.283,0.645 0.547,1.25 0.793,1.812 0.245,0.56 0.472,1.078 0.68,1.553 0.157,0.492 0.3,0.938 0.428,1.339 0.255,0.786 0.451,1.39 0.59,1.816 C -0.083,-0.206 0,0 0,0 c 0,0 -0.048,-0.215 -0.167,-0.629 -0.127,-0.43 -0.307,-1.04 -0.541,-1.834 -0.122,-0.405 -0.257,-0.856 -0.406,-1.352 -0.201,-0.479 -0.421,-1.003 -0.659,-1.569 -0.241,-0.567 -0.499,-1.177 -0.775,-1.83 -0.29,-0.646 -0.694,-1.287 -1.069,-1.993 -1.491,-2.826 -3.822,-6.037 -7.092,-9.194 -3.263,-3.153 -7.55,-6.212 -12.825,-8.459 -5.258,-2.244 -11.503,-3.686 -18.254,-3.604 -3.361,0.164 -6.859,0.466 -10.325,1.436 -3.503,0.812 -6.94,2.269 -10.275,4.058 -0.814,0.487 -1.633,0.978 -2.457,1.471 -0.815,0.506 -1.562,1.126 -2.353,1.689 l -1.174,0.871 -1.092,0.983 c -0.713,0.676 -1.505,1.28 -2.163,2.025 -2.811,2.816 -5.142,6.202 -6.994,9.887 -3.803,7.368 -4.717,16.408 -2.667,24.924 2.236,8.485 7.275,15.941 13.826,20.973 1.575,1.342 3.346,2.383 5.048,3.477 0.897,0.472 1.789,0.941 2.677,1.408 l 0.665,0.35 0.691,0.288 1.379,0.573 c 0.915,0.387 1.824,0.774 2.773,1.034 0.938,0.29 1.871,0.579 2.798,0.866 1.903,0.383 3.76,0.901 5.656,1.052 3.757,0.56 7.482,0.411 11.048,0.058 0.886,-0.141 1.767,-0.282 2.64,-0.421 0.436,-0.077 0.876,-0.123 1.302,-0.226 l 1.27,-0.328 c 0.843,-0.219 1.68,-0.435 2.509,-0.65 0.815,-0.264 1.607,-0.576 2.401,-0.857 3.189,-1.112 6.038,-2.73 8.69,-4.383 0.629,-0.464 1.252,-0.925 1.868,-1.38 0.603,-0.472 1.254,-0.872 1.788,-1.403 0.557,-0.503 1.107,-1.001 1.65,-1.493 0.27,-0.248 0.547,-0.487 0.807,-0.739 l 0.727,-0.8 c 3.937,-4.175 6.541,-8.778 8.086,-13.046 0.831,-2.123 1.25,-4.208 1.661,-6.109 C 0.911,13.191 1.199,11.431 1.148,9.825 1.153,9.025 1.199,8.269 1.165,7.562 1.101,6.857 1.04,6.197 0.984,5.583 0.927,4.971 0.875,4.406 0.827,3.888 0.723,3.38 0.628,2.919 0.544,2.505 0.374,1.695 0.243,1.073 0.151,0.633 0.06,0.212 0,0 0,0"/>
                        </g>
                        <g transform="translate(596.8528,222.5073)" id="g5020">
                        <path id="path5022" style="fill:#c17560;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -10.18,-8.254 c 0,0 -14.505,-4.838 -14.87,-4.238 -0.365,0.599 -6.209,9.625 -10.28,9.483 -7.156,-0.249 -7.44,-0.836 -12.603,-0.065 -8.742,1.304 -10.774,11.008 -10.592,12.598 0.183,1.591 7.305,3.527 10.355,4.727 3.05,1.2 4.312,1.579 8.708,10.219 4.062,7.983 12.272,8.212 13.067,8.121 0,0 8.16,23.542 11.889,20.388 3.729,-3.154 3.851,-23.903 3.851,-23.903 l 4.15,-3.66 c 0,0 0.988,-2.239 3.089,-3.778 2.101,-1.539 4.946,-2.135 3.723,-2.93 -1.221,-0.795 -3.688,-2.087 -3.688,-2.087 l 3.67,-0.715 -2.396,-3.737 3.222,0.247 -2.218,-4.21 4.368,-5.251 z"/>
                        </g>
                        <g transform="translate(562.8513,204.1192)" id="g5024">
                        <path id="path5026" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 12.677,-0.906 25.546,3.035 35.307,11.271 2.757,2.326 5.286,4.888 7.458,7.77 1.255,1.664 1.336,4.233 -0.431,5.622 -1.61,1.266 -4.281,1.347 -5.622,-0.431 -0.859,-1.14 -1.767,-2.24 -2.733,-3.289 -0.448,-0.487 -0.908,-0.963 -1.378,-1.429 -0.253,-0.25 -0.508,-0.498 -0.768,-0.742 -0.111,-0.105 -0.224,-0.207 -0.334,-0.313 -0.411,-0.394 0.509,0.441 0.077,0.069 -2.167,-1.866 -4.441,-3.568 -6.902,-5.029 -0.57,-0.338 -1.146,-0.664 -1.73,-0.978 -0.135,-0.072 -0.271,-0.142 -0.405,-0.214 -0.406,-0.218 0.224,0.108 0.239,0.123 -0.226,-0.234 -0.8,-0.394 -1.1,-0.535 -1.29,-0.608 -2.61,-1.156 -3.951,-1.642 C 16.386,9.768 15.022,9.344 13.642,8.985 13.346,8.908 13.05,8.834 12.752,8.763 12.594,8.725 11.509,8.5 12.083,8.608 12.635,8.713 11.705,8.539 11.558,8.512 11.157,8.437 10.756,8.369 10.354,8.305 8.796,8.06 7.224,7.898 5.649,7.822 4.835,7.783 4.021,7.767 3.206,7.774 2.85,7.778 2.494,7.786 2.137,7.798 1.934,7.805 1.73,7.816 1.527,7.824 0.939,7.846 2.531,7.757 1.526,7.829 -0.545,7.977 -2.809,6.983 -3.151,4.677 -3.437,2.755 -2.225,0.159 0,0"/>
                        </g>
                        <g transform="translate(552.5565,270.8941)" id="g5028">
                        <path id="path5030" style="fill:#c17560;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -1.558,-1.827 -4.129,-7.404 -2.495,-14.786 1.635,-7.383 7.524,-14.711 7.524,-14.711 l 11.304,9.024 z"/>
                        </g>
                        <g transform="translate(542.1277,234.6821)" id="g5032">
                        <path id="path5034" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,0 -6.545,-0.684 -4.454,-5.077 l 1.951,-3.194 c 0,0 3.508,2.559 3.69,5.658 C 1.347,0.119 0,0 0,0"/>
                        </g>
                        <g transform="translate(570.4582,255.0983)" id="g5036">
                        <path id="path5038" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.011,-0.105 -1.588,-0.089 -3.975,-0.902 -1.19,-0.4 -2.557,-1.028 -3.951,-1.92 -1.377,-0.911 -2.783,-2.105 -3.853,-3.677 -1.075,-1.576 -1.834,-3.262 -2.634,-4.745 -0.8,-1.489 -1.612,-2.781 -2.425,-3.782 -0.81,-1.001 -1.635,-1.674 -2.263,-2.029 -0.629,-0.358 -1.026,-0.443 -1.033,-0.418 -0.047,0.069 1.509,0.623 3.007,2.674 0.752,1 1.524,2.298 2.289,3.778 0.77,1.479 1.519,3.185 2.63,4.817 1.119,1.643 2.592,2.873 4.023,3.785 1.449,0.896 2.867,1.504 4.097,1.868 1.231,0.366 2.263,0.525 2.978,0.566 C -0.396,0.064 0,0.028 0,0"/>
                        </g>
                        <g transform="translate(581.4205,269.8699)" id="g5040">
                        <path id="path5042" style="fill:#7c4236;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -3.049,-4.588 -4.752,-10.059 -4.845,-15.566 0.421,1.178 1.198,2.227 2.203,2.974 0.265,-1.414 0.53,-2.828 0.795,-4.242 0.194,1.199 0.889,2.308 1.883,3.006 0.742,-0.926 1.313,-1.988 1.678,-3.116 0.936,5.577 0.266,11.414 -1.911,16.633"/>
                        </g>
                        <g transform="translate(563.7231,241.8375)" id="g5044">
                        <path id="path5046" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -1.063,-0.314 -1.529,-2.195 -1.053,-3.196 0.476,-1.001 1.862,-1.423 2.834,-0.891 0.973,0.532 1.374,1.884 0.886,2.879 -0.489,0.995 -1.765,1.507 -2.82,1.166"/>
                        </g>
                        <g transform="translate(568.1878,244.7095)" id="g5048">
                        <path id="path5050" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.303,-0.663 -1.322,-0.857 -2.356,-0.955 -1.037,-0.059 -2.073,-0.021 -2.473,0.589 -0.177,0.307 -0.084,0.75 0.32,1.168 0.396,0.416 1.113,0.775 1.957,0.839 0.843,0.064 1.605,-0.183 2.06,-0.535 C -0.03,0.754 0.129,0.33 0,0"/>
                        </g>
                        <g transform="translate(560.2104,230.2482)" id="g5052">
                        <path id="path5054" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.018,0 0.03,-0.104 0.036,-0.304 0.033,-0.503 0.067,-0.802 0,-1.179 -0.072,-1.935 -0.36,-3.043 -1.098,-4.207 -1.818,-5.378 -2.975,-6.573 -4.439,-7.621 -5.17,-8.149 -5.968,-8.65 -6.821,-9.128 c -0.876,-0.482 -1.852,-0.828 -2.877,-1.045 -2.046,-0.431 -4.128,-0.372 -5.846,0.337 -1.729,0.773 -2.737,2.187 -3.443,3.323 -0.703,1.168 -1.133,2.179 -1.414,2.879 -0.276,0.703 -0.397,1.103 -0.366,1.116 0.096,0.047 0.668,-1.544 2.091,-3.798 0.726,-1.088 1.739,-2.405 3.317,-3.077 1.594,-0.634 3.592,-0.686 5.551,-0.271 1.986,0.37 3.632,1.449 5.09,2.434 1.444,1.001 2.581,2.125 3.311,3.223 0.746,1.091 1.076,2.133 1.207,2.86 C -0.057,-0.419 -0.052,0.001 0,0"/>
                        </g>
                        <g transform="translate(599.416,263.7599)" id="g5056">
                        <path id="path5058" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -3.96,8.7 -16.705,16.792 -23.741,15.248 -3.558,-0.569 -3.586,-3.746 -2.601,-5.636 0.985,-1.89 3.044,-2.986 5.101,-3.543 2.057,-0.557 4.212,-0.69 6.265,-1.265 3.441,-0.963 6.51,-3.201 8.48,-6.183 0.745,-1.128 1.354,-2.376 2.359,-3.28 1.005,-0.904 2.579,-1.37 3.716,-0.639 C 1.209,-4.25 0.803,-1.764 0,0"/>
                        </g>
                        <g transform="translate(601.7213,253.7931)" id="g5060">
                        <path id="path5062" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -1.007,-0.472 -1.536,-1.769 -1.147,-2.811 0.39,-1.041 1.642,-1.672 2.711,-1.367 1.069,0.306 1.798,1.503 1.578,2.593 -0.219,1.091 -1.355,1.912 -2.459,1.78"/>
                        </g>
                    </g>
                    </g>
                    <g id="g5064">
                    <g clip-path="url(#clipPath5070)" id="g5066">
                        <g transform="translate(185.5202,302.0974)" id="g5072">
                        <path id="path5074" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 1.291,0.497 1.708,0.579 3.039,0.507 3.134,0.502 3.837,0.413 3.378,0.486 3.669,0.439 3.957,0.375 4.242,0.3 4.527,0.224 4.806,0.132 5.084,0.033 5.735,-0.2 4.811,0.228 5.41,-0.118 6.364,-0.67 6.968,-1.058 7.567,-1.841 8.155,-2.61 8.446,-3.249 8.707,-4.292 8.767,-4.531 8.817,-4.772 8.858,-5.015 8.777,-4.535 8.886,-5.474 8.889,-5.573 8.896,-5.818 8.894,-6.064 8.88,-6.31 8.875,-6.414 8.786,-7.055 8.861,-6.621 8.765,-7.178 8.619,-7.736 8.404,-8.259 8.581,-7.829 8.298,-8.448 8.253,-8.531 8.102,-8.815 7.925,-9.078 7.756,-9.351 7.496,-9.771 7.925,-9.206 7.564,-9.607 7.403,-9.785 7.246,-9.966 7.076,-10.136 6.85,-10.362 6.613,-10.58 6.363,-10.78 6.714,-10.5 6.111,-10.944 6.094,-10.955 5.86,-11.108 5.618,-11.25 5.37,-11.38 5.281,-11.427 4.556,-11.73 4.986,-11.573 4.457,-11.766 3.922,-11.91 3.367,-12.009 c -1.33,-0.236 -2.08,-1.86 -1.746,-3.075 0.386,-1.402 1.741,-1.983 3.076,-1.746 4.873,0.866 8.559,5.073 9.128,9.909 0.59,5.017 -2.474,9.76 -7.061,11.636 C 4.241,5.746 1.217,5.802 -1.329,4.821 -2.589,4.336 -3.458,3.14 -3.075,1.746 -2.744,0.542 -1.267,-0.488 0,0"/>
                        </g>
                        <g transform="translate(188.4857,117.489)" id="g5076">
                        <path id="path5078" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 22.851,-22.692 4.013,-23.124 c 1.252,-4.608 5.84,-7.588 10.52,-6.639 0.45,0.091 0.819,0.206 1.069,0.344 0.979,0.537 2.838,3.62 3.01,4.725 1.924,12.376 5.002,28.768 1.829,32.643 -1.809,2.209 -20.469,29.824 -20.469,29.824 z"/>
                        </g>
                        <g transform="translate(213.704,110.9654)" id="g5080">
                        <path id="path5082" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.012,0.013 0.147,-0.091 0.392,-0.302 0.246,-0.21 0.601,-0.527 1.052,-0.943 0.896,-0.837 2.198,-2.049 3.663,-3.694 1.452,-1.643 3.103,-3.738 4.291,-6.433 0.583,-1.344 1.033,-2.842 1.24,-4.427 0.216,-1.584 0.238,-3.232 0.248,-4.903 -0.074,-3.34 0.43,-6.483 0.363,-9.424 -0.051,-2.923 -0.873,-5.611 -2.362,-7.32 -1.492,-1.721 -3.37,-2.312 -4.597,-2.358 -0.625,-0.03 -1.106,0.06 -1.421,0.139 -0.314,0.094 -0.47,0.162 -0.465,0.177 0.011,0.06 0.665,-0.22 1.871,-0.114 1.177,0.104 2.952,0.732 4.329,2.392 1.381,1.655 2.14,4.238 2.165,7.094 0.042,2.86 -0.477,6.052 -0.404,9.41 -0.009,1.671 -0.029,3.295 -0.233,4.839 -0.195,1.544 -0.619,2.99 -1.175,4.306 -1.131,2.633 -2.723,4.722 -4.128,6.38 C 3.413,-3.52 2.154,-2.27 1.303,-1.391 0.445,-0.515 -0.026,-0.028 0,0"/>
                        </g>
                        <g transform="translate(220.0886,97.7769)" id="g5084">
                        <path id="path5086" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.015,-0.156 -2.098,-0.403 -4.566,-1.216 -7.04,-2.011 -8.893,-3.055 -8.973,-2.92 -9.05,-2.813 -7.271,-1.54 -4.727,-0.721 -2.188,0.114 -0.001,0.132 0,0"/>
                        </g>
                        <g transform="translate(219.8767,90.1991)" id="g5088">
                        <path id="path5090" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.013,-0.155 -1.849,-0.043 -4.055,-0.429 -2.21,-0.367 -3.904,-1.081 -3.968,-0.939 -0.067,0.114 1.587,1.069 3.88,1.453 C -1.852,0.483 0.025,0.13 0,0"/>
                        </g>
                        <g transform="translate(221.956,82.9365)" id="g5092">
                        <path id="path5094" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.04,-0.151 -1.833,0.28 -4.076,0.274 -6.321,0.287 -8.114,-0.139 -8.154,0.012 -8.201,0.135 -6.407,0.806 -4.076,0.795 -1.745,0.799 0.048,0.123 0,0"/>
                        </g>
                        <g transform="translate(218.71,66.9091)" id="g5096">
                        <path id="path5098" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.009,0.059 0.592,-0.146 1.646,-0.026 1.036,0.109 2.552,0.65 3.893,1.98 1.355,1.314 2.324,3.422 2.952,5.852 0.624,2.444 1.183,5.179 1.651,8.06 0.928,5.772 1.205,11.071 1.23,14.901 0.023,1.916 -0.023,3.467 -0.043,4.54 -0.035,1.072 -0.037,1.667 -0.001,1.669 0.035,0.003 0.106,-0.587 0.204,-1.658 0.081,-1.072 0.184,-2.626 0.209,-4.55 C 11.809,26.924 11.59,21.589 10.656,15.784 10.184,12.883 9.611,10.147 8.953,7.679 8.291,5.22 7.255,3.038 5.795,1.689 4.357,0.33 2.747,-0.177 1.663,-0.228 1.116,-0.268 0.693,-0.191 0.414,-0.139 0.136,-0.065 -0.005,-0.017 0,0"/>
                        </g>
                        <g transform="translate(229.7832,100.6085)" id="g5100">
                        <path id="path5102" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.067,-0.038 -0.588,0.768 -1.445,2.054 -0.856,1.287 -2.065,3.045 -3.496,4.915 -1.433,1.87 -2.814,3.496 -3.833,4.659 -1.018,1.163 -1.66,1.876 -1.606,1.93 0.047,0.048 0.782,-0.574 1.876,-1.68 C -7.41,10.774 -5.972,9.171 -4.527,7.286 -3.085,5.4 -1.913,3.594 -1.132,2.249 -0.35,0.905 0.058,0.033 0,0"/>
                        </g>
                        <g transform="translate(262.7843,166.2354)" id="g5104">
                        <path id="path5106" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 6.855,-31.615 17.406,-15.9 c 3.224,-3.551 3.266,-9.047 -0.068,-12.495 -0.321,-0.332 -0.617,-0.582 -0.869,-0.719 -0.984,-0.539 -4.6,-0.446 -5.627,0.006 -11.518,5.063 -27.06,11.32 -28.624,16.102 -0.892,2.725 -14.181,33.454 -14.181,33.454 z"/>
                        </g>
                        <g transform="translate(254.6712,141.3591)" id="g5108">
                        <path id="path5110" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.018,0.003 0.068,-0.16 0.147,-0.475 0.088,-0.374 0.196,-0.829 0.325,-1.38 0.285,-1.196 0.661,-2.938 1.302,-5.034 0.644,-2.086 1.552,-4.564 3.17,-6.945 0.813,-1.183 1.808,-2.324 3.009,-3.323 1.197,-1.008 2.562,-1.903 3.971,-2.814 2.882,-1.754 5.303,-3.92 7.748,-5.43 2.432,-1.524 5.028,-2.277 7.176,-2.003 2.151,0.268 3.643,1.432 4.367,2.371 0.741,0.965 0.858,1.67 0.915,1.647 0.015,-0.004 -0.012,-0.173 -0.102,-0.489 -0.104,-0.31 -0.288,-0.766 -0.651,-1.279 -0.703,-1.014 -2.219,-2.283 -4.482,-2.615 -2.251,-0.337 -4.971,0.42 -7.473,1.958 -2.526,1.534 -4.914,3.66 -7.782,5.403 -1.409,0.911 -2.792,1.821 -4.016,2.861 -1.23,1.032 -2.255,2.222 -3.077,3.443 -1.64,2.462 -2.521,4.993 -3.126,7.111 C 0.82,-4.864 0.498,-3.107 0.274,-1.896 0.166,-1.289 0.089,-0.817 0.044,-0.495 -0.002,-0.174 -0.018,-0.003 0,0"/>
                        </g>
                        <g transform="translate(262.3841,128.8231)" id="g5112">
                        <path id="path5114" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.11,0.071 1.088,1.913 3.167,3.611 5.236,5.321 7.275,6.139 7.324,6.017 7.394,5.878 5.509,4.873 3.497,3.208 1.475,1.559 0.123,-0.097 0,0"/>
                        </g>
                        <g transform="translate(268.9138,124.9051)" id="g5116">
                        <path id="path5118" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.123,0.049 0.594,1.828 2.169,3.552 3.734,5.286 5.436,6.17 5.497,6.052 5.582,5.922 4.061,4.874 2.555,3.202 1.035,1.543 0.138,-0.072 0,0"/>
                        </g>
                        <g transform="translate(273.9379,119.2179)" id="g5120">
                        <path id="path5122" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.129,0.026 0.268,1.909 1.532,3.879 2.783,5.859 4.32,7.015 4.399,6.909 4.504,6.794 3.174,5.507 1.971,3.6 0.752,1.703 0.149,-0.048 0,0"/>
                        </g>
                        <g transform="translate(289.261,113.2999)" id="g5124">
                        <path id="path5126" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.017,-0.006 -0.019,-0.151 -0.106,-0.426 -0.107,-0.264 -0.27,-0.663 -0.601,-1.105 -0.629,-0.89 -1.929,-1.978 -3.857,-2.461 -1.93,-0.506 -4.337,-0.204 -6.778,0.566 -2.444,0.777 -5.07,1.771 -7.781,2.941 -5.42,2.348 -10.055,5.047 -13.272,7.183 -1.615,1.061 -2.875,1.988 -3.739,2.636 -0.854,0.662 -1.315,1.041 -1.294,1.07 0.022,0.029 0.524,-0.295 1.412,-0.905 0.898,-0.596 2.186,-1.474 3.82,-2.491 3.256,-2.049 7.892,-4.681 13.28,-7.016 2.692,-1.161 5.31,-2.167 7.717,-2.96 2.396,-0.782 4.705,-1.102 6.55,-0.665 1.852,0.416 3.128,1.407 3.782,2.225 C -0.196,-0.581 -0.054,0.024 0,0"/>
                        </g>
                        <g transform="translate(254.7451,122.147)" id="g5128">
                        <path id="path5130" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.059,-0.031 -0.576,0.786 -1.291,2.175 -0.716,1.388 -1.611,3.356 -2.428,5.597 -0.815,2.243 -1.394,4.327 -1.738,5.85 -0.345,1.524 -0.474,2.482 -0.408,2.496 0.074,0.016 0.331,-0.913 0.765,-2.403 0.433,-1.492 1.062,-3.54 1.87,-5.764 C -2.42,5.728 -1.585,3.754 -0.959,2.333 -0.333,0.912 0.068,0.036 0,0"/>
                        </g>
                        <g transform="translate(113.7554,258.8722)" id="g5132">
                        <path id="path5134" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -4.239,-1.424 -7.359,-4.84 -8.761,-9.052 -1.554,-4.67 -0.78,-10.005 1.212,-14.418 1.952,-4.325 5.766,-7.081 10.566,-7.143 4.836,-0.062 9.633,2 14.163,3.447 5.867,1.873 11.734,3.746 17.601,5.619 3.054,0.975 1.749,5.804 -1.329,4.821 -4.44,-1.417 -8.88,-2.835 -13.32,-4.252 -4.166,-1.33 -8.317,-2.825 -12.545,-3.948 -3.174,-0.842 -6.943,-1.374 -9.311,1.423 -2.279,2.693 -3.058,6.925 -2.801,10.345 0.265,3.533 2.37,7.166 5.854,8.337 C 4.364,-3.802 3.062,1.029 0,0"/>
                        </g>
                        <g transform="translate(88.3748,354.4297)" id="g5136">
                        <path id="path5138" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -4.242,-0.858 -6.816,-5.015 -6.986,-9.119 -0.187,-4.527 2.268,-8.514 4.699,-12.12 0.754,-1.118 2.202,-1.61 3.421,-0.897 1.109,0.649 1.655,2.296 0.897,3.42 -1.769,2.623 -3.852,5.619 -4.011,8.685 -0.041,0.799 -0.003,1.393 0.165,2.044 0.038,0.144 0.317,0.927 0.187,0.637 0.138,0.309 0.317,0.592 0.486,0.884 0.055,0.094 0.214,0.318 0.053,0.107 0.101,0.132 0.216,0.258 0.33,0.379 0.143,0.153 0.295,0.295 0.449,0.436 0.298,0.273 -0.25,-0.159 0.081,0.07 0.137,0.094 0.276,0.182 0.419,0.265 0.037,0.021 0.449,0.236 0.255,0.148 -0.192,-0.086 0.235,0.079 0.279,0.093 0.2,0.06 0.4,0.105 0.605,0.147 1.324,0.268 2.086,1.838 1.746,3.075 C 2.697,-0.368 1.328,0.269 0,0"/>
                        </g>
                        <g transform="translate(171.0323,265.8696)" id="g5140">
                        <path id="path5142" style="fill:#ff735d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -59.723,-20.564 c -7.493,-2.58 -15.658,1.403 -18.238,8.896 l -21.808,63.336 c -2.58,7.493 1.403,15.658 8.895,18.238 l 59.723,20.564 c 7.493,2.58 15.658,-1.403 18.238,-8.895 L 8.895,18.238 C 11.475,10.745 7.493,2.58 0,0"/>
                        </g>
                        <g id="g5144">
                        <g id="g5146"/>
                        <g id="g5158">
                            <g style="opacity:0.30000299" id="g5156" clip-path="url(#clipPath5150)">
                            <g id="g5154" transform="translate(171.0323,265.8696)">
                                <path id="path5152" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -59.723,-20.564 c -7.493,-2.58 -15.658,1.403 -18.238,8.896 l -21.808,63.336 c -2.58,7.493 1.403,15.658 8.895,18.238 l 59.723,20.564 c 7.493,2.58 15.658,-1.403 18.238,-8.895 L 8.895,18.238 C 11.475,10.745 7.493,2.58 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(183.3088,270.0967)" id="g5160">
                        <path id="path5162" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 -59.723,-20.564 c -7.493,-2.58 -15.658,1.403 -18.238,8.895 l -21.808,63.337 c -2.58,7.493 1.403,15.658 8.895,18.238 l 59.723,20.564 c 7.493,2.58 15.658,-1.403 18.238,-8.895 L 8.896,18.238 C 11.475,10.745 7.493,2.58 0,0"/>
                        </g>
                        <g transform="translate(91.0959,327.8553)" id="g5164">
                        <path id="path5166" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,0 -9.09,-7.443 -11.335,-15.336 -2.245,-7.893 -9.391,-32.439 -9.391,-32.439 0,0 -4.18,-8.432 -5.655,-13.031 -1.046,-3.259 -9.197,-21.365 -7.37,-27.123 0.17,-0.538 -4.01,-10.108 -4.01,-10.108 l 19.684,-6.584 4.08,10.292 1.676,0.989 c 1.598,0.943 2.826,2.406 3.477,4.144 l 10.754,28.706 8.494,23.327 z"/>
                        </g>
                        <g transform="translate(87.5124,324.4212)" id="g5168">
                        <path id="path5170" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.025,0.025 0.432,-0.358 1.148,-1.075 0.363,-0.354 0.794,-0.799 1.256,-1.352 0.467,-0.547 1.027,-1.149 1.561,-1.883 1.129,-1.419 2.336,-3.217 3.534,-5.297 1.164,-2.098 2.298,-4.489 3.24,-7.097 0.916,-2.617 1.545,-5.189 1.966,-7.551 0.384,-2.37 0.582,-4.526 0.602,-6.34 0.049,-0.906 -0.006,-1.726 -0.022,-2.446 -0.01,-0.72 -0.064,-1.337 -0.122,-1.841 -0.102,-1.008 -0.176,-1.561 -0.212,-1.558 -0.035,0.004 -0.03,0.564 0.01,1.571 0.027,0.503 0.051,1.119 0.033,1.834 -0.011,0.716 0.017,1.53 -0.055,2.427 -0.067,1.798 -0.301,3.93 -0.707,6.27 -0.442,2.333 -1.078,4.871 -1.984,7.46 C 9.317,-14.299 8.209,-11.93 7.08,-9.841 5.918,-7.77 4.754,-5.968 3.671,-4.532 3.161,-3.79 2.625,-3.177 2.182,-2.615 1.744,-2.048 1.337,-1.586 0.999,-1.213 0.332,-0.457 -0.025,-0.025 0,0"/>
                        </g>
                        <g transform="translate(81.4596,316.853)" id="g5172">
                        <path id="path5174" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.022,0.028 0.424,-0.259 1.132,-0.805 0.714,-0.537 1.7,-1.378 2.869,-2.47 1.174,-1.086 2.493,-2.465 3.872,-4.072 1.36,-1.622 2.768,-3.48 4.096,-5.533 1.313,-2.063 2.415,-4.119 3.322,-6.031 0.885,-1.924 1.589,-3.697 2.086,-5.218 0.505,-1.517 0.858,-2.764 1.049,-3.637 0.2,-0.871 0.294,-1.356 0.26,-1.364 -0.035,-0.009 -0.196,0.459 -0.456,1.31 -0.249,0.854 -0.654,2.077 -1.2,3.569 -0.538,1.494 -1.272,3.239 -2.172,5.134 -0.924,1.884 -2.027,3.913 -3.327,5.956 -1.315,2.033 -2.698,3.882 -4.026,5.506 C 6.158,-6.046 4.878,-4.652 3.744,-3.539 2.617,-2.422 1.674,-1.543 1.002,-0.96 0.336,-0.369 -0.022,-0.028 0,0"/>
                        </g>
                        <g transform="translate(68.4526,276.0603)" id="g5176">
                        <path id="path5178" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c 6.635,-5.965 15.615,-9.917 24.478,-8.893 l 1.442,3.811 C 17.015,-6.336 7.867,-2.782 1.777,3.836 Z"/>
                        </g>
                        <g transform="translate(95.1266,273.1887)" id="g5180">
                        <path id="path5182" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.002,-0.036 -0.364,-0.081 -1.031,-0.131 -0.666,-0.067 -1.637,-0.066 -2.833,-0.004 -2.389,0.141 -5.694,0.763 -9.067,2.205 -3.378,1.427 -6.16,3.26 -8.069,4.688 -0.959,0.713 -1.708,1.323 -2.209,1.765 -0.502,0.439 -0.768,0.695 -0.746,0.723 0.053,0.065 1.215,-0.842 3.169,-2.188 1.952,-1.343 4.732,-3.103 8.057,-4.509 C -9.408,1.131 -6.184,0.465 -3.834,0.232 -1.48,0.005 -0.004,0.1 0,0"/>
                        </g>
                        <g transform="translate(91.1808,263.9389)" id="g5184">
                        <path id="path5186" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.002,-0.036 -0.364,-0.081 -1.031,-0.131 -0.666,-0.067 -1.637,-0.066 -2.833,-0.004 -2.389,0.141 -5.694,0.763 -9.067,2.205 -3.378,1.427 -6.16,3.26 -8.069,4.688 -0.959,0.713 -1.708,1.323 -2.209,1.765 -0.502,0.439 -0.768,0.695 -0.746,0.723 0.053,0.065 1.215,-0.842 3.169,-2.188 1.952,-1.343 4.732,-3.103 8.057,-4.509 C -9.408,1.131 -6.184,0.465 -3.834,0.232 -1.48,0.005 -0.004,0.1 0,0"/>
                        </g>
                        <g transform="translate(82.4036,303.9954)" id="g5188">
                        <path id="path5190" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="M 0,0 C -0.659,0.665 -1.343,1.347 -2.211,1.697 -3.079,2.047 -4.188,1.977 -4.813,1.28 -5.168,0.885 -5.319,0.353 -5.46,-0.159 c -0.931,-3.38 -1.862,-6.759 -2.793,-10.139 -0.155,-0.564 -0.312,-1.146 -0.235,-1.725 0.112,-0.836 0.715,-1.554 1.458,-1.952 1.578,-0.844 3.627,-0.301 4.956,0.896 1.33,1.198 2.061,2.919 2.572,4.633 C 1.345,-5.598 1.885,-1.961 0,0"/>
                        </g>
                        <g transform="translate(74.7046,230.7116)" id="g5192">
                        <path id="path5194" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.011,-0.031 -0.319,0.048 -0.872,0.218 -0.652,0.213 -1.43,0.468 -2.343,0.766 -1.984,0.671 -4.741,1.636 -7.858,2.756 l -0.242,0.086 0.088,0.243 c 0.23,0.64 0.471,1.308 0.717,1.989 0.095,0.262 0.189,0.522 0.278,0.764 l 0.085,0.235 0.237,-0.075 C -6.453,5.883 -3.367,4.874 -1.15,4.124 -0.041,3.749 0.85,3.438 1.461,3.213 1.718,3.113 1.948,3.024 2.161,2.942 2.236,2.896 2.316,2.906 2.306,2.837 2.365,2.793 2.388,2.815 2.394,2.815 2.401,2.815 2.381,2.851 2.357,2.833 2.263,2.79 2.219,2.839 2.13,2.845 1.909,2.9 1.669,2.96 1.402,3.026 c -0.629,0.167 -1.537,0.426 -2.66,0.757 -2.245,0.661 -5.35,1.612 -8.808,2.703 l 0.322,0.159 C -9.831,6.403 -9.926,6.143 -10.02,5.881 -10.268,5.2 -10.511,4.533 -10.744,3.894 l -0.154,0.329 C -7.787,3.086 -5.051,2.06 -3.099,1.304 -2.207,0.949 -1.446,0.645 -0.809,0.392 -0.276,0.168 0.011,0.031 0,0"/>
                        </g>
                        <g transform="translate(55.4978,234.8974)" id="g5196">
                        <path id="path5198" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.049,0.135 4.395,-1.316 9.706,-3.241 5.312,-1.925 9.578,-3.595 9.529,-3.73 C 19.186,-7.106 14.841,-5.656 9.528,-3.73 4.217,-1.805 -0.049,-0.135 0,0"/>
                        </g>
                        <g transform="translate(53.5004,227.6463)" id="g5200">
                        <path id="path5202" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 17.499,-6.342 c 0.686,-0.249 1.444,0.106 1.693,0.792 0.248,0.686 -0.106,1.444 -0.793,1.693 L 0.901,2.485 C 0.214,2.734 -0.543,2.379 -0.792,1.693 -1.041,1.007 -0.686,0.249 0,0"/>
                        </g>
                        <g transform="translate(71.3658,221.976)" id="g5204">
                        <path id="path5206" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,0 3.27,-6.44 3.434,-10.671 0.164,-4.231 0.138,-7.381 -1.735,-8.729 -1.873,-1.348 -3.716,-1.057 -3.903,1.052 -0.186,2.109 0.577,3.413 -0.535,5.909 -1.111,2.496 -1.909,2.848 -1.909,2.848 0,0 -3.224,-6.871 -2.403,-8.918 0.821,-2.048 5.376,-6.776 2.395,-8.169 -2.982,-1.392 -6.025,1.624 -6.025,1.624 0,0 -2.858,-2.76 -5.992,0.639 0,0 -4.822,0.697 -5.884,5.925 0,0 -3.92,0.576 -3.651,4.072 0.269,3.496 1.974,10.174 3.587,13.308 1.613,3.135 2.696,4.352 2.748,4.544 0.051,0.192 1.897,3.205 1.897,3.205 z"/>
                        </g>
                        <g transform="translate(57.3139,207.9154)" id="g5208">
                        <path id="path5210" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.167,-0.007 -0.251,-2.648 0.731,-5.687 0.937,-3.055 2.793,-4.979 2.66,-5.081 -0.043,-0.043 -0.564,0.373 -1.229,1.217 -0.664,0.839 -1.43,2.137 -1.927,3.707 -0.492,1.571 -0.608,3.074 -0.545,4.143 C -0.249,-0.629 -0.06,0.011 0,0"/>
                        </g>
                        <g transform="translate(52.4277,211.228)" id="g5212">
                        <path id="path5214" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.171,-0.027 -0.843,-3.118 -0.184,-6.943 0.601,-3.836 2.552,-6.439 2.399,-6.519 -0.046,-0.036 -0.594,0.553 -1.243,1.676 -0.649,1.117 -1.344,2.798 -1.67,4.758 -0.319,1.961 -0.199,3.776 0.058,5.042 C -0.385,-0.715 -0.055,0.019 0,0"/>
                        </g>
                        <g transform="translate(49.7271,213.3952)" id="g5216">
                        <path id="path5218" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.15,-0.042 -0.421,-2.262 -0.635,-5.06 -0.232,-2.797 -0.019,-5.079 -0.174,-5.097 -0.13,-0.025 -0.581,2.276 -0.345,5.138 C -0.934,-2.156 -0.124,0.045 0,0"/>
                        </g>
                        <g transform="translate(47.9181,217.9616)" id="g5220">
                        <path id="path5222" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.055,0.064 1.115,-0.967 3.197,-2.241 2.068,-1.299 5.212,-2.682 8.944,-3.93 L 11.82,-6.325 c 0.434,1.212 0.959,2.467 1.574,3.719 0.687,1.4 1.446,2.712 2.224,3.893 L 15.742,0.913 C 12.134,2.262 9.132,3.748 7.058,4.904 6.02,5.481 5.21,5.972 4.662,6.322 4.115,6.674 3.828,6.882 3.843,6.907 3.859,6.934 4.176,6.776 4.749,6.472 5.406,6.129 6.225,5.701 7.209,5.187 9.315,4.114 12.324,2.698 15.916,1.386 L 16.212,1.278 16.04,1.012 C 15.282,-0.16 14.539,-1.456 13.861,-2.836 13.255,-4.07 12.733,-5.305 12.297,-6.497 l -0.086,-0.235 -0.236,0.081 C 8.236,-5.372 5.068,-3.909 3.022,-2.516 1.993,-1.833 1.225,-1.21 0.726,-0.753 0.228,-0.294 -0.019,-0.02 0,0"/>
                        </g>
                        <g transform="translate(69.3479,204.8108)" id="g5224">
                        <path id="path5226" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.047,0.043 0.12,0.34 0.572,0.634 1.013,0.926 1.773,1.176 2.606,1.019 3.44,0.859 4.055,0.346 4.357,-0.087 4.669,-0.527 4.715,-0.865 4.655,-0.888 4.584,-0.92 4.42,-0.654 4.078,-0.328 3.743,-0.002 3.193,0.376 2.509,0.508 1.824,0.637 1.175,0.488 0.743,0.308 0.304,0.13 0.055,-0.057 0,0"/>
                        </g>
                        <g transform="translate(63.2403,195.2907)" id="g5228">
                        <path id="path5230" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.061,-0.019 -0.25,0.319 -0.326,0.932 -0.405,1.538 -0.329,2.429 0.111,3.282 0.553,4.135 1.237,4.711 1.776,4.996 2.321,5.289 2.706,5.331 2.725,5.269 2.798,5.137 1.366,4.584 0.574,3.042 -0.226,1.506 0.15,0.017 0,0"/>
                        </g>
                        <g transform="translate(71.8408,221.1532)" id="g5232">
                        <path id="path5234" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.029,-0.069 -1.106,0.308 -2.84,0.932 -1.887,0.686 -4.206,1.528 -6.77,2.459 -2.558,0.952 -4.871,1.813 -6.753,2.513 -1.722,0.661 -2.777,1.098 -2.753,1.166 0.023,0.068 1.122,-0.246 2.876,-0.819 1.755,-0.572 4.165,-1.403 6.809,-2.371 C -6.787,2.913 -4.41,1.989 -2.707,1.275 -1.003,0.562 0.027,0.064 0,0"/>
                        </g>
                        <g transform="translate(101.2965,287.0045)" id="g5236">
                        <path id="path5238" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.217,-0.344 17.702,-34.235 17.702,-34.235 0,0 7.201,-23.141 12.242,-30.067 L 98.846,-22.851 86.443,1.415 65.119,68.677 54.969,66.726 c 0,0 -48.904,-17.549 -55.366,-19.988 -6.462,-2.439 -9.804,-5.887 -9.804,-5.887 0,0 2.3,-28.319 10.201,-40.851"/>
                        </g>
                        <g id="g5240">
                        <g id="g5242"/>
                        <g id="g5254">
                            <g style="opacity:0.30000299" id="g5252" clip-path="url(#clipPath5246)">
                            <g id="g5250" transform="translate(170.2239,277.4299)">
                                <path id="path5248" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -34.475,-12.782 c -3.507,-1.3 -7.406,0.489 -8.706,3.997 l -10.085,27.2 c -1.3,3.508 0.489,7.406 3.997,8.707 l 34.475,12.781 c 3.508,1.301 7.406,-0.489 8.706,-3.996 L 3.997,8.707 C 5.297,5.199 3.508,1.301 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(95.8149,331.2615)" id="g5256">
                        <path id="path5258" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 12.131,-3.699 18.41,-15.941 23.781,-26.419 1.469,-2.864 5.785,-0.337 4.318,2.524 C 22.058,-12.114 14.861,0.696 1.329,4.821 -1.756,5.762 -3.074,0.937 0,0"/>
                        </g>
                        <g transform="translate(170.9534,279.2796)" id="g5260">
                        <path id="path5262" style="fill:#fafafa;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -34.475,-12.781 c -3.507,-1.301 -7.405,0.488 -8.706,3.996 l -10.085,27.2 c -1.3,3.508 0.489,7.406 3.997,8.707 l 34.475,12.781 c 3.508,1.301 7.406,-0.488 8.706,-3.996 L 3.997,8.707 C 5.297,5.199 3.508,1.301 0,0"/>
                        </g>
                        <g transform="translate(170.9534,279.2796)" id="g5264">
                        <path id="path5266" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.018,0.038 0.585,0.206 1.526,0.872 0.914,0.649 2.205,1.965 2.645,4.119 0.223,1.06 0.191,2.306 -0.252,3.55 -0.471,1.256 -0.981,2.618 -1.529,4.081 -1.1,2.934 -2.35,6.269 -3.732,9.954 -1.379,3.691 -2.888,7.732 -4.508,12.068 -0.41,1.092 -0.759,2.197 -1.539,3.072 -0.733,0.898 -1.729,1.591 -2.851,1.998 -1.124,0.39 -2.373,0.497 -3.569,0.225 -0.594,-0.121 -1.177,-0.36 -1.786,-0.586 -0.602,-0.224 -1.208,-0.449 -1.818,-0.677 -9.765,-3.627 -20.497,-7.613 -31.761,-11.797 -1.347,-0.518 -2.536,-1.451 -3.272,-2.681 -0.751,-1.212 -1.097,-2.665 -0.945,-4.065 0.06,-0.71 0.258,-1.365 0.523,-2.047 0.252,-0.681 0.503,-1.36 0.754,-2.035 0.5,-1.352 0.996,-2.693 1.488,-4.021 1.965,-5.316 3.861,-10.443 5.667,-15.329 0.451,-1.221 0.896,-2.427 1.336,-3.618 0.461,-1.19 0.783,-2.406 1.501,-3.355 1.395,-1.944 3.83,-2.966 6.057,-2.665 1.114,0.102 2.145,0.617 3.207,0.977 1.048,0.386 2.077,0.765 3.086,1.136 2.017,0.742 3.954,1.454 5.802,2.134 7.38,2.698 13.36,4.885 17.521,6.407 2.054,0.739 3.657,1.316 4.773,1.717 0.53,0.185 0.943,0.329 1.245,0.435 C -0.149,-0.036 0,0 0,0 0,0 -0.137,-0.07 -0.412,-0.181 -0.71,-0.298 -1.118,-0.459 -1.64,-0.664 c -1.107,-0.423 -2.699,-1.03 -4.738,-1.809 -4.148,-1.558 -10.108,-3.798 -17.464,-6.563 -1.845,-0.689 -3.777,-1.412 -5.79,-2.165 -1.007,-0.376 -2.035,-0.759 -3.081,-1.15 -1.045,-0.357 -2.09,-0.891 -3.301,-1.015 -2.374,-0.328 -4.978,0.748 -6.478,2.825 -0.391,0.506 -0.665,1.095 -0.912,1.69 -0.218,0.587 -0.438,1.177 -0.659,1.771 -0.443,1.189 -0.892,2.394 -1.346,3.614 -1.815,4.883 -3.72,10.006 -5.695,15.318 -0.494,1.329 -0.991,2.669 -1.493,4.02 -0.251,0.675 -0.503,1.353 -0.755,2.034 -0.263,0.67 -0.494,1.423 -0.555,2.176 -0.164,1.513 0.208,3.081 1.019,4.39 0.794,1.327 2.08,2.339 3.533,2.895 11.269,4.171 22.006,8.144 31.775,11.759 0.61,0.226 1.217,0.45 1.82,0.673 0.596,0.218 1.201,0.467 1.852,0.598 1.284,0.288 2.622,0.17 3.823,-0.252 1.198,-0.438 2.26,-1.183 3.039,-2.145 0.83,-0.937 1.207,-2.143 1.601,-3.206 1.598,-4.344 3.088,-8.392 4.449,-12.09 1.354,-3.695 2.58,-7.039 3.659,-9.981 0.534,-1.469 1.032,-2.838 1.49,-4.1 C 4.599,7.328 4.614,6.039 4.37,4.949 3.884,2.737 2.533,1.418 1.587,0.786 0.611,0.138 0,0 0,0"/>
                        </g>
                        <g transform="translate(145.4728,287.8222)" id="g5268">
                        <path id="path5270" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -14.442,-5.354 c -1.053,-0.391 -2.223,0.146 -2.613,1.199 -0.391,1.053 0.147,2.223 1.199,2.613 L -1.414,3.813 C -0.361,4.203 0.809,3.666 1.2,2.613 1.59,1.56 1.053,0.39 0,0"/>
                        </g>
                        <g transform="translate(133.6452,278.8568)" id="g5272">
                        <path id="path5274" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.325,-0.877 -0.122,-1.852 -1,-2.178 -0.877,-0.325 -1.852,0.123 -2.177,1 C -3.503,-0.301 -3.055,0.674 -2.178,1 -1.3,1.325 -0.325,0.877 0,0"/>
                        </g>
                        <g transform="translate(139.0791,280.8714)" id="g5276">
                        <path id="path5278" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.325,-0.877 -0.122,-1.852 -1,-2.178 -0.877,-0.325 -1.852,0.123 -2.177,1 C -3.503,-0.301 -3.055,0.674 -2.178,1 -1.3,1.325 -0.325,0.877 0,0"/>
                        </g>
                        <g transform="translate(144.3297,282.8181)" id="g5280">
                        <path id="path5282" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.325,-0.877 -0.122,-1.852 -1,-2.178 -0.877,-0.325 -1.852,0.123 -2.177,1 C -3.503,-0.301 -3.055,0.674 -2.178,1 -1.3,1.325 -0.325,0.877 0,0"/>
                        </g>
                        <g transform="translate(149.5803,284.7648)" id="g5284">
                        <path id="path5286" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.325,-0.877 -0.122,-1.852 -1,-2.178 -0.877,-0.325 -1.852,0.123 -2.177,1 C -3.503,-0.301 -3.055,0.674 -2.178,1 -1.3,1.325 -0.325,0.877 0,0"/>
                        </g>
                        <g transform="translate(140.6912,300.4305)" id="g5288">
                        <path id="path5290" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -14.442,-5.355 c -1.053,-0.39 -2.223,0.147 -2.613,1.2 -0.391,1.053 0.146,2.223 1.199,2.613 L -1.414,3.813 C -0.361,4.203 0.809,3.666 1.2,2.613 1.59,1.56 1.053,0.39 0,0"/>
                        </g>
                        <g transform="translate(128.8636,291.465)" id="g5292">
                        <path id="path5294" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.325,-0.877 -0.122,-1.852 -1,-2.178 -0.877,-0.325 -1.852,0.123 -2.177,1 C -3.503,-0.301 -3.055,0.674 -2.178,1 -1.3,1.325 -0.325,0.877 0,0"/>
                        </g>
                        <g transform="translate(134.2974,293.4797)" id="g5296">
                        <path id="path5298" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c 0.325,-0.877 -0.122,-1.852 -1,-2.178 -0.877,-0.325 -1.852,0.123 -2.177,1 C -3.502,-0.301 -3.055,0.674 -2.178,1 -1.3,1.325 -0.325,0.877 0,0"/>
                        </g>
                        <g transform="translate(139.5481,295.4264)" id="g5300">
                        <path id="path5302" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.325,-0.877 -0.122,-1.852 -1,-2.178 -0.877,-0.325 -1.852,0.123 -2.177,1 C -3.503,-0.301 -3.055,0.674 -2.178,1 -1.3,1.325 -0.325,0.877 0,0"/>
                        </g>
                        <g transform="translate(144.7987,297.373)" id="g5304">
                        <path id="path5306" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c 0.325,-0.877 -0.122,-1.852 -1,-2.178 -0.877,-0.325 -1.852,0.123 -2.177,1 C -3.503,-0.301 -3.055,0.674 -2.178,1 -1.3,1.325 -0.325,0.877 0,0"/>
                        </g>
                        <g transform="translate(120.1461,249.5581)" id="g5308">
                        <path id="path5310" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c 0,0 22.141,3.096 43.349,13.497 21.207,10.4 27.707,18.589 27.707,18.589 l 3.889,-7.608 c 0,0 -20.693,-22.061 -72.562,-32.377 0,0 -2.937,5.651 -2.383,7.899"/>
                        </g>
                        <g transform="translate(145.1335,315.0952)" id="g5312">
                        <path id="path5314" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.017,0.006 0.114,-0.209 0.284,-0.625 0.467,-1.093 0.706,-1.699 1.002,-2.453 1.626,-4.107 2.493,-6.4 3.553,-9.21 c 2.126,-5.774 5.027,-13.653 8.232,-22.359 0.248,-0.679 0.494,-1.354 0.723,-1.983 l 0.089,-0.246 -0.245,-0.088 c -8.278,-2.972 -15.686,-5.632 -21.094,-7.574 -2.643,-0.924 -4.793,-1.676 -6.345,-2.219 -0.711,-0.237 -1.283,-0.428 -1.727,-0.577 -0.396,-0.126 -0.607,-0.184 -0.612,-0.168 -0.006,0.016 0.193,0.106 0.578,0.263 0.435,0.171 0.997,0.392 1.694,0.666 1.539,0.58 3.67,1.383 6.29,2.37 5.393,1.981 12.782,4.695 21.039,7.728 L 12.02,-33.73 c -0.23,0.629 -0.476,1.304 -0.724,1.983 -3.149,8.726 -6,16.624 -8.089,22.411 C 2.211,-6.503 1.398,-4.19 0.812,-2.523 0.553,-1.755 0.345,-1.137 0.185,-0.661 0.047,-0.234 -0.017,-0.006 0,0"/>
                        </g>
                        <g id="g5316">
                        <g id="g5318"/>
                        <g id="g5330">
                            <g style="opacity:0.30000299" id="g5328" clip-path="url(#clipPath5322)">
                            <g id="g5326" transform="translate(157.3972,281.454)">
                                <path id="path5324" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -0.487,-1.337 -28.689,-10.834 -0.514,1.388 z"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(163.7303,302.034)" id="g5332">
                        <path id="path5334" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -8.195,-3.038 c -0.861,-0.319 -1.817,0.119 -2.135,0.979 l -3.039,8.196 c -0.319,0.86 0.12,1.816 0.98,2.135 l 8.196,3.038 c 0.86,0.319 1.816,-0.119 2.134,-0.98 L 0.98,2.135 C 1.299,1.275 0.86,0.319 0,0"/>
                        </g>
                        <g transform="translate(166.6178,297.0113)" id="g5336">
                        <path id="path5338" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -9.318,-3.208 c -0.809,-0.279 -1.691,0.151 -1.97,0.961 -0.279,0.809 0.151,1.691 0.961,1.97 l 9.318,3.208 C -0.2,3.21 0.682,2.78 0.961,1.97 1.24,1.161 0.809,0.279 0,0"/>
                        </g>
                        <g transform="translate(172.8003,292.8465)" id="g5340">
                        <path id="path5342" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.049,-0.135 -3.778,-1.647 -8.547,-3.376 -4.771,-1.729 -8.677,-3.021 -8.726,-2.886 -0.049,0.135 3.777,1.646 8.548,3.376 C -3.956,-1.157 -0.049,0.135 0,0"/>
                        </g>
                        <g transform="translate(164.0804,282.9466)" id="g5344">
                        <path id="path5346" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c -0.152,-0.894 -1.001,-1.496 -1.895,-1.344 -0.894,0.152 -1.496,1.001 -1.344,1.895 0.152,0.894 1.001,1.496 1.895,1.344 C -0.449,1.743 0.152,0.894 0,0"/>
                        </g>
                        <g transform="translate(169.8657,284.8487)" id="g5348">
                        <path id="path5350" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.152,-0.894 -1.001,-1.496 -1.895,-1.344 -0.894,0.152 -1.496,1.001 -1.344,1.895 0.152,0.894 1.001,1.496 1.895,1.344 C -0.45,1.743 0.152,0.894 0,0"/>
                        </g>
                        <g transform="translate(129.2155,251.4712)" id="g5352">
                        <path id="path5354" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 3.11,-8.551 8.441,-7.098 5.243,2.461 Z"/>
                        </g>
                        <g transform="translate(179.7957,273.0743)" id="g5356">
                        <path id="path5358" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 5.484,-7.26 4.67,2.955 -5.865,8.198 z"/>
                        </g>
                        <g transform="translate(189.0427,285.1649)" id="g5360">
                        <path id="path5362" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.011,-0.014 -0.192,-0.194 -0.588,-0.524 -1.027,-0.88 -1.61,-1.354 -2.34,-1.948 -3.1,-2.567 -4.041,-3.311 -5.164,-4.134 c -1.119,-0.829 -2.374,-1.801 -3.823,-2.788 -1.434,-1.01 -3.009,-2.109 -4.747,-3.22 -1.712,-1.151 -3.602,-2.284 -5.579,-3.495 -3.992,-2.36 -8.469,-4.81 -13.291,-7.135 -4.835,-2.302 -9.55,-4.256 -13.892,-5.888 -2.183,-0.782 -4.251,-1.545 -6.22,-2.158 -1.955,-0.658 -3.799,-1.197 -5.484,-1.681 -1.678,-0.511 -3.221,-0.879 -4.568,-1.233 -1.346,-0.359 -2.515,-0.626 -3.474,-0.83 -0.92,-0.197 -1.654,-0.354 -2.207,-0.473 -0.505,-0.102 -0.773,-0.148 -0.777,-0.13 -0.003,0.018 0.256,0.097 0.754,0.233 0.546,0.142 1.273,0.33 2.183,0.567 0.95,0.234 2.111,0.529 3.447,0.915 1.337,0.379 2.871,0.772 4.538,1.304 1.675,0.506 3.508,1.064 5.452,1.738 1.959,0.629 4.015,1.406 6.188,2.198 4.32,1.652 9.015,3.613 13.836,5.907 4.807,2.319 9.276,4.748 13.27,7.079 1.978,1.197 3.872,2.313 5.59,3.445 1.743,1.092 3.327,2.171 4.77,3.159 1.46,0.966 2.727,1.915 3.861,2.72 1.138,0.799 2.095,1.519 2.873,2.113 0.755,0.561 1.357,1.009 1.81,1.345 C -0.236,-0.138 -0.011,0.014 0,0"/>
                        </g>
                        <g transform="translate(125.475,254.018)" id="g5364">
                        <path id="path5366" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.125,-0.072 -5.576,9.151 -12.174,20.597 -6.601,11.451 -11.849,20.788 -11.724,20.86 0.124,0.072 5.574,-9.149 12.175,-20.6 C -5.125,9.411 0.124,0.072 0,0"/>
                        </g>
                        <g transform="translate(173.46,325.0283)" id="g5368">
                        <path id="path5370" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.035,0.006 0.175,-0.614 0.397,-1.739 0.241,-1.208 0.561,-2.815 0.948,-4.763 0.815,-4.017 2.031,-9.548 3.619,-15.595 1.594,-6.048 3.256,-11.463 4.524,-15.361 0.62,-1.886 1.132,-3.442 1.517,-4.612 0.36,-1.089 0.544,-1.697 0.51,-1.71 -0.034,-0.012 -0.281,0.573 -0.701,1.641 -0.422,1.068 -0.997,2.626 -1.675,4.564 -1.359,3.874 -3.081,9.283 -4.678,15.345 -1.592,6.061 -2.754,11.618 -3.477,15.659 -0.363,2.02 -0.629,3.66 -0.786,4.797 C 0.037,-0.637 -0.035,-0.006 0,0"/>
                        </g>
                        <g transform="translate(152.3968,249.0706)" id="g5372">
                        <path id="path5374" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -7.092,-2.166 -2.474,8.101 7.092,2.166 z"/>
                        </g>
                        <g transform="translate(150.6232,365.4912)" id="g5376">
                        <path id="path5378" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -3.404,-20.006 -21.939,-30.854 -41.945,-27.449 -20.006,3.404 -33.909,19.771 -30.504,39.778 3.404,20.006 22.382,33.465 42.389,30.06 C -10.054,38.985 3.404,20.006 0,0"/>
                        </g>
                        <g transform="translate(150.6232,365.4912)" id="g5380">
                        <path id="path5382" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,0 0.006,0.201 0.043,0.587 0.042,0.405 0.101,0.974 0.177,1.712 0.041,0.378 0.087,0.798 0.137,1.26 0.04,0.464 0.018,0.976 0.032,1.528 0.003,1.105 0.076,2.381 -0.107,3.808 -0.069,0.714 -0.118,1.47 -0.212,2.259 -0.147,0.783 -0.302,1.603 -0.464,2.46 -0.125,0.865 -0.412,1.731 -0.674,2.64 -0.263,0.909 -0.517,1.859 -0.932,2.791 -1.431,3.799 -3.733,7.918 -7.196,11.694 -3.445,3.772 -8.06,7.182 -13.65,9.418 -2.827,1.003 -5.828,1.907 -9.021,2.216 -3.173,0.46 -6.498,0.315 -9.836,-0.133 -0.83,-0.153 -1.666,-0.308 -2.506,-0.464 -0.839,-0.163 -1.652,-0.456 -2.487,-0.679 l -1.25,-0.361 -1.217,-0.479 c -0.806,-0.337 -1.644,-0.614 -2.436,-1.006 -3.21,-1.492 -6.226,-3.534 -8.986,-5.952 -0.665,-0.633 -1.334,-1.269 -2.005,-1.908 -0.608,-0.699 -1.219,-1.4 -1.832,-2.105 -0.646,-0.679 -1.125,-1.494 -1.688,-2.248 l -0.819,-1.153 c -0.25,-0.4 -0.474,-0.819 -0.712,-1.228 -0.447,-0.836 -0.998,-1.623 -1.364,-2.507 -0.389,-0.872 -0.78,-1.748 -1.173,-2.626 -0.613,-1.821 -1.296,-3.64 -1.641,-5.563 -1.789,-7.607 -0.721,-15.571 2.556,-22.135 3.38,-6.539 8.78,-11.612 14.754,-14.743 2.947,-1.673 6.112,-2.693 9.184,-3.574 0.784,-0.169 1.561,-0.337 2.333,-0.503 l 1.154,-0.243 1.161,-0.149 c 0.771,-0.098 1.536,-0.197 2.295,-0.294 0.762,-0.063 1.522,-0.071 2.273,-0.11 3.009,-0.164 5.911,0.163 8.668,0.583 0.681,0.157 1.354,0.313 2.02,0.466 0.665,0.161 1.334,0.278 1.962,0.516 1.263,0.442 2.539,0.768 3.689,1.338 4.716,1.996 8.498,4.83 11.27,7.793 2.769,2.972 4.659,5.992 5.785,8.624 0.283,0.658 0.631,1.247 0.813,1.858 0.206,0.601 0.398,1.163 0.578,1.686 0.172,0.524 0.361,1.001 0.482,1.45 0.106,0.453 0.202,0.864 0.288,1.234 0.173,0.722 0.305,1.278 0.4,1.674 C -0.061,-0.191 0,0 0,0 0,0 -0.026,-0.197 -0.102,-0.578 -0.184,-0.977 -0.301,-1.538 -0.452,-2.266 -0.531,-2.639 -0.619,-3.054 -0.716,-3.51 -0.83,-3.964 -1.011,-4.444 -1.177,-4.973 -1.35,-5.502 -1.536,-6.069 -1.735,-6.676 -1.91,-7.293 -2.253,-7.889 -2.53,-8.553 c -1.105,-2.661 -2.983,-5.721 -5.758,-8.74 -2.776,-3.009 -6.581,-5.894 -11.338,-7.933 -1.16,-0.58 -2.447,-0.917 -3.721,-1.368 -0.634,-0.243 -1.31,-0.364 -1.98,-0.529 -0.673,-0.158 -1.353,-0.318 -2.04,-0.479 -2.785,-0.435 -5.717,-0.776 -8.757,-0.619 -0.759,0.036 -1.526,0.042 -2.296,0.104 -0.767,0.096 -1.54,0.193 -2.319,0.29 l -1.173,0.148 -1.167,0.242 c -0.78,0.166 -1.566,0.333 -2.358,0.502 -3.108,0.882 -6.311,1.908 -9.298,3.595 -6.054,3.158 -11.543,8.293 -14.983,14.935 -3.339,6.665 -4.424,14.767 -2.61,22.477 0.351,1.949 1.043,3.795 1.666,5.642 0.398,0.891 0.795,1.779 1.19,2.663 0.373,0.897 0.93,1.695 1.384,2.542 0.243,0.416 0.47,0.84 0.724,1.245 l 0.831,1.171 c 0.571,0.764 1.058,1.589 1.713,2.278 0.623,0.714 1.243,1.425 1.86,2.133 0.681,0.647 1.359,1.292 2.035,1.933 2.8,2.45 5.86,4.515 9.116,6.023 0.803,0.396 1.653,0.676 2.471,1.016 l 1.234,0.483 1.267,0.364 c 0.847,0.226 1.671,0.52 2.522,0.684 0.851,0.156 1.698,0.311 2.54,0.466 3.384,0.448 6.752,0.585 9.963,0.113 3.232,-0.322 6.266,-1.244 9.123,-2.269 5.651,-2.28 10.304,-5.747 13.766,-9.572 3.48,-3.831 5.779,-8 7.195,-11.839 0.412,-0.942 0.661,-1.902 0.919,-2.82 0.258,-0.917 0.539,-1.791 0.658,-2.664 0.155,-0.863 0.303,-1.69 0.445,-2.479 C 0.381,10.39 0.423,9.628 0.484,8.91 0.653,7.474 0.563,6.192 0.544,5.083 0.522,4.529 0.536,4.015 0.487,3.55 0.427,3.087 0.373,2.666 0.324,2.288 0.226,1.551 0.15,0.983 0.096,0.579 0.041,0.194 0,0 0,0"/>
                        </g>
                        <g id="g5384">
                        <g id="g5386"/>
                        <g id="g5398">
                            <g style="opacity:0.30000299" id="g5396" clip-path="url(#clipPath5390)">
                            <g id="g5394" transform="translate(125.7299,406.6279)">
                                <path id="path5392" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,0 -41.322,1.931 -34.378,-42.89 2.985,-5.592 7.866,-9.952 13.787,-12.215 11.763,-4.498 31.522,-7.984 44.68,11.273 l 0.55,1.201 c 0,0 7.006,30.757 -24.639,42.631"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(109.0954,356.4429)" id="g5400">
                        <path id="path5402" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -2.912,3.142 -5.823,6.318 -8.151,9.914 -2.328,3.596 -4.068,7.662 -4.399,11.933 -0.05,0.648 -0.014,5.164 0.599,5.377 0.439,0.153 0.959,-3.803 1.34,-4.069 3.63,-2.539 6.113,-6.463 7.644,-10.619 C -1.437,8.379 -0.603,4.388 0,0"/>
                        </g>
                        <g transform="translate(133.8734,349.8822)" id="g5404">
                        <path id="path5406" style="fill:#ffc19d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,0 8.924,2.942 10.365,6.843 0.813,2.2 0.954,4.938 -0.279,8.142 -1.789,4.648 -6.251,13.919 -10.387,22.263 -4.445,8.968 -15.033,13.014 -24.329,9.304 l -0.924,-0.369 c -9.729,-4.557 -11.294,-15.366 -6.469,-24.966 l 10.947,-21.811 c 0,0 6.876,-1.738 11.385,-1.259 C -5.181,-1.374 0,0 0,0"/>
                        </g>
                        <g transform="translate(134.7622,376.9339)" id="g5408">
                        <path id="path5410" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.314,-0.712 -0.03,-1.565 -0.768,-1.906 -0.736,-0.34 -1.588,-0.041 -1.901,0.671 -0.314,0.712 0.03,1.565 0.766,1.906 C -1.166,1.012 -0.314,0.712 0,0"/>
                        </g>
                        <g transform="translate(133.224,382.0893)" id="g5412">
                        <path id="path5414" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.098,-0.246 -1.44,0.107 -2.91,-0.484 -1.477,-0.569 -2.255,-1.757 -2.486,-1.64 -0.11,0.048 -0.066,0.439 0.268,0.969 0.326,0.525 0.983,1.172 1.902,1.534 0.918,0.36 1.824,0.331 2.405,0.162 C -0.23,0.375 0.052,0.113 0,0"/>
                        </g>
                        <g transform="translate(121.7012,371.14)" id="g5416">
                        <path id="path5418" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.314,-0.712 -0.031,-1.565 -0.768,-1.906 -0.736,-0.34 -1.587,-0.042 -1.901,0.671 -0.314,0.711 0.03,1.565 0.766,1.906 C -1.166,1.012 -0.314,0.711 0,0"/>
                        </g>
                        <g transform="translate(118.9372,375.9924)" id="g5420">
                        <path id="path5422" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.099,-0.246 -1.442,0.106 -2.911,-0.484 -1.476,-0.57 -2.254,-1.758 -2.486,-1.641 -0.11,0.048 -0.067,0.438 0.268,0.969 0.327,0.526 0.984,1.172 1.902,1.534 0.919,0.361 1.824,0.331 2.405,0.163 C -0.232,0.374 0.051,0.113 0,0"/>
                        </g>
                        <g transform="translate(128.7273,366.7926)" id="g5424">
                        <path id="path5426" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.04,0.081 0.811,0.604 2.218,1.385 2.578,1.574 2.904,1.79 2.865,2.072 2.845,2.379 2.526,2.721 2.17,3.086 1.453,3.854 0.703,4.659 -0.083,5.503 -3.252,8.961 -5.706,11.864 -5.566,11.991 -5.425,12.117 -2.743,9.417 0.426,5.96 1.198,5.103 1.935,4.288 2.639,3.506 2.951,3.136 3.389,2.749 3.422,2.109 3.433,1.788 3.239,1.474 3.024,1.314 2.812,1.144 2.602,1.055 2.421,0.97 0.962,0.295 0.039,-0.081 0,0"/>
                        </g>
                        <g transform="translate(117.5766,380.7847)" id="g5428">
                        <path id="path5430" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.05,-0.455 -1.635,-0.63 -3.388,-1.287 -1.767,-0.621 -3.095,-1.503 -3.426,-1.186 -0.15,0.154 0.008,0.609 0.499,1.157 0.485,0.546 1.323,1.157 2.378,1.541 1.055,0.382 2.09,0.451 2.813,0.343 C -0.396,0.462 0.017,0.215 0,0"/>
                        </g>
                        <g transform="translate(131.5651,386.4424)" id="g5432">
                        <path id="path5434" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.166,-0.459 -1.5,-0.61 -2.939,-1.19 -1.455,-0.538 -2.551,-1.325 -2.975,-1.093 -0.192,0.117 -0.14,0.53 0.259,1.065 0.391,0.53 1.158,1.15 2.152,1.535 C -2.508,0.7 -1.53,0.754 -0.89,0.621 -0.242,0.491 0.066,0.218 0,0"/>
                        </g>
                        <g transform="translate(105.4615,364.3219)" id="g5436">
                        <path id="path5438" style="fill:#ffc19d;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.191,0.005 -7.355,-0.68 -4.534,-7.142 -1.712,-13.604 4.612,-9.143 4.543,-8.953 4.473,-8.763 0,0 0,0"/>
                        </g>
                        <g transform="translate(106.5424,356.6597)" id="g5440">
                        <path id="path5442" style="fill:#ff9c6a;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.037,0.008 -0.078,-0.128 -0.23,-0.298 -0.149,-0.166 -0.442,-0.364 -0.834,-0.385 -0.792,-0.047 -1.84,0.786 -2.38,1.937 -0.273,0.58 -0.395,1.194 -0.389,1.749 -0.009,0.559 0.153,1.023 0.47,1.234 0.307,0.228 0.64,0.129 0.799,-0.019 0.165,-0.142 0.18,-0.29 0.22,-0.286 0.025,-0.008 0.091,0.169 -0.077,0.413 C -2.504,4.462 -2.647,4.582 -2.853,4.639 -3.063,4.698 -3.319,4.663 -3.547,4.532 -4.03,4.28 -4.279,3.626 -4.286,3.017 c -0.033,-0.624 0.09,-1.32 0.397,-1.972 0.61,-1.284 1.808,-2.212 2.86,-2.074 0.507,0.08 0.826,0.383 0.955,0.621 C 0.057,-0.161 0.028,-0.002 0,0"/>
                        </g>
                        <g transform="translate(124.6396,395.9318)" id="g5444">
                        <path id="path5446" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.785,1.041 -3.85,3.017 -6.93,3.034 -4.654,0.025 -11.047,-1.536 -14.162,-4.143 -3.75,-3.139 -6.364,-6.871 -6.772,-11.745 -0.409,-4.874 0.818,-9.792 2.938,-14.199 0.647,-1.344 1.423,-2.701 2.666,-3.527 1.535,-1.021 3.661,-1.146 4.463,-3.143 0.294,-0.73 0.822,-1.363 1.548,-1.666 1.738,-0.727 2.652,1.095 2.787,2.571 0.288,3.154 -0.901,6.235 -2.068,9.179 -0.83,2.093 -1.684,4.227 -3.144,5.94 -0.795,0.932 -1.754,1.72 -2.496,2.695 -0.742,0.975 -1.262,2.225 -0.981,3.417 0.046,0.194 0.146,0.458 0.286,0.763 1.109,2.413 3.447,4.032 6.094,4.246 4.198,0.338 11.245,1.191 12.312,3.144 1.534,2.81 1.575,4.213 1.575,4.213 z"/>
                        </g>
                        <g id="g5448">
                        <g id="g5450"/>
                        <g id="g5462">
                            <g style="opacity:0.30000299" id="g5460" clip-path="url(#clipPath5454)">
                            <g id="g5458" transform="translate(150.0887,350.3475)">
                                <path id="path5456" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -42.094,-17.83 c 3.775,-1.689 8.064,-1.968 12.168,-1.454 4.105,0.514 8.072,1.784 11.996,3.095 3.196,1.068 6.406,2.177 9.32,3.871 2.914,1.693 5.544,4.025 7.074,7.028 C -0.699,-3.645 -0.209,-1.834 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(102.9056,336.7029)" id="g5464">
                        <path id="path5466" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -0.602,1.427 1.066,1.206 c 0,0 7.78,-2.528 23.555,2.281 16.568,5.051 19.544,12.711 19.544,12.711 l 1.799,0.536 1.68,-3.876 c 0,0 -3.355,-11.282 -23.022,-16.417 C 14.441,-4.632 8.736,-4.761 5.402,-4.235 2.989,-3.855 0.949,-2.251 0,0"/>
                        </g>
                        <g transform="translate(102.9056,336.7029)" id="g5468">
                        <path id="path5470" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.025,0.011 0.167,-0.351 0.562,-0.964 0.394,-0.605 1.081,-1.472 2.257,-2.197 0.584,-0.364 1.296,-0.667 2.109,-0.855 0.816,-0.168 1.739,-0.25 2.721,-0.294 1.972,-0.079 4.226,0.062 6.693,0.401 2.468,0.334 5.149,0.875 7.998,1.575 2.848,0.71 5.849,1.62 8.885,2.897 3.032,1.271 6.098,2.946 8.868,5.213 1.389,1.125 2.691,2.403 3.867,3.822 1.152,1.421 2.199,3.031 2.832,4.761 l 0.011,-0.178 c -0.11,0.253 -0.229,0.527 -0.348,0.802 -0.449,1.037 -0.895,2.067 -1.332,3.075 l 0.313,-0.146 c -0.609,-0.181 -1.209,-0.359 -1.799,-0.535 l 0.167,0.154 C 43.167,16.183 42.271,15.096 41.31,14.083 40.333,13.094 39.311,12.17 38.211,11.386 36.042,9.776 33.731,8.521 31.446,7.463 26.849,5.388 22.347,4.098 18.292,3.189 10.155,1.387 3.667,1.603 0.438,2.554 L 0.526,2.578 C 0.039,2.044 -0.282,1.691 -0.558,1.389 l 0.01,0.061 C -0.365,0.985 -0.226,0.63 -0.12,0.362 -0.03,0.122 0.009,0.004 0,0 -0.009,-0.004 -0.067,0.107 -0.175,0.339 -0.294,0.601 -0.451,0.949 -0.656,1.405 l -0.015,0.032 0.025,0.03 c 0.266,0.31 0.577,0.672 1.048,1.22 L 0.435,2.726 0.489,2.711 c 3.194,-0.842 9.643,-0.978 17.714,0.875 4.026,0.934 8.499,2.243 13.041,4.315 2.258,1.055 4.537,2.303 6.665,3.891 1.08,0.772 2.078,1.68 3.03,2.645 0.928,0.973 1.815,2.081 2.382,3.282 l 0.058,0.122 0.11,0.033 c 0.59,0.176 1.19,0.355 1.798,0.536 l 0.222,0.067 0.091,-0.212 c 0.437,-1.008 0.884,-2.038 1.333,-3.075 0.119,-0.275 0.238,-0.549 0.347,-0.802 L 47.322,14.292 47.291,14.21 C 45.873,10.505 43.198,7.688 40.413,5.381 37.591,3.081 34.48,1.395 31.412,0.123 28.341,-1.154 25.304,-2.057 22.442,-2.751 19.576,-3.435 16.877,-3.959 14.39,-4.272 11.904,-4.589 9.629,-4.706 7.636,-4.599 6.639,-4.539 5.718,-4.445 4.872,-4.256 4.033,-4.047 3.305,-3.719 2.713,-3.332 1.52,-2.558 0.845,-1.651 0.473,-1.019 0.102,-0.378 0,0 0,0"/>
                        </g>
                        <g transform="translate(125.7299,406.6278)" id="g5472">
                        <path id="path5474" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0,0 1.305,-0.425 3.652,-1.467 4.234,-1.741 4.88,-2.046 5.59,-2.381 6.281,-2.762 7.032,-3.176 7.843,-3.623 8.636,-4.101 9.47,-4.647 10.36,-5.226 c 0.839,-0.649 1.796,-1.257 2.681,-2.056 3.666,-3 7.537,-7.555 9.932,-13.723 1.207,-3.068 2.04,-6.5 2.393,-10.163 0.341,-3.662 0.287,-7.549 -0.498,-11.517 l -0.004,-0.019 -0.011,-0.025 c -0.168,-0.369 -0.358,-0.784 -0.548,-1.201 l -0.008,-0.018 -0.012,-0.018 c -3.328,-4.911 -8.06,-9.461 -14.095,-12.221 -6.072,-2.652 -13.201,-3.331 -20.133,-2.106 -3.233,0.539 -6.368,1.387 -9.371,2.453 -3.029,1.001 -5.87,2.513 -8.293,4.448 -2.433,1.927 -4.474,4.25 -6.053,6.78 -0.199,0.316 -0.396,0.631 -0.572,0.958 l -0.272,0.485 -0.068,0.121 -0.017,0.03 c -0.002,-0.008 -0.058,0.175 -0.036,0.114 l -0.008,0.068 -0.031,0.274 c -0.083,0.729 -0.166,1.454 -0.249,2.174 -0.2,1.439 -0.25,2.874 -0.329,4.289 -0.12,1.414 -0.022,2.818 -0.032,4.199 0.037,1.38 0.185,2.74 0.299,4.078 0.103,0.665 0.206,1.325 0.307,1.979 l 0.154,0.978 0.227,0.957 c 0.15,0.635 0.3,1.265 0.448,1.89 0.2,0.611 0.397,1.217 0.594,1.818 0.1,0.3 0.19,0.602 0.298,0.895 l 0.366,0.862 c 0.25,0.569 0.466,1.147 0.739,1.692 0.574,1.077 1.106,2.152 1.784,3.115 0.604,1.01 1.365,1.879 2.049,2.773 0.773,0.818 1.488,1.659 2.309,2.356 0.77,0.753 1.623,1.368 2.424,2.002 0.851,0.565 1.652,1.161 2.506,1.618 1.658,0.999 3.34,1.723 4.922,2.348 3.193,1.192 6.072,1.828 8.44,2.163 2.371,0.342 4.231,0.428 5.489,0.442 0.63,0.007 1.11,-0.007 1.433,-0.022 C -0.165,0.027 0,0 0,0 c 0,0 -0.165,-0.009 -0.488,-0.009 -0.343,-0.007 -0.818,-0.017 -1.428,-0.03 -1.254,-0.048 -3.106,-0.166 -5.461,-0.537 -2.353,-0.365 -5.209,-1.027 -8.367,-2.234 -1.564,-0.634 -3.224,-1.363 -4.858,-2.362 -0.842,-0.458 -1.63,-1.053 -2.467,-1.616 -0.787,-0.631 -1.626,-1.243 -2.382,-1.989 -0.806,-0.693 -1.506,-1.526 -2.264,-2.336 -0.67,-0.885 -1.416,-1.744 -2.006,-2.743 -0.664,-0.951 -1.184,-2.013 -1.746,-3.076 -0.267,-0.539 -0.477,-1.111 -0.721,-1.672 l -0.358,-0.851 c -0.106,-0.29 -0.193,-0.589 -0.291,-0.885 -0.191,-0.593 -0.384,-1.192 -0.579,-1.795 -0.144,-0.619 -0.29,-1.242 -0.436,-1.87 l -0.222,-0.945 -0.148,-0.968 c -0.099,-0.648 -0.198,-1.301 -0.298,-1.958 -0.109,-1.326 -0.252,-2.671 -0.285,-4.04 0.014,-1.369 -0.08,-2.758 0.043,-4.162 0.081,-1.404 0.133,-2.828 0.336,-4.257 0.083,-0.716 0.167,-1.436 0.251,-2.16 l 0.032,-0.271 0.007,-0.068 c 0.025,-0.084 -0.03,0.076 -0.017,0.049 l 0.016,-0.03 0.067,-0.119 0.268,-0.475 c 0.174,-0.32 0.368,-0.629 0.563,-0.939 1.555,-2.481 3.561,-4.756 5.949,-6.644 2.386,-1.898 5.149,-3.369 8.149,-4.36 2.979,-1.055 6.084,-1.894 9.282,-2.427 6.859,-1.212 13.873,-0.54 19.842,2.057 5.933,2.706 10.604,7.171 13.911,12.024 l -0.02,-0.035 c 0.191,0.417 0.382,0.831 0.551,1.199 l -0.015,-0.043 c 0.778,3.874 0.849,7.752 0.523,11.368 -0.336,3.626 -1.145,7.024 -2.324,10.062 -2.338,6.111 -6.136,10.641 -9.75,13.65 -0.871,0.801 -1.815,1.413 -2.643,2.066 C 9.338,-4.847 8.515,-4.295 7.731,-3.81 6.93,-3.354 6.187,-2.932 5.505,-2.544 4.804,-2.199 4.164,-1.885 3.589,-1.602 2.451,-1.017 1.522,-0.701 0.921,-0.418 0.631,-0.29 0.405,-0.191 0.231,-0.115 0.077,-0.045 -0.001,-0.006 0,0"/>
                        </g>
                        <g transform="translate(94.5229,364.2858)" id="g5476">
                        <path id="path5478" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.902,-3.026 -0.485,-6.111 -3.098,-6.889 -2.612,-0.779 -5.461,1.044 -6.363,4.07 -0.901,3.026 0.485,6.111 3.098,6.889 C -3.751,4.849 -0.902,3.026 0,0"/>
                        </g>
                        <g transform="translate(94.523,364.2858)" id="g5480">
                        <path id="path5482" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.048,-0.016 -0.18,0.44 -0.592,1.167 -1.008,1.874 -1.752,2.9 -3.078,3.557 -3.735,3.875 -4.529,4.076 -5.377,4.026 -6.218,3.956 -7.106,3.632 -7.816,2.995 -9.269,1.746 -9.872,-0.614 -9.211,-2.744 c 0.612,-2.145 2.409,-3.79 4.309,-4.04 0.943,-0.145 1.863,0.07 2.606,0.472 0.737,0.422 1.291,1.026 1.667,1.651 0.75,1.276 0.811,2.541 0.772,3.361 C 0.09,-0.466 -0.049,-0.013 0,0 0.017,0.005 0.063,-0.104 0.134,-0.318 0.211,-0.53 0.287,-0.856 0.345,-1.282 0.446,-2.121 0.451,-3.451 -0.309,-4.845 -0.691,-5.527 -1.277,-6.204 -2.082,-6.687 -2.891,-7.15 -3.915,-7.407 -4.967,-7.26 c -2.121,0.255 -4.082,2.052 -4.744,4.368 -0.713,2.299 -0.055,4.875 1.581,6.25 0.799,0.698 1.797,1.043 2.727,1.099 0.939,0.037 1.799,-0.209 2.492,-0.572 C -1.512,3.135 -0.788,2.02 -0.413,1.262 -0.228,0.873 -0.114,0.559 -0.062,0.339 -0.004,0.121 0.017,0.005 0,0"/>
                        </g>
                        <g transform="translate(143.19,387.6855)" id="g5484">
                        <path id="path5486" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -2.539,8.005 -9.446,14.714 -17.73,16.095 -0.538,0.09 -0.944,0.083 -1.418,-0.188 -0.474,-0.271 -0.939,-0.975 -0.837,-1.596 0.374,-2.99 7.597,-3.303 10.393,-6.392 2.796,-3.088 4.682,-6.567 6.798,-10.155 0.323,-0.548 0.716,-1.146 1.338,-1.279 C -0.7,-3.677 0.039,-3.02 0.237,-2.274 0.435,-1.527 0.234,-0.737 0,0"/>
                        </g>
                        <g transform="translate(148.3166,354.5619)" id="g5488">
                        <path id="path5490" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.016,-0.007 -0.045,-0.179 -0.177,-0.501 -0.137,-0.319 -0.353,-0.784 -0.672,-1.363 -0.634,-1.156 -1.686,-2.781 -3.37,-4.461 -0.838,-0.84 -1.876,-1.649 -3.035,-2.41 -1.155,-0.774 -2.432,-1.533 -3.809,-2.268 -2.753,-1.467 -5.918,-2.843 -9.366,-3.895 -3.449,-1.053 -6.817,-1.734 -9.889,-2.243 -3.07,-0.516 -5.879,-0.812 -8.247,-0.775 -2.368,0.015 -4.27,0.376 -5.539,0.741 -0.631,0.198 -1.116,0.363 -1.432,0.511 -0.32,0.136 -0.484,0.216 -0.477,0.233 0.019,0.048 0.693,-0.231 1.962,-0.548 1.269,-0.301 3.149,-0.601 5.487,-0.569 2.338,0.011 5.112,0.34 8.166,0.88 3.055,0.533 6.399,1.224 9.816,2.268 3.416,1.042 6.552,2.39 9.295,3.822 1.371,0.716 2.643,1.454 3.796,2.203 1.162,0.742 2.175,1.506 3.016,2.314 1.683,1.614 2.77,3.186 3.451,4.299 C -0.34,-0.646 -0.042,0.02 0,0"/>
                        </g>
                        <g transform="translate(130.2654,363.257)" id="g5492">
                        <path id="path5494" style="fill:#ff9c6a;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.462,0.324 -1.124,0.32 -1.593,0.006 -0.469,-0.314 -0.724,-0.913 -0.643,-1.471 0.08,-0.559 0.483,-1.055 1.006,-1.267 0.601,-0.242 1.365,-0.079 1.752,0.44 C 0.908,-1.772 0.778,-0.58 0,0"/>
                        </g>
                        <g transform="translate(130.8573,361.0832)" id="g5496">
                        <path id="path5498" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.054,-0.022 -0.072,-0.446 -0.65,-0.801 -0.281,-0.161 -0.714,-0.315 -1.198,-0.148 -0.451,0.181 -0.815,0.549 -1.044,1.012 -0.212,0.477 -0.331,0.923 -0.221,1.434 0.161,0.462 0.4,0.755 0.716,0.96 0.316,0.178 0.595,0.17 0.767,0.164 C -1.453,2.608 -1.359,2.577 -1.357,2.542 -1.333,2.448 -1.777,2.447 -2.192,2.151 -2.368,2.01 -2.573,1.68 -2.646,1.382 -2.7,1.105 -2.598,0.646 -2.425,0.294 c 0.175,-0.366 0.468,-0.659 0.753,-0.797 0.28,-0.123 0.609,-0.065 0.859,0.032 C -0.299,-0.262 -0.065,0.049 0,0"/>
                        </g>
                        <g transform="translate(156.266,353.7308)" id="g5500">
                        <path id="path5502" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.351,0.285 13.271,4.486 23.33,0.324 6.31,-2.61 20.117,-10.319 29.635,-19.656 9.519,-9.338 25.927,-28.596 26.415,-31.108 0.488,-2.512 -0.367,-4.564 -0.367,-4.564 l 4.954,-8.97 -13.442,-10.912 -6.394,6.444 c 0,0 -3.528,0.046 -8.075,4.692 -4.548,4.647 -14.019,20.615 -19.809,24.642 C 30.458,-35.082 11.452,-27.434 9.78,-27.046 8.108,-26.658 0,0 0,0"/>
                        </g>
                        <g transform="translate(221.8193,283.8553)" id="g5504">
                        <path id="path5506" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.041,0.051 0.846,0.847 2.346,2.124 3.847,3.401 5.961,5.158 8.375,7.13 L 8.337,6.768 C 7.933,7.264 7.511,7.782 7.081,8.311 6.916,8.514 6.752,8.716 6.599,8.905 L 6.956,8.86 C 4.218,6.823 1.75,5.021 -0.043,3.742 -0.94,3.103 -1.668,2.594 -2.177,2.253 -2.432,2.082 -2.632,1.952 -2.77,1.87 -2.848,1.838 -2.87,1.779 -2.971,1.791 -2.997,1.801 -3.003,1.762 -2.997,1.764 c 0.006,0.002 0.034,-0.012 0.073,0.047 -0.034,0.061 0.042,0.075 0.093,0.14 0.166,0.141 0.342,0.292 0.537,0.459 0.473,0.39 1.168,0.942 2.037,1.619 1.738,1.354 4.169,3.205 6.902,5.248 l 0.2,0.149 0.158,-0.194 C 7.156,9.044 7.32,8.842 7.485,8.639 7.914,8.109 8.334,7.589 8.737,7.092 L 8.899,6.891 8.699,6.73 C 6.273,4.773 4.119,3.065 2.561,1.859 1.003,0.654 0.041,-0.05 0,0"/>
                        </g>
                        <g transform="translate(238.1339,293.9362)" id="g5508">
                        <path id="path5510" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.091,-0.112 -3.083,-2.838 -7.089,-6.09 -4.006,-3.252 -7.327,-5.797 -7.417,-5.685 -0.091,0.111 3.083,2.837 7.089,6.09 C -3.412,-2.434 -0.091,0.112 0,0"/>
                        </g>
                        <g transform="translate(204.265,338.8896)" id="g5512">
                        <path id="path5514" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.056,-0.049 -0.633,-0.928 -1.745,-2.346 -1.11,-1.419 -2.635,-3.384 -4.251,-5.605 -1.16,-1.589 -2.208,-3.095 -3.076,-4.359 l -0.108,-0.157 -0.166,0.079 c -1.257,0.599 -2.295,1.109 -3.014,1.478 -0.719,0.37 -1.119,0.601 -1.1,0.643 0.019,0.042 0.455,-0.11 1.205,-0.411 0.751,-0.302 1.815,-0.753 3.091,-1.311 l -0.274,-0.078 c 0.828,1.296 1.855,2.827 3.021,4.423 1.623,2.231 3.202,4.169 4.388,5.533 C -0.841,-0.749 -0.052,0.045 0,0"/>
                        </g>
                        <g transform="translate(199.1472,342.4662)" id="g5516">
                        <path id="path5518" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.059,-0.047 -0.468,-0.788 -1.315,-1.982 -0.847,-1.194 -2.002,-2.851 -3.209,-4.727 -1.205,-1.877 -2.232,-3.617 -2.965,-4.884 -0.734,-1.266 -1.188,-2.053 -1.256,-2.019 -0.061,0.03 0.277,0.876 0.932,2.194 0.653,1.318 1.638,3.1 2.851,4.991 1.215,1.889 2.427,3.525 3.354,4.667 C -0.682,-0.616 -0.053,0.043 0,0"/>
                        </g>
                        <g transform="translate(197.9494,343.8677)" id="g5520">
                        <path id="path5522" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.028,-0.022 -0.192,-0.367 -0.613,-0.97 -0.425,-0.6 -1.029,-1.475 -1.76,-2.566 -1.463,-2.18 -3.374,-5.266 -5.186,-8.836 -1.807,-3.573 -3.167,-6.939 -4.059,-9.409 -0.447,-1.234 -0.796,-2.239 -1.028,-2.936 -0.238,-0.696 -0.385,-1.077 -0.42,-1.068 -0.035,0.01 0.047,0.41 0.225,1.125 0.174,0.718 0.47,1.744 0.875,2.999 0.807,2.512 2.122,5.926 3.942,9.525 1.826,3.595 3.8,6.674 5.349,8.81 0.773,1.069 1.425,1.915 1.901,2.479 C -0.302,-0.28 -0.028,0.022 0,0"/>
                        </g>
                        <g transform="translate(192.5819,345.3846)" id="g5524">
                        <path id="path5526" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.065,-0.056 -0.948,-1.274 -2.444,-3.342 -1.498,-2.065 -3.435,-5.016 -5.228,-8.47 -1.785,-3.458 -3.077,-6.744 -3.898,-9.159 -0.825,-2.416 -1.235,-3.946 -1.318,-3.925 -0.035,0.009 0.033,0.4 0.186,1.101 0.147,0.703 0.411,1.708 0.781,2.937 0.737,2.458 1.985,5.797 3.787,9.286 1.808,3.483 3.813,6.43 5.395,8.451 0.79,1.012 1.459,1.808 1.947,2.334 C -0.307,-0.258 -0.027,0.023 0,0"/>
                        </g>
                        <g id="g5528">
                        <g id="g5530"/>
                        <g id="g5542">
                            <g style="opacity:0.30000299" id="g5540" clip-path="url(#clipPath5534)">
                            <g id="g5538" transform="translate(189.0513,349.2213)">
                                <path id="path5536" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -2.407,-5.057 -4.152,-8.06 -6.559,-13.117 -0.145,-0.305 -0.313,-0.634 -0.622,-0.772 -0.372,-0.168 -0.801,0.004 -1.173,0.173 -1.86,0.852 -3.72,1.703 -5.581,2.554 -0.455,0.208 -0.929,0.432 -1.229,0.833 -0.423,0.567 -0.395,1.343 -0.326,2.047 0.486,4.904 2.447,9.304 5.029,13.501 0,0 1.981,-0.721 5.188,-2.294 C -2.294,1.464 0,0 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(241.6149,287.6744)" id="g5544">
                        <path id="path5546" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -13.598,-11.038 c -0.534,-0.433 -1.317,-0.352 -1.75,0.181 -0.433,0.534 -0.351,1.317 0.182,1.75 L -1.568,1.931 C -1.034,2.364 -0.251,2.283 0.182,1.749 0.615,1.216 0.533,0.433 0,0"/>
                        </g>
                        <g transform="translate(227.7483,277.0843)" id="g5548">
                        <path id="path5550" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,0 -0.321,-6.253 1.04,-9.662 1.361,-3.408 2.492,-5.895 4.45,-6.302 1.959,-0.408 3.316,0.472 2.721,2.208 -0.596,1.736 -1.66,2.5 -1.659,4.869 0.002,2.368 0.509,2.928 0.509,2.928 0,0 4.975,-4.306 5.046,-6.217 0.072,-1.91 -1.87,-7.26 0.982,-7.313 2.852,-0.053 4.199,3.409 4.199,3.409 0,0 3.237,-1.179 4.521,2.617 0,0 3.574,2.252 2.573,6.766 0,0 2.901,1.838 1.456,4.512 -1.445,2.675 -5.148,7.363 -7.53,9.277 -2.382,1.914 -3.669,2.497 -3.778,2.631 -0.108,0.134 -1.15,1.508 -1.15,1.508 z"/>
                        </g>
                        <g transform="translate(243.8326,270.8992)" id="g5552">
                        <path id="path5554" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.084,0.099 1.595,-1.817 1.908,-4.707 2.254,-7.594 1.212,-9.801 1.109,-9.724 0.95,-9.682 1.724,-7.506 1.391,-4.766 1.099,-2.023 -0.145,-0.076 0,0"/>
                        </g>
                        <g transform="translate(246.5355,275.2447)" id="g5556">
                        <path id="path5558" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.044,0.041 0.571,-0.419 1.227,-1.334 0.657,-0.91 1.397,-2.308 1.836,-3.977 0.434,-1.672 0.472,-3.253 0.345,-4.368 -0.125,-1.119 -0.36,-1.778 -0.418,-1.764 -0.169,0.015 0.442,2.759 -0.431,6 C 1.736,-2.191 -0.139,-0.095 0,0"/>
                        </g>
                        <g transform="translate(247.9108,277.9129)" id="g5560">
                        <path id="path5562" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.096,0.092 1.528,-1.358 2.713,-3.552 3.91,-5.739 4.35,-7.729 4.22,-7.759 4.073,-7.805 3.423,-5.93 2.256,-3.8 1.102,-1.664 -0.118,-0.099 0,0"/>
                        </g>
                        <g transform="translate(247.7345,282.1672)" id="g5564">
                        <path id="path5566" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C 0.026,-0.011 -0.069,-0.317 -0.299,-0.858 -0.53,-1.397 -0.917,-2.164 -1.489,-3.07 -2.615,-4.899 -4.607,-7.18 -7.118,-9.513 L -7.3,-9.682 -7.474,-9.503 c -0.766,0.789 -1.613,1.583 -2.527,2.346 -1.022,0.853 -2.066,1.618 -3.078,2.278 l -0.266,0.173 0.227,0.219 c 2.382,2.302 4.269,4.48 5.563,6.068 1.296,1.589 2.022,2.574 2.077,2.535 C -5.453,4.099 -5.604,3.832 -5.911,3.358 -6.218,2.885 -6.685,2.209 -7.302,1.384 c -1.231,-1.651 -3.082,-3.889 -5.465,-6.232 l -0.039,0.392 c 1.035,-0.661 2.1,-1.434 3.138,-2.302 0.93,-0.775 1.788,-1.585 2.56,-2.393 l -0.356,0.01 c 2.516,2.301 4.52,4.499 5.703,6.251 C -0.557,-1.152 -0.074,0.034 0,0"/>
                        </g>
                        <g transform="translate(235.3953,264.1998)" id="g5568">
                        <path id="path5570" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.027,-0.138 -1.131,0.191 -2.146,-0.51 -1.013,-0.707 -1.089,-1.857 -1.229,-1.834 -0.064,-0.003 -0.156,0.282 -0.069,0.746 0.082,0.456 0.389,1.089 1.001,1.515 0.613,0.424 1.313,0.491 1.768,0.408 C -0.209,0.245 0.026,0.059 0,0"/>
                        </g>
                        <g transform="translate(243.5875,258.8116)" id="g5572">
                        <path id="path5574" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.144,-0.04 -0.386,1.257 -1.548,2.18 -2.705,3.112 -4.022,3.064 -4.015,3.213 -4.022,3.278 -3.702,3.389 -3.164,3.356 -2.632,3.325 -1.879,3.112 -1.223,2.587 -0.567,2.062 -0.194,1.375 -0.048,0.862 0.103,0.344 0.065,0.008 0,0"/>
                        </g>
                        <g transform="translate(242.0543,287.8625)" id="g5576">
                        <path id="path5578" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.089,-0.113 -3.05,-2.732 -7.01,-5.85 -3.962,-3.119 -7.245,-5.555 -7.334,-5.442 -0.089,0.113 3.05,2.732 7.011,5.851 C -3.372,-2.323 -0.089,0.113 0,0"/>
                        </g>
                        <g transform="translate(198.431,308.2647)" id="g5580">
                        <path id="path5582" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="M 0,0 C 8.348,3.149 15.987,9.305 19.154,17.646 L 16.433,20.68 C 13.451,12.195 6.088,5.706 -2.589,3.342 Z"/>
                        </g>
                        <g transform="translate(213.2479,330.63)" id="g5584">
                        <path id="path5586" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.033,-0.014 -0.096,-0.36 -0.357,-0.976 -0.248,-0.622 -0.695,-1.484 -1.3,-2.517 -1.223,-2.056 -3.296,-4.706 -6.127,-7.038 -2.822,-2.342 -5.728,-3.97 -7.875,-5.009 -1.073,-0.523 -1.96,-0.908 -2.582,-1.149 -0.622,-0.244 -0.971,-0.363 -0.985,-0.33 -0.034,0.076 1.305,0.691 3.4,1.807 2.09,1.116 4.931,2.775 7.709,5.082 2.786,2.296 4.86,4.853 6.148,6.832 C -0.685,-1.311 -0.091,0.042 0,0"/>
                        </g>
                        <g transform="translate(219.6469,322.8724)" id="g5588">
                        <path id="path5590" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.033,-0.014 -0.096,-0.36 -0.357,-0.976 -0.248,-0.622 -0.695,-1.484 -1.3,-2.517 -1.223,-2.057 -3.296,-4.706 -6.127,-7.038 -2.822,-2.342 -5.728,-3.97 -7.875,-5.009 -1.073,-0.523 -1.96,-0.908 -2.582,-1.149 -0.622,-0.244 -0.971,-0.363 -0.985,-0.33 -0.034,0.076 1.305,0.691 3.4,1.807 2.09,1.116 4.931,2.775 7.709,5.082 2.786,2.296 4.86,4.853 6.148,6.832 C -0.685,-1.311 -0.091,0.042 0,0"/>
                        </g>
                        <g transform="translate(159.4133,354.6162)" id="g5592">
                        <path id="path5594" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.036,0.002 0.121,-0.53 0.245,-1.493 0.109,-0.964 0.332,-2.352 0.669,-4.05 0.343,-1.697 0.844,-3.7 1.583,-5.864 0.754,-2.157 1.724,-4.481 2.981,-6.8 1.276,-2.31 2.709,-4.381 4.126,-6.174 1.433,-1.782 2.859,-3.275 4.118,-4.462 1.262,-1.184 2.325,-2.104 3.09,-2.699 0.756,-0.608 1.166,-0.96 1.145,-0.989 -0.021,-0.029 -0.47,0.266 -1.268,0.828 -0.806,0.548 -1.912,1.43 -3.217,2.589 -1.302,1.163 -2.771,2.645 -4.241,4.431 -1.454,1.796 -2.918,3.887 -4.21,6.226 -1.273,2.348 -2.242,4.708 -2.979,6.897 -0.722,2.197 -1.19,4.229 -1.49,5.948 C 0.259,-3.891 0.09,-2.488 0.043,-1.514 -0.019,-0.54 -0.036,-0.003 0,0"/>
                        </g>
                        <g transform="translate(167.9872,355.866)" id="g5596">
                        <path id="path5598" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.036,-0.002 0.057,-0.503 0.065,-1.405 -0.003,-0.902 0.041,-2.208 0.149,-3.814 0.094,-1.608 0.319,-3.514 0.651,-5.615 0.362,-2.097 0.856,-4.385 1.532,-6.745 0.694,-2.357 1.502,-4.554 2.319,-6.519 0.844,-1.953 1.676,-3.682 2.457,-5.091 0.77,-1.414 1.432,-2.54 1.917,-3.301 0.476,-0.766 0.727,-1.2 0.698,-1.221 -0.03,-0.021 -0.337,0.375 -0.867,1.109 -0.539,0.729 -1.253,1.832 -2.069,3.233 -0.828,1.395 -1.701,3.122 -2.577,5.081 -0.848,1.972 -1.678,4.185 -2.378,6.563 -0.682,2.383 -1.167,4.696 -1.506,6.815 -0.309,2.123 -0.497,4.049 -0.545,5.671 -0.061,1.62 -0.048,2.934 0.016,3.838 C -0.083,-0.496 -0.036,0.002 0,0"/>
                        </g>
                        <g transform="translate(206.2025,258.6825)" id="g5600">
                        <path id="path5602" style="fill:#375a64;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,0 4.997,2.809 7.954,1.21 2.958,-1.6 15.612,-10.645 15.042,-12.262 -0.571,-1.617 -1.469,-5.276 -1.469,-5.276 z"/>
                        </g>
                        <g transform="translate(207.123,145.9531)" id="g5604">
                        <path id="path5606" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.146,0.49 -12.049,15.97 -12.049,15.97 l -9.623,20.959 -4.984,14.341 c 0,0 2.797,3.145 -1.801,6.042 l -1.633,7.871 -54.27,30.483 c 0,0 -0.859,-20.135 7.554,-28.529 2.532,-2.526 6.266,-20.763 12.025,-31.139 5.758,-10.375 19.207,-28.061 20.931,-31.46 1.724,-3.398 16.733,-22.137 22.766,-28.068 7.147,-7.026 20.157,-22.157 20.157,-22.157 l 19.292,14.97 C 18.365,-30.717 0.146,-0.49 0,0"/>
                        </g>
                        <g transform="translate(207.7883,258.0824)" id="g5608">
                        <path id="path5610" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 1.077,-0.035 30.532,-21.309 35.759,-28.109 5.226,-6.8 11.375,-26.839 12.331,-30.644 0.956,-3.805 11.733,-52.157 11.959,-53.512 0.226,-1.355 -10.655,-12.438 -22.501,-10.277 l -8.558,16.431 c 0,0 -9.569,17.656 -11.501,22.948 l -1.933,5.292 -7.67,17.986 -8.457,8.906 c -1.668,0.693 -2.683,1.751 -3.023,3.185 l -5.364,5.65 -11.339,2.845 c 0,0 -4.817,7.811 -2.473,22.024 2.345,14.212 14.426,24.711 14.426,24.711 z"/>
                        </g>
                        <g transform="translate(153.1975,165.0445)" id="g5612">
                        <path id="path5614" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.03,0.021 0.266,0.469 0.923,1.17 0.656,0.702 1.674,1.654 3.039,2.697 2.719,2.098 6.874,4.465 11.75,6.366 1.231,0.447 2.41,0.925 3.603,1.273 1.183,0.372 2.35,0.63 3.464,0.854 2.235,0.415 4.277,0.59 5.989,0.654 1.714,0.063 3.101,0.014 4.056,-0.054 0.956,-0.069 1.48,-0.158 1.476,-0.193 -0.004,-0.036 -0.531,-0.016 -1.484,-0.01 -0.953,0.006 -2.332,-0.002 -4.03,-0.111 -1.696,-0.11 -3.714,-0.321 -5.915,-0.757 -2.21,-0.416 -4.544,-1.205 -6.97,-2.141 C 11.063,7.862 6.929,5.572 4.181,3.571 2.803,2.577 1.759,1.678 1.067,1.027 0.372,0.377 0.028,-0.021 0,0"/>
                        </g>
                        <g transform="translate(156.0465,161.0314)" id="g5616">
                        <path id="path5618" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c 0,0 6.743,6.928 16.223,10.188 9.48,3.261 16.885,3.597 16.885,3.597 l 1.254,-2.733 c 0,0 -11.541,-2.273 -16.293,-4.036 C 12.157,4.823 1.847,-2.628 1.847,-2.628 Z"/>
                        </g>
                        <g transform="translate(204.0052,210.1798)" id="g5620">
                        <path id="path5622" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.036,0.005 0.031,0.6 0.182,1.676 0.067,0.54 0.169,1.197 0.354,1.947 0.177,0.751 0.334,1.62 0.641,2.544 0.273,0.934 0.583,1.954 1.016,3.015 0.376,1.082 0.912,2.183 1.449,3.354 1.155,2.3 2.616,4.737 4.424,7.1 1.835,2.343 3.828,4.369 5.766,6.064 0.998,0.813 1.93,1.607 2.884,2.243 0.918,0.685 1.828,1.242 2.664,1.74 0.817,0.529 1.619,0.898 2.302,1.257 0.679,0.368 1.289,0.632 1.795,0.832 1.004,0.416 1.563,0.629 1.577,0.596 0.013,-0.034 -0.52,-0.31 -1.492,-0.78 C 23.072,31.36 22.478,31.072 21.817,30.682 21.152,30.301 20.369,29.913 19.572,29.368 18.756,28.855 17.867,28.287 16.969,27.594 16.036,26.95 15.125,26.151 14.146,25.338 12.248,23.642 10.291,21.631 8.478,19.317 6.692,16.982 5.237,14.584 4.071,12.322 3.529,11.171 2.984,10.089 2.595,9.024 2.149,7.981 1.822,6.978 1.529,6.06 1.202,5.151 1.022,4.296 0.82,3.557 0.609,2.819 0.478,2.172 0.381,1.64 0.17,0.581 0.036,-0.005 0,0"/>
                        </g>
                        <g transform="translate(207.5505,207.0114)" id="g5624">
                        <path id="path5626" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.036,0.005 0.031,0.6 0.182,1.676 0.067,0.54 0.169,1.197 0.355,1.947 0.176,0.751 0.333,1.62 0.64,2.544 0.273,0.934 0.583,1.954 1.016,3.015 0.377,1.082 0.912,2.183 1.449,3.354 1.155,2.299 2.617,4.737 4.424,7.1 1.835,2.343 3.828,4.369 5.766,6.064 0.998,0.813 1.93,1.607 2.884,2.243 0.918,0.685 1.828,1.242 2.664,1.74 0.817,0.529 1.619,0.898 2.302,1.257 0.679,0.368 1.29,0.632 1.795,0.832 1.004,0.416 1.564,0.629 1.577,0.596 0.014,-0.034 -0.52,-0.31 -1.492,-0.781 C 23.072,31.36 22.478,31.072 21.817,30.682 21.152,30.301 20.369,29.913 19.572,29.368 18.756,28.855 17.867,28.287 16.969,27.594 16.036,26.95 15.125,26.151 14.146,25.338 12.249,23.642 10.291,21.631 8.478,19.317 6.693,16.983 5.237,14.584 4.071,12.322 3.529,11.171 2.985,10.089 2.595,9.024 2.149,7.981 1.822,6.978 1.53,6.06 1.202,5.151 1.022,4.296 0.82,3.557 0.609,2.819 0.478,2.172 0.381,1.64 0.17,0.581 0.036,-0.005 0,0"/>
                        </g>
                        <g transform="translate(131.2867,223.4148)" id="g5628">
                        <path id="path5630" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 -3.81,7.768 44.86,22.651 25.258,12 2.548,-1.68 L 56.204,-4.631 48.6,-8.27 46.391,-13.102 -0.536,-1.437"/>
                        </g>
                        <g transform="translate(202.5436,261.9618)" id="g5632">
                        <path id="path5634" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.024,-0.036 -0.511,-0.412 -1.448,-1.123 -0.939,-0.709 -2.258,-1.791 -3.755,-3.263 -2.993,-2.915 -6.601,-7.64 -8.734,-13.693 -2.135,-6.055 -2.286,-11.998 -1.782,-16.146 0.243,-2.086 0.592,-3.755 0.88,-4.896 0.284,-1.141 0.464,-1.769 0.424,-1.783 -0.018,-0.005 -0.082,0.145 -0.189,0.438 -0.101,0.294 -0.273,0.722 -0.431,1.292 -0.349,1.131 -0.757,2.802 -1.049,4.903 -0.604,4.177 -0.513,10.216 1.656,16.365 2.166,6.148 5.88,10.909 8.969,13.785 1.545,1.453 2.911,2.499 3.892,3.162 0.48,0.345 0.883,0.571 1.146,0.737 C -0.154,-0.062 -0.01,0.015 0,0"/>
                        </g>
                        <g transform="translate(178.891,213.0226)" id="g5636">
                        <path id="path5638" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.011,-0.014 -0.156,0.068 -0.422,0.237 -0.313,0.208 -0.691,0.459 -1.146,0.761 -0.489,0.342 -1.094,0.749 -1.829,1.171 -0.73,0.429 -1.534,0.963 -2.49,1.436 -0.938,0.504 -1.968,1.05 -3.119,1.545 -1.125,0.55 -2.382,1.008 -3.692,1.52 -2.651,0.937 -5.633,1.782 -8.829,2.352 -3.204,0.536 -6.297,0.742 -9.109,0.749 -1.406,-0.043 -2.744,-0.052 -3.989,-0.193 -1.25,-0.079 -2.403,-0.248 -3.456,-0.408 -1.059,-0.125 -1.996,-0.358 -2.827,-0.517 -0.834,-0.15 -1.541,-0.331 -2.116,-0.489 -0.531,-0.132 -0.971,-0.241 -1.335,-0.331 -0.307,-0.071 -0.471,-0.1 -0.477,-0.082 -0.005,0.017 0.148,0.079 0.446,0.182 0.358,0.116 0.79,0.257 1.312,0.426 0.569,0.189 1.272,0.399 2.105,0.578 0.831,0.187 1.769,0.447 2.832,0.596 1.057,0.185 2.217,0.376 3.477,0.475 1.254,0.161 2.604,0.186 4.023,0.242 2.839,0.02 5.966,-0.173 9.203,-0.714 3.229,-0.576 6.239,-1.444 8.906,-2.416 1.318,-0.529 2.581,-1.006 3.708,-1.578 C -7.671,5.025 -6.642,4.456 -5.708,3.927 -4.757,3.429 -3.96,2.87 -3.241,2.415 -2.516,1.967 -1.925,1.533 -1.452,1.164 -1.017,0.829 -0.657,0.551 -0.359,0.321 -0.113,0.124 0.011,0.014 0,0"/>
                        </g>
                        <g transform="translate(138.7637,190.6666)" id="g5640">
                        <path id="path5642" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.028,0.023 0.359,0.504 1.086,1.357 0.356,0.433 0.809,0.948 1.387,1.496 0.571,0.553 1.189,1.223 1.973,1.85 0.384,0.326 0.785,0.665 1.201,1.018 0.421,0.351 0.896,0.668 1.368,1.022 0.933,0.726 2.018,1.371 3.142,2.078 2.298,1.327 4.942,2.59 7.846,3.577 2.918,0.953 5.792,1.529 8.427,1.845 1.323,0.11 2.579,0.244 3.761,0.223 0.59,-10e-4 1.16,0.031 1.707,0.003 0.544,-0.033 1.069,-0.064 1.572,-0.095 1.003,-0.031 1.899,-0.196 2.688,-0.297 0.791,-0.09 1.462,-0.231 2.007,-0.364 1.093,-0.247 1.691,-0.399 1.682,-0.434 -0.008,-0.035 -0.621,0.05 -1.719,0.235 -0.548,0.102 -1.219,0.212 -2.008,0.275 -0.787,0.072 -1.677,0.21 -2.672,0.218 -0.499,0.019 -1.019,0.039 -1.558,0.06 -0.542,0.017 -1.106,-0.024 -1.689,-0.033 -1.169,0.002 -2.409,-0.147 -3.716,-0.267 -2.601,-0.34 -5.436,-0.922 -8.317,-1.863 C 15.3,10.929 12.683,9.695 10.398,8.406 9.281,7.719 8.199,7.095 7.266,6.391 6.794,6.049 6.318,5.743 5.895,5.405 5.475,5.064 5.072,4.737 4.684,4.422 3.892,3.819 3.263,3.174 2.677,2.645 2.083,2.121 1.612,1.63 1.235,1.22 0.467,0.414 0.028,-0.023 0,0"/>
                        </g>
                        <g transform="translate(141.4186,183.4965)" id="g5644">
                        <path id="path5646" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.027,0.024 0.364,0.479 1.098,1.285 1.287,1.492 1.491,1.714 1.71,1.954 1.956,2.184 2.218,2.43 2.496,2.692 3.065,3.216 3.695,3.836 4.474,4.424 4.857,4.73 5.257,5.048 5.671,5.379 6.1,5.694 6.562,6 7.032,6.329 c 0.926,0.68 2.002,1.271 3.106,1.939 2.263,1.238 4.849,2.423 7.667,3.389 2.827,0.944 5.603,1.561 8.147,1.975 1.279,0.166 2.491,0.351 3.637,0.408 1.142,0.108 2.209,0.133 3.184,0.139 0.974,0.037 1.854,-0.026 2.627,-0.057 0.773,-0.021 1.436,-0.082 1.976,-0.153 1.082,-0.122 1.676,-0.207 1.672,-0.243 -0.004,-0.035 -0.606,-0.019 -1.687,0.041 -0.54,0.04 -1.202,0.071 -1.971,0.064 -0.769,0.003 -1.644,0.04 -2.61,-0.021 -0.966,-0.029 -2.024,-0.075 -3.154,-0.2 -1.135,-0.075 -2.334,-0.275 -3.598,-0.452 -2.516,-0.436 -5.26,-1.061 -8.056,-1.995 C 15.184,10.208 12.622,9.05 10.37,7.849 9.273,7.198 8.199,6.628 7.273,5.97 6.802,5.653 6.339,5.358 5.909,5.054 5.491,4.736 5.089,4.43 4.703,4.136 3.917,3.572 3.275,2.977 2.692,2.477 2.406,2.228 2.136,1.994 1.883,1.775 1.654,1.549 1.44,1.338 1.242,1.143 0.469,0.385 0.027,-0.024 0,0"/>
                        </g>
                        <g transform="translate(148.0529,174.3327)" id="g5648">
                        <path id="path5650" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.061,0.039 0.547,1.117 1.578,2.83 1.031,1.713 2.487,4.06 4.121,6.634 1.207,1.872 2.329,3.612 3.306,5.129 L 8.994,14.379 c -0.646,1.344 -1.171,2.463 -1.524,3.251 -0.354,0.789 -0.535,1.247 -0.495,1.267 0.041,0.02 0.299,-0.399 0.718,-1.155 0.42,-0.755 1.001,-1.846 1.69,-3.168 L 9.438,14.466 9.372,14.36 C 8.416,12.83 7.319,11.074 6.139,9.185 4.504,6.611 3,4.295 1.889,2.633 0.778,0.971 0.061,-0.038 0,0"/>
                        </g>
                        <g transform="translate(175.9717,133.2372)" id="g5652">
                        <path id="path5654" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.034,0.012 0.107,0.471 0.392,1.295 0.136,0.415 0.32,0.917 0.586,1.476 0.259,0.563 0.521,1.222 0.915,1.897 0.367,0.69 0.779,1.441 1.298,2.201 0.476,0.788 1.085,1.56 1.706,2.387 1.303,1.605 2.876,3.259 4.717,4.784 1.859,1.502 3.793,2.718 5.625,3.676 0.933,0.445 1.811,0.889 2.678,1.2 0.847,0.358 1.665,0.613 2.414,0.836 0.739,0.253 1.437,0.379 2.04,0.521 0.602,0.151 1.129,0.231 1.563,0.282 0.864,0.116 1.342,0.164 1.347,0.128 0.018,-0.111 -1.903,-0.328 -4.84,-1.282 C 19.708,19.158 18.908,18.887 18.079,18.516 17.231,18.193 16.374,17.74 15.46,17.29 13.668,16.322 11.774,15.115 9.943,13.637 8.132,12.136 6.574,10.519 5.271,8.954 4.649,8.148 4.035,7.397 3.551,6.63 3.023,5.891 2.599,5.161 2.215,4.491 0.699,1.8 0.105,-0.04 0,0"/>
                        </g>
                        <g transform="translate(179.9575,128.9872)" id="g5656">
                        <path id="path5658" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="M 0,0 C -0.034,0.013 0.111,0.447 0.404,1.225 0.545,1.617 0.732,2.09 0.992,2.62 1.247,3.152 1.51,3.774 1.887,4.416 2.58,5.734 3.543,7.229 4.731,8.8 c 1.214,1.551 2.668,3.166 4.36,4.689 1.707,1.506 3.479,2.766 5.159,3.794 1.697,1.001 3.293,1.786 4.681,2.323 0.681,0.301 1.329,0.49 1.887,0.683 0.557,0.197 1.048,0.329 1.453,0.424 0.806,0.201 1.255,0.295 1.263,0.261 0.029,-0.101 -1.757,-0.539 -4.461,-1.708 C 17.718,18.692 16.16,17.882 14.5,16.874 12.856,15.837 11.12,14.584 9.437,13.1 7.771,11.599 6.327,10.018 5.109,8.505 3.917,6.971 2.934,5.516 2.208,4.236 0.736,1.685 0.097,-0.04 0,0"/>
                        </g>
                        <g transform="translate(256.2343,196.4658)" id="g5660">
                        <path id="path5662" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.001,-0.036 -0.514,-0.098 -1.443,-0.18 -0.464,-0.035 -1.032,-0.084 -1.688,-0.178 -0.655,-0.09 -1.406,-0.156 -2.223,-0.315 -1.645,-0.254 -3.581,-0.682 -5.696,-1.275 -2.107,-0.624 -4.387,-1.43 -6.701,-2.469 -2.304,-1.06 -4.411,-2.249 -6.266,-3.427 -1.838,-1.204 -3.434,-2.382 -4.706,-3.454 -0.657,-0.512 -1.201,-1.033 -1.699,-1.469 -0.502,-0.432 -0.912,-0.827 -1.244,-1.154 -0.672,-0.647 -1.057,-0.994 -1.084,-0.969 -0.026,0.024 0.309,0.418 0.939,1.111 0.312,0.351 0.703,0.769 1.19,1.224 0.482,0.459 1.012,1.003 1.659,1.537 1.252,1.117 2.84,2.337 4.682,3.576 1.86,1.212 3.984,2.427 6.314,3.499 2.338,1.051 4.65,1.853 6.785,2.457 2.145,0.574 4.108,0.968 5.772,1.177 0.828,0.137 1.587,0.178 2.25,0.24 0.662,0.068 1.235,0.088 1.704,0.092 C -0.518,0.042 -0.001,0.036 0,0"/>
                        </g>
                        <g transform="translate(257.4482,191.2058)" id="g5664">
                        <path id="path5666" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.004,-0.036 -0.503,-0.139 -1.42,-0.294 -0.918,-0.145 -2.24,-0.403 -3.857,-0.774 -1.62,-0.362 -3.525,-0.898 -5.605,-1.59 -2.072,-0.717 -4.315,-1.606 -6.597,-2.701 -2.274,-1.112 -4.362,-2.322 -6.209,-3.504 -1.833,-1.204 -3.433,-2.367 -4.722,-3.414 -1.293,-1.04 -2.315,-1.917 -2.997,-2.548 -0.69,-0.624 -1.085,-0.957 -1.111,-0.932 -0.025,0.025 0.321,0.407 0.971,1.079 0.642,0.678 1.631,1.602 2.903,2.685 1.268,1.091 2.858,2.294 4.692,3.531 1.849,1.215 3.951,2.449 6.246,3.572 2.303,1.105 4.574,1.989 6.672,2.688 2.107,0.673 4.037,1.175 5.679,1.494 1.638,0.327 2.977,0.531 3.907,0.615 C -0.519,0.001 -0.004,0.036 0,0"/>
                        </g>
                        <g transform="translate(246.728,224.5744)" id="g5668">
                        <path id="path5670" style="fill-opacity: 1; fill-rule: nonzero; stroke: none; fill: rgb(0, 161, 223);" d="m 0,0 c -7.37,2.013 -15.746,-0.685 -21.283,-5.95 -5.536,-5.265 -8.706,-12.626 -10.22,-20.115 l -2.898,3.213 c 1.513,7.489 5.152,15.44 10.688,20.704 5.536,5.265 14.16,8.123 21.53,6.11 C -1.408,2.872 -0.689,1.511 0,0"/>
                        </g>
                        <g id="g5672">
                        <g id="g5674"/>
                        <g id="g5686">
                            <g style="opacity:0.30000299" id="g5684" clip-path="url(#clipPath5678)">
                            <g id="g5682" transform="translate(142.6104,184.7645)">
                                <path id="path5680" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.941,-0.892 3.314,-0.639 4.585,0.294 1.611,1.182 3.31,3.865 4.626,4.732 7.606,5.009 15.195,2.327 25.196,6.395 0.197,0.079 0.442,0.067 0.572,0.234 0.177,0.228 0.057,0.584 -0.175,0.755 -0.232,0.171 -0.535,0.205 -0.822,0.23 C 21.608,13.73 9.273,8.553 0,0"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g id="g5688">
                        <g id="g5690"/>
                        <g id="g5702">
                            <g style="opacity:0.30000299" id="g5700" clip-path="url(#clipPath5694)">
                            <g id="g5698" transform="translate(208.0745,207.5794)">
                                <path id="path5696" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 3.358,5.927 3.986,13.327 8.382,18.531 3.775,4.471 9.875,6.713 13.01,11.655 C 9.902,24.617 1.431,13.22 -0.589,0.613"/>
                            </g>
                            </g>
                        </g>
                        </g>
                        <g transform="translate(245.2386,132.4769)" id="g5704">
                        <path id="path5706" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 9.969,-0.878 19.862,4.01 25.548,12.163 0.773,1.107 0.203,2.777 -0.897,3.42 -1.245,0.729 -2.645,0.214 -3.42,-0.897 C 16.509,7.917 8.153,4.282 0,5 -1.347,5.118 -2.5,3.766 -2.5,2.5 -2.5,1.049 -1.351,0.119 0,0"/>
                        </g>
                        <g transform="translate(195.5637,271.295)" id="g5708">
                        <path id="path5710" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.011,-0.014 -0.194,-0.196 -0.595,-0.528 -0.443,-0.359 -1.032,-0.838 -1.771,-1.437 -0.768,-0.625 -1.72,-1.376 -2.858,-2.203 -1.134,-0.833 -2.403,-1.813 -3.874,-2.8 -1.454,-1.013 -3.052,-2.113 -4.818,-3.22 -1.738,-1.15 -3.661,-2.273 -5.671,-3.475 -4.061,-2.337 -8.62,-4.746 -13.535,-7.004 -4.93,-2.231 -9.739,-4.094 -14.166,-5.628 -2.227,-0.73 -4.336,-1.446 -6.344,-2.003 -1.993,-0.608 -3.873,-1.093 -5.59,-1.527 -1.71,-0.463 -3.282,-0.779 -4.655,-1.089 -1.37,-0.317 -2.561,-0.543 -3.537,-0.713 -0.937,-0.165 -1.684,-0.297 -2.245,-0.395 -0.514,-0.085 -0.786,-0.121 -0.789,-0.103 -0.003,0.018 0.262,0.088 0.769,0.206 0.557,0.123 1.297,0.286 2.225,0.49 0.969,0.201 2.151,0.455 3.513,0.799 1.364,0.337 2.926,0.677 4.626,1.162 1.708,0.455 3.577,0.959 5.559,1.583 1.998,0.575 4.095,1.304 6.311,2.043 4.406,1.555 9.193,3.425 14.107,5.649 4.898,2.251 9.449,4.639 13.511,6.945 2.011,1.188 3.936,2.294 5.679,3.425 1.772,1.087 3.378,2.167 4.841,3.158 1.481,0.966 2.763,1.923 3.911,2.732 1.153,0.803 2.12,1.529 2.906,2.129 0.764,0.566 1.372,1.018 1.83,1.358 C -0.238,-0.14 -0.011,0.014 0,0"/>
                        </g>
                        <g transform="translate(181.8739,257.8743)" id="g5712">
                        <path id="path5714" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.021,-0.03 -0.352,-0.327 -1.046,-0.842 -0.69,-0.518 -1.716,-1.23 -3.007,-2.077 -2.58,-1.695 -6.262,-3.868 -10.513,-5.909 -4.254,-2.037 -8.255,-3.547 -11.192,-4.497 -1.468,-0.476 -2.666,-0.83 -3.503,-1.044 -0.835,-0.219 -1.301,-0.323 -1.311,-0.288 -0.01,0.034 0.437,0.204 1.252,0.482 0.817,0.273 1.995,0.679 3.442,1.198 2.897,1.036 6.854,2.592 11.087,4.618 4.229,2.031 7.92,4.142 10.541,5.751 1.311,0.804 2.366,1.468 3.09,1.934 C -0.433,-0.212 -0.021,0.029 0,0"/>
                        </g>
                        <g transform="translate(207.6427,97.8388)" id="g5716">
                        <path id="path5718" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 6.239,5.242 12.706,10.197 19.387,14.862 1.106,0.772 1.618,2.188 0.897,3.42 -0.64,1.094 -2.307,1.674 -3.42,0.897 C 9.836,14.272 3.028,9.049 -3.536,3.536 -4.57,2.667 -4.432,0.896 -3.536,0 -2.511,-1.024 -1.037,-0.871 0,0"/>
                        </g>
                        <g transform="translate(257.8543,185.9585)" id="g5720">
                        <path id="path5722" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0,0 7.39,-3.973 8.091,-6.867 0.701,-2.895 3.4,-24.51 3.4,-24.51 l -2.571,-3.84 z"/>
                        </g>
                        <g transform="translate(266.5883,151.0856)" id="g5724">
                        <path id="path5726" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.141,-0.031 -2.131,8.409 -4.445,18.849 -2.316,10.444 -4.078,18.933 -3.938,18.964 0.14,0.031 2.131,-8.407 4.446,-18.851 C -1.623,8.522 0.14,0.031 0,0"/>
                        </g>
                        <g transform="translate(183.7228,119.3341)" id="g5728">
                        <path id="path5730" style="fill:#e1e1e1;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.912,0.975 -1.105,2.416 -0.491,3.602 1.695,3.273 5.208,9.214 7.126,8.505 2.043,-0.756 10.876,-12.574 14.414,-17.391 0.865,-1.178 0.794,-2.796 -0.168,-3.896 l -4.063,-4.645 c -1.004,-1.148 -2.78,-1.177 -3.822,-0.064 z"/>
                        </g>
                        <g transform="translate(183.7228,119.3341)" id="g5732">
                        <path id="path5734" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.013,0.012 0.197,-0.159 0.536,-0.497 0.371,-0.377 0.858,-0.874 1.465,-1.493 1.295,-1.355 3.101,-3.243 5.314,-5.559 1.12,-1.182 2.343,-2.473 3.652,-3.855 0.656,-0.695 1.333,-1.413 2.031,-2.152 0.607,-0.761 1.636,-1.104 2.581,-0.8 0.474,0.15 0.861,0.437 1.199,0.857 0.361,0.415 0.726,0.834 1.094,1.258 0.739,0.847 1.493,1.712 2.26,2.592 0.385,0.457 0.804,0.85 1.008,1.347 0.228,0.495 0.303,1.063 0.219,1.609 -0.08,0.562 -0.332,1.036 -0.712,1.517 -0.363,0.491 -0.729,0.986 -1.097,1.484 C 16.596,0.281 13.74,4.04 11.013,7.344 9.639,8.967 8.323,10.589 6.88,11.715 6.191,12.318 5.323,11.61 4.724,11.067 4.094,10.474 3.566,9.811 3.085,9.167 2.128,7.87 1.363,6.617 0.712,5.509 0.397,4.952 0.103,4.431 -0.17,3.948 -0.448,3.464 -0.65,3.03 -0.711,2.587 -0.856,1.709 -0.595,1.021 -0.386,0.611 -0.16,0.199 0.019,0.016 0,0 c 0,0 -0.213,0.149 -0.478,0.559 -0.245,0.407 -0.555,1.117 -0.434,2.058 0.045,0.465 0.263,0.969 0.523,1.447 0.252,0.493 0.534,1.024 0.847,1.589 0.632,1.129 1.378,2.401 2.33,3.732 0.48,0.661 1.006,1.343 1.66,1.975 0.331,0.31 0.688,0.62 1.142,0.836 0.224,0.11 0.488,0.185 0.771,0.175 0.303,10e-4 0.528,-0.165 0.753,-0.293 1.582,-1.209 2.86,-2.793 4.267,-4.426 2.759,-3.302 5.629,-7.055 8.587,-11.034 0.368,-0.498 0.734,-0.994 1.098,-1.486 0.38,-0.472 0.726,-1.103 0.805,-1.747 0.098,-0.645 0.008,-1.314 -0.262,-1.898 -0.133,-0.292 -0.303,-0.567 -0.513,-0.808 l -0.58,-0.664 c -0.771,-0.877 -1.528,-1.739 -2.269,-2.584 -0.371,-0.422 -0.738,-0.839 -1.101,-1.252 -0.349,-0.437 -0.864,-0.831 -1.423,-0.993 -1.125,-0.375 -2.407,0.1 -3.06,0.945 -0.69,0.745 -1.362,1.469 -2.011,2.169 -1.293,1.399 -2.5,2.704 -3.605,3.9 C 4.883,-5.438 3.119,-3.511 1.853,-2.128 1.275,-1.482 0.812,-0.963 0.46,-0.568 0.146,-0.208 -0.013,-0.012 0,0"/>
                        </g>
                        <g transform="translate(245.5046,223.6764)" id="g5736">
                        <path id="path5738" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.005,-0.041 -0.569,-0.138 -1.598,-0.339 -1.029,-0.199 -2.51,-0.537 -4.293,-1.099 -3.559,-1.103 -8.344,-3.307 -12.664,-7.044 -4.324,-3.736 -7.197,-8.154 -8.802,-11.515 -0.814,-1.684 -1.362,-3.1 -1.708,-4.09 -0.347,-0.989 -0.526,-1.543 -0.566,-1.532 -0.017,0.005 0.007,0.149 0.068,0.42 0.067,0.269 0.148,0.671 0.305,1.175 0.288,1.014 0.788,2.462 1.568,4.184 1.535,3.436 4.402,7.957 8.794,11.752 4.388,3.796 9.275,5.979 12.897,7.002 1.817,0.523 3.322,0.809 4.367,0.947 0.521,0.083 0.931,0.105 1.207,0.132 C -0.148,0.015 -0.002,0.018 0,0"/>
                        </g>
                        <g transform="translate(248.8301,218.9502)" id="g5740">
                        <path id="path5742" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.007,-0.035 -0.53,-0.19 -1.503,-0.438 -0.489,-0.118 -1.084,-0.27 -1.766,-0.482 -0.682,-0.206 -1.469,-0.407 -2.314,-0.711 -1.708,-0.548 -3.701,-1.32 -5.863,-2.288 -2.149,-0.997 -4.459,-2.208 -6.776,-3.658 -2.307,-1.471 -4.393,-3.037 -6.216,-4.549 -1.804,-1.536 -3.358,-3.005 -4.585,-4.312 -0.638,-0.632 -1.158,-1.256 -1.637,-1.784 -0.484,-0.525 -0.877,-0.997 -1.194,-1.387 -0.642,-0.773 -1.012,-1.191 -1.041,-1.169 -0.029,0.021 0.286,0.48 0.882,1.295 0.294,0.41 0.665,0.904 1.131,1.449 0.461,0.549 0.965,1.194 1.589,1.847 1.202,1.348 2.741,2.857 4.544,4.427 1.823,1.546 3.92,3.139 6.249,4.623 2.339,1.464 4.678,2.674 6.857,3.656 2.192,0.953 4.215,1.695 5.95,2.201 0.857,0.283 1.656,0.461 2.35,0.642 0.692,0.186 1.297,0.309 1.794,0.398 C -0.557,-0.052 -0.007,0.035 0,0"/>
                        </g>
                        <g transform="translate(160.1361,154.8096)" id="g5744">
                        <path id="path5746" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c -0.029,0.022 0.26,0.434 0.808,1.165 0.269,0.369 0.612,0.811 1.049,1.29 0.433,0.483 0.901,1.059 1.496,1.62 1.135,1.177 2.611,2.458 4.347,3.75 1.757,1.262 3.789,2.517 6.042,3.602 2.265,1.061 4.522,1.841 6.611,2.406 2.099,0.529 4.024,0.862 5.654,0.998 0.811,0.106 1.553,0.105 2.2,0.135 0.648,0.036 1.207,0.023 1.663,-0.003 0.913,-0.036 1.415,-0.074 1.413,-0.11 -0.001,-0.108 -2.02,-0.003 -5.236,-0.388 -1.609,-0.181 -3.504,-0.548 -5.57,-1.096 C 18.421,12.786 16.2,12.003 13.965,10.956 11.742,9.886 9.732,8.661 7.98,7.436 6.251,6.181 4.768,4.945 3.611,3.813 1.28,1.564 0.085,-0.067 0,0"/>
                        </g>
                        <g transform="translate(192.2545,168.4861)" id="g5748">
                        <path id="path5750" style="fill:#1a2e35;fill-opacity:1;fill-rule:nonzero;stroke:none" d="m 0,0 c 0.013,-0.033 -0.42,-0.24 -1.213,-0.586 -0.885,-0.389 -2.009,-0.882 -3.351,-1.472 -2.821,-1.258 -6.676,-3.092 -10.806,-5.359 -4.128,-2.272 -7.742,-4.544 -10.316,-6.252 -1.218,-0.817 -2.237,-1.501 -3.039,-2.04 -0.716,-0.484 -1.123,-0.739 -1.145,-0.71 -0.021,0.029 0.345,0.339 1.026,0.874 0.678,0.539 1.685,1.286 2.95,2.18 2.528,1.791 6.127,4.123 10.274,6.405 4.147,2.276 8.044,4.065 10.91,5.24 1.433,0.589 2.604,1.039 3.422,1.323 C -0.47,-0.109 -0.013,0.034 0,0"/>
                        </g>
                    </g>
                    </g>
                </g>
            </svg>
        </div>
      </div>
    </div>
@endsection
