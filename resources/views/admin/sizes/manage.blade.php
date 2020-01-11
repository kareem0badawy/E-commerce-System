@extends('admin.master')
@section('content')

@push('js')
   <!-- Start Modal Confirm Delete -->
      @include('admin.sizes.getJsTreeForManageSizes')
   <!-- End Modal Confirm Delete -->
@endpush

<div class="row">
    <div class="col-md-12">
       <div class="card card-info">
          <div class="card-header">
                <h3 class="card-title"> 
                   {{ (isset($size) ? $title .' - '. $size->name_en : $title) }}
                </h3>
          </div>
          <div class="form-horizontal">
                <div class="card-body">
                   @if(isset($size))
                      {!! Form::model($size,['url'=>aurl('sizes/'.$size->id),'method'=>'put','files'=>true ]) !!}
                   @else
                      {!! Form::open(['url'=>aurl('sizes'),'files'=>true]) !!}
                   @endif
                  <div class="form-group">
                    {!! Form::label('name_ar',trans('admin.name_ar')) !!}
                    {!! Form::text('name_ar',old('name_ar'),['class'=>'form-control']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('name_en',trans('admin.name_en')) !!}
                    {!! Form::text('name_en',old('name_en'),['class'=>'form-control']) !!}
                  </div>

                  <input type="hidden" name="department_id" class="department_id" value="{{ old('department_id') }}"> 

                  <div id="jstree" class="p-5"></div>

                  <div class="form-group">
                     {!! Form::label('is_public',trans('admin.is_public')) !!}
                     {!! Form::select('is_public',[1=>trans('admin.yes'),0=>trans('admin.no')],old('is_public'),['class'=>'form-control pt-1','placeholder'=>'.............']) !!}
                 </div>

                  {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
                  {!! Form::close() !!}
              </div>
        </div>
    </div>
  </div>
</div>


@endsection
