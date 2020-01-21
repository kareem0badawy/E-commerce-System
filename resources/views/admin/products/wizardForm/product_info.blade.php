<!--begin: Form Wizard Step 1-->
<div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
    <div class="kt-heading kt-heading--md"> {{ trans('admin.product_info') }}</div>
    <div class="kt-form__section kt-form__section--first">
        <div class="kt-wizard-v1__form">
            <div class="form-group">
                {!! Form::label('title',trans('admin.product_title')) !!}
                {!! Form::text('title',$product->title,['class'=>'form-control','placeholder'=>trans('admin.product_title') ]) !!}
            </div>

            <div class="form-group">
                {!! Form::label('content',trans('admin.product_content')) !!}
                {!! Form::textarea('content',$product->content,['class'=>'form-control','placeholder'=>trans('admin.product_content') ]) !!}
            </div>
        </div>
    </div>
</div>
<!--end: Form Wizard Step 1-->