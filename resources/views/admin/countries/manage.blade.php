@extends('admin.master')

@section('content')
<div class="row">
<div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title"> 
                    {{ (isset($country) ? $title .' - '. $country->name_en : $title) }}
                </h3>
            </div>
            <div class="form-horizontal">
                <div class="card-body">
                    @if(isset($country))
                        {!! Form::model($country,['url'=>aurl('countries/'.$country->id),'method'=>'put','files'=>true ]) !!}
                    @else
                        {!! Form::open(['url'=>aurl('countries'), 'files'=>true ]) !!}
                    @endif
                    <div class="form-group">
                        {!! Form::label('name_ar',trans('admin.country_name_ar')) !!}
                        {!! Form::text('name_ar',old('name_ar'),['class'=>'form-control']) !!}
                     </div>
                
                     <div class="form-group">
                        {!! Form::label('name_en',trans('admin.country_name_en')) !!}
                        {!! Form::text('name_en',old('name_en'),['class'=>'form-control']) !!}
                     </div>
                     <div class="form-group">
                        {!! Form::label('code',trans('admin.code')) !!}
                        {!! Form::text('code',old('code'),['class'=>'form-control']) !!}
                     </div>
                
                     <div class="form-group">
                        {!! Form::label('iso_code',trans('admin.iso_code')) !!}
                        {!! Form::text('iso_code',old('iso_code'),['class'=>'form-control']) !!}
                     </div>

                     <div class="form-group">
                        {!! Form::label('currency',trans('admin.currency')) !!}
                        {!! Form::text('currency',old('currency'),['class'=>'form-control']) !!}
                     </div>

                     <div class="form-group">
                        {!! Form::label('logo',trans('admin.country_flag')) !!}
                        {!! Form::file('logo',['class'=>'form-control']) !!}
                        @if(!empty($country->logo))
                            {{-- <img src="{{ Storage::url($country->logo) }}" style="width:50px;height: 50px;" /> --}}
                            <img src="{{ asset('storage/'.$country->logo) }}" style="width:50px;height: 50px;" />
                        @endif
                     </div>

                    {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection