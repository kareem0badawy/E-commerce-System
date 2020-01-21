@push('js')
   <script>
      $('.datepicker').datepicker({
         language: '{{ session('lang') }}',
         format: 'yyyy-mm-dd',
         autoclose: true,
         todayBtn: true,
         clearBtn: true,
      });
      $(document).on('change','.status', function() {
         var status = $('.status option:selected').val();
         (status == 'refused') ? $('#reason').css('display','inherit'): $('#reason').css('display','none'); 
      });
   </script>
@endpush
<!--begin: Form Wizard Step 2-->
 <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
   <div class="kt-heading kt-heading--md"> {{ trans('admin.product_setting') }}</div>
   <div class="kt-form__section kt-form__section--first">
      <div class="kt-wizard-v1__form">
        
         <div class="row">
            <div class="col-sm-6 col-xs-12">
               <div class="form-group">
                  {!! Form::label('price',trans('admin.product_price')) !!}
                  {!! Form::text('price',$product->price,['class'=>'form-control','placeholder'=>trans('admin.product_price') ]) !!}
               </div>
               <div class="form-group ">
                  {!! Form::label('start_at',trans('admin.product_start_at')) !!}
                  {!! Form::text('start_at',$product->start_at,['class'=>'form-control datepicker','placeholder'=>trans('admin.product_start_at') ]) !!}
               </div>
            </div> 
            <div class="col-sm-6 col-xs-12">
               <div class="form-group">
                     {!! Form::label('stock',trans('admin.product_stock')) !!}
                     {!! Form::text('stock',$product->stock,['class'=>'form-control','placeholder'=>trans('admin.product_stock') ]) !!}
               </div>
               <div class="form-group ">
                  {!! Form::label('end_at',trans('admin.product_end_at')) !!}
                  {!! Form::text('end_at',$product->end_at,['class'=>'form-control datepicker','placeholder'=>trans('admin.product_end_at') ]) !!}
               </div>
            </div>
         </div>
        <div class="clearfix"></div>
        <hr>
        <div class="form-row">
            <div class="col-sm-4 col-xs-12">
               <div class="form-group">
                  {!! Form::label('price_offer',trans('admin.price_offer')) !!}
                  {!! Form::text('price_offer',$product->price_offer,['class'=>'form-control','placeholder'=>trans('admin.price_offer') ]) !!}
               </div>
            </div>
            <div class="col-sm-4 col-xs-12">
               <div class="form-group ">
                  {!! Form::label('start_offer_at',trans('admin.start_offer_at')) !!}
                  {!! Form::text('start_offer_at',$product->start_offer_at,['class'=>'form-control datepicker','placeholder'=>trans('admin.start_offer_at') ]) !!}
               </div>
            </div> 
            <div class="col-sm-4 col-xs-12">
               <div class="form-group ">
                  {!! Form::label('end_offer_at',trans('admin.end_offer_at')) !!}
                  {!! Form::text('end_offer_at',$product->end_offer_at,['class'=>'form-control datepicker','placeholder'=>trans('admin.end_offer_at') ]) !!}
               </div>
            </div>
         </div>
        <div class="clearfix"></div>
        <hr>
        <div class="form-group">
            {!! Form::label('status',trans('admin.product_status')) !!}
            {!! Form::select('status',['active'=>trans('admin.active') , 'pending'=>trans('admin.pending'),'refused'=>trans('admin.refused')],old('status'),
               ['class'=>'form-control pt-1 status','placeholder'=>'.............']) 
            !!}
        </div>
        <div class="form-group" id="reason" style="display:none">
            {!! Form::label('reason',trans('admin.refused_reason')) !!}
            {!! Form::textarea('reason',$product->reason,['class'=>'form-control reason','placeholder'=>trans('admin.refused_reason') ]) !!}
         </div>
      </div>
   </div>
</div>
<!--end: Form Wizard Step 2-->