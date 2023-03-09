import $ from "jquery";
import 'jquery-toast-plugin/dist/jquery.toast.min.js';
$(document).ready(function () {
    
    let options = {
        heading: 'Sistema',
        text: 'Información para el usuario.',
        position: 'top-right',
        loaderBg: '#ff6849',
        icon: 'info',
        hideAfter: 5000,
        stack: 6
    };

    window.infoMessage = function(message, title) {

        let selectOptions = {
                icon: 'info',
                heading: title,
                text: message,                
            },
            currentOptions = $.extend(true, options, selectOptions);

        $.toast(currentOptions);
    }

    window.warningMessage = function(message, title) {

        let selectOptions = {
                icon: 'warning',
                heading: title,
                text: message,
                bgColor : '#FFC107',
            },
            currentOptions = $.extend(true, options, selectOptions);

        $.toast(currentOptions);
    }

    window.successMessage = function(message, title) {

        let selectOptions = {
                icon: 'success',
                heading: title,
                text: message,
                bgColor : '#009bdd',
                textColor : '#fff',
            },
            currentOptions = $.extend(true, options, selectOptions);

        $.toast(currentOptions);
    }
    
    window.errorMessage = function(message, title) {

        let selectOptions = {
                icon: 'error',
                heading: title,
                text: message,
                bgColor : '#ed5b66',
                textColor : '#fff',
            },
            currentOptions = $.extend(true, options, selectOptions);

        $.toast(currentOptions);
    }
});
