@extends('admin.master')

@section('content')
 <h1>Hello Admin</h1>.
 
 <div class="card">
  <div class="card-header">
    <h3 class="card-title">{{ $title }}</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
      {!! Form::open(['id'=>'form_data','url'=>aurl('admin/destroy/all'),'method'=>'delete']) !!}
        {{ $dataTable->table([ 'class' => 'table table-bordered table-hover dataTable' ], true) }}
      {!! Form::close() !!}

  </div>
  <!-- /.card-body -->
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