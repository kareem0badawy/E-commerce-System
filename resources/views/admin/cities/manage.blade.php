@extends('admin.master')

@section('content')
<div class="row">
<div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title"> 
                    {{ (isset($city) ? $title .' - '. $city->name_en : $title) }}
                </h3>
            </div>
            <div class="form-horizontal">
                <div class="card-body">
                    @if(isset($city))
                        {!! Form::model($city,['url'=>aurl('cities/'.$city->id),'method'=>'put','files'=>true ]) !!}
                    @else
                        {!! Form::open(['url'=>aurl('cities'), 'files'=>true ]) !!}
                    @endif
                    <div class="form-group">
                        {!! Form::label('name_ar',trans('admin.city_name_ar')) !!}
                        {!! Form::text('name_ar',old('name_ar'),['class'=>'form-control']) !!}
                     </div>
                
                     <div class="form-group">
                        {!! Form::label('name_en',trans('admin.city_name_en')) !!}
                        {!! Form::text('name_en',old('name_en'),['class'=>'form-control']) !!}
                     </div>

                     <div class="form-group">
                        {!! Form::label('country_id',trans('admin.country_id')) !!}
                        {!! Form::select('country_id',App\Model\Country::pluck('name_'.session('lang'),'id'),old('country_id'),['class'=>'form-control']) !!}
                        {{-- {!! Form::select('level',['user'=>trans('admin.user'),'vendor'=>trans('admin.vendor'),'company'=>trans('admin.company')],old('level'),['class'=>'form-control pt-1']) !!} --}}
                     </div>

                    {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection