<!--begin: Form Wizard Step 1-->
<div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
    <div class="kt-heading kt-heading--md"> {{ trans('admin.product_department') }}</div>
    <div class="kt-form__section kt-form__section--first">
        <div class="kt-wizard-v1__form">
              <!-- Start Modal get Js Tree -->
            @push('js')
                @include('admin.products.wizardForm.getJsTreeInIndex')
            @endpush
            <!-- End Modal get Js Tree -->
            <div id="jstree" class="p-5"></div>
            <input type="hidden" name="department_id" class="department_id">
        </div>
    </div>
</div>
<!--end: Form Wizard Step 1-->