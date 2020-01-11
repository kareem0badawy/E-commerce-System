@extends('admin.master')
@section('content')

<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
            <span class="kt-portlet__head-icon">
                <i class="kt-font-brand flaticon2-line-chart"></i>
            </span>
            <h3 class="kt-portlet__head-title">
                {{ $title }}
            </h3>
        </div>
    </div>
    <div class="card-body">
  	{!! Form::open(['id'=>'form_data','url'=>aurl('sizes/destroy/all'),'method'=>'delete']) !!}
    {!! $dataTable->table(['class'=>'dataTable table table-striped table-hover  table-bordered'],true) !!}
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->


<!-- Trigger the modal with a button -->


<!-- Start Modal Confirm Delete -->
@include('admin.sizes.ModelConfirmDelete')
<!-- End Modal Confirm Delete -->


@push('js')
<script>
deleteAll();
</script>
{!! $dataTable->scripts() !!}
@endpush

@endsection
