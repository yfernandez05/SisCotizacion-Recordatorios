<template>
    <div class="modal modal-blur fade" id="modal-detail" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" :class="modalSize" role="document">
        <div class="modal-content" v-if="showModal">
            <div class="modal-header">
                <h5 class="modal-title"><slot name="modal-header-title"></slot></h5>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="modal-status " :class="headerBgClass"></div>
          <div class="modal-body ">
            <slot name="modal-body-main"></slot>
          </div>
          <div class="modal-footer">
            <div class="w-100">
              <div class="row">
                <slot name="modal-body-actions"></slot>
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
        modalSize: {
            default: 'modal-lg'
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
            var modal = new bootstrap.Modal(document.getElementById('modal-detail'), {});
            if(newSelectValue) modal.show();

            else modal.hide();
        }
    },
    mounted(){
         let vm = this;
        let modaldetail = document.getElementById('modal-detail')
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