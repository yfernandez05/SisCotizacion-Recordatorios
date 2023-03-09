const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/tabler/scss/style.scss', 'public/css/style_font.css')
    .postCss('resources/tabler/css/demo.css', 'public/css/demotabler.css')        
    .postCss('resources/tabler/css/tabler.css', 'public/css/tabler.css')    
    /*
    .postCss('resources/tabler/css/tabler-flags.css',
    'public/css/tablerflags.css')  *//*      
    .postCss('resources/tabler/css/tabler-payments.css',
    'public/css/tabler-payments.css') */       
    .postCss('resources/tabler/css/tabler-vendors.css', 'public/css/tabler-vendors.css')
    .copyDirectory('resources/tabler/images', 'public/images')
    .copyDirectory([
        'resources/tabler/fonts',
        'node_modules/@fortawesome/fontawesome-free/webfonts',
    ], 'public/fonts')
    .js([
        'resources/tabler/js/demo-theme.js',
        'resources/tabler/js/demo.js', 
       'resources/tabler/js/tabler.min.js',
       'node_modules/sweetalert2/dist/sweetalert2.all.min.js',
        './resources/tabler/js/sweetalert.js',
        /* 'node_modules/jquery-toast-plugin/dist/jquery.toast.min.js', */
        './resources/tabler/js/toastr-message.js',
    ], 'public/js/tabler.js')
    .vue() ;


mix.disableSuccessNotifications();
/* mix.browserSync({
    proxy: 'http://localhost:8000/',
    open: false
});
 */