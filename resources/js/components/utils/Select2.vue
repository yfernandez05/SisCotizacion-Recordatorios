<template>
    <select class="form-select" v-model="selectValue" style="width: 100%;">
        <option v-for="(item, index) in options" :key="index" :value="getKeyProperty(item)"
            v-text="getTextProperty(item)">
        </option>
    </select>
</template>

<script>
import 'select2';

export default {
    //props: ['options', 'value'],
    props: {
        options: {
            type: Array,
            default: function () {
                return [];
            }
        },
        keyProperty: [String, Number],
        textProperty: [String, Number],
        placeholder: {
            default: 'Seleccione una opción'
        },
        selectValue: {
            default: ''
        }
    },
    data() {
        return {
            //valorInitial : this.selectValue,
        }
    },
    methods: {
        
        getKeyProperty(option) {
            let valueFinal = '';
            if (typeof this.keyProperty === 'number')
                this.keyProperty = this.keyProperty.toString()

            if (option.hasOwnProperty(this.keyProperty))
                valueFinal = option[this.keyProperty];
            else {
                let values = Object.values(option);

                if (values.length) valueFinal = values[0];
            }

            return valueFinal;
        },
        getTextProperty(option) {
            let valueFinal = '';

            if (typeof this.textProperty === 'number')
                this.textProperty = this.textProperty.toString()

            if (option.hasOwnProperty(this.textProperty))
                valueFinal = option[this.textProperty];
            else {
                let values = Object.values(option);

                if (values.length) valueFinal = values[0];
            }

            return valueFinal;
        }
        
    },
    watch:{
        selectValue: function (newSelectValue, oldSelectValue) {
            //console.log('new: '+newSelectValue,'old: '+oldSelectValue);
            if(!newSelectValue.length)
                $(this.$el).val('').trigger('change');
        }
    },
    mounted() {
        //change es
        $.fn.select2.defaults.set('language', {
            noResults: function () {
                return "No se encontraron resultados";
            },
            searching: function () {
                return "Buscando...";
            },
            errorLoading: function () {
                return 'La carga falló';
            },
            inputTooLong: function (args) {
                var overChars = args.input.length - args.maximum;
                var message = 'Por favor, elimine ' + overChars + ' caracter';
                if (overChars > 1) {
                message += 'es';
                }
                return message;
            },
            inputTooShort: function (args) {
                var remainingChars = args.minimum - args.input.length;
                var message = 'Por favor, introduzca ' + remainingChars + ' o más caracteres';
                return message;
            },
            loadingMore: function () {
                return 'Cargando más resultados…';
            },
            maximumSelected: function (args) {
                var message = 'Sólo puede seleccionar ' + args.maximum + ' elemento';
                if (args.maximum > 1) {
                message += 's';
                }
                return message;
            },
        });

        let vm = this
        $(vm.$el).select2({
                placeholder: vm.placeholder,
                allowClear: true
            }).on('select2:select', function (e) {
                vm.$emit('input', e.params.data.id);
            }).on("select2:unselect", function (e) {
                vm.$emit('input', '');
            }).next('.select2')
            .find('.select2-selection')
            .one('focus', select2Focus)
            .on('blur', function () {
                $(this).one('focus', select2Focus)
            });

        function select2Focus() {
            $(this).closest('.select2').prev('select').select2('open');
        };
    },
    destroyed() {
        $(this.$el).off().select2('destroy')
    },

}

</script>


<style>
span.select2-selection.select2-selection--single{
    padding: 0.2em 1em 2.2em 0.5em !important;
    border: var(--tblr-border-width) solid var(--tblr-border-color);
}
.select2-container--default .select2-selection--single .select2-selection__arrow{
    height: 100%;
}
.select2-container--default .select2-search--dropdown .select2-search__field:focus-visible{
    outline: none;
}
</style>