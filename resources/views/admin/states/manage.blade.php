@extends('admin.master')
@section('content')
@push('js')
<script type="text/javascript">
  $(document).ready(function(){
    @if(isset($state->country_id))
      $.ajax({
          url:'{{ aurl('states/create') }}',
          type:'get',
          dataType:'html',
          data:{country_id:'{{ $state->country_id }}',select:'{{ $state->city_id }}'},
          success: function(data)
          {
            $('.city').html(data);
          }
        });
    @elseif(old('country_id'))
      $.ajax({
          url:'{{ aurl('states/create') }}',
          type:'get',
          dataType:'html',
          data:{country_id:'{{ old('country_id') }}',select:'{{ old('city_id') }}'},
          success: function(data)
          {
            $('.city').html(data);
          }
        });
    @endif
   $(document).on('change','.country_id',function(){
    var country = $('.country_id option:selected').val();
    if(country > 0)
    {
      $.ajax({
        url:'{{ aurl('states/create') }}',
        type:'get',
        dataType:'html',
        data:{country_id:country,select:''},
        success: function(data)
        {
          $('.city').html(data);
        }
      });
    }else{
        $('.city').html('');
    }
   });
  });
  </script>
@endpush

<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"> 
                {{ (isset($state) ? $title .' - '. $state->name_en : $title) }}
            </h3>
        </div>
        <div class="form-horizontal">
            <div class="card-body">
            @if(isset($state))
                {!! Form::model($state,['url'=>aurl('states/'.$state->id),'method'=>'put','files'=>true ]) !!}
            @else
                {!! Form::open(['url'=>aurl('states'), 'files'=>true ]) !!}
            @endif
          {{-- {!! Form::open(['url'=>aurl('states')]) !!} --}}
              <div class="form-group">
                  {!! Form::label('name_ar',trans('admin.state_name_ar')) !!}
                  {!! Form::text('name_ar',old('name_ar'),['class'=>'form-control']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('name_en',trans('admin.state_name_en')) !!}
                  {!! Form::text('name_en',old('name_en'),['class'=>'form-control']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('country_id',trans('admin.country_id')) !!}
                  {!! Form::select('country_id',App\Model\Country::pluck('name_'.session('lang'),'id'),old('country_id'),['class'=>'form-control country_id','placeholder'=>'.............']) !!}
              </div>

              <div class="form-group">
                  {!! Form::label('city_id',trans('admin.city_id')) !!}
                  <span class="city"></span>
              </div>

            {!! Form::submit(trans('admin.add'),['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
            </div>
        </div>
    </div>
  </div>
</div><!-- /.box -->



@endsection