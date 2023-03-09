/* require('./bootstrap'); */
import Jquery from "jquery";
window.$ = Jquery;
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

window.Vue = require('vue').default;
window.appName = 'CRM';
window.appErrorMessage = 'ocurrió un error inesperado. intente nuevamente más tarde.';
window.appCannotDeleteMessage = 'No se puede editar un registro eliminado.';
window.appRecordIsDeletedMessage = 'El registro ya está eliminado.';

window.showPreloader= () => {  var x = document.getElementById("preloader"); x.classList.add("active-preload");}
window.hidePreloader = () =>{ var x = document.getElementById("preloader");  x.classList.remove("active-preload"); }

import router from './routes'; //Importamos routes.js
import auth from './auth';

/**
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

 Vue.mixin(auth); 
const app = new Vue({
    el: '#main-wrapper',
    router/* ,
    mixins:[auth] */
});
