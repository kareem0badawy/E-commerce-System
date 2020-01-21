 @push('js')
<script>
   Dropzone.autoDiscover = false;
   $(document).ready(function() {
      $('#dropzoneFileUploader').dropzone({ 
         url: "{{ aurl('upload/image'. $product->id ) }}",
         params:{
            _token: '{{ csrf_token() }}'
         }
      });
   });
</script>
 @endpush
 <!--begin: Form Wizard Step 3-->
 <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
   <div class="kt-heading kt-heading--md"> {{ trans('admin.product_media') }}</div>
   <div class="kt-form__section kt-form__section--first">
      <div class="kt-wizard-v1__form">
            {{ trans('admin.product_media') }}
            <div class="dropzone" id="dropzoneFileUploader"></div>
      </div>
   </div>
</div>
<!--end: Form Wizard Step 3-->