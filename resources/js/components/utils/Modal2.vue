<template>
    <div class="modal modal-blur fade" id="modal-detail-2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content" v-if="showModal">
            <button type="button" class="btn-close bg-white text-white" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="modal-status " :class="headerBgClass"></div>
          <div class="modal-body p-0">
            <slot name="modal-body-main"></slot>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
export default {
    
    props: {
        modalSize: {
            default: ''
        },
        headerBgClass:{
            default: 'bg-info'
        },
        showModal:{
            default:false
        }
    },
    watch:{
        showModal:function (newSelectValue, oldSelectValue) {
            //console.log('modal',[newSelectValue,oldSelectValue]);
            var modal = new bootstrap.Modal(document.getElementById('modal-detail-2'), {});
            if(newSelectValue) modal.show();

            else modal.hide();
        }
    },
    mounted(){
         let vm = this;
        let modaldetail = document.getElementById('modal-detail-2')
        modaldetail.addEventListener('hidden.bs.modal', function (event) {
            vm.$emit('closeModal', false);
        })

        /* $(vm.$el).on('hidden.bs.modal', function (e) {
            
        }); */
    },
    /* destroyed(){
        $(this.$el).modal('dispose');
        var modal = new bootstrap.Modal(document.getElementById('modal-detail'), {});
        modaldetail.dispose();
    } */
}
</script>