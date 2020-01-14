@extends('admin.master')
@section('content')

<div class="row">
    <div class="col-md-12">
       <div class="card card-info">
          <div class="card-header">
                <h3 class="card-title"> 
                   {{ (isset($product) ? $title .' - '. $product->name_en : $title) }}
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
                                             <i class="flaticon-bus-stop"></i>
                                       </div>
                                       <div class="kt-wizard-v1__nav-label">
                                             1. {{ trans('admin.product_info') }}
                                       </div>
                                    </div>
                                 </div>
                                 <div class="kt-wizard-v1__nav-item" data-ktwizard-type="step" data-ktwizard-state="pending">
                                    <div class="kt-wizard-v1__nav-body">
                                       <div class="kt-wizard-v1__nav-icon">
                                             <i class="flaticon-list"></i>
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
                                             <i class="flaticon-truck"></i>
                                       </div>
                                       <div class="kt-wizard-v1__nav-label">
                                             4. {{ trans('admin.product_size_weight') }}
                                       </div>
                                    </div>
                                 </div>
                                 <div class="kt-wizard-v1__nav-item" data-ktwizard-type="step" data-ktwizard-state="pending">
                                    <div class="kt-wizard-v1__nav-body">
                                       <div class="kt-wizard-v1__nav-icon">
                                             <i class="flaticon-globe"></i>
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
                        <form class="kt-form" id="kt_form" novalidate="novalidate">
                           <!--begin: Form Wizard Step 1-->
                           <div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
                              <div class="kt-heading kt-heading--md"> {{ trans('admin.product_info') }}</div>
                              <div class="kt-form__section kt-form__section--first">
                                 <div class="kt-wizard-v1__form">
                                       {{ trans('admin.product_info') }}
                                 </div>
                              </div>
                           </div>
                           <!--end: Form Wizard Step 1-->

                           <!--begin: Form Wizard Step 2-->
                           <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                              <div class="kt-heading kt-heading--md"> {{ trans('admin.product_setting') }}</div>
                              <div class="kt-form__section kt-form__section--first">
                                 <div class="kt-wizard-v1__form">
                                       {{ trans('admin.product_setting') }}
                                 </div>
                              </div>
                           </div>
                           <!--end: Form Wizard Step 2-->

                           <!--begin: Form Wizard Step 3-->
                           <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                              <div class="kt-heading kt-heading--md"> {{ trans('admin.product_media') }}</div>
                              <div class="kt-form__section kt-form__section--first">
                                 <div class="kt-wizard-v1__form">
                                       {{ trans('admin.product_media') }}
                                 </div>
                              </div>
                           </div>
                           <!--end: Form Wizard Step 3-->

                           <!--begin: Form Wizard Step 4-->
                           <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                              <div class="kt-heading kt-heading--md"> {{ trans('admin.product_size_weight') }}</div>
                              <div class="kt-form__section kt-form__section--first">
                                 <div class="kt-wizard-v1__form">
                                       {{ trans('admin.product_size_weight') }}
                                 </div>
                              </div>
                           </div>
                           <!--end: Form Wizard Step 4-->

                           <!--begin: Form Wizard Step 5-->
                           <div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
                              <div class="kt-heading kt-heading--md"> {{ trans('admin.product_size_weight') }}</div>
                              <div class="kt-form__section kt-form__section--first">
                                 <div class="kt-wizard-v1__form">
                                       {{ trans('admin.other_data') }}
                                 </div>
                              </div>
                           </div>
                           <!--end: Form Wizard Step 5-->
                        
                           <!--begin: Form Actions -->
                           <div class="kt-form__actions">
                                 <button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
                                    {{ trans('admin.next_previous') }}
                                 </button>
                                 <button class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit">
                                    {{ trans('admin.save') }}
                                 </button>
                                 <button class="btn btn-primary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
                                    {{ trans('admin.next_step') }}
                                 </button>
                                 {{-- <button class="btn btn-danger btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
                                    {{ trans('admin.delete') }}
                                 </button> --}}
                           </div>
                           <!--end: Form Actions -->
                        </form>
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

