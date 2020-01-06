@extends('admin.master')
@section('content')
@push('js')
<script type="text/javascript" src='https://maps.google.com/maps/api/js?sensor=false&libraries=places&key=AIzaSyB1Q1Ha-j0M8oFYIXn8dWrO0TldK0CoQX8&libraries=places&callback=initMap'></script>

<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery-locationpicker/0.1.12/locationpicker.jquery.js'></script>
<?php
    $lat = !empty($shipping->lat) ? $shipping->lat : '30.034024628931657';
    $lng = !empty($shipping->lng) ? $shipping->lng : '31.24238681793213';
?>
<script>
$('#us1').locationpicker({
location: {
latitude: {{ $lat }},
longitude:{{ $lng }}
},
radius: 300,
markerIcon: '{{ url('design/adminlte/dist/img/map-marker-2-xl.png') }}',
inputBinding: {
latitudeInput: $('#lat'),
longitudeInput: $('#lng'),
// radiusInput: $('#us2-radius'),
//locationNameInput: $('#address')
}
});
</script>
@endpush
<div class="row">
  <div class="col-md-12">
     <div class="card card-info">
        <div class="card-header">
              <h3 class="card-title"> 
                 {{ (isset($shipping) ? $title .' - '. $shipping->name_en : $title) }}
              </h3>
        </div>
        <div class="form-horizontal">
          <div class="card-body">
              @if(isset($shipping))
                  {!! Form::model($shipping,['url'=>aurl('shipping/'.$shipping->id),'method'=>'put','files'=>true ]) !!}
              @else
                  {!! Form::open(['url'=>aurl('shipping'),'files'=>true]) !!}
              @endif
            <input type="hidden" value="{{ $lat }}" id="lat" name="lat">
            <input type="hidden" value="{{ $lng }}" id="lng" name="lng">
            <div class="form-group">
              {!! Form::label('name_ar',trans('admin.name_ar')) !!}
              {!! Form::text('name_ar',old('name_ar'),['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('name_en',trans('admin.name_en')) !!}
              {!! Form::text('name_en',old('name_en'),['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('user_id',trans('admin.owner_id')) !!}
              {!! Form::select('user_id',App\Model\User::where('level','company')->pluck('name','id'),old('user_id'),['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
              <div id="us1" style="width: 100%; height: 400px;"></div>
            </div>
            <div class="form-group">
              {!! Form::label('icon',trans('admin.ship_icon')) !!}
              {!! Form::file('icon',['class'=>'form-control']) !!}
            </div>
            {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
</div>
</div>
</div>
</div>

@endsection