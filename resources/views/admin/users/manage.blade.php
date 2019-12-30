@extends('admin.master')

@section('content')
<div class="row">
<div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title"> 
                    {{ (isset($user) ? $titleEdit .' - '. $user->name : $title) }}
                </h3>
            </div>
            <div class="form-horizontal">
                <div class="card-body">
                    @if(isset($user))
                        {!! Form::model($user,['url'=>aurl('users/'.$user->id),'method'=>'put' ]) !!}
                    @else
                        {!! Form::open(['url'=>aurl('users')]) !!}
                    @endif
                    <div class="form-group">
                        {!! Form::label('name',trans('admin.name')) !!}
                        {!! Form::text('name',old('name'),['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email',trans('admin.email')) !!}
                        {!! Form::email('email',old('email'),['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password',trans('admin.password')) !!}
                        {!! Form::password('password',['class'=>'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('level',trans('admin.level')) !!}
                        {!! Form::select('level',['user'=>trans('admin.user'),'vendor'=>trans('admin.vendor'),'company'=>trans('admin.company')],old('level'),['class'=>'form-control pt-1','placeholder'=>'.............']) !!}
                    </div>

                    {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection