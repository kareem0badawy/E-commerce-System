 @push('js')
<script>
   Dropzone.autoDiscover = false;
   // main image product
   $(document).ready(function() {
      $('#mainProductImage').dropzone({ 
         url: "{{ aurl('upload/product/image/'. $product->id) }}",
         paramName: "file", // The name that will be used to transfer the file
         uploadMultiple:false,
         maxFilesize: 1, // MB
         maxFiles:15,
         acceptedFiles:'image/*',
         // dictDefaultMessage :'اضغط هنا  لرفغ الصوره او قم بادراجها'
         // dictRemoveFile :'{{ trans('admin.delete') }}'
         params:{
            _token: '{{ csrf_token() }}'
         },
         addRemoveLinks:true,
         removedfile:function(file){
            $.ajax({
               dataType:'json',
               type:'delete',
               url:'{{ aurl('delete/product/image/'. $product->id) }}',
               data:{ _token:'{{ csrf_token() }}'}
            })
            var deleteImage;
            return (deleteImage = file.previewElement) != null ? deleteImage.parentNode.removeChild(file.previewElement):void 0;
         },
         init:function(){
            @if(!empty($product->photo))
               var previewProduct = {name:'{{ $product->title }}',size:'',type:''};
               var fileUrl = '{{ asset('storage/'.$product->photo ) }}';

               this.emit("addedfile", previewProduct);
               this.createThumbnailFromUrl(previewProduct, fileUrl);
               this.emit("success", previewProduct);
               this.emit("complete", previewProduct);
               this.files.push(previewProduct);

               this.options.thumbnail.call(this.previewProduct,fileUrl);
               $('.dz-progress').remove();
            @endif

            this.on('sending', function(file,xhr,formData){
               formData.append('file_id','');
               file.file_id = '';
            });
            this.on('success', function(file,response){
               file.file_id = response.id
            })
         }
      });
   });


   // product images
   $(document).ready(function() {
      $('#dropzoneFileUploader').dropzone({ 
         url: "{{ aurl('upload/product/images/'. $product->id) }}",
         paramName: "file", // The name that will be used to transfer the file
         uploadMultiple:false,
         maxFilesize: 3, // MB
         maxFiles:15,
         acceptedFiles:'image/*',
         // dictDefaultMessage :'اضغط هنا  لرفغ الصوره او قم بادراجها'
         // dictRemoveFile :'{{ trans('admin.delete') }}'
         params:{
            _token: '{{ csrf_token() }}'
         },
         addRemoveLinks:true,
         removedfile:function(file){
            // alert(file.file_id);
            $.ajax({
               dataType:'json',
               type:'delete',
               url:'{{ aurl('delete/product/images') }}',
               data:{ _token:'{{ csrf_token() }}', id:file.file_id}
            })
            var deleteImage;
            return (deleteImage = file.previewElement) != null ? deleteImage.parentNode.removeChild(file.previewElement):void 0;
         },
         init:function(){
            @foreach($product->files()->get() as $file)
               var previewProduct = {file_id:'{{ $file->id }}',name:'{{ $file->name }}',size:'{{ $file->size }}',type:'{{ $file->mime_type }}'};
               var fileUrl = '{{ asset('storage/'. $file->full_path ) }}';
               console.log(previewProduct)

               this.emit("addedfile", previewProduct);
               this.createThumbnailFromUrl(previewProduct, fileUrl);
               this.emit("success", previewProduct);
               this.emit("complete", previewProduct);
               this.files.push(previewProduct);

               this.options.thumbnail.call(this.previewProduct,'{{ url('storage/'. $file->full_path ) }}');
            @endforeach

            this.on('sending', function(file,xhr,formData){
               formData.append('file_id','');
               file.file_id = '';
            });
            this.on('success', function(file,response){
               file.file_id = response.id
            })
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
            <h3 class="text-center" for="">{{trans('admin.main_product_image')}}</h3><br>
            <div class="dropzone" id="mainProductImage"></div><br>
            <hr>
            <h3 class="text-center" for="">{{trans('admin.product_images')}}</h3>
            <div class="dropzone" id="dropzoneFileUploader"></div>
      </div>
   </div>
</div>
<!--end: Form Wizard Step 3-->