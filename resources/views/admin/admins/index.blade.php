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
        {!! Form::open(['id'=>'form_data','url'=>aurl('admin/destroy/all'),'method'=>'delete']) !!}
            {{ $dataTable->table([ 'class' => 'table table-bordered table-hover dataTable'], true) }}
        {!! Form::close() !!}
    </div>
</div>

<!-- Start Modal Confirm Delete -->
@include('admin.admins.ModelConfirmDelete')
<!-- End Modal Confirm Delete -->


@push('js')
<script>
deleteAll();
</script>
  {{ $dataTable->scripts() }}
@endpush

@endsection