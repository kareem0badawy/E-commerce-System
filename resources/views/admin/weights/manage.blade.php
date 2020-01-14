@extends('admin.master')
@section('content')

<div class="row">
    <div class="col-md-12">
       <div class="card card-info">
          <div class="card-header">
                <h3 class="card-title"> 
                   {{ (isset($weight) ? $title .' - '. $weight->name_en : $title) }}
                </h3>
          </div>
          <div class="form-horizontal">
                <div class="card-body">
                   @if(isset($weight))
                      {!! Form::model($weight,['url'=>aurl('weights/'.$weight->id),'method'=>'put','files'=>true ]) !!}
                   @else
                      {!! Form::open(['url'=>aurl('weights'),'files'=>true]) !!}
                   @endif
                  <div class="form-group">
                    {!! Form::label('name_ar',trans('admin.name_ar')) !!}
                    {!! Form::text('name_ar',old('name_ar'),['class'=>'form-control']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('name_en',trans('admin.name_en')) !!}
                    {!! Form::text('name_en',old('name_en'),['class'=>'form-control']) !!}
                  </div>

                  {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
                  {!! Form::close() !!}
              </div>
        </div>
    </div>
  </div>
</div>


@endsection
