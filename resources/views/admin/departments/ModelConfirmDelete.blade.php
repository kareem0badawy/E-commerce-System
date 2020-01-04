<!-- Modal -->
<div id="delete_bootstrap_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header d-block">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">{{ trans('admin.delete') }}</h4>
        </div>
        {!! Form::open(['url'=>'','method'=>'delete','id'=>'form_Delete_department']) !!}
        <div class="modal-body">
            <h4>
                {{ trans('admin.ask_delete_dep') }} <span id="dep_name"></span>
            </h4>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">{{ trans('admin.close') }}</button>
            {!! Form::submit(trans('admin.yes'),['class'=>'btn btn-danger']) !!}
        </div>
        {!! Form::close() !!}
        </div>
    
    </div>
</div>