@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title"> 
                        {{ (isset($trademark) ? $title .' - '. $trademark->name_en : $title) }}
                    </h3>
                </div>
                <div class="form-horizontal">
                    <div class="card-body">
                    @if(isset($trademark))
                      {!! Form::model($trademark,['url'=>aurl('trademarks/'.$trademark->id),'method'=>'put','files'=>true ]) !!}
                    @else
                        {!! Form::open(['url'=>aurl('trademarks'), 'files'=>true ]) !!}
                    @endif
                    <div class="form-group">
                        {!! Form::label('name_ar',trans('admin.name_ar')) !!}
                        {!! Form::text('name_ar',old('name_ar'),['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('name_en',trans('admin.name_en')) !!}
                        {!! Form::text('name_en',old('name_en'),['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('logo',trans('admin.trade_icon')) !!}
                        {!! Form::file('logo',['class'=>'form-control']) !!}
                        @if(!empty($trademark->logo))
                            <img src="{{ asset('storage/'.$trademark->logo) }}" style="width:50px;height: 50px;" />
                        @endif
                    </div>

                    {!! Form::submit(trans('admin.add'),['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                  </div>
                </div>
            </div>
        </div>
  </div>
@endsection