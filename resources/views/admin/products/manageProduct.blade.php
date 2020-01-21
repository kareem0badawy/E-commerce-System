@extends('admin.master')
@section('content')
@push('js')
<script type="text/javascript">
    // In your Javascript (external .js resource or <script> tag)
   $(document).ready(function() {
      $('.js-example-basic-single').select2();
   });
</script>
@endpush
<div class="row">
    <div class="col-md-12">
       <div class="card card-info">
          <div class="card-header">
                <h3 class="card-title"> 
                   {{ (isset($product) ? $title .' - '. $product->title : $title) }}
                </h3>
          </div>
          
          <div class="form-horizontal">
            <div class="kt-portlet__body kt-portlet__body--fit">
               <div class="kt-grid kt-wizard-v1 kt-wizard-v1--white" id="kt_wizard_v1" data-ktwizard-state="first">
                     <div class="kt-grid__item">
                        <!--begin: Form Wizard Nav -->
                        <div class="kt-wizard-v1__nav">
                           <!--doc: Remove "kt-wizard-v1__nav-items--clickable" class and also set 'clickableSteps: false' in the JS init to disable manually clicking step titles -->
                           <div class="kt-wizard-v1__nav-items kt-wizard-v1__nav-items--clickable">
                                 <div class="kt-wizard-v1__nav-item" data-ktwizard-type="step" data-ktwizard-state="current">
                                    <div class="kt-wizard-v1__nav-body">
                                       <div class="kt-wizard-v1__nav-icon">
                                             <i class="flaticon-information"></i>
                                       </div>
                                       <div class="kt-wizard-v1__nav-label">
                                             1. {{ trans('admin.product_info') }}
                                       </div>
                                    </div>
                                 </div>

                                 <div class="kt-wizard-v1__nav-item" data-ktwizard-type="step" data-ktwizard-state="pending">
                                    <div class="kt-wizard-v1__nav-body">
                                       <div class="kt-wizard-v1__nav-icon">
                                             <i class="flaticon-layers"></i>
                                       </div>
                                       <div class="kt-wizard-v1__nav-label">
                                             2. {{ trans('admin.product_department') }}
                                       </div>
                                    </div>
                                 </div>

                                 <div class="kt-wizard-v1__nav-item" data-ktwizard-type="step" data-ktwizard-state="pending">
                                    <div class="kt-wizard-v1__nav-body">
                                       <div class="kt-wizard-v1__nav-icon">
                                             <i class="flaticon-settings-1"></i>
                                       </div>
                                       <div class="kt-wizard-v1__nav-label">
                                             2. {{ trans('admin.product_setting') }}
                                       </div>
                                    </div>
                                 </div>
                                 <div class="kt-wizard-v1__nav-item" data-ktwizard-type="step" data-ktwizard-state="pending">
                                    <div class="kt-wizard-v1__nav-body">
                                       <div class="kt-wizard-v1__nav-icon">
                                             <i class="flaticon-responsive"></i>
                                       </div>
                                       <div class="kt-wizard-v1__nav-label">
                                             3. {{ trans('admin.product_media') }}
                                       </div>
                                    </div>
                                 </div>
                                 <div class="kt-wizard-v1__nav-item" data-ktwizard-type="step" data-ktwizard-state="pending">
                                    <div class="kt-wizard-v1__nav-body">
                                       <div class="kt-wizard-v1__nav-icon">
                                             <i class="flaticon-open-box"></i>
                                       </div>
                                       <div class="kt-wizard-v1__nav-label">
                                             4. {{ trans('admin.product_size_weight') }}
                                       </div>
                                    </div>
                                 </div>
                                 <div class="kt-wizard-v1__nav-item" data-ktwizard-type="step" data-ktwizard-state="pending">
                                    <div class="kt-wizard-v1__nav-body">
                                       <div class="kt-wizard-v1__nav-icon">
                                             <i class="flaticon-app"></i>
                                       </div>
                                       <div class="kt-wizard-v1__nav-label">
                                             5. {{ trans('admin.other_data') }}
                                       </div>
                                    </div>
                                 </div>
                           </div>
                        </div>
                        <!--end: Form Wizard Nav -->
                     </div>
                     
                     <div class="kt-grid__item kt-grid__item--fluid kt-wizard-v1__wrapper">
                        <!--begin: Form Wizard Form-->
                        {{-- <form class="kt-form" id="kt_form" novalidate="novalidate"> --}}
                        {!! Form::open(['class'=> 'kt-form','id'=>'kt_form','novalidate','url'=>aurl('products'),'files'=>true]) !!}


                           <!--begin: Form Wizard product_info-->
                              @include('admin.products.wizardForm.product_info')
                           <!--end: Form Wizard product_info-->

                           <!--begin: Form Wizard product_department-->
                              @include('admin.products.wizardForm.product_department')
                           <!--end: Form Wizard product_department-->

                           <!--begin: Form Wizard product_setting-->
                              @include('admin.products.wizardForm.product_setting')
                           <!--end: Form Wizard product_setting-->

                           <!--begin: Form Wizard product_media-->
                              @include('admin.products.wizardForm.product_media')
                           <!--end: Form Wizard product_media-->

                            <!--begin: Form Wizard product_size_weight-->
                              @include('admin.products.wizardForm.product_size_weight')
                           <!--end: Form Wizard product_size_weight-->

                            <!--begin: Form Wizard other_data-->
                              @include('admin.products.wizardForm.other_data')
                           <!--end: Form Wizard other_data-->
                        
                           <!--begin: Form Actions -->
                           <div class="kt-form__actions">
                              <button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u mr-2 next_previous" data-ktwizard-type="action-prev">
                                 {{ trans('admin.next_previous') }}
                              </button>
                              <button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u save" data-ktwizard-type="action-submit">
                                 {{ trans('admin.save') }}
                              </button>
                              <button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u next_step" data-ktwizard-type="action-next">
                                 {{ trans('admin.keep_continue') }}
                              </button>
                           </div>
                           <!--end: Form Actions -->
                           {!! Form::close() !!}
                        {{-- </form> --}}
                        <!--end: Form Wizard Form-->
                     </div>
               </div>
            </div>
        </div>
    </div>
  </div>
</div>


@endsection
@push('js')
<script src="https://keenthemes.com/metronic/themes/metronic/theme/default/demo1/dist/assets/js/pages/custom/wizard/wizard-1.js" type="text/javascript"></script>
@endpush

