@extends('admin.master')
@section('content')
@push('js')

<!-- Start Modal Confirm Delete -->
@include('admin.departments.ModelConfirmDelete')
<!-- End Modal Confirm Delete -->

<!-- Start Modal Confirm Delete -->
@include('admin.departments.getJsTreeInIndex')
<!-- End Modal Confirm Delete -->
@endpush

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
  <!-- /.box-header -->
  <div class="card-body">
      <a href="" class="btn btn-info edit_dep showbtn_control hidden" ><i class="fa fa-edit"></i> {{ trans('admin.edit') }}</a>
      <a href="{{ aurl('departments/create') }}" class="btn btn-primary  showbtn_control hidden" ><i class="fa fa-plus"></i> {{ trans('admin.add') }}</a>
      <a href="" class="btn btn-danger delete_dep showbtn_control hidden"  data-toggle="modal" data-target="#delete_bootstrap_modal" > <i class="fa fa-trash"></i>  {{ trans('admin.delete') }} </a>
      
    <div id="jstree" class="p-5"></div>

  </div>
  <!-- /.box-body -->
</div>
<!-- /.box -->

@endsection